<template>
	<div>
		<div class="breadcrumbs-v3 img-v3 text-center">
			<div class="container">
				<h1>News & Events</h1>
				<p>Creative Freedom Matters User Experience</p>
			</div>
		</div>
		<!--=== Breadcrumbs ===-->
		<div class="breadcrumbs">
			<div class="container">
				<h1 class="pull-left">News & Events</h1>
				<ul class="pull-right breadcrumb">
					<li>
						<a href>Home</a>
					</li>
					<li>
						<a href>Pages</a>
					</li>
					<li class="active">News & Events</li>
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
						<!-- Accordion v1 -->
						<div class="panel-group acc-v1" id="accordion-1">
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a
											class="accordion-toggle"
											data-toggle="collapse"
											data-parent="#accordion-1"
											href="#collapse-One"
										>Collapsible Group Item #1</a>
									</h4>
								</div>
								<div id="collapse-One" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-4">
												<img class="img-responsive" :src="'public/assets/img/main/img12.jpg'" alt>
											</div>
											<div class="col-md-8" >
                                                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et.</p>
                                            </div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a
											class="accordion-toggle"
											data-toggle="collapse"
											data-parent="#accordion-1"
											href="#collapse-Two"
										>Collapsible Group Item #2</a>
									</h4>
								</div>
								<div id="collapse-Two" class="panel-collapse collapse">
									<div class="panel-body">
										<div class="row">
											<div class="col-md-8">
												<p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.</p>
												<ul class="list-unstyled">
													<li>
														<i class="fa fa-check color-green"></i> Donec id elit non mi porta gravida at eget metus..
													</li>
													<li>
														<i class="fa fa-check color-green"></i> Fusce dapibus, tellus ac cursus comodo egetine..
													</li>
													<li>
														<i class="fa fa-check color-green"></i> Food truck quinoa nesciunt laborum eiusmod runch..
													</li>
												</ul>
											</div>
											<div class="col-md-4">
												<img class="img-responsive" :src="'public/assets/img/main/img9.jpg'" alt>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a
											class="accordion-toggle"
											data-toggle="collapse"
											data-parent="#accordion-1"
											href="#collapse-Three"
										>Collapsible Group Item #3</a>
									</h4>
								</div>
								<div id="collapse-Three" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									</div>
								</div>
							</div>

							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title">
										<a
											class="accordion-toggle"
											data-toggle="collapse"
											data-parent="#accordion-1"
											href="#collapse-Four"
										>Collapsible Group Item #4</a>
									</h4>
								</div>
								<div id="collapse-Four" class="panel-collapse collapse">
									<div class="panel-body">
										<p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Food truck quinoa nesciunt laborum eiusmodolf moon tempor, sunt aliqua put a bird. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
									</div>
								</div>
							</div>
						</div>
						<!-- End Accordion v1 -->
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
