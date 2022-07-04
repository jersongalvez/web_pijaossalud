<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijaos salud / Incapacidades</title>
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
          	<div class="mask  text-center d-flex align-items-center justify-content-center">
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
<div class="container">
    <div class="row">
      <div class="col-md-12">
           <h4 class="color-azul font-weight-bold text-uppercase">Radicacion de Incapacidades</h4>
           <p class="lead">
             ¿Necesitas ayuda? Comunícate con nosotros y buscamos  soluciones juntos.
             Este es un espacio para todos, no dudes en escribirnos, atenderemos tus solicitudes lo más pronto posible.
           </p>
      </div>
    </div>
    <div class="row">
        <div class="col-md-5">
          <div class="text-center">
            <img src="" alt="">
          </div>
          <div class="form-group">
              <label>Nombre Completo</label>
              <input type="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Correo</label>
              <input type="text" class="form-control">
          </div>
          <div class="form-group">
              <label>Celular - telefono</label>
              <input type="text" class="form-control">
          </div>
          <p class="color-azul">
           Si cuenta con mas de un documento, imagen u otro formato, por favor 
           anexar los documentos en un unico documento en formato .PDF
          </p>
          <div class="form-group">
              <label>Soporte</label>
              <input type="file" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-info btn-rounded btn-sm">Enviar </button>
          </div>
        </div>
        <div class="col-md-7">
          <div class="text-center">
              <img src="https://www.fodeocci.com.co/wp-content/uploads/2021/02/incapacidad.png" class="img-fluid">
          </div>
        </div>
    </div>
</div>
  <?php require_once("components/footer.php"); ?>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>