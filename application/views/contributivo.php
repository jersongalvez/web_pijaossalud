<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pijaos salud / Contributivo</title>
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
           <h4 class="color-azul font-weight-bold">REGIMEN CONTRIBUTIVO</h4>
           <p class="lead">
             ¿Necesitas ayuda? Comunícate con nosotros y buscamos  soluciones juntos.
             Este es un espacio para todos, no dudes en escribirnos, atenderemos tus solicitudes lo más pronto posible.
           </p>
       </div>
   </div>
</div>
<div class="container">
  <section class=" px-md-5 mx-md-5 dark-grey-text">
    <div class="row mb-4">
      <div class="col-md-4 mx-auto">
        <div class="text-center">
          <img src="https://mdbootstrap.com/img/illustrations/undraw_connected_world_wuay.svg" class="img-fluid" alt="smaple image" width="200px;">
        </div>
      </div>
    </div>
    <h3 class="font-weight-bold mb-1 pb-1 text-center color-azul">¿Eres afiliado activo por emergencia?</h3>
    <p class=" text-justify mb-4 pb-2">
      Si perteneces a los grupos de sisben A1 al C18 podras aplicar movilidad del 
      regimen contributivo al regimen subsidiado.
      en caso de no contar con encuesta del sisben metodologia IV; debes tramitar 
      la solicitud en la oficina local del sisben mas cercana en tu minicipio presentando
      los siguientes documentos
    </p>
    <ul>
      <li>Fotocopia del documento de identificacion legible y claro tambien de tu grupo familiar.</li>
      <li>Ultimos recibos de servicios publicos de agua y luz con tu direccion de residencia actualizada</li>
      <li>Numero de telefono de contacto y correo electronico</li>
      <li>
        Si eres venezolano, debes presentar el permiso especial de permanencia
        recuerda que ampliacion del estado activo por emergencia por parte del ministerio
        de salud y proteccion social esta sujeto a la declaratoria de emergencia sanitaria.
      </li>
    </ul> 
  </section>
</div>


<div class="container">
  <section class=" px-md-5 mx-md-5 dark-grey-text">
    <div class="row mb-4">
      <div class="col-md-4 mx-auto">
        <div class="text-center">
          <!-- <img src="https://mdbootstrap.com/img/illustrations/undraw_connected_world_wuay.svg" class="img-fluid" alt="smaple image" width="200px;"> -->
        </div>
      </div>
    </div>
    <h3 class="font-weight-bold mb-1 pb-1 color-azul">Afiliación al Regimen Contributivo</h3>
    <p class="text-justify mx-auto mb-4 pb-2 text-lowercase">
      Es el cambio de permanencia a un regimen dentro de la misma EPS para los afiliados en el 
      sistema general de la seguridad social en salud.
    </p>
    <p class="text-justify "> <span class="font-weight-bold">Requisitos</span></p>
    <ul>
      <li>Pertenecer a la EPS en regimen subsidiado</li>
      <li>Inicial relacion laboral</li>
      <li>Diligenciar el fomulario unico de afiliacion regimen contributivo.</li>
    </ul>
  </section>
</div>


<div class="container my-5 py-5">
    <section class="px-md-5 mx-md-5 text-justify dark-grey-text">
      <div class="row">
        <div class="col-md-6 mb-4 mb-md-0">
          <h3 class="font-weight-bold color-azul">Registro de empresas</h3>
          <p class="text-muted">
            Para la afiliacion de un usuario a regimen contributivo, la empresa debe estar 
            creada en nuestro sistema de información, caso de no estarlo, solicitamos la 
            siguiente documentacion para el ingreso o legalizacion de la misma.
          </p>
          <ul>
            <li>Diligenciar el formato registro de empresas (Todos sus campos son obligatorios)</li>
            <li>Camara de comercio no mayor a 30 dias</li>
            <li>Fotocopia de la cedula del representante legal</li>
            <li>RUT</li>
          </ul>
          <div class="text-center">

            <a class="btn btn-success btn-md ml-0 text-center" href="#" role="button">Formulario de registro<i class="fa fa-gem ml-2"></i></a>
          </div>

        </div>
        <div class="col-md-5 mb-4 mb-md-0">
          <img src="https://mdbootstrap.com/img/Others/screens1.png" class="img-fluid" alt="">
        </div>
      </div>
    </section>
  </div>
  <?php require_once("components/footer.php"); ?>
  <?php require_once("components/scripts.php"); ?>

</body>
</html>