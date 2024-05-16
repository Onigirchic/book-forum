<?php

namespace App\Http\Controllers;

use App\Models\UserComment;
use Illuminate\Http\Request;
use App\Models\Book;

class UserCommentController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'comment' => ['required'],
        ]);
    
        // Получаем данные пользователя из сессии
        $userData = $request->session()->get('user_data');
    
        // Получаем ID книги из запроса
        $bookId = $request->input('bookId');
        
        // Создаем новый комментарий и сохраняем его в базе данных
        $userComment = UserComment::create([
            'loginUser' => $userData['name'],
            'idBook' => $bookId, // Используем полученный ID книги
            'comment' => $request->comment, 
        ]);
    
        return redirect()->back();
    }
    
    
}
