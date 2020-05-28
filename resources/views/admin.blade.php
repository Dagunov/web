@extends('layout')

@section('title')
Адмін
@endsection

@section('content')

<div class="admin">
    <div class="container">
        <div class="admin__title">Адміністративна панель</div>
        @if($error)
        <div class="admin__message message">Невірні дані!</div>
        @endif
        <div class="admin__enter">
            <form action="/admin" class="form form_width" id="form" method="post">
                @csrf
                <div class="form__name">Вхід</div>
                <div class="form__content">
                    <div class="form__title">Логін</div>
                    <input type="text" name="login" class="form__input">
                    <div class="form__title">Пароль</div>
                    <input type="password" name="password" class="form__input">
                </div>
                <button class="form__button" id="form_btn">Увійти</button>
            </form>
        </div>
    </div>
</div>

@endsection