<!-- SWIPER TOP -->
<div class="swiper swiper-top">
	<div class="swiper-wrapper swiper-wrapper-top">

		<div class="swiper-slide swiper-slide-top">
			<img
				class="swiper-slide-top__img"
				src="<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-1.jpg"
				alt="img" />
			<div class="swiper-slide-top__info">
				<p class="swiper-slide-top__subtitle">
					Изготовим и установим
				</p>
				<h3 class="swiper-slide-top__title">
					<span>ворота, заборы, навесы, беседки, козырьки</span> <br />
					и другие изделия из металла в Донецке, Макеевке, ДНР
				</h3>

			</div>
		</div>
		<div class="swiper-slide sиwiper-slide-top">
			<img
				class="swiper-slide-top__img"
				src="<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-2.jpg"
				alt="img" />
			<div class="swiper-slide-top__info">
				<p class="swiper-slide-top__subtitle">
					Изготовим и установим
				</p>
				<h3 class="swiper-slide-top__title">
					<span>ворота, заборы, навесы, беседки, козырьки</span><br>
					и другие изделия из металла
				</h3>

			</div>
		</div>
		<div class="swiper-slide swiper-slide-top">
			<img
				class="swiper-slide-top__img"
				src="<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-3.jpg"
				alt="img" />
			<div class="swiper-slide-top__info">
				<p class="swiper-slide-top__subtitle">
					Изготовим и установим
				</p>
				<h3 class="swiper-slide-top__title">
					<span>ворота, заборы, калитки, навесы, беседки, козырьки</span> <br />
					и другие изделия из металла
				</h3>

			</div>
		</div>

	</div>
	<div class="swiper-pagination swiper-pagination-top"></div>

	<!-- <div class="swiper-button-prev swiper-button-prev-top"></div>
        <div class="swiper-button-next swiper-button-next-top"></div> -->
</div>

<section style="margin: 0 auto; display: flex;" class="benefits">

	<div class="container--small">
		<div class="benefits-row">

			<div class="benefits-item">
				<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/logo_telephone.png" alt="картинка" class="benefits-item-icon">
				<a href="tel:+79999999999">+7(949)569-57-19</a>
				<a href="tel:+79999999999">+7(949)569-57-19</a>
			</div>

			<div class="benefits-item">
				<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/systemtime.png" alt="картинка" class="benefits-item-icon">
				<div class="benefits-item-desc"><?= $this->set['work_time'] ?></div>
			</div>

			<div class="benefits-item">
				<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/Email.png" alt="картинка" class="benefits-item-icon">
				<a href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a>
			</div>

		</div>
	</div>
</section>

<!--  ABOUT-->
<section class="about" id="about">
	<div class="container">
		<div class="about__inner">
			<div class="about__info">
				<h3 class="about__info-title">О наc</h3>
				<div style="font-size: 1.3em" class="about__text">
					<?= $this->set['keywords'] ?>
				</div>
				<button>
					<a href="<?= $this->set['telegram_alias'] ?>" class="about__btn order-btn">Связаться через Telegram</a>
				</button>

			</div>
			<img class="about__img" src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>" />
		</div>
	</div>
</section>

<?php if (!empty($this->menu['catalog'])) : ?>

	<section class="page__products products" id="catalog">
		<div class="products__container container">
			<h1 class="about__info-title section-about__title"><?= $this->set['catalog_title'] ?></h1>

			<div class="section-about__text"><?= $this->set['catalog_subtitle'] ?></div>

			<div class="products__items">

				<?php foreach ($this->menu['catalog'] as $item) : ?>

					<article class="products__item item-product">

						<div href="" class="item-product__image _ibg">
							<picture>
								<img src="<?= $this->img($item['img']) ?>"
									alt="<?= $item['name'] ?>">
							</picture>
						</div>
						<div class="item-product__body">
							<div class="item-product__content">
								<h3 class="item-product__title"><?= $item['name'] ?></h3>
								<div class="item-product__text"><?= $item['content'] ?></div>
							</div>
							<!-- <div class="item-product__prices">
								<div class="item-product__price">от 95000 руб.</div>
							</div> -->

						</div>
					</article>

				<?php endforeach; ?>

			</div>

		</div>
	</section>

<?php endif; ?>

