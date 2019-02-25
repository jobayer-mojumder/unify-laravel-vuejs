<template>
	<!--=== Slider ===-->
	<div class="slider-inner">
		<div id="da-slider" class="da-slider">
			<div class="da-slide">
			</div>

			<div class="da-slide">
			</div>
			<div class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</div>
		</div>
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
				ParallaxSlider.initParallaxSlider();
			});
			console.log("Component mounted.");
		}
	};
</script>
<style scoped>
</style>
