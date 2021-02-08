<?php $url      = $this->helpers['URLHelper']->getURL(); ?>
<?php $location = $this->helpers['URLHelper']->getLocationAdmin(); ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="<?= $url; ?>/assets/libs/vue-js/vue.js"></script>
    <title>Quiz</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/libs/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/libs/font-awesome/css/font-awesome.css">

    <!-- Custom styles for this template -->
    <link href="<?php echo $url; ?>/assets/css/sistema.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#"><?php echo $this->userSession->get("nome"); ?></a>

      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="<?php echo $url ?>/sair">Sair</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
		  <nav class="col-md-2 d-none d-md-block bg-light sidebar">
		    <div class="sidebar-sticky">
		      <ul class="nav flex-column">
		        <li class="nav-item">
		          <a class="nav-link" href="<?php echo $url ?>/dashboard">
		            <span data-feather="home"></span>
		            Quizzes <span class="sr-only">(current)</span>
		          </a>
		        </li>
		        <li class="nav-item" id="teste">
		          <a class="nav-link" href="<?php echo $url ?>/criar_quiz">
		            <span data-feather="file"></span>
		            Criar Quiz
		          </a>
		        </li>
		      </ul>
		    </div>
		  </nav>
		  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		  	 <?php require $file; ?>
		  </main>
		</div>
    </div>

    <script type="text/javascript">
      var URL = "<?php echo $url ?>";
    </script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/jquery/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/bootstrap/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/sistema/criar_quiz.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/sistema/deletar_quiz.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/sistema/enviar_resposta.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

  </body>
</html>