<section class="section-about" style="margin: 50px 0;">
	<div class="container section-contacts__container">

		<div class="gallery-1" id="gallery">

			<div class="section__header-01">
				<h2 class="about__info-title section-about__title"><?= $this->set['foto_title'] ?></h2>
				<p class="section-about__text"></p>
			</div>
			<div class="seven__block">
				<div class="seven__items">
					<div style="padding-bottom: 15px;" class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-1.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Ворота 1</div>
						<div class="seven__text">Изготовлены методом ковки</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div style="padding-bottom: 15px;" class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-2.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Ворота 2</div>
						<div class="seven__text">Изготовили и установили забор и ворота под ключ</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/ворота распашные-3.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Ворота 3</div>
						<div class="seven__text">Выпонили заказ по проекту заказчика, изготовили и установили забор и ворота под ключ</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/забор.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Забор</div>
						<div class="seven__text">Быстро устанавливается и служит долгие годы</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/калитка.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Калитка</div>
						<div class="seven__text">Изготовлена из тогоже материала, что и забор</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>

				</div>
			</div>

		</div>
		<div class="gallery-2" id="gallery2">

			<div class="section__header-01" style="padding-top: 70px;">
				<h2 class="about__info-title section-about__title"><?= $this->set['foto_title_2'] ?></h2>
				<!-- <p class="section-about__text">Пансионат для пожилых людей "Осень жизни" в г.Донецке. Учереждение для пожилых людей и инвалидов. Мы обеспечиваем уход и заботу в круглосуточном режиме. Производится мониторинг состояния здоровья. В пансионате постоянно дежурит младший медицинский персонал с большим опытом работы. Мы рады дарить людям заботу, тепло и уют, чтобы каждый чувствовал свою значимость и ценность в этом мире</p> -->

			</div>
			<div class="seven__block">
				<div class="seven__items">
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images//Дорохов/беседка.webp" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Беседка</div>
						<div class="seven__text">Быстро устанавливается и служит долгие годы. Выполнена по проекту заказчика. Заказать беседку у нас - легко. Звоните, пишите</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/навес-3.jpg" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Навес</div>
						<div class="seven__text">Служит долгие годы</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>
					<div class="seven__item">
						<div class="seven__image">
							<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/козырёк.webp" alt="image">
						</div>
						<!-- <div class="seven__date">19 Jan 2023</div> -->
						<div class="seven__subtitle">Козырёк</div>
						<div class="seven__text">Мастерство даже в простом</div>
						<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
					</div>

				</div>
			</div>

		</div>

	</div>
</section>

<!-- преимущества -->
<section class="why-we">
	<div class="container">
		<div class="why-we__inner">
			<div class="why-we__info">
				<h4 class="why-we__title">Наши преимущества</h4>
				<div class="why-we__text">
					<?= $this->set['short_content'] ?>
				</div>
				<ul class="why-we__list">
					<li class="why-we__item">
						<h5 class="why-we__item-title">Мы на связи</h5>
						<p class="why-we__item-text">
							Получить консультацию можно с 8:00 до 16:00
						</p>
					</li>
					<li class="why-we__item">
						<h5 class="why-we__item-title">Выезд замерщика</h5>
						<p class="why-we__item-text">
							в Донецке, Макеевке - бесплатно.
						</p>
					</li>
					<li class="why-we__item">
						<h5 class="why-we__item-title">Предоплата от 30%</h5>
						<p class="why-we__item-text">
							зависит от сложности заказа
						</p>
					</li>
				</ul>
			</div>
			<img src="<?= $this->img($this->set['main_img']) ?>" alt="<?= $this->set['name'] . '-2' ?>" class="why-we__img" />
		</div>
	</div>
</section>

<section class="question">
	<div class="container">
		<h4 style="padding-top: 25px;" class="why-we__title">Ответы на частые вопросы</h4>
		<div data-spollers class="question__spollers spollers">
			<details class="spollers__item">
				<summary class="spollers__title"><span>Где находится ваше производство?</span></summary>
				<div class="spollers__body">
					<p>
						Наши производства находятся в Донецке
					</p>

				</div>
			</details>
			<details class="spollers__item">
				<summary class="spollers__title"><span>С каким ассортиментом изделий из металла вы работаете?</span></summary>
				<div class="spollers__body">
					<p>
						Мы производим широкий ассортимент изделий и многое
						другое
					</p>
				</div>
			</details>
			<details class="spollers__item">
				<summary class="spollers__title"><span>Какие мощности Вашего производства?</span></summary>
				<div class="spollers__body">
					<p>
						Мощность при полной загрузке до 20 ед./мес.
					</p>
				</div>
			</details>
			<details class="spollers__item">
				<summary class="spollers__title"><span>Какие сроки изготовления?</span></summary>
				<div class="spollers__body">
					<p>
						Сроки изготовления к каждому заказу рассчитываются индивидуально, все зависит от объёма
						работ. При необходимости выполняем срочные заказы.
					</p>
				</div>
			</details>
		</div>
	</div>
</section>