<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use App\Company;
use App\Client;
use Session;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $admin = true;
        return view('admin.index', compact('admin'));
    }

    public function help(){
        $admin = true;
        return view('admin.help', compact('admin'));
    }

    public function company(){
        $admin = true;
        $companies = Company::take(1)->latest()->get();
        return view('admin.company', compact(['admin', 'companies']));
    }

    public function storeCompany(){

        $this->validate(request(), [
            'about' => 'required',
            'facebook' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'description' => 'required',
        ]);

        $dados = request()->all();

        Company::create($dados);

        return redirect()->route('company');
    }

    // Category

    public function showCategories(){
        $admin = true;
        $categories = Category::latest()->get();
        return view('admin.show-categories', compact(['admin' , 'categories']));
    }

    public function createCategory(){
        $admin = true;
        return view('admin.create-category', compact('admin'));
    }

    public function storeCategory(){

        Session::put('name-category', request('name'));
        Session::put('description-category', request('description'));

        $this->validate(request(), [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/categories/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }

        $dados['user_id'] = auth()->user()->id;

        Category::create($dados);

        return redirect()->route('categories');
    }

    public function updateCategory(Category $category){
        $admin = true;
        return view('admin.edit-category', compact(['admin', 'category']));
    }

    public function storeUpdateCategory(Category $category){

        Session::put('name-category-edit', request('name'));
        Session::put('description-category-edit', request('description'));

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required'
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/categories/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            // remover
            $imageToRemove = Category::where('id', $category->id)->first()->image;
            unlink($imageToRemove);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }else{
            $imagedb = Category::where('id', $category->id)->first()->image;
            $dados['image'] = $imagedb;
        }

        $dados['user_id'] = auth()->user()->id;

        Category::where('id', $category->id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'image' => $dados['image'],
            'user_id' => $dados['user_id']
        ]);

        return redirect()->route('categories');
    }

    public function deleteCategory(Category $category){

        if(Product::where('category_id', $category->id)->first()){
            return redirect()->back()->withErrors(['Não é possível deletar
            uma categoria que possui produtos cadastrados.', '']);
        } else{
            // remover
            $imageToRemove = Category::where('id', $category->id)->first()->image;
            unlink($imageToRemove);
            Category::find($category->id)->delete();
            return redirect()->route('categories');
        }
    }

    // Products

    public function showProducts(){
        $admin = true;
        $products = Product::latest()->get();
        return view('admin.show-products', compact(['admin' , 'products']));
    }

    public function createProduct(){
        $admin = true;
        $categories = Category::latest()->get();
        return view('admin.create-product', compact(['admin', 'categories']));
    }

    public function storeProduct(){

        Session::put('name-product', request('name'));
        Session::put('description-product', request('description'));
        Session::put('size-product', request('size'));
        Session::put('color-product', request('color'));
        Session::put('price-buy-product', request('price_buy'));
        Session::put('price-sell-product', request('price_sell'));
        Session::put('amount-product', request('amount'));
        Session::put('category_id-product', request('category_id'));

        $this->validate(request(), [
            'name' => 'required',
            'image' => 'required',
            'description' => 'required',
            'size' => 'required',
            'color' => 'required',
            'price_buy' => 'required',
            'price_sell' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/products/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }

        $dados['user_id'] = auth()->user()->id;

        Product::create($dados);

        return redirect()->route('products');
    }

    public function updateProduct(Product $product){
        $admin = true;
        $categories = Category::latest()->get();
        return view('admin.edit-product', compact(['admin', 'product', 'categories']));
    }

    public function storeUpdateProduct(Product $product){

        Session::put('name-product-edit', request('name'));
        Session::put('description-product-edit', request('description'));
        Session::put('size-product-edit', request('size'));
        Session::put('color-product-edit', request('color'));
        Session::put('price-buy-product-edit', request('price_buy'));
        Session::put('price-sell-product-edit', request('price_sell'));
        Session::put('amount-product-edit', request('amount'));
        Session::put('category_id-product-edit', request('category_id'));

        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'size' => 'required',
            'color' => 'required',
            'price_buy' => 'required',
            'price_sell' => 'required',
            'amount' => 'required',
            'category_id' => 'required',
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/products/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            // remover
            $imageToRemove = Product::where('id', $product->id)->first()->image;
            unlink($imageToRemove);

            $dados['image'] = $dir . "/" . $nomeImagem;
        }else{
            $imagedb = Product::where('id', $product->id)->first()->image;
            $dados['image'] = $imagedb;
        }

        $dados['user_id'] = auth()->user()->id;

        Product::where('id', $product->id)->update([
            'name' => request('name'),
            'description' => request('description'),
            'size' => request('size'),
            'color' => request('color'),
            'price_buy' => request('price_buy'),
            'price_sell' => request('price_sell'),
            'amount' => request('amount'),
            'category_id' => request('category_id'),
            'image' => $dados['image'],
            'user_id' => $dados['user_id']
        ]);

        return redirect()->route('products');
    }

    public function deleteProduct(Product $product){
        // remover
        $imageToRemove = Product::where('id', $product->id)->first()->image;
        unlink($imageToRemove);
        Product::find($product->id)->delete();
        return redirect()->route('products');
    }

    // Clients

    public function showClients(){
        $admin = true;
        $clients = Client::latest()->get();
        return view('admin.show-clients', compact(['admin' , 'clients']));
    }

    public function createClient(){
        $admin = true;
        return view('admin.create-client', compact('admin'));
    }

    public function storeClient(){

        Session::put('name-client', request('name'));
        Session::put('cpf-client', request('cpf'));
        Session::put('address-client', request('address'));
        Session::put('phone-client', request('phone'));
        Session::put('email-client', request('email'));
        Session::put('workplace-client', request('workplace'));

        $this->validate(request(), [
            'name' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
        ]);

        $dados = request()->all();

        Client::create($dados);

        return redirect()->route('clients');
    }

    public function updateClient(Client $client){
        $admin = true;
        return view('admin.edit-client', compact(['admin', 'client']));
    }

    public function storeUpdateCLient(Client $client){

        Session::put('name-client-edit', request('name'));
        Session::put('cpf-client-edit', request('cpf'));
        Session::put('address-client-edit', request('address'));
        Session::put('phone-client-edit', request('phone'));
        Session::put('email-client-edit', request('email'));
        Session::put('workplace-client-edit', request('workplace'));

        $this->validate(request(), [
            'name' => 'required',
            'cpf' => 'required',
            'phone' => 'required',
        ]);

        $dados = request()->all();

        Client::where('id', $client->id)->update([
            'name' => request('name'),
            'cpf' => request('cpf'),
            'address' => request('address'),
            'phone' => request('phone'),
            'email' => request('email'),
            'workplace' => request('workplace')
        ]);

        return redirect()->route('clients');
    }

    public function deleteClient (Client $client){
        Client::find($client->id)->delete();
        return redirect()->route('clients');
    }

}
