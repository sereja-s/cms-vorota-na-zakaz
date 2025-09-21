<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<meta name="description" content="<?= $this->set['phone'] .  ' - ' . $this->set['description'] ?>">
	<meta name="keywords" content="<?= $this->set['key_words'] ?>">

	<link rel="icon" href="https://metallokonstruktsii-dorokhova.ru/favicon.ico" type="image/x-icon">

	<title><?= $this->set['name'] ?></title>

	<?php $this->getStyles() ?>

	<!-- <script>
		var pathForJS = {};		
		pathForJS.siteUrl = '/';
	</script> -->

</head>

<body>

	<!-- WEAPPER -->
	<div class="wrapper">

		<!-- HEADER -->

		<header class="header">
			<div class="container">
				<div class="header__inner">
					<h3 class="header__text"><?= $this->set['top_title'] ?></h3>

					<?php if (!empty($this->phones)) : ?>

						<?php foreach ($this->phones as $phone) : ?>

							<a class="phone" href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>"><img class="phone-icon" src="<?= PATH . TEMPLATE ?>assets/images/phone.svg" />
								<span class="phone-number"><?= $phone['name'] ?></span>
							</a>

						<?php endforeach; ?>

					<?php endif; ?>

					<?php if (!empty($this->socials)) : ?>

						<ul class="social">

							<?php foreach ($this->socials as $item) : ?>

								<li class="social-item">
									<a href="<?= $this->alias($item['external_alias']) ?>" class="social-link"><img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>" /></a>
								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>
			</div>

			<!-- BURGER -->
			<div class="burger">
				<a style="padding: 3px 7px" class="burger__logo" href="#"><?= $this->set['name'] ?></a>
				<!-- <a class="burger__logo" href="#"
          ><img src="<?= PATH . TEMPLATE ?>assets/images/Logo.svg" alt="logo"
        /></a> -->
				<div class="burger__button">
					<div class="burger__button-line"></div>
					<div class="burger__button-line"></div>
					<div class="burger__button-line"></div>
				</div>
				<div class="burger__content">
					<img
						class="cancel__burger"
						src="<?= PATH . TEMPLATE ?>assets/images/cancel-icon.svg"
						alt="cancel" />
					<!-- <a>
            <span class="location-text">Изделия из металла в Донецке, Макеевке, ДНР</span>
          </a> -->

					<?php if (!empty($this->phones)) : ?>



						<div class="phones">

							<?php foreach ($this->phones as $phone) : ?>

								<a class="phone" href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>"><img class="phone-icon" src="<?= PATH . TEMPLATE ?>assets/images/phone.svg" />
									<span class="phone-number"><?= $phone['name'] ?></span>
								</a>

							<?php endforeach; ?>

						</div>

					<?php endif; ?>

					<?php if (!empty($this->socials)) : ?>

						<ul class="social">

							<?php foreach ($this->socials as $item) : ?>

								<li class="social-item">
									<a href="<?= $this->alias($item['external_alias']) ?>" class="social-link"><img src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>" /></a>
								</li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

					<ul class="menu menu__burger">
						<!-- <li class="menu-item burger__item">
							<a href="#" class="menu-link">Главная</a>
						</li> -->
						<li class="menu-item burger__item">
							<a href="#about" class="menu-link">О нас</a>
						</li>

						<?php if (!empty($this->menu['catalog'])) : ?>
							<li class="menu-item burger__item">
								<a href="#catalog" class="menu-link">Каталог</a>
							</li>
						<?php endif; ?>

						<li class="menu-item burger__item">
							<a href="#gallery" class="menu-link">Ворота, заборы</a>
						</li>
						<li class="menu-item burger__item">
							<a href="#gallery2" class="menu-link">Беседки, навесы, козырьки</a>
						</li>
						<li class="menu-item burger__item">
							<a href="#contacts" class="menu-link">Контакты</a>
						</li>

					</ul>
				</div>
			</div>
		</header>

		<!-- MAIN -->
		<main class="main">

			<nav class="nav">
				<div class="container">
					<div class="nav__inner">
						<a style="padding: 3px 7px" href="#" class="logo">
							<?= $this->set['name'] ?>
						</a>
						<ul style="flex-wrap: wrap; padding-left: 7px;" class="menu">

							<!-- <li class="menu-item">
								<a href="#" class="menu-link">Главная</a>
							</li> -->

							<li class="menu-item">
								<a href="#about" class="menu-link">О нас</a>
							</li>

							<?php if (!empty($this->menu['catalog'])) : ?>
								<li class="menu-item">
									<a href="#catalog" class="menu-link">Каталог</a>
								</li>
							<?php endif; ?>

							<li class="menu-item">
								<a href="#gallery" class="menu-link">Ворота, заборы</a>
							</li>
							<li class="menu-item">
								<a href="#gallery2" class="menu-link">Беседки, навесы, козырьки</a>
							</li>
							<li class="menu-item">
								<a href="#contacts" class="menu-link">Контакты</a>
							</li>

						</ul>
					</div>
				</div>
			</nav>