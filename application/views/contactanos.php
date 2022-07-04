<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijaos salud / Contactanos</title>
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
           <h3 class="color-azul">¡ CONTACTANOS !</h3>
           <p class="lead">
             ¿Necesitas ayuda? Comunícate con nosotros y buscamos  soluciones juntos.
             Este es un espacio para todos, no dudes en escribirnos, atenderemos tus solicitudes lo más pronto posible.
           </p>
       </div>
   </div>

   <div class="row mt-5">
     <div class="col-md-7">
       <h1>Formulario de Contacto</h1>
       <br>
       <div class="form-group">
         <label>Nombre</label>
         <input type="text" class="form-control">
       </div>
       <div class="form-group">
         <label>Correo</label>
         <input type="text" class="form-control">
       </div>
       <div class="form-group">
         <label>Celular</label>
         <input type="text" class="form-control">
       </div>
       <div class="form-group">
         <label>Area a la que solicita</label>
         <select class="form-control">
           <option value="">Seleccione</option>
           <option value="">Afiliaciones</option>
           <option value="">Contributivo Movilidad</option>
           <option value="">Translados</option>
           <option value="">Portabilidad</option>
           <option value="">Refeencia</option>
           <option value="">Autorizaciones</option>
           <option value="">Atencion al Usuario</option>
           <option value="">Talento Humano</option>
           <option value="">Area Juridica</option>
         </select>
       </div>
       <div class="form-group">
         <label>Mensaje</label>
         <textarea class="form-control"></textarea>
       </div>
       <button class="btn btn-info btn-rounded btn-block">Enviar</button>
       <br>
       <br>
     </div>
     <div class="col-md-5 ">
       <img src="https://cun.edu.co/wp-content/uploads/9-1-768x691.webp" class="img-fluid mt-1">
       <h5 class="mt-2">Números de Contacto</h5>
       <div class="row">
         <div class="col-md-6">
           <h6>LInea PBX (8)2809090 </h6>
           
         </div>
         <div class="col-md-6">
           <h6>LInea Covid (8)2809089</h6>
         </div>
       </div>
       <div class="row mt-2">
         <div class="col-md-8">
           <h6>LInea Gratuita 01 800 186 754</h6>
         </div>
       </div>
       <h5>Atencion al usuario</h5>
       <h6>siau.tolima@pijaossalud.com.co</h6>
       <div class="row">
       </div>
      </div>
   </div>
</div>
  <?php require_once("components/footer.php"); ?>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>