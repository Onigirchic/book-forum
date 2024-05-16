<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\UserComment;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function index(){
        $book = book::select('*')->get();
        return view("catalog", compact('book'));
    }

    public function show($id)
    {

        $bookShow = Book::findOrFail($id);
    
        $book = Book::where('id', $id)->first();
    
        $comments = $book->comments;
    
        return view('book', compact('bookShow', 'comments', 'id'));
    }

}


