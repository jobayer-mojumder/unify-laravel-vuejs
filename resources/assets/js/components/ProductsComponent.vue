<template>
	<div>
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>Our Products</h1>
				<p>Creative Freedom Matters User Experience</p>
			</div>
		</div>
		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Products</h1>
				<ul class="pull-right breadcrumb">
					<li>
						<a href>Home</a>
					</li>
					<li>
						<a href>Pages</a>
					</li>
					<li class="active">Services</li>
				</ul>
			</div>
		</div>
		<!--/breadcrumbs-->
		<div class="bg-color-light">
		<div class="container content-sm">
			<div class="headline-center margin-bottom-60">
				<h2>OUR FEATURES</h2>
				<p>Phasellus vitae ipsum ex. Etiam eu vestibulum ante.
					<br>Lorem ipsum
					<strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla
				</p>
			</div>

			<!-- Service Block v8 -->
			<div class="row margin-bottom-30">
				<div class="col-sm-6 sm-margin-bottom-50">
					<div class="service-block-v8">
						<i class="icon-rocket"></i>
						<div class="service-block-desc">
							<h3>Creative Ideas</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 sm-margin-bottom-20">
					<div class="service-block-v8">
						<i class="icon-bubbles"></i>
						<div class="service-block-desc">
							<h3>Dedicated Support</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Block v8 -->
			<!-- Service Block v8 -->
			<div class="row margin-bottom-30">
				<div class="col-sm-6 sm-margin-bottom-50">
					<div class="service-block-v8">
						<i class="icon-star"></i>
						<div class="service-block-desc">
							<h3>Free Updates</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 sm-margin-bottom-20">
					<div class="service-block-v8">
						<i class="icon-settings"></i>
						<div class="service-block-desc">
							<h3>CSS3 + HTML5</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Block v8 -->
			<!-- Service Block v8 -->
			<div class="row margin-bottom-20">
				<div class="col-sm-6 sm-margin-bottom-50">
					<div class="service-block-v8">
						<i class="icon-layers"></i>
						<div class="service-block-desc">
							<h3>One Page Template</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="service-block-v8">
						<i class="icon-handbag"></i>
						<div class="service-block-desc">
							<h3>eCommerce Ready</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam luctus velit nec ante tempor, iaculis mollis ante imperdiet. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Block v8 -->
		</div>
		</div>
	</div>
	<!--=== End Container Part ===-->
</template>
<script>
	export default {
		methods: {},
		mounted() {
			jQuery(document).ready(function() {
				App.init();
				StyleSwitcher.initStyleSwitcher();
				ProgressBar.initProgressBarHorizontal();
			});
		}
	};
</script>

<style scoped>
</style>
