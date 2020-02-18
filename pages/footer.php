		<div class="roda1">
			<a href="https://hcbusiness.com.br"><img src="image/logo2.svg" alt="HC BUSINESS" title="HC BUSINESS"></a>
			<p>
				A HC BUSINESS é uma Agência de Publicidade que atua há mais de 20 anos no mercado ajudando empresas com soluções
				como: plano de marketing, desenvolvimento de identidade visual, consultoria administrativa, financeira, gestão de
				pessoas, cursos e palestras.
			</p>
		</div>

		<div class="roda1" style="flex: 8%!important; min-width: 98px;">
			<h2>LINKS</h2>
			<a href=""><i class="fa fa-link" aria-hidden="true"></i> SOLUÇÕES</a>
			<a href=""><i class="fa fa-link" aria-hidden="true"></i> PLANOS</a>
			<a href="https://hcbusiness.com.br/portifolio"><i class="fa fa-link" aria-hidden="true"></i> PORTIFÓLIO</a>
			<a href=""><i class="fa fa-link" aria-hidden="true"></i> CLIENTES</a>
			<a href=""><i class="fa fa-link" aria-hidden="true"></i> QUEM SOMOS</a>
			<a href=""><i class="fa fa-link" aria-hidden="true"></i> ORÇAMENTO</a>
		</div>

		<div class="roda1">
			<h2>CONTATO</h2>
			<a href="" target="_blank"><i class="fa fa-map-marker" aria-hidden="true" style="font-size:16px"></i> Guanambi-BA. CEP: 46430-000.</a>
			<a href="mailto:contato@hcbusiness.com.br" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> E-mail:
				contato@hcbusiness.com.br</a>
			<a href="https://wa.me/5577999898949?text=Olá!" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i>
				(77) 99989-8949</a>
			<a href="tel:077988420449" target="_blank"><i class="fa fa-mobile" aria-hidden="true" style="font-size:18px"></i> (77) 98842-0449</a>
		</div>

		<div class="roda1">
			<h2>PAGAMENTO</h2>
			<a href="https://www.mercadopago.com.br/" target="_blank"><img src="image/bandeiras/mercadopago.svg" alt="Mercado Pago" title="Mercado Pago"></a>
			<img src="image/bandeiras/boletobancario.svg" alt="Boleto Bancário" title="Boleto Bancário" class="bandeira">
			<img src="image/bandeiras/amex.svg" alt="Amex" title="Amex" class="bandeira">
			<img src="image/bandeiras/diners.svg" alt="Diners" title="Diners" class="bandeira">
			<img src="image/bandeiras/elo.svg" alt="Elo" title="Elo" class="bandeira">
			<img src="image/bandeiras/hipercard.svg" alt="hipercard" title="hipercard" class="bandeira">
			<img src="image/bandeiras/mastercard.svg" alt="mastercard" title="mastercard" class="bandeira">
			<img src="image/bandeiras/visa.svg" alt="Visa" title="Visa" class="bandeira">
			<a href="https://sectigo.com/" target="_blank"><img src="image/selodeseguranca.svg" alt="Selo de Segurança" title="Selo de Segurança SSL"></a>
		</div>

		<div class="info">
			<p>
				Copyright © <?php
  echo date("Y");?> HC BUSINESS – Soluções em Consultoria e Treinamento. CNPJ: 11.721.624/0001-14.<br>Desenvolvido por <strong><a href="https://querocriarsite.com" style="color: #fff; font-size: 15px;" target="_BLANK">Éverton Toffanetto</a></strong>
			</p>
		</div>
    
    
    <!-- anima menu início -->
	<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	 crossorigin="anonymous"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#search').click(function () {
				$('.menu-item').addClass('hide-item')
				$('.search-form').addClass('active')
				$('.close').addClass('active')
				$('#search').hide()
			})
			$('.close').click(function () {
				$('.menu-item').removeClass('hide-item')
				$('.search-form').removeClass('active')
				$('.close').removeClass('active')
				$('#search').show()
			})
		})
	</script>
	<!-- anima menu fim -->

	<!-- botão topo início -->
	<div class="smoothscroll-top">
		<span class="scroll-top-inner">
			<i class="fa fa-2x fa-arrow-circle-up"></i>
		</span>
	</div>
	<!-- botão topo fim -->

	<!-- muda cor do header início -->
	<script async>
		$(window).scroll(function () {
			if ($(this).scrollTop() > 50) {
				$('header').css("background-color", "#fff")
			} else {
				$('header').css("background-color", "#ffffff80")
			}
		});
	</script>
	<!-- muda cor do header fim -->

	<!-- botão topo início -->
	<script async>
		$(function () {
			$(document).on('scroll', function () {
				if ($(window).scrollTop() > 100) {
					$('.smoothscroll-top').addClass('show');
				} else {
					$('.smoothscroll-top').removeClass('show');
				}
			});
			$('.smoothscroll-top').on('click', scrollToTop);
		});

		function scrollToTop() {
			verticalOffset = typeof (verticalOffset) != 'undefined' ? verticalOffset : 0;
			element = $('body');
			offset = element.offset();
			offsetTop = offset.top;
			$('html, body').animate({
				scrollTop: offsetTop
			}, 600, 'linear').animate({
				scrollTop: 25
			}, 200).animate({
				scrollTop: 0
			}, 150).animate({
				scrollTop: 0
			}, 50);
		}
	</script>
	<!-- botão topo fim -->