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

    public function products(){
        $products = Product::latest()->paginate(6);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('products.index', compact(['products', 'companies', 'categories']));
    }

    public function product(Category $category){
        $products = Product::where('category_id', '=', $category->id)->latest()->paginate(6);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('products.index', compact(['products', 'category', 'companies', 'categories']));
    }

    public function productsPost(){
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();

        if(isset($_POST['all']) || count($_POST['test']) > 1 ){
            $products = Product::latest()->paginate(6);
            return view('products.index', compact(['products', 'companies', 'categories']));
        } else{
            $products = Product::where('category_id', '=', $_POST['test'])->latest()->paginate(6);
            $category = Category::where('id', '=', $_POST['test'])->first();
            return view('products.index', compact(['products', 'category', 'companies', 'categories']));
        }
    }
}
