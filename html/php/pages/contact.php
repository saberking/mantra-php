<!DOCTYPE html>
<html>
<head>
	<?php $root_dir = $_SERVER["DOCUMENT_ROOT"] ?>
	<title>Mantra Recruitment Group</title>

	<?php include_once $root_dir . '/php/components/head.php' ?>

</head>
<body>

<div class="page-loader page-loader-visible">
</div>


	<?php include_once $root_dir . '/php/components/header-simple.php' ?>



	<section class="page-heading bg-dark-alpha-70 parallax-4 font-white" data-background-image="img/fullwidth/fullwidth10.jpg">

		<div class="container mt-80">
			<div class="row">
				
				<div class="col-md-12 pt-30 pb-30">

					<h1 class="align-center">Contact Us</h1>

					<div class="font-size-15 text-middle align-center">
						Lorem ipsum dolor sit amet vivamus quis massa
					</div>

					<ol class="breadcrumb align-center mt-40 mb-0">
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Contact Us</li>
					</ol>

				</div>


			</div>
		</div>

	</section>

	<section class="page-section">

		<div class="container">

			<h2 class="mb-60">Send Us A Message</h2>

			<div class="row">

				<div class="col-md-8 col-sm-12 mb-sm-60">

					<form class="form-alt">

						<div class="row">

							<div class="col-md-6 col-sm-12">

								<div class="form-group">
									<input type="text" id="name" class="form-control" placeholder="Name">
								</div>

							</div>

							<div class="col-md-6 col-sm-12">

								<div class="form-group">
									<input type="email" id="email" class="form-control" placeholder="Email">
								</div>

							</div>

						</div> <!-- end .row -->

						<div class="form-group">
							<input type="text" id="subject" class="form-control" placeholder="Subject">
						</div> <!-- end .form-group -->

						<div class="form-group">
							<textarea id="message" class="form-control" placeholder="Message" rows="8"></textarea>
						</div>

						<div class="form-group">
							<input id="submit" type="submit" class="btn btn-bg-dark" value="Send Message">
						</div>

					</form>

				</div>

				<div class="col-md-4 col-sm-12">

					<div class="icon-box ib-icon-aside ib-icon-up">

						<div class="ib-icon">
							<i class="icon_mobile"></i>
						</div>

						<h5 class="ib-title">Phone</h5>

						<p class="ib-desc">
							123 645 0126
						</p>

					</div> <!-- end .icon-box -->

					<div class="icon-box ib-icon-aside ib-icon-up">

						<div class="ib-icon">
							<i class="icon_mail_alt"></i>
						</div>

						<h5 class="ib-title">Email</h5>

						<p class="ib-desc">
							contact@vistous.com
						</p>

					</div> <!-- end .icon-box -->

					<div class="icon-box ib-icon-aside ib-icon-up">

						<div class="ib-icon">
							<i class="icon_pin_alt"></i>
						</div>

						<h5 class="ib-title">Address</h5>

						<p class="ib-desc">
							2215 Jarvis Street Derby, NY 14047
						</p>

					</div> <!-- end .icon-box -->

				</div>

			</div> <!-- end .row -->

		</div> <!-- end .container -->

	</section> <!-- end .page-section -->

	<section class="page-section p-0">

		<div class="map-wrapper" data-plugin-google-map data-plugin-options='{"marker": {"address": "Haltern am See, Weseler Str. 151"}}'>
			<div class="google-map"></div>
		</div> <!-- end .map-wrapper -->

	</section> <!-- end .page-section -->

    <?php include_once $root_dir . '/php/components/footer.php' ?>


    <?php include_once $root_dir . '/php/components/scripts.php' ?>
</body>
</html>
