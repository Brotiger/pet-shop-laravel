@extends('layouts.main')
@section('title', 'интернет магазин компьютерной техники')
@section('content')
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Интернет магазин компьютерной техники в Самаре.</div>
										<div class="home_slider_subtitle">Компьютеры и их комплектующие, бытовая техника, видео и цифровая техника, расходные материалы.</div>
										<div class="button button_light home_button"><a href="#goods_block">К товарам</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Интернет-магазин «САМАРАКОМП» основан в 2008 г.</div>
										<div class="home_slider_subtitle">На сегодняшний момент «САМАРАКОМП» - это более 60 тысяч наименований товаров от подавляющего большинства мировых производителей.</div>
										<div class="button button_light home_button"><a href="#goods_block">К товарам</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slider Item -->
				<div class="owl-item home_slider_item">
					<div class="home_slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_slider_content"  data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<div class="home_slider_title">Мы не забыли про детей!</div>
										<div class="home_slider_subtitle">Прекрасные деревянные игрушки: деревянные железные дороги, пирамидки, машинки, каталки, кубики и погремушки станут прекрасным подарком для вашего ребенка.</div>
										<div class="button button_light home_button"><a href="#goods_block">К товарам</a></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Dots -->
			
			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.</li>
									<li class="home_slider_custom_dot">02.</li>
									<li class="home_slider_custom_dot">03.</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>

		</div>
	</div>

	<!-- Ads -->

	<div class="avds">
		<div class="avds_container d-flex flex-lg-row flex-column align-items-start justify-content-between">
			<div class="avds_small">
				<div class="avds_background" style="background-image:url(images/avds_small.jpg)"></div>
				<div class="avds_small_inner">
					<div class="avds_discount_container">
						<img src="images/discount.png" alt="">
						<div>
							<div class="avds_discount">
								<div>20<span>%</span></div>
								<div>Скидка</div>
							</div>
						</div>
					</div>
					<div class="avds_small_content">
						<div class="avds_title">На все смартфоны</div>
						<div class="avds_link"><a href="#">Подробнее</a></div>
					</div>
				</div>
			</div>
			<div class="avds_large">
				<div class="avds_background" style="background-image:url(images/avds_large.jpg)"></div>
				<div class="avds_large_container">
					<div class="avds_large_content">
						<div class="avds_title">Профессиональные фотоаппараты</div>
						<div class="avds_text">Качественные профессиональные фотоаппараты по приемлемым ценам</div>
						<div class="avds_link avds_link_large"><a href="#">Подробнее</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Products -->

	<div class="products" id="goods_block">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						@foreach($products as $product)
							@php
								$image = '';

								if(count($product->images) > 0){
									$image = $product->images[0]['img'];
								}else{
									$image = 'no_image.png';
								}

							@endphp
                        <!-- Product -->
						<div class="product">
							<div class="product_image"><img src="/images/{{ $image }}" alt="{{ $product->title }}"></div>
							@if(!empty($product->category))
								<div class="product_extra product_new"><a href="{{ route('showCategory', $product->category->alias) }}">{{ $product->category->title }}</a></div>
							@endif
							<div class="product_content">
								<div class="product_title"><a href="{{ route('showProduct', [$product->category->alias ?? 'different', $product->alias]) }}">{{ $product->title }}</a></div>
								@if($product->new_price != null)
									<div style="text-decoration: line-through;">{{ $product->price }} р.</div>
									<div class="product_price">{{ $product->new_price }} р.</div>
								@else
									<div class="product_price">{{ $product->price }} р.</div>
								@endif
							</div>
                        </div>
                        @endforeach

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Ad -->

	<div class="avds_xl">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="avds_xl_container clearfix">
						<div class="avds_xl_background" style="background-image:url(images/avds_xl.jpg)"></div>
						<div class="avds_xl_content">
							<div class="avds_title">Необычные гаджеты</div>
							<div class="avds_text">Необычных флешки, музыкальные колоноки, внешнии аккумуляторы и.т.п.</div>
							<div class="avds_link avds_xl_link"><a href="#">Подробнее</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row icon_box_row">
				
				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_1.svg" alt=""></div>
						<div class="icon_box_title">Бестрая доставка</div>
						<div class="icon_box_text">
							<p>Если товар находится на складе или в магазине, то возможна доставка на следующий день. Для других товаров приблизительную дату доставки необходимо уточнять у оператора.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_2.svg" alt=""></div>
						<div class="icon_box_title">Возврат по гарантии</div>
						<div class="icon_box_text">
							<p>Мы гарантируем надежность и качество техники, которую продаем. В редких случаях, когда купленное оборудование в течение гарантийного срока частично или полностью выходит из строя, мы делаем все возможное, чтобы наши покупатели остались довольны покупкой.</p>
						</div>
					</div>
				</div>

				<!-- Icon Box -->
				<div class="col-lg-4 icon_box_col">
					<div class="icon_box">
						<div class="icon_box_image"><img src="images/icon_3.svg" alt=""></div>
						<div class="icon_box_title">Поддержка 24 часа</div>
						<div class="icon_box_text">
							<p>Наши операторы обладают высокопрофессиональными знаниями всех технических характеристик и возможностей товаров, которые они предлагают на продажу. Мы работаем так, чтобы соотношение цена-качество было максимальным.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
@endsection