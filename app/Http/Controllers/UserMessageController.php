<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserMessage;

class UserMessageController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'message' => ['required'],
        ]);

        // Получаем данные пользователя из сессии
        $userData = $request->session()->get('user_data');

        // Проверяем, существует ли уже сообщение пользователя в базе данных
        $existingMessage = UserMessage::where('name', $userData['name'])
                                        ->where('email', $userData['email'])
                                        ->where('message', $request->message)
                                        ->first();

        if ($existingMessage) {
            return redirect()->back()->with('status', 'success')->with('message', 'Вы уже писали нам об этом.');
        }

        // Создаем новое сообщение и сохраняем его в базе данных
        $userMessage = UserMessage::create([
            'name' => $userData['name'],
            'email' => $userData['email'],
            'message' => $request->message,
        ]);

        return redirect()->back()->with('status', 'error')->with('message', 'Мы учтем ваши предложения.');
    }
}
