<template>
	<!--=== Header ===-->
	<div class="header">
		<div class="container">
			<!-- Logo -->
			<a class="logo" href="">
				<img :src="'public/assets/img/logo1-default.png'" alt="Logo">
			</a>
			<!-- End Logo -->
			<!-- Topbar -->
			<div class="topbar">
				<ul class="loginbar pull-right">
					<li class="hoverSelector">
						<i class="fa fa-globe"></i>
						<a>Languages</a>
						<ul class="languages hoverSelectorBlock">
							<li class="active">
								<a href="#">
									English
									<i class="fa fa-check"></i>
								</a>
							</li>
							<li>
								<a href="#">Spanish</a>
							</li>
							<li>
								<a href="#">Russian</a>
							</li>
							<li>
								<a href="#">German</a>
							</li>
						</ul>
					</li>
					<li class="topbar-devider"></li>
					<li>
						<a href="page_faq.html">Help</a>
					</li>
					<li class="topbar-devider"></li>
					<li>
						<a href="page_login.html">Login</a>
					</li>
				</ul>
			</div>
			<!-- End Topbar -->
			<!-- Toggle get grouped for better mobile display -->
			<button
				type="button"
				class="navbar-toggle"
				data-toggle="collapse"
				data-target=".navbar-responsive-collapse"
			>
				<span class="sr-only">Toggle navigation</span>
				<span class="fa fa-bars"></span>
			</button>
			<!-- End Toggle -->
		</div>
		<!--/end container-->
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
			<div class="container">
				<ul class="nav navbar-nav">
					<!-- Home -->
					<li>
						<router-link to="/">Home</router-link>
					</li>
					<!-- End Home -->
					<li class>
						<router-link to="/about">About</router-link>
					</li>

					<li class="">
						<a href="">Product</a>
					</li>

					<li class="">
						<a href="">Service</a>
					</li>

					<li class="">
						<a href="">News & Events</a>
					</li>

					<li class="">
						<a href="">Contact Us</a>
					</li>

					<!-- Search Block -->
					<li>
						<i class="search fa fa-search search-btn"></i>
						<div class="search-open">
							<div class="input-group animated fadeInDown">
								<input type="text" class="form-control" placeholder="Search">
								<span class="input-group-btn">
									<button class="btn-u" type="button">Go</button>
								</span>
							</div>
						</div>
					</li>
					<!-- End Search Block -->
				</ul>
			</div>
			<!--/end container-->
		</div>
		<!--/navbar-collapse-->
	</div>
	<!--=== End Header ===-->
</template>
<script type="javascript">
	export default {};
</script>

<style>
</style>
