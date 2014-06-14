<?php
include_once("include/config.php");
$config = new Config();

$url = substr($_SERVER['REQUEST_URI'],1);
?>
<!doctype html>
<html lang="en">
<head>
  	<meta charset="utf-8">

  	<title><?php echo $config->getTitle("Minister, Pastor &amp; Psalmist"); ?></title>
  	<meta name="description" content="<?php echo $config->getMetaDesc(); ?>">
  	<meta name="keywords" content="<?php echo $config->getMetaKeywords(); ?>">
  	<meta name="author" content="Celestine Omin">

  	<meta id="og_title"			property="og:title" content="<?php echo $config->getTitle(); ?>"/>
    <meta id="og_url"			property="og:url" content="<?php echo $config->getUrl(); ?>"/>
    <meta id="og_type"			property="og:type" content="website"/>
    <meta id="og_image"			property="og:image" content="<?php echo $config->getUrl(); ?>/images/logo.png"/>
    <meta id="og_description"	property="og:description" content="<?php echo $config->getMetaDesc(); ?>"/>


  	<link rel="stylesheet" href="/css/bootstrap.min.css">
  	<link rel="stylesheet" href="/css/style.css">
  	<link rel="shortcut icon" href="/images/favicon.png">

  	<script src="/js/jquery.js"></script>
  	<script src="/js/bootstrap.min.js"></script>

  	<script type="text/javascript" src="//use.typekit.net/lmy8fkl.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  	<!--[if lt IE 9]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  	<![endif]-->
</head>

<body>

	<header>
		<div class="container">
			<div class="logo">
				<img src="/images/logo.png">
			</div>
		</div>
	</header>
	<nav class="navbar navbar-default" role="navigation">
	  	<div class="container-fluid">
		  	<div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        	<span class="sr-only">Toggle navigation</span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			        	<span class="icon-bar"></span>
			      	</button>
			      	<!--<a class="navbar-brand" href="/">UD</a>!-->
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			      	<ul class="nav navbar-nav">
			      		<?php
			      		$menu = $config->getMenu();
			      		foreach ($menu as $key => $value) {
			      			if ($url == $value)
			      			{
			      				echo "<li class='active'><a href='$value'>".$key."</a></li>";
			      			}
			      			else
			      			{
			      				echo "<li><a href='$value'>".$key."</a></li>";
			      			}
			      			
			      		}
			      		?>
			      	</ul>
			    </div><!-- /.navbar-collapse -->
		  	</div><!-- /.container-fluid -->
		</div>
	</nav>