<!-- SWIPER TOP -->
<?php if (!empty($sales)) : ?>

	<div class="swiper swiper-top">
		<div class="swiper-wrapper swiper-wrapper-top">

			<?php foreach ($sales as $item) : ?>

				<div class="swiper-slide swiper-slide-top">
					<img
						class="swiper-slide-top__img"
						src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>" />
					<div class="swiper-slide-top__info">
						<p class="swiper-slide-top__subtitle">
							<?= $item['top_title'] ?>
						</p>
						<h3 class="swiper-slide-top__title">
							<span><?= $item['name'] ?></span><br />
							<?= $item['sub_title'] ?>
						</h3>

					</div>
				</div>

			<?php endforeach; ?>

		</div>
		<div class="swiper-pagination swiper-pagination-top"></div>

		<!-- <div class="swiper-button-prev swiper-button-prev-top"></div>
        <div class="swiper-button-next swiper-button-next-top"></div> -->
	</div>

<?php endif; ?>

<section style="margin: 0 auto; display: flex;" class="benefits">

	<div class="container--small">
		<div class="benefits-row">

			<div class="benefits-item">
				<img src="./<?= PATH . TEMPLATE ?>assets/images/Дорохов/logo_telephone.png" alt="картинка" class="benefits-item-icon">

				<?php if (!empty($this->phones)) : ?>

					<?php foreach ($this->phones as $phone) : ?>

						<a href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>"><?= $phone['name'] ?></a>

					<?php endforeach; ?>

				<?php endif; ?>

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

			<?php if (!empty($foto_gallery)) : ?>

				<div class="seven__block">
					<div class="seven__items">

						<?php foreach ($foto_gallery as $item) : ?>

							<div class="seven__item">
								<div class="seven__image">
									<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
								</div>
								<!-- <div class="seven__date">19 Jan 2023</div> -->
								<div class="seven__subtitle"><?= $item['name'] ?></div>
								<div class="seven__text"><?= $item['short_content'] ?></div>
								<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
							</div>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>

		</div>
		<div class="gallery-2" id="gallery2">

			<div class="section__header-01" style="padding-top: 70px;">
				<h2 class="about__info-title section-about__title"><?= $this->set['foto_title_2'] ?></h2>
				<p class="section-about__text"></p>

			</div>

			<?php if (!empty($foto_gallery2)) : ?>

				<div class="seven__block">
					<div class="seven__items">

						<?php foreach ($foto_gallery2 as $item) : ?>

							<div class="seven__item">
								<div class="seven__image">
									<img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>">
								</div>
								<!-- <div class="seven__date">19 Jan 2023</div> -->
								<div class="seven__subtitle"><?= $item['name'] ?></div>
								<div class="seven__text"><?= $item['short_content'] ?></div>
								<!-- <div class="seven__buttons">
									<div class="seven__btn">Plumbing</div>
									<div class="seven__btn">Architecture</div>
									<div class="seven__btn">Maintenance</div>
							  </div> -->
							</div>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>

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

				<?php if (!empty($advantages)) : ?>

					<ul class="why-we__list">

						<?php foreach ($advantages as $item) : ?>

							<li class="why-we__item">
								<h5 class="why-we__item-title"><?= $item['name'] ?></h5>
								<p class="why-we__item-text">
									<?= $item['short_content'] ?>
								</p>
							</li>

						<?php endforeach; ?>

					</ul>

				<?php endif; ?>

			</div>
			<img src="<?= $this->img($this->set['main_img']) ?>" alt="<?= $this->set['name'] . '-2' ?>" class="why-we__img" />
		</div>
	</div>
</section>

<?php if (!empty($questions)) : ?>

	<section class="question">
		<div class="container">
			<h4 style="padding-top: 25px;" class="why-we__title">Ответы на частые вопросы</h4>
			<div data-spollers class="question__spollers spollers">

				<?php foreach ($questions as $item) : ?>

					<details class="spollers__item">
						<summary class="spollers__title"><span><?= $item['name'] ?></span></summary>
						<div class="spollers__body">
							<p>
								<?= $item['content'] ?>
							</p>
						</div>
					</details>

				<?php endforeach; ?>

			</div>
		</div>
	</section>

<?php endif; ?>