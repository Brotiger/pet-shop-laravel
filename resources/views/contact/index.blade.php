@extends('layouts.main')
@section('title', 'контакты')
@section('custom_css')
	<link rel="stylesheet" type="text/css" href="/styles/contact.css">
	<link rel="stylesheet" type="text/css" href="/styles/contact_responsive.css">
@endsection
@section('content')
<!-- Home -->

<div class="home">
		<div class="home_container">
			<div class="home_background" style="background-image:url(images/contact.jpg)"></div>
			<div class="home_content_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_content">
								<div class="breadcrumbs">
									<ul>
										<li><a href="{{ route('home') }}">Главная</a></li>
										<li>Контакты</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- Contact -->
	
<div class="contact">
		<div class="container">
			<div class="row">

				<!-- Get in touch -->
				<div class="col-lg-8 contact_col">
					<div class="get_in_touch">
						<div class="section_title">Форма обратной связи</div>
						<div class="section_subtitle">Мы постараемся ответить вам как можно скорее</div>
						<div class="contact_form_container">
							<form action="#" id="contact_form" class="contact_form">
								<div class="row">
									<div class="col-xl-6">
										<!-- Name -->
										<label for="contact_name">Имя*</label>
										<input type="text" id="contact_name" class="contact_input" required="required">
									</div>
									<div class="col-xl-6 last_name_col">
										<!-- Last Name -->
										<label for="contact_last_name">Фамилия*</label>
										<input type="text" id="contact_last_name" class="contact_input" required="required">
									</div>
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Email*</label>
									<input type="text" id="contact_company" class="contact_input" required="required">
								</div>
								<div>
									<!-- Subject -->
									<label for="contact_company">Тема</label>
									<input type="text" id="contact_company" class="contact_input">
								</div>
								<div>
									<label for="contact_textarea">Сообщение*</label>
									<textarea id="contact_textarea" class="contact_input contact_textarea" required="required"></textarea>
								</div>
								<button class="button contact_button"><span>Отправить</span></button>
							</form>
						</div>
					</div>
				</div>

				<!-- Contact Info -->
				<div class="col-lg-3 offset-xl-1 contact_col">
					<div class="contact_info">
						<div class="contact_info_section">
							<div class="contact_info_title">Контактная информация</div>
							<ul>
								<li>Телефон: <span>(846) 229-51-25</span></li>
								<li>Email: <span>info@samaracomp.ru</span></li>
							</ul>
						</div>
						<div class="contact_info_section">
							<div class="contact_info_title">Как нас найти</div>
							<ul>
								<li>Адрес: <span>г. Самара, ул.Мичурина, 147</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row map_row">
				<div class="col">

					<!-- Google Map -->
					<div class="map">
						<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A9f1a042393e88c77d4a797a40d45b3783f8dd381dc668c4c423940f28d08a7bf&amp;width=100%25&amp;height=600&amp;lang=ru_RU&amp;scroll=true"></script>
					</div>

				</div>
			</div>
		</div>
	</div>
@endsection
@section('custom_js')
	<script src="/js/contact.js"></script>
@endsection