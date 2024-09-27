
	<!-- footer-66 -->
	<footer class="w3l-footer-66">
		<section class="footer-inner-main">
			<div class="footer-hny-grids py-5">
				<div class="container py-lg-4">
					<div class="text-txt">
						<div class="right-side">
                        <?= block('footer') ?>
						</div>
					</div>
				</div>
			</div>
			<div class="below-section">
				<div class="container">
					<div class="copyright-footer">
						<div class="columns text-lg-left">
							<p> Swaraj Travels Pvt. Ltd.  | Developed By <a class="text-white" href="https://www.sanmisha.com/" target="_blank">Sanmisha Technologies </a>
							</p>
						</div>
						<ul class="columns text-lg-right">
						<li><a href="../../../privacy-policy">Privary Policy</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<!-- move top -->
			<a href="https://wa.me/919820092837" target="_blank" onclick="topFunction()" id="myBtn1" title="WhatsApp"><img class="zoom" src="/templates/Default/assets/images/whatsapp.png" alt="whatsapp-icon"></a>

			
			<button id="movetop2" title="Go to top"><a target="_blank" href="https://easebuzz.in/pay/SWARAJTRAVELS"><p class="text-white mb-0"> Online Payment</p></a>
    		</button>

		</section>
	</footer>
	
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!--pop-up-box-->

<script src="/templates/Default/assets/js/jquery.magnific-popup.min.js"></script>
<script>
	$(document).ready(function () {
		$('.popup-with-zoom-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});

		$('.popup-with-move-anim').magnificPopup({
			type: 'inline',

			fixedContentPos: false,
			fixedBgPos: true,

			overflowY: 'auto',

			closeBtnInside: true,
			preloader: false,

			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-slide-bottom'
		});
	});
</script>

<!--//pop-up-box-->
<!-- for blog carousel slider -->
<script src="/templates/Default/assets/js/owl.carousel1.js"></script>
<script>
	$(document).ready(function () {
		$("#owl-demo2").owlCarousel({
			items: 1,
			lazyLoad: true,
			autoPlay: true,
			navigation: false,
			navigationText: ["", ""],
			rewindNav: false,
			scrollPerPage: true,
			pagination: false,
			paginationNumbers: false,

		})
	});
	$(document).ready(function () {
		$("#owl-demo1").owlCarousel({
			loop: true,
			margin: 20,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				1000: {
					items: 3,
					nav: true,
					loop: false
				}
			}
		})
	})
</script>

<script src="/templates/Default/assets/js/bootstrap.min.js"></script>
	<!--//footer-66 -->
</body>

</html>
