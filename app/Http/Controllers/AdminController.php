<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'author' => ['required'],   
            'genre' => ['required'],
            'description' => ['required'],
            'image' => ['image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);

        $imagePath = null;

        // Проверяем, загружено ли изображение
        if ($request->hasFile('image')) {
            // Загружаем изображение и сохраняем путь
            $imagePath = $request->file('image')->store('images', 'public');
            $imageName = $request->file('image')->getClientOriginalName();
        }

        // Создаем новую запись в базе данных с введенными данными и путем к изображению
        Book::create([
            'name' => $request->name,
            'author' => $request->author,
            'genre' => $request->genre,
            'description' => $request->description,
            'imageName' => $imageName,
            'imagePath' => $imagePath,
        ]);

        return redirect()->back()->with('admin', 'Книга успешно добавлена.');
    }
}
