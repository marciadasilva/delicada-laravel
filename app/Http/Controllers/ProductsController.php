<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class ProductsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');//->except(['index', 'show'])
    }

    public function create(){
        $categories = Category::latest()->get();
        return view('users.create-products', compact('categories'));
    }

    public function index(){
        $products = Product::latest()->get();
        return view('users.show-products', compact('products'));
    }

    public function store(){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'size' => 'required',
            'color' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'id_category' => 'required',
            'image' => 'required'
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/products/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir."/".$nomeImagem;
        }

        Product::create($dados);

        return redirect()->route('products');

    }

    public function show(Product $product){
        // Return the single page with 1 category
        return view('users.show-singl-product', compact('product'));
    }

    public function edit(Product $product){
        // Update
        //Category::where('id',$category->id)->update(['name'=>request('name')]);
        // Get the new list of category
         $categories = Category::latest()->get();
        // Return the show-categories page
        return view('users.update-product', compact(['product', 'categories']));
    }

    public function update(Product $product){
        $this->validate(request(), [
            'name' => 'required',
            'description' => 'required',
            'size' => 'required',
            'color' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'id_category' => 'required'
        ]);

        $dados = request()->all();

        if(request()->hasFile('image')){
            $imagem = request()->file('image');
            $num = rand(1111, 9999);
            $dir = "img/products/";
            $ex = $imagem->guessClientExtension();
            $nomeImagem = "image_".$num.".".$ex;
            $imagem->move($dir, $nomeImagem);

            $dados['image'] = $dir."/".$nomeImagem;
        } else{
            $imageDB = Product::where('id',$product->id)->first()->image;
            $dados['image'] = $imageDB;
        }

        Product::where('id',$product->id)->update(
            [   'name'=>request('name'),
                'description'=>request('description'),
                'size'=>request('size'),
                'color'=>request('color'),
                'price'=>request('price'),
                'amount'=>request('amount'),
                'id_category'=>request('id_category'),
                'image'=>$dados['image']
            ]);

        return redirect()->route('products');
    }

    public function destroy(Product $product){
        Product::find($product->id)->delete();
        // Get the new list of category
        $products = Product::latest()->get();
        // Return the show-categories page
        return redirect()->route('products');
    }
}
