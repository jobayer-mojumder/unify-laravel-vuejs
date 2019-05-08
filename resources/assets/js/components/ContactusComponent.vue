<template>
	<div>
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>Contact us</h1>
				<p>Creative Freedom Matters User Experience</p>
			</div>
		</div>
		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Contact us</h1>
				<ul class="pull-right breadcrumb">
					<li>
						<a href>Home</a>
					</li>
					<li>
						<a href>Pages</a>
					</li>
					<li class="active">Contact us</li>
				</ul>
			</div>
		</div>
		<!--/breadcrumbs-->
		<div class="bg-color-light">
			<div class="container content-xs">
				<!-- <div class="headline-center margin-bottom-60">
					<h2>Top News</h2>
					<p>
						Phasellus vitae ipsum ex. Etiam eu vestibulum ante.
						<br>Lorem ipsum
						<strong>dolor</strong> sit amet, consectetur adipiscing elit. Morbi libero libero, imperdiet fringilla
					</p>
				</div> -->

				<!-- Service Block v8 -->
				<div class="row">
					<div class="col-md-12">

                        <div class="row margin-bottom-60">
				<div class="col-md-6 col-sm-6">
					<!-- Google Map -->
					<div id="map" class="height-450">
					</div>
					<!-- End Google Map -->
				</div>
				<div class="col-md-6 col-sm-6">
					<!-- Get in Touch -->
					<h3>Get in Touch</h3>
					<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, justo sit amet risus etiam porta sem</p>

					<hr>

					<!-- Contacts -->
					<h3>The Office</h3>
					<ul class="list-unstyled who">
						<li><a href="#"><i class="fa fa-home"></i>5B Streat, City 50987 New Town US</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i>info@example.com</a></li>
						<li><a href="#"><i class="fa fa-phone"></i>1(222) 5x86 x97x</a></li>
						<li><a href="#"><i class="fa fa-globe"></i>http://www.example.com</a></li>
					</ul>

					<hr>

					<!-- Business Hours -->
					<h3>Business Hours</h3>
					<ul class="list-unstyled">
						<li><strong>Monday-Friday:</strong> 10am to 8pm</li>
						<li><strong>Saturday:</strong> 11am to 3pm</li>
						<li><strong>Sunday:</strong> Closed</li>
					</ul>
				</div>
			</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--=== End Container Part ===-->
</template>
<script>
	export default {
		metaInfo: {
			title: "Laravel-VueJS",
			titleTemplate: "%s | News & Events"
		},
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
