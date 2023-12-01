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

	<section class="page-heading bg-dark-alpha-60 parallax-4 font-white" data-background-image="/img/fullwidth/fullwidth27.jpg">

		<div class="container mt-80">
			<div class="row">
				
				<div class="col-md-12 pt-30 pb-30">

					<h1 class="align-center"></h1>

				
				</div>


			</div>
		</div>

	</section>


	<section class="page-section" style="background-color: #111111">

		<div class="container">


			<div class="row mb-80">
				<?php 
				$files = scandir($root_dir . '/img/mantra/');
				foreach($files as $file) {
					if(!(substr($file, -1)=='l')&&!(substr($file, -1)=='.')&&!str_contains($file, 'logo')&&!str_contains($file, 'favicon'))
				  echo( "
				  <div class=\"col-md-4 col-sm-6 col-xs-12\">

					<div class=\"photo-box\">

						<div class=\"pb-image\">

							<img src=\"/img/mantra/" . $file . "\">



						</div>

					</div>

				</div>
				  ");
				} ?>


			</div> <!-- end .row -->


		</div> <!-- end .container -->

	</section>

    <?php include_once $root_dir . '/php/components/footer.php' ?>


    <?php include_once $root_dir . '/php/components/scripts.php' ?>
</body>
</html>
