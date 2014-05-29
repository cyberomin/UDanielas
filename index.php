<?php
include_once("include/config.php");
$config = new Config();
?>
<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">

  	<title><?php echo $config->getTitle("Minister, Pastor &amp; Psalmist"); ?></title>
  	<meta name="description" content="<?php echo $config->getMetaDesc(); ?>">
  	<meta name="keywords" content="<?php echo $config->getMetaKeywords(); ?>">
  	<meta name="author" content="Celestine Omin">

  	<link rel="stylesheet" href="css/bootstrap.min.css">
  	<link rel="stylesheet" href="css/style.css">


  	<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
</head>

<body>

	<header>
		<div class="container">
			<div class="logo">UD</div>
			<div class="message">The Purpose <br>Driven Lady</div>
		</div>
	</header>

	<nav class="navbar navbar-default" role="navigation">
	  	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        	<span class="sr-only">Toggle navigation</span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="#">UD</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
		      		<?php
		      		$menu = $config->getMenu();
		      		foreach ($menu as $key) {
		      			echo "<li><a href='#'>".$key."</a></li>";
		      		}
		      		?>
		      	</ul>
		    </div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>


	Hello

	<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</body>
</html>