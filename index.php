<?php
include_once("header.php");
?>

	<div class="container home">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  	<!-- Indicators -->
		  	<ol class="carousel-indicators">
		    	<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    	<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    	<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  	</ol>

  			<!-- Wrapper for slides -->
  			<div class="carousel-inner">
    			<div class="item active">
      				<img src="/images/slides/uduakDaniel_1.jpg" alt="Slide1">
    			</div>
    			<div class="item">
      				<img src="/images/slides/uduakDaniel_2.jpg" alt="Slide1">
    			</div>
    			<div class="item">
      				<img src="/images/slides/uduakDaniel_3.jpg" alt="Slide1">
    			</div>
  			</div>
		</div>
	</div>
	<div class="container welcome">
		<div>
			<center>
				<h3><strong>WELCOME</strong></h3>
				<img src="/images/welcome.png">
			</center>
			<i class="fa fa-quote-left"></i> Hi there! You are welcome to my website. 
			This is an interactive site; I hope to share aspects of my life with you and look forward to your feedback too. 
			Thank you for visiting my site and God bless. <i class="fa fa-quote-right"></i>
		</div>

	</div>
	<div class="container holder">
		
		<div class="col-md-12">
			<div class="col-md-3">
				<h1 style="color:#364C6E;">Watch Video</h1>
				<a href="/video">
					<img src="http://img.youtube.com/vi/ODl4KAQBRhA/0.jpg" alt="" class="img-thumbnail img-responsive">
				</a>
			</div>

			<div class="col-md-3">
				<h1 style="color:#364C6E;">Connect</h1>
				<a href="https://www.facebook.com/uduak.daniel.777" class="facebook"><i class="fa fa-facebook-square fa-2x"></i></a> <strong>Facebook</strong><br>
				<a href="https://twitter.com/uduakbasseydan" class="twitter"><i class="fa fa-twitter-square fa-2x"></i></a> <strong>Twitter</strong><br>
				<a href="https://www.youtube.com/results?search_query=Uduak+Daniel" class="youtube"><i class="fa fa-youtube-square fa-2x"></i></a> <strong>Youtube</strong>
				
			</div>

			<div class="col-md-3">
				<h1 style="color:#364C6E;">TYW Blog</h1>
				<?php 
				require_once("include/tumblr.php");

				$tumblr = new Tumblr();
				$posts = $tumblr->getPost();
				$post = $posts[0];
				echo "<a href='".$post['post_url']."'>".$post['title']."</a><br>";
				echo substr(strip_tags($post['body']), 0,170)." ...<br/>";
				echo "<a href='".$post['post_url']."'>Read More</a><br>";
				?>
				

			</div>

			<div class="col-md-3">
				
				<h1 style="color:#364C6E;">Engage</h1>
				<a href="https://www.facebook.com/uduakbasseydaniel" class="facebook"><i class="fa fa-facebook-square fa-2x"></i></a> 
				<strong>Our Facebook Fan Club</strong><br>

			</div>

		</div>
		
		
	</div>

<?php
include_once("footer.php");
?>