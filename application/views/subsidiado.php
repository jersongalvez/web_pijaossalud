<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijaos salud / Subsidiado</title>
	<?php require_once("components/head.php"); ?>

</head>
<body>
  <?php require_once("components/menu.php"); ?>
  <section>
  <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <div class="view">
          <a href="#!">
          	<img class="d-block w-100" src="<?php echo base_url(); ?>public/img/web.png" alt="First slide">
          	<div class="mask rgba-white-slight text-center d-flex align-items-center justify-content-center">
            	<div class="row">
              	<div class="col-12">
                	<!-- <p class="h1-responsive red-text font-weight-bold mb-0">QUIENES SOMOS</p> -->
              	</div>
            	</div>
          	</div>
       		</a>
        </div>
      </div>
    </div>
  </div>
</section>
  <?php require_once("components/footer.php"); ?>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>