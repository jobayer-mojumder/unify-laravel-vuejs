<template>
	<!--=== Slider ===-->
	<div class="slider-inner">
		<!-- About Sldier -->
			<div class="shadow-wrapper margin-bottom-10">
				<div class="carousel slide carousel-v1 box-shadow shadow-effect-2" id="myCarousel">
					<ol class="carousel-indicators">
						<li class="rounded-x active" data-target="#myCarousel" data-slide-to="0" ></li>
						<li class="rounded-x" data-target="#myCarousel" data-slide-to="1"></li>
						<li class="rounded-x" data-target="#myCarousel" data-slide-to="2"></li>
					</ol>

					<div class="carousel-inner">
						<div class="item active">
							<img class="img-responsive" :src="'http://www.webyogi.com/images/custom/slider-seo.jpg'" alt="">
						</div>
						<div class="item">
							<img class="img-responsive" :src="'public/assets/img/sliders/4.jpg'" alt="">
						</div>
						<div class="item">
							<img class="img-responsive" :src="'http://www.webyogi.com/images/custom/slider-web-design.jpg'" alt="">
						</div>
					</div>

					<div class="carousel-arrow">
						<a data-slide="prev" href="#myCarousel" class="left carousel-control">
							<i class="fa fa-angle-left"></i>
						</a>
						<a data-slide="next" href="#myCarousel" class="right carousel-control">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
				</div>
			</div>
			<!-- End About Sldier -->
	</div>
	<!--=== End Slider ===-->
</template>

<script type="javascript">
	export default {
		methods: {},

		mounted() {
			jQuery(document).ready(function() {
				App.init();
				OwlCarousel.initOwlCarousel();
				StyleSwitcher.initStyleSwitcher();
			});
			console.log("Component mounted.");
		}
	};
</script>
<style scoped>
</style>
