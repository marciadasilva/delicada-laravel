<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Company;
use App\Product;
use Mail;
use Session;

class SiteController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('index', compact(['categories', 'companies']));
    }

    public function contact(){
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('contact', compact(['categories', 'companies']));
    }

    public function sendMessage(){
        Session::put('name-contact', request('name'));
        Session::put('email-contact', request('email'));
        Session::put('subject-contact', request('subject'));
        Session::put('message-contact', request('message'));

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:5'
        ]);

        $data = array(
            'name' => request('name'),
            'email' => request('email'),
            'subject' => request('subject'),
            'bodyMessage' => request('message')
        );

        Mail::send('emails.contact', $data, function($message) use($data){
            $message->from($data['email']);
            $message->to('marcia.dasilva1410@gmail.com');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Sua mensagem foi enviada com sucesso! 
        Em breve estaremos lendo seu comentário.');

        return redirect()->route('contact');
    }

    // Executado somente a partir do FEMININO do menu
    public function products(){
        $paginate = 3;
        $products = Product::latest()->paginate($paginate);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();

        // em ordem
        // $queryPrices = Product::orderBy('price_sell');
        // $prices = $queryPrices->pluck('price_sell');

        // Prices Checkbox
        $highest = Product::max('price_sell');
        $prices = collect();
        $value = 50;
        for($i = 0; $i < $highest/50; $i++){
            $prices->put($i, $value);
            $value = $value + 50;
            if($value >= $highest){
                $value = $highest;
            }else{
                $value = $value - 25;
            }
        }

        // Size Checkbox
        $querySizes = Product::distinct()->select('size')->orderBy('size', 'desc');
        $sizes = $querySizes->pluck('size');

        return view('products.index', compact([
            'products', 'companies', 'categories', 'prices', 'highest', 'sizes'
            ])
        );
    }

    // Executado quando usuário seleciona uma categoria no INDEX
    public function product(Category $category){
        $paginate = 3;
        $products = Product::where('category_id', '=', $category->id)->latest()->paginate($paginate);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();

        // Prices Checkbox
        $highest = Product::max('price_sell');
        $prices = collect();
        $value = 50;
        for($i = 0; $i < $highest/50; $i++){
            $prices->put($i, $value);
            $value = $value + 50;
            if($value >= $highest){
                $value = $highest;
            }else{
                $value = $value - 25;
            }
        }

        // Size Checkbox
        $querySizes = Product::distinct()->select('size')->orderBy('size', 'desc');
        $sizes = $querySizes->pluck('size');

        return view('products.index', compact([
            'products', 'category', 'companies', 'categories', 'prices', 'highest', 'sizes'
            ])
        );
    }

    // Método executado quando é feito um filtro no FORM
    public function productsPost(){
        Session::put('price', request('price')); // Session para gravar checkbox selecoinado do price
        Session::put('size', request('size'));   // Session para gravar checkbox selecoinado do size

        $categories = Category::latest()->get();       // Busca tods as categorias
        $companies = Company::take(1)->latest()->get();// Busca o último registro da empresa (pro footer)
        $paginate = 3;                                 // Valor do paginate

        if(isset($_POST['category'])){                  // Se existe campo com name = category no FORM
                                                        // ou seja, tem alguma caixinha marcada
            $query = Product::latest();                 // Busca todos os produtos
            $queryCategory = Category::latest();        // Busca todas as categorias

            // Incrementa na query de produtos um WHERE, para que sejam selecionados
            // somente os produtos que a categoria gravada = categoria selecionada no FORM
            $query = $query->where('category_id','=', $_POST['category'][0]);

            // Incrementa na query de categorias um WHERE, para que sejam selecionados
            // somente a categoria que foi selecionada no FORM
            $queryCategory = $queryCategory->where('id','=', $_POST['category'][0]);

            // i começa de 1 porque já usamos a posição [0] a cima
            // percorre todas as categorias selecionadas no FORM
            for($i = 1; $i < count($_POST['category']); $i++){
                // Para cada uma delas adiciona mais um WHERE, para buscar também os dessa categoria
                $query = $query->orWhere('category_id','=', $_POST['category'][$i]);

                // Para poder retornar marcado todas as caixas de categorias selecionadas,
                // é preciso fazer este WHERE e gravar todas as categorias nessa variável
                $queryCategory = $queryCategory->orWhere('id','=', $_POST['category'][$i]);
            }

            // Products receive the new query
            $products = $query;

            // Essa variável vai ser passada para a VIEW, com todas as categorias que foram marcadas
            $category_mult = $queryCategory->get();

        }else {
            // Se não for selecionada nenhuma categoria, retorna todos os produtos
            // Caso que ocorre somente quando acessado pelo menu Feminino no INDEX
            $products = Product::latest();
        }

        // Price part
        // Se foi marcado algum preço no checkbox
        if(isset($_POST['price'])){
            // O preço não é somente um valor, tem o valor inicial e o final do filtro
            // ex: 50 100
            // assim é preciso dividir esses 2 valores com o explode
            $price = explode(" ", $_POST['price']);

            // queryPrice recebe a consulta atual de produtos (já com os outros filtros feitos)
            $queryPrice = $products;

            // adiciona nesta consulta atual um where, para selecionar somente os produtos
            // que tenham preço entre valor [0] e valor [1], ou seja, 50 e 100
            $queryPrice = $queryPrice->whereBetween('price_sell', [$price[0], $price[1]]);

            // passa o resultado da query de volta para a variável products, pois ela vai ser
            // enviada para a VIEW
            $products = $queryPrice;
        }

        // Size part
        // Se foi marcado algum tamanho no checkbox
        if(isset($_POST['size'])){
            // querySize recebe a consulta atual de produtos (já com os outros filtros feitos)
            $querySize = $products;

            // adiciona nesta consulta atual um where, para selecionar somente os produtos
            // que tenham tamanho = ao valor selecionado no checkbox
            $querySize = $querySize->where('size', '=', $_POST['size']);

            // passa o resultado da query de volta para a variável products, pois ela vai ser
            // enviada para a VIEW
            $products = $querySize;
        }

        // Paginate only
        // Quando não há mais nenhum WHERE para fazer, da pra adicioanr o paginate
        $products = $products->paginate($paginate);

        // Estas próximas partes são realizadas para somente montar graficamente o checkbox
        // de preço e tamanho


        // highest/4 cada um deles vira

        // Prices checkbox
        $highest = Product::max('price_sell');  // busca no banco o maior preço
        $prices = collect();                    // cria uma coleção vazia
        $value = 50;                            // 50 é a diferença entre preços para aparecer no checkbox
        for($i = 0; $i < $highest/50; $i++){    // maior valor /50 para criar vários de até 50 de diferença
            $prices->put($i, $value);           // adiciona na coleção um novo valor i=0 value=50 no inicio
            $value = $value + 50;               // sempre incrementa 50 no value para ir de 50 em 50
            if($value >= $highest){             // se ao somar, o value superar o valor mais alto
                $value = $highest;              // passa a ter o valor do mais alto
            }else{
                $value = $value - 25;           // se não passar desconta 25 para ficar bonitinho lá
            }
        }

        // Size Checkbox
        // Parte para recuperar somente os tamanhos salvos no banco
        $querySizes = Product::distinct()->select('size')->orderBy('size', 'desc');
        $sizes = $querySizes->pluck('size');    // serve para transformar em array com chave e valor

        // Returns
        // Se foi selecionada alguma categoria retorna para a VIEW as mesmas variáveis
        // porém é enviado também a category_mult, que serve para deixar marcada as categorias selecionadas
        if(isset($_POST['category'])){
            return view('products.index',
                compact([
                    'products', 'category_mult', 'companies', 'categories' , 'prices', 'highest', 'sizes'
                ])
            );
        }else{
            return view('products.index', compact([
                'products', 'companies', 'categories' , 'prices', 'highest', 'sizes'
                ])
            );
        }
    }
}