<nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark bg-default">
  <div class="container">
    <a class="navbar-brand mr-lg-5" href="./index.html">
      <img src="<?=base_url('publico/imagenes/')?>compr.png">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global"
      aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar_global">
      <div class="navbar-collapse-header">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="./index.html">
              <img src="<?=base_url('publico/imagenes/')?>compr.png">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
              aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-ui-04 d-lg-none"></i>
            <span class="nav-link-inner--text">Categorias</span>
          </a>
          <div class="dropdown-menu dropdown-menu-xl">
            <div class="dropdown-menu-inner">
              <a href="https://demos.creative-tim.com/argon-design-system/docs/getting-started/overview.html" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-primary rounded-circle text-white">
                  <i class="ni ni-spaceship"></i>
                </div>
                <div class="media-body ml-3">
                  <h6 class="heading text-primary mb-md-1">Getting started</h6>
                  <p class="description d-none d-md-inline-block mb-0">Learn how to use Argon compiling Scss, change
                    brand colors and more.</p>
                </div>
              </a>
              <a href="https://demos.creative-tim.com/argon-design-system/docs/foundation/colors.html" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-success rounded-circle text-white">
                  <i class="ni ni-palette"></i>
                </div>
                <div class="media-body ml-3">
                  <h6 class="heading text-primary mb-md-1">Foundation</h6>
                  <p class="description d-none d-md-inline-block mb-0">Learn more about colors, typography, icons and
                    the grid system we used for Argon.</p>
                </div>
              </a>
              <a href="https://demos.creative-tim.com/argon-design-system/docs/components/alerts.html" class="media d-flex align-items-center">
                <div class="icon icon-shape bg-gradient-warning rounded-circle text-white">
                  <i class="ni ni-ui-04"></i>
                </div>
                <div class="media-body ml-3">
                  <h5 class="heading text-warning mb-md-1">Components</h5>
                  <p class="description d-none d-md-inline-block mb-0">Browse our 50 beautiful handcrafted components
                    offered in the Free version.</p>
                </div>
              </a>
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Usuarios</span>
          </a>
          <div class="dropdown-menu">
            <a href="./examples/login.html" class="dropdown-item">Inicio</a>
            <a href="./examples/register.html" class="dropdown-item">Registrar</a>
          </div>
        </li>

      </ul>
      <ul class="navbar-nav align-items-lg-center navbar-nav-hover ml-lg-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.facebook.com/creativetim" target="_blank" data-toggle="tooltip"
            title="Like en Facebook">
            <i class="fa fa-facebook-square"></i>
            <span class="nav-link-inner--text d-lg-none">Facebook</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://www.instagram.com/creativetimofficial" target="_blank"
            data-toggle="tooltip" title="Siguenos en Instagram">
            <i class="fa fa-instagram"></i>
            <span class="nav-link-inner--text d-lg-none">Instagram</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="https://twitter.com/creativetim" target="_blank" data-toggle="tooltip"
            title="Siguenos en Twitter">
            <i class="fa fa-twitter-square"></i>
            <span class="nav-link-inner--text d-lg-none">Twitter</span>
          </a>
        </li>
        <!-- <li class="nav-item d-none d-lg-block ml-lg-4">
          <a href="https://www.creative-tim.com/product/argon-design-system" target="_blank" class="btn btn-neutral btn-icon">
            <span class="btn-inner--icon">
              <i class="fa fa-cloud-download mr-2"></i>
            </span>
            <span class="nav-link-inner--text">Download</span>
          </a>
        </li> -->

        <li class="nav-item dropdown">
          <a href="#" class="nav-link" data-toggle="dropdown" href="#" role="button">
            <i class="ni ni-collection d-lg-none"></i>
            <span class="nav-link-inner--text">Usuario</span>
          </a>
          <div class="dropdown-menu">
            <a href="./examples/login.html" class="dropdown-item">Inicio</a>
            <a href="./examples/register.html" class="dropdown-item">Registrar</a>
          </div>
        </li>

      </ul>
    </div>
  </div>
</nav>