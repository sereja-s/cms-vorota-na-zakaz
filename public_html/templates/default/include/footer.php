</main>

<footer class="footer" style="margin-top: 30px;" id="contacts">
	<div class="container">
		<div class="footer__inner">
			<div class="footer__info">
				<!--  <a href="#">
              <img
                class="footer__info-logo"
                src="<?= PATH . TEMPLATE ?>assets/images/footer-logo.svg"
                alt="img"
              />
            </a> -->
				<div class="footer__info-text">
					<!--  <span>Construction</span> --><?= $this->set['description'] ?>
				</div>
			</div>
			<div class="footer__row">
				<div class="footer__services">
					<!-- <h6 class="footer__services-title">О нас</h6> -->
					<ul style="font-size: 1.5em;" class="footer__services-list">
						<li><a href="#about" class="menu-link">О нас</a></li>
						<?php if (!empty($this->menu['catalog'])) : ?>
							<li><a href="#catalog" class="menu-link">Каталог</a></li>
						<?php endif; ?>
						<li><a href="#gallery" class="menu-link">Ворота, заборы</a></li>
						<li><a href="#gallery2" class="menu-link">Беседки, навесы, козырьки</a></li>
					</ul>
				</div>

				<div style="display: flex; flex-direction: column;">
					<div class="footer__worktime">
						<h6 class="footer__worktime-title">График работы</h6>
						<div style="font-size: 16px; margin-bottom: 18px" class="footer__worktime-list"><?= $this->set['work_time'] ?></div>
					</div>

					<div class="footer__worktime">
						<h6 class="footer__worktime-title">Адрес</h6>
						<div style="font-size: 16px;" class="footer__worktime-list"><?= $this->set['address'] ?></div>
					</div>
				</div>

				<div class="footer__social">
					<div class="footer__social-title">Контакты</div>

					<?php if (!empty($this->phones)) : ?>

						<?php foreach ($this->phones as $phone) : ?>

							<a class="phone" href="tel:<?= preg_replace('/[^\+\d]/', '', $phone['name']) ?>"><img class="phone-icon" src="<?= PATH . TEMPLATE ?>assets/images/phone.svg" alt="phone" />
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
		</div>

		<div class="footer__bottom">
			<div class="footer__bottom-text">
				Данный сайт носит исключительно информационный характер и ни при каких обстоятельствах не является публичной офертой, определяемой положениями Статьи 437 Гражданского кодекса РФ. Точные данные по ценам, возможности оформления и деталях заказа необходимо узнавать по телефону или написав нам.
			</div>
		</div>

		<div style="display: flex; border-top: 1px solid rgba(239, 239, 239, .24); align-items: center; justify-content: space-around; flex-wrap: wrap" class="footer__bottom">
			<div class="footer__bottom-text"><?= $this->set['admin_name'] ?></div>
			<div class="footer__bottom-text">ИНН <?= $this->set['admin_inn'] ?></div>
		</div>

		<div style="border-bottom: 1px solid rgba(239, 239, 239, .24); padding-top: 0;" class="footer__bottom">
			<div class="footer__bottom-text">
				<?= date('Y') ?> г.
			</div>
		</div>

		<div class="footer__bottom">
			<div class="footer__bottom-text">
				Сделано в <a style="font-weight: 700; color: #fd6b3e;" href="<?= $this->set['external_alias'] ?>">САЙТ ПОСТРОЕН</a>
			</div>
		</div>
	</div>

</footer>



<a class="arrow-top-page-tel" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"></a>

<div class="arrow" id="arrowTop" hidden>
	<svg width="22" height="14" viewBox="0 0 22 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M21.22 10.61L10.61 -4.63778e-07L1.44357e-06 10.61L2.6288 13.2388L10.61 5.25759L18.5912 13.2388L21.22 10.61Z" fill="#445154" />
	</svg>
</div>

<style>
	.arrow-top-page {
		display: block;
		position: fixed;
		right: 50px;
		bottom: 50px;
		z-index: 1000;
		width: 76px;
		height: 76px;
		transition: 0.3s ease;
		/* background-image: url("../img/icons/arrow-index-up.svg"); */
		background-repeat: no-repeat;
		background-position: center;
		background-size: 25px 14px;
		background-color: #c2bbbb;
		border-radius: 50%;
		opacity: 0.5;
	}

	.arrow-top-page:hover {
		opacity: 1;
	}

	/* --------------------------------------------------------------------------------------------------------------- */

	.arrow {
		/* display: block; */
		width: 48px;
		height: 48px;
		position: fixed;
		right: 16px;
		bottom: 48px;
		cursor: pointer;
		border-radius: 50%;
		-webkit-transition: 0.35s;
		transition: 0.35s;
		background: #ffffff;
		-webkit-box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.15);
		box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.15);
		z-index: 99999;
	}

	@media (max-width: 768px) {
		.arrow {
			right: 5%;
		}
	}

	.arrow svg {
		position: relative;
		top: 17px;
		left: 14px;
	}

	.arrow:hover {
		-webkit-box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.15);
		box-shadow: 0px 6px 25px rgba(0, 0, 0, 0.15);
	}

	.arrow:active {
		-webkit-box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.15);
		box-shadow: 0px 1px 4px rgba(0, 0, 0, 0.15);
	}

	/* ---------------------------------------------------------------------------------------------------------------- */

	@media (max-width: 768px) {
		.arrow-top-page {
			right: 70px;
			bottom: 80px;
			width: 40px;
			height: 40px;
			background-size: 17px 7px;
		}
	}
</style>

<script>
	var arrowTop = document.getElementById("arrowTop");

	arrowTop.onclick = function() {
		window.scrollTo(pageXOffset, 0);
	};

	window.addEventListener('scroll', function() {
		arrowTop.hidden = (pageYOffset < document.documentElement.clientHeight);
	});
</script>

</div>

<?php $this->getScripts() ?>

</body>

</html>