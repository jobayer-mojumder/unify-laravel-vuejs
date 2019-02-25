<template>
	<div>
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>Our Service</h1>
				<p>Creative Freedom Matters User Experience</p>
			</div>
		</div>
		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">Services</h1>
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
		<!--=== Service Blocks ===-->
        <div class="bg-color-light">
		<div class="container content-sm">
			<div class="text-center margin-bottom-50">
				<h2 class="title-v2 title-center">OUR SERVICES</h2>
				<p class="space-lg-hor">
					If you are going to use a
					<span class="color-green">passage of Lorem Ipsum</span>, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making
					<span
						class="color-green"
					>this the first</span> true generator on the Internet.
				</p>
			</div>

			<div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-directions"></i>
					<div class="content-boxes-in-v4">
						<h2>Creative Ideas</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-handbag"></i>
					<div class="content-boxes-in-v4">
						<h2>E-Commerce Pages</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4">
					<i class="pull-left icon-chemistry"></i>
					<div class="content-boxes-in-v4">
						<h2>Clean Code</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>

			<hr>

			<div class="row content-boxes-v4 content-boxes-v4-sm margin-bottom-30">
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-info margin-right-10"></i>
					<div class="content-boxes-in-v4">
						<h2>Extensive Documentation</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-social-youtube margin-right-10"></i>
					<div class="content-boxes-in-v4">
						<h2>Vimeo / Youtube</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4">
					<i class="pull-left icon-fire margin-right-10"></i>
					<div class="content-boxes-in-v4">
						<h2>Excellent Features</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>

			<hr>

			<div class="row content-boxes-v4 content-boxes-v4-sm">
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-layers"></i>
					<div class="content-boxes-in-v4">
						<h2>Multiple Layouts</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4 md-margin-bottom-40">
					<i class="pull-left icon-rocket"></i>
					<div class="content-boxes-in-v4">
						<h2>Ready To Use</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
				<div class="col-md-4">
					<i class="pull-left icon-support"></i>
					<div class="content-boxes-in-v4">
						<h2>Stunning Support</h2>
						<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
						<a href="#">Learn More</a>
					</div>
				</div>
			</div>
		</div>
        </div>
		<!--=== End Service Blocks ===-->
	</div>
	<!--=== End Container Part ===-->
</template>
<script>
	export default {
		metaInfo: {
			title: "Laravel-VueJS",
			titleTemplate: '%s | Service'
		},
		methods: {

		},
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
