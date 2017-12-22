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
        $paginate = 3;
        $products = Product::latest()->paginate($paginate);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('products.index', compact(['products', 'companies', 'categories']));
    }

    public function product(Category $category){
        $paginate = 3;
        $products = Product::where('category_id', '=', $category->id)->latest()->paginate($paginate);
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        return view('products.index', compact(['products', 'category', 'companies', 'categories']));
    }

    public function productsPost(){
        $categories = Category::latest()->get();
        $companies = Company::take(1)->latest()->get();
        $paginate = 3;

        if(isset($_POST['all'])){
            $products = Product::latest()->paginate($paginate);
            return view('products.index', compact(['products', 'companies', 'categories']));
        } else if(isset($_POST['test'])){
            $query = Product::latest();
            $queryCategory = Category::latest();

            $query = $query->where('category_id','=', $_POST['test'][0]);
            $queryCategory = $queryCategory->where('id','=', $_POST['test'][0]);

            for($i = 1; $i < count($_POST['test']); $i++){
                $query = $query->orWhere('category_id','=', $_POST['test'][$i]);
                $queryCategory = $queryCategory->orWhere('id','=', $_POST['test'][$i]);
            }

            $products = $query->paginate($paginate);
            $category_mult = $queryCategory->get();

            return view('products.index',
                compact([
                    'products', 'category_mult', 'companies', 'categories'
                ])
            );
        }else {
            $products = Product::latest()->paginate($paginate);
            return view('products.index', compact(['products', 'companies', 'categories']));
        }
    }
}
