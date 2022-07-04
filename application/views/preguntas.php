<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijaos salud / preguntas frecuentes</title>
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
           <h3>PREGUNTAS FRECUENTES</h3>
           <p class="lead">
             ¿Necesitas ayuda? Comunícate con nosotros y buscamos  soluciones juntos.
             Este es un espacio para todos, no dudes en escribirnos, atenderemos tus solicitudes lo más pronto posible.
           </p>
       </div>
   </div>
   <div class="row">
     <ol>
         <li class="font-weight-bold h5">¿ Como puedo afiliarme a la entidad ?</li>
         <h5>pues pagando</h5>
     </ol>
   </div>
   <br>
   <br>
   <div class="row">
       <div class="col-md-6">
           <label>¿No encuentras la Respuesta? escribe tu pregunta</label>
           <div class="row">
           <div class="col-md-2">
               <br>
            <input type="text" class="form-control form-control-sm mt-2" value="+57" readonly>
           </div>
           <div class="col-md-8">
           <div class="form-group">
               <label>Whatsapp</label>
               <input type="number" class="form-control form-control-sm" >
           </div> 
           </div>    
           </div>
           <div class="form-group">
               <label>Pregunta</label>
               <textarea class="form-control" rows="2"></textarea>
           </div>
           <button class="btn btn-primary btn-sm btn-rounded">Enviar</button>
       </div>
       <div class="col-md-6">
           <img src="https://previews.123rf.com/images/fotogestoeber/fotogestoeber1409/fotogestoeber140900061/31491782-mujer-joven-que-tiene-una-idea-adem%C3%A1s-de-muchas-preguntas.jpg" class="img-fluid">
       </div>
   </div>
</div>
  <?php require_once("components/footer.php"); ?>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>