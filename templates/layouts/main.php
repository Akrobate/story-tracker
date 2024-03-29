<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>StoryTracker - Scrum Tool</title>

    <!-- Bootstrap core CSS -->
    <link href="public/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

	<link rel="stylesheet" href="css/SimpleCalendar.css" type="text/css" />
    <!-- Custom styles for this template -->
    <link href="public/bootstrap3/css/dashboard.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="public/bootstrap3/js/bootstrap.min.js"></script>
    <!--script src="public/bootstrap3/js/docs.min.js"></script-->
    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js"></script>
   
     <script src="js/jquery-boards.js"></script>
    <script src="js/script.js"></script>
    <script>

	</script>
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">StoryTracker - Scrum Tool</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=url::internal("users", "logout")?>" id="check-trigger">Deconnection <span class="badge"></span></a></li>
            <li><a href="<?=url::internal("parametres", "edit")?>" >Parametrage</a></li>
            <li><a href="<?=url::internal("stories", "indexqrcode")?>">QRIndex</a></li>
            <li><a href="<?=url::internal("stories", "index")?>">Strories</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        
        <div class="col-sm-12  main">        
			<?=$template_content?>	
        </div>
        
      </div>
    </div>
    
  </body>
</html>

