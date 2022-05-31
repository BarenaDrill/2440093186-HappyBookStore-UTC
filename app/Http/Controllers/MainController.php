<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Detail;
use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        return view('home',[
            "title" => "Home" ,
            "books" => Book::paginate(5) ,
            "details" => Detail::all()
        ]);
    }

    public function detail(Book $book){
        return view('detail',[
            "title" => "Details",
            "book" => $book ,
            "details" => Detail::where('book_id',$book->id)
        ]);
    }

    public function contact(){
        return view('contact',[
            "title" => "Contact"
        ]);
    }

    public function category(Category $category){
        return view('category',[
            "title" => "Category" ,
            "category" => $category ,
            "books" => Book::where('category_id',$category->id)->paginate(2),
            "details" => Detail::all()
        ]);
    }
}
