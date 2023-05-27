@extends('layouts.main_page')
@section('content')
<title>Про Нас</title>

    <h1 class="hr-lines"><span>ПРО НАС</span></h1>
	<div class="creator">
		<img src="{{ asset('images/creator.jpg') }}" alt="Creator">
		<div class="creator-info">
			<h2>ЄСИПЕНКО КОСТЯНТИН</h2>
			<h3>ЗАСНОВНИК</h3>
			<p>В 2023 році створив Відьомські Рецепти. Народився і проживає в Києві. Навчається в Національному технічному університеті
				України «Київський політехнічний інститут імені Ігоря Сікорського».
				У вільний час полюбляє готувати страви під улюблені пісні та пригощати ними близьких.
				Мріє подорожувати світом і побачити усю красу нашої планети.</p>
		</div>
	</div>
    <h1 class="hr-lines"><span>СЛІДКУЙТЕ ЗА НАМИ</span></h1>
	<section>
		<ul class="follow">
			<li><span>INSTAGRAM КОСТЯНТИНА: </span><a href="">@kostya_yesypenko</a></li>
			<li><span>TWITTER КОСТЯНТИНА: </span><a href="">@kostya_yesypenko</a></li>
			<li><span>НАША СТОРІНКА В FACEBOOK: </span><a href="">witch_recipes</a></li>
			<li><span>НАША СТОРІНКА В INSTAGRAM: </span><a href="">@witch_recipes</a></li>
			<li><span>НАШ YOUTUBE-КАНАЛ: </span><a href="">witch_recipes</a></li>
			<li><span>EMAIL: </span><a href="">info@witchrecipes.com </a></li>
		</ul>
	</section>
	<hr>
	<h1 class="hr-lines" style="margin-top: 107px;"><span>НАШІ ПАРТНЕРИ</span></h1>
	<section>
		<ul class="follow" style="list-style: circle;">
			<li>RUKAVYCHKA</li>
			<li>ARSEN</li>
			<li>INTERMARKET</li>
			<li>LA FOURCHETTE</li>
			<li>FAVORYT</li>
		</ul>
	</section>
	<hr>
@endsection

