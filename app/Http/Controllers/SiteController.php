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
        $paginate = 6;

        if(isset($_POST['all'])){
            $products = Product::latest()->paginate($paginate);
            return view('products.index', compact(['products', 'companies', 'categories']));
        } else{

            switch(count($_POST['test'])){
                case 1:
                    $products = Product::where('category_id', '=', $_POST['test'][0])
                        ->latest()
                        ->paginate($paginate);
                    $category_mult = Category::where('id', '=', $_POST['test'][0])->first();
                    break;
                case 2:
                    $products = Product::where('category_id', '=', $_POST['test'][0])
                        ->orWhere('category_id', '=', $_POST['test'][1])
                        ->latest()
                        ->paginate($paginate);

                    $category_mult = Category::where('id', '=', $_POST['test'][0])
                        ->orWhere('id', '=', $_POST['test'][1])
                        ->get();
                    break;
                case 3:
                    $products = Product::where('category_id', '=', $_POST['test'][0])
                        ->orWhere('category_id', '=', $_POST['test'][1])
                        ->orWhere('category_id', '=', $_POST['test'][2])
                        ->latest()
                        ->paginate($paginate);

                    break;
                case 4:
                    $products = Product::where('category_id', '=', $_POST['test'][0])
                        ->orWhere('category_id', '=', $_POST['test'][1])
                        ->orWhere('category_id', '=', $_POST['test'][2])
                        ->orWhere('category_id', '=', $_POST['test'][3])
                        ->latest()
                        ->paginate($paginate);
                    break;
                default:
                    $products = Product::latest()->paginate($paginate);
                    break;
            }
            //$category = Category::where('id', '=', $_POST['test'])->first();
            return view('products.index', compact(['products', 'category_mult', 'companies', 'categories']));
        }
    }
}
