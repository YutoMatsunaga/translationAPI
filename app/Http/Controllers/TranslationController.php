<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TranslationController extends Controller
{
    public function translation(Request $request)
    {
        return view('translation');
    }

    public function result(Request $request)
    {
        $text = $request->input('text');

        $response = Http::get(
            // 無料版URL
            'https://api-free.deepl.com/v2/translate',
            // GETパラメータ
            [
                'auth_key' => '1c479328-7415-4447-a39c-1ca51e37522a:fx',
                'target_lang' => 'EN-US',
                'text' => $text,
            ]
        );

        \Log::channel('daily')->info($response);

        $result = $response['translations'][0]['text'];

        return view('result')->with([
            'result' => $result,
        ]);
    }
}
