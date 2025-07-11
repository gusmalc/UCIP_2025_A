<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">


    <a class="navbar-brand" href="<?php echo $site_url; ?>">Navbar</a>



    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse  " id="navbarSupportedContent">

<!-- d-flex justify-content-end --> 

      <!-- <div> -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?php echo $site_url; ?>">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $site_url . "contacto"; ?>">Contacto</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Servicios
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="<?php echo $site_url . "servicios/servicio-uno"; ?>">Servicio Uno</a></li>
                <li><a class="dropdown-item" href="<?php echo $site_url . "servicios/servicio-dos"; ?>">Servicio Dos</a></li>
                <li><a class="dropdown-item" href="<?php echo $site_url . "servicios/servicio-tres"; ?>">Servicio Tres</a></li>
              </ul>
            </li>
          
          </ul>
      <!-- </div> -->



      
    </div>




  </div>
</nav>