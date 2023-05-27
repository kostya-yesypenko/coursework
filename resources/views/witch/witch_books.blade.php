@extends('layouts.main_page')
@section('content')
    <title>Кулінарні книги</title>

    <h1 class="hr-lines"><span>КУЛІНАРНІ КНИГИ</span></h1>
    <section>
        <div class="creator">
            <img src="{{ asset('images/recipe-book.webp') }}" alt="Creator">
            <div class="creator-info">
                <h2>Збавлення їжею</h2>
                <h3>Євген Клопотенко</h3>
                <p>«Зваблення їжею. 70 рецептів, які захочеться готувати» – це книжка
                    авторських рецептів відомого українського шеф-кухаря, блогера, чиї
                    матеріали можна прочитати у рейтингових медіа, ведучого
                    літературно-кулінарного шоу на «UA: Суспільне» та кулінарного експерта
                    програми «Сніданок з 1+1» на каналі «1+1», реформатора шкільного
                    харчування та автора першого в Україні кулінарного онлайн-курсу
                    «Міркувати, як кухар» Євгена Клопотенка.</p>
            </div>
        </div>
    </section>

    <hr>
    <div class="btn" style="margin-top: 44px;">
        <a href="https://rozetka.com.ua/ua/knygolav_9786177563760/p133407950/"><button class="button">Замовити</button></a>
    </div>
@endsection

