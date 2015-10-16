<div id="main-navbar" class="navbar navbar-inverse" role="navigation">
    
    <div class="navbar-inner">
      <!-- Main navbar header -->
      <div class="navbar-header">

        <!-- Logo -->
        <a href="/" class="navbar-brand">
          <div>
            <img alt="Pixel Admin" src="assets/images/logo-estrela.png">
          </div>
          Programa Ambulatorial de Diabetes
        </a>

        <!-- Main navbar toggle -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar-collapse"><i class="navbar-icon fa fa-bars"></i></button>

      </div> <!-- / .navbar-header -->

      <div id="main-navbar-collapse" class="collapse navbar-collapse main-navbar-collapse">
        <div>
          <div class="right clearfix">
            <ul class="nav navbar-nav pull-right right-navbar-nav">
              <?php if (Request::is('dashboard','settings')): ?>
                <li>
                  <a href="/imports" class="">
                    <i class="nav-icon fa fa-file-excel-o"></i>
                    <span class="">Importar relatório</span>
                  </a>
                </li>
              <?php endif; ?>
              <?php if (Request::is('imports','settings')): ?>
                <li>
                  <a href="/dashboard" class="">
                    <i class="nav-icon fa fa-line-chart"></i>
                    <span class="">Dashboard</span>
                  </a>
                </li>
              <?php endif; ?>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle user-menu" data-toggle="dropdown">
                  <?php if(isset($testeAvatar)): ?>
                    <img src="assets/demo/avatars/1.jpg" alt="">
                  <?php endif; ?>
                  <span>{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="/settings"><i class="dropdown-icon fa fa-cog"></i>&nbsp;&nbsp;Settings</a></li>
                  <li class="divider"></li>
                  <li><a href="/logout"><i class="dropdown-icon fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>
                </ul>
              </li>
            </ul> <!-- / .navbar-nav -->
          </div> <!-- / .right -->
        </div>
      </div> <!-- / #main-navbar-collapse -->
    </div> <!-- / .navbar-inner -->
  </div> <!-- / #main-navbar -->
<!-- /2. $END_MAIN_NAVIGATION -->