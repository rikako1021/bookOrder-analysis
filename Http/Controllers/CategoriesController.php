<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Book;
use App\Models\Kind;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category(){
        $kinds = Kind::all();
        return view('categories.category',['kinds'=>$kinds]);
    }
    public function index ($id){
        $kind = Kind::findOrFail($id);
        return view('categories.index',['kinds'=>$kind])->with(['categories' => Category::all()]);
    }
    public function view ($id){
        $category = Category::findOrFail($id);
        return view ('categories.view',['category' =>$category])->with(['books' => Book::all()])->with(['kinds' => Kind::all()]);
  

    }
    public function view2 ($id){
        $book = Book::findOrFail($id);
        return view ('categories.graph',['book'=>$book])->with(['books' => Book::all()])->with(['categories' => Category::all()])->with(['kinds' => Kind::all()]);
    }
    public  function updateAll($id) {
        $book = Book::findOrFail($id);
        $book->order = 11;
         $book->save();
    }
    public function result_book ($id){
        $book = Book::findOrFail($id);
        return view ('categories.result',['book'=>$book])->with(['books' => Book::all()])->with(['categories' => Category::all()])->with(['kinds' => Kind::all()]);
    }
    public function update ($id){
        $book = Book::findOrFail($id);
        return view ('categories.update',['book'=>$book],['books'=>$book])->with(['books' => Book::all()]);
    }

    public function kakuninn ($id){
        $book = Book::findOrFail($id);
        return view ('categories.kakuninn',['book'=>$book])->with(['books' => Book::all()])->with(['categories' => Category::all()])->with(['kinds' => Kind::all()]);
    }

      }
      


