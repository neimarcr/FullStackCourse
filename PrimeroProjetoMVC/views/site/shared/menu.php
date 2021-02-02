<header class="masthead mb-auto p-3 border-bottom">
  <div class="inner container ">
    <a href="<?php echo $url; ?>/" class=""><h3 class="masthead-brand">Viagens S.A.</h3></a> 
    <nav class="nav nav-masthead justify-content-center">
      <a class="nav-link <?php echo $location == '' || $location == '/' ? 'active' : '' ?>" href="<?php echo $url; ?>/">Home</a>
      <a class="nav-link <?php echo $location == 'registro' ? 'active' : '' ?>" href="<?php echo $url; ?>/usuario">Usuário</a>
      <a class="nav-link <?php echo $location == 'contato' ? 'active' : '' ?>" href="<?php echo $url; ?>/contato">Contato</a>
      <a class="nav-link <?php echo $location == 'login' ? 'active' : '' ?>" href="<?php echo $url; ?>/login">Login</a>
    </nav>
  </div>
</header>