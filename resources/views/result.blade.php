<!DOCTYPE html>
<!-- 言語の設定 -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- 文字コードの設定 -->
    <meta charset="utf-8">
    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- タイトル（タブに表示される） -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{ asset('css/translation.css') }}">

</head>

<body>
    {{-- フォーム --}}
    <form method="POST">
        @csrf
        <textarea rows="30" cols="100" name="sentence">{{ $result }}</textarea>
        <a href="{{ route('translation') }}">戻る</a>
    </form>
</body>

</html>