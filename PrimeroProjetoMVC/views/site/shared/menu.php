<header class="masthead mb-auto p-3 border-bottom">
  <div class="inner container ">
    <a href="<?php echo $url; ?>/" class=""><h3 class="masthead-brand">Quiz</h3></a> 
    <nav class="nav nav-masthead justify-content-center">
      <a class="nav-link <?php echo $location == 'registro' ? 'active' : '' ?>" href="<?php echo $url; ?>/cadastro">Cadastro</a>
      <a class="nav-link <?php echo $location == 'login' ? 'active' : '' ?>" href="<?php echo $url; ?>/login">Login</a>
    </nav>
  </div>
</header>