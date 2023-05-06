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
                        <a href="{{ route('witch.recipes') }}"><button class="button">Дивитися Рецепти</button></a>
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
		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="{{ asset('images/Banana-Pancakes.webp') }}">
				<img src="{{ asset('images/Banana-Pancakes.webp') }}" alt="Cinque Terre" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>


		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/Blueberry-Muffin.webp">
				<img src="../../../../../html5/Coursework/images/Blueberry-Muffin.webp" alt="Forest" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/French-Omlette.webp">
				<img src="../../../../../html5/Coursework/images/French-Omlette.webp" alt="Northern Lights" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/Microwave-Bacon.webp">
				<img src="../../../../../html5/Coursework/images/Microwave-Bacon.webp" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="site-best">Найпопулярніше :</div>
	<div class="container">
		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/Banana-Pancakes.webp">
				<img src="../../../../../html5/Coursework/images/Banana-Pancakes.webp" alt="Cinque Terre" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>


		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/Blueberry-Muffin.webp">
				<img src="../../../../../html5/Coursework/images/Blueberry-Muffin.webp" alt="Forest" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/French-Omlette.webp">
				<img src="../../../../../html5/Coursework/images/French-Omlette.webp" alt="Northern Lights" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>

		<div class="responsive">
			<div class="gallery">
				<a target="_blank" href="../../../../../html5/Coursework/images/Microwave-Bacon.webp">
				<img src="../../../../../html5/Coursework/images/Microwave-Bacon.webp" alt="Mountains" width="600" height="400">
				</a>
				<div class="desc">
					<div class="food-type">Сніданки</div>
					<div class="food-name">Бананові млинці</div>
					<div class="timer">
						<i class="fa fa-clock-o"></i>
						<span>30 хв</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="call">
		<div class="food-gallery book">
			<img src="{{ asset('images/Epi-FallCookbooks-Web.webp') }}" alt="books for sale">
		</div>
	</div>

	<div class="clearfix"></div>

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
