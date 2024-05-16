<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Follow;

class FollowController extends Controller
{
    public function index(Request $request)
    {

        $user = $request->input('userId');
        $book = $request->input('bookId');

        // Проверка, существует ли запись с таким сообщением
        $existingMessage = Follow::where([
            'idUser' => $user,
            'idBook' => $book,
        ])->first();

        if (!$existingMessage) {
            // Если запись не существует, создаем новую запись
            $follow = Follow::create([
                'idUser' => $user,
                'idBook' => $book,
            ]);

            session()->flash('follow', 'Книга добавлена');
        } else {
            session()->flash('follow', 'Уже добавляли');
        }

        return redirect()->back();
    }
}
