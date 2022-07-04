<style>

  .letra {
    font-family: arial, sans-serif !important;
    font-style: inherit;
    font-size: 14px;
  }
  .letra2 {
    font-family: arial, sans-serif !important;
    font-style: inherit;
    font-size: 14px;

  }
  .letra3 {
    font-family: arial, sans-serif !important;
    font-style: inherit;
    font-size: 13px;
    color: #0d3878 !important;
  }
  .color-azul {
    color: #0d3878 !important;
  }
  .fondo-azul {
    background-color: #0d3878 !important;
  }
</style>

<div class="container-fluid green darken-2 text-white font-weight-bold d-none d-lg-block letra">
  <div class="container-fluid">
    <div class="row ">
      <div class="col-md-9 mt-2 mb-2">
        <small> <i class="fas fa-circle mx-2"></i> EPS INDÍGENA con identidad propia</small>
      </div>
      <div class="col-md-2 mt-2 mb-2 text-right">
        <a href="<?php echo base_url(); ?>preguntas" class=" text-white">
          <small>  Preguntas Frecuentes </small>
        </a>
      </div>
      
      <div class="col-md-1 mt-2 mb-2 text-right">
        <small> Registrate</small>
      </div>
    </div>
  </div>
</div>
<header>
    <nav class="navbar navbar-expand-lg letra2  navbar-dark " style="background-color: #0d3878 !important;">
        <div class="container-fluid mt-2 mb-2 ">
            <a class="navbar-brand" href="#"><strong>Pijaos Salud EPSI</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>inicio">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " id="navbarDropdownMenuLink" data-toggle="dropdown"
                     aria-haspopup="false" aria-expanded="true">Nosotros</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>quienessomos">¿Quienes somos?</a>
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>estadosfinancieros">Estados financieros</a>
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>circulares">Circulares</a>
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>contratacion">Contratación</a>
                    </div>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
                     aria-haspopup="false" aria-expanded="true">Afiliaciones</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>incapacidades">Incapacidades</a>
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>subsidiado">Subsidiado</a>
                     <a class="dropdown-item letra3" href="<?php echo base_url(); ?>contributivo">Contributivo</a>
                    </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Programa pyp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>transparencia">Transparencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>cuentas">Rendición de cuentas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>contactanos">Contactanos</a>
                    </li>
                </ul>
                <form class="form-inline">
                  <div class="md-form my-0">
                    <a
                      href="https://prestadores.pijaossalud.online/pages/login.php"
                      target="blank"
                      class="btn btn-outline-white font-weight-bold text-white btn-sm btn-rounded letra2">
                      Oficina virtual
                    </a>
                  </div>
                </form>
            </div>
        </div>
    </nav>