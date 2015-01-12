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
      				<a href="http://blog.uduakdaniel.com/post/106235064584/uduak-daniel-getting-set-for-the-release-of-her" target="_blank">
      					<img src="/images/slides/uduakDaniel_1.jpg" alt="Slide1">
      				</a>
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
	
			<div class="welcome_2015">
				<i class="fa fa-quote-left"></i> Wishing you a fulfilled 2015!<i class="fa fa-quote-right"></i>
			</div>

	</div>
	<div class="container" style="padding:0;">
		<div class="news_ticker">
			Uduak Daniel Set to release her self titled album - Uduak Daniel
			<span>LATEST</span>
		</div>
	</div>

	<div class="container holder" style="padding:30px 0 20px 0;border-bottom:solid 1px #CCCCCC;">

		<div class="col-md-4" style="text-align:center;">
			<img src="images/alarm_clock.jpg" alt="..." class="img-circle" style="width:200px; height:200px">
			<br><br>
			<strong>WFM: WHEN SEASON MEETS TIME</strong><br>
			I have a poster on my office wall that defines efficient and effective. Efficient means doing things right 
			and effective means doing the right things. As close as they are, they are not ... 
			<br><br>
			<a href="http://blog.uduakdaniel.com/post/107907167959/when-season-meets-time" class="button">Read More</a>
		</div>

		<div class="col-md-4" style="text-align:center;">
			<img src="images/ud.jpg" alt="..." class="img-circle" style="width:200px; height:200px">
			<br><br>
			<strong>UD Daniel: The Album</strong><br>
			She performed two of the twelve songs in her upcoming album exactly four years ago in her live concert 
			Testimonies of Our Lives in Calabar, Nigeria. The concert was in response to her fans’....

			<br><br>
			<a href="http://blog.uduakdaniel.com/post/106235064584/uduak-daniel-getting-set-for-the-release-of-her" class="button">Read More</a>
		</div>

		<div class="col-md-4" style="text-align:center;">
			<img src="images/can_it.jpg" alt="..." class="img-circle" style="width:200px; height:200px">
			<br><br>
			<strong>Can it really happen?</strong><br>
			Cape Town, South Africa has always been a breathtaking experience. I see the pride, but also the kind of backwardness that 
			I see in other African countries- trash in the streets, palpable ...
			<br><br>
			<a href="http://blog.uduakdaniel.com/post/100220254214/can-it-really-happen" class="button">Read More</a>
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
				<h1 style="color:#364C6E;">UD Bits</h1>
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