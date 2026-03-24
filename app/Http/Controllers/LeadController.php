<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'phone' => ['required', 'string', 'max:40'],
        ]);

        $token = config('telegram.bot_token');
        $chatId = config('telegram.chat_id');

        if (!$token || !$chatId) {
            return back()->with('status', 'Не настроены параметры Telegram.');
        }

        $message = "Новая заявка с лендинга:\n"
            . "Имя: {$data['name']}\n"
            . "Телефон: {$data['phone']}\n"
            . 'Дата: ' . now()->format('d.m.Y H:i');

        $response = Http::asJson()->post("https://api.telegram.org/bot{$token}/sendMessage", [
            'chat_id' => $chatId,
            'text' => $message,
        ]);

        if (!$response->ok()) {
            return back()->with('status', 'Ошибка отправки. Попробуйте еще раз.');
        }

        return back()->with('status', 'Заявка отправлена. Мы свяжемся с вами в течение 15 минут.');
    }
}
