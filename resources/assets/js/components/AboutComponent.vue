<template>
	<div>
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>About Us</h1>
				<p>Creative Freedom Matters User Experience</p>
			</div>
		</div>
		<div class="container content-sm">
			<div class="row">
				<!-- Social Network -->
				<div class="col-md-6 md-margin-bottom-50">
					<div class="headline-left margin-bottom-30">
						<h2 class="headline-brd heading-md">ABOUT
							<span class="color-green">ME</span>
						</h2>
					</div>
					<p>Foster tackle reduce child mortality freedom accelerate dedicated international development United Nations. Environmental progressive deep engagement; giving carbon rights community health workers achieve inspiration.</p>
					<p>Development United Nations. Environmental progressive deep engagement; giving carbon rights community health workers achieve inspiration.</p>
					<br>
					<ul class="list-inline social-icons-v1">
						<li>
							<a href="#">
								<i class="rounded-x fa fa-twitter"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="rounded-x fa fa-facebook"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="rounded-x fa fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="rounded-x fa fa-linkedin"></i>
							</a>
						</li>
						<li>
							<a href="#">
								<i class="rounded-x fa fa-instagram"></i>
							</a>
						</li>
					</ul>
				</div>
				<!-- End Social Network -->
				<!-- Progress Bar -->
				<div class="col-md-6 progress-box md-margin-bottom-50">
					<div class="headline-left margin-bottom-30">
						<h2 class="headline-brd heading-md">MY
							<span class="color-green">SKILLS</span>
						</h2>
					</div>
					<h3 class="heading-xs">Web Design
						<span class="pull-right">88%</span>
					</h3>
					<div class="progress progress-u progress-xxs">
						<div class="progress-bar progress-bar-dark" role="progressbar" data-width="88"></div>
					</div>

					<h3 class="heading-xs">PHP/WordPress
						<span class="pull-right">76%</span>
					</h3>
					<div class="progress progress-u progress-xxs">
						<div class="progress-bar progress-bar-dark" role="progressbar" data-width="76"></div>
					</div>

					<h3 class="heading-xs">HTML/CSS
						<span class="pull-right">97%</span>
					</h3>
					<div class="progress progress-u progress-xxs">
						<div class="progress-bar progress-bar-dark" role="progressbar" data-width="97"></div>
					</div>
				</div>
				<!-- End Progress Bar -->
			</div>
			<!--/end row-->
		</div>
	</div>
	<!--=== End Container Part ===-->
</template>
<script>
	export default {
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
