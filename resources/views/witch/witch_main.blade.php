@extends('layouts.main_page')
@section('content')
    <title>Відьомські Рецепти</title>

	<div class="call">
		<div class=" call container">
			<div class="call-text">
				<p>Більше 500 рецептів!</p>
				<p class="call about-main2">Проводь кожен день Смачно!</p>
				<p class="call about-main3">Відьомські рецепти - це Ваш онлайн-помічник, який допоможе здивувати ваших рідних
					та друзів незабутніми стравами. З нами готувати легко!</p>
					<div class="btn btn1">
                        <a href="{{ route('post.index') }}"><button class="button">Дивитися Рецепти</button></a>
					</div>
			</div>
				<div class="food-gallery">
					<img src="{{ asset('images/different-food.png') }}" alt="books for sale">
				</div>
		</div>
		<div class="clearfix"></div>


	</div>
	<div class="site-best">Найкраще на сайті :</div>
	<div class="container">
        @for ($i=2; $i<6; $i++)

		<div class="responsive">
			<div class="gallery">
				<a target="" href="{{ route('post.show', $posts[$i]->id) }}">
				<img src="images/{{ $posts[$i]->image }}" alt="Cinque Terre" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">{{ $posts[$i]->category->title }}</div>
					<div class="food-name">{{ $posts[$i]->title }}</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>{{ $posts[$i]->time }} хв</span>
					</div>
				</div>
			</div>
		</div>
        @endfor
    </div>

	<div class="clearfix"></div>
	<div class="site-best">Найпопулярніше :</div>
	<div class="container">
        @for ($i=0; $i<4; $i++)
            <div class="responsive">
                <div class="gallery">
                    <a target="" href="{{ route('post.show', $posts[$i]->id) }}">
                        <img src="images/{{ $posts[$i]->image }}" alt="Cinque Terre" width="600" height="400">
                    </a>
                    <div class="desc">
                        <div class="food-type">{{ $posts[$i]->category->title }}</div>
                        <div class="food-name">{{ $posts[$i]->title }}</div>
                        <div class="timer">
                            <i class="fa fa-clock-o"></i>
                            <span>{{ $posts[$i]->time }} хв</span>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>


		<div class="food-gallery book">
			<img src="{{ asset('images/Epi-FallCookbooks-Web.webp') }}" alt="books for sale">

            <div class="clearfix"></div>
            <div class="creator-info book">
                <h2>Кулінарна Книга</h2>
                <p>
                    Містить сотні рецептів від світових шеф-кухарів.<br>
                Замов прямо зараз лише за 300 грн!
                </p>
                <div class="btn btn2">
                    <a href="{{ route('post.index') }}"><button class="button">Замовити книгу</button></a>
                </div>
            </div>

		</div>


	<div class="form-container">
		<form action="{{ route('witch.ask') }}" method="post">
            @csrf
			<div class="row">
				<div class="col-25">
					<label for="name">Ім'я</label>
				</div>
				<div class="col-75">
					<input type="text" name="name" placeholder="Your name..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="email">Email</label>
				</div>
				<div class="col-75">
					<input type="text" name="email" placeholder="Your email..">
				</div>
			</div>
			<div class="row">
				<div class="col-25">
					<label for="question">Запитання</label>
				</div>
				<div class="col-75">
					<textarea name="question" placeholder="Write something.." style="height:200px"></textarea>
				</div>
			</div>
			<br>
			<div class="row">
				<input type="submit" name="form_submit" value="Відправити">
			</div>
		</form>
	  </div>
@endsection
