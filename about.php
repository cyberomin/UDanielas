<?php
include_once("header.php");
?>

	<div class="container about special">
		<div class="header">
			<h2>Musician</h2>
		</div>

		<div class="col-md-2 visible-md visible-lg about">
			<ul class="list-unstyled about">
				<li><a href="#minister">Minister</a></li>
				<li><a href="#musician">Musician</a></li>
				<li><a href="#humanitarian">Humanitarian</a></li>
				<li><a href="#career">Career</a></li>
			</ul>
		</div>

		<div class="col-md-10 about">
			<div>
				<p>
					Uduak Daniel is minister, recording artiste, author, composer, researcher, speaker and development practitioner. She co-oversees Dominion High Commission International Church in Nigeria, and is the founder and Programme Director of Development Options International (DO)- a faith-based initiative. She currently serves with the National Agency for the Control of AIDS (NACA) as the Chief Programme Officer, prevention and social and behavior change communication (SBCC). 
				</p>
				<p>
					Uduak believes that the expression of every God-given talent and calling is the fulfillment of purpose. She is passionate about people identifying their uniqueness. She is also very a passionate about global issues, women and youth. She speaks worldwide on worship, as well as strategic self and organizational development.   
				</p>
				<p>
					An extraordinary musician, her concerts, songs and videos inspire her listeners.  She has composed signature tunes for T.V and radio programs and conferences.  The composition of an anthem for the Female Minister’s Forum International (FMFI) titled, “Harvest Song” is done worldwide, and her songs have been used in movies. Her albums: Hold On (2002) and The Father’s Heart (2006) are available in audio and video.  She is the author of the book: Leading Worship- a practical guide for impact in worship sessions and two: Programming for development and Magnify your ministry will be in bookstores by November, 2014.
				</p>
				<p>
					Uduak and her husband, Rev. Bassey Daniel are parents of three children. 
				</p>
			</div>

			<div>
				<h1 id="minister">The Minister</h1>
				<p>Uduak grew up in a staunch catholic home and loved mass not just because of the latin songs, 
				but because it was an hour! Even though church attendance was mostly four times in the year – new year’s day, 
				Easter, Christmas and my birthday, she was made to understand that God reigned supreme in our family.</p>

				<p>At sixteen, she encountered Christ in a dramatic way, became a believer and has continued her very intimate walk 
				with God. Her experiences she frequently expressed in the songs she composed.</p>

				<p>In 1995, she was ordained an evangelist and in 2002, a reverend minister. She has continued to serve as a pastor 
				in their local assembly since 1997 along with her husband.  She operates in the office of a prophet and ministers 
				all around the world in different fora.</p>
			</div>

			<div>
				<h1 id="musician">The Musician</h1>
				<p>
					Uduak started in 1990 as a choir member in the Voice of Satisfaction, her campus fellowship, where she built her vocal, song composition and worship leading skills. She was also called upon severally to do special renditions of the national and university anthems during school events.  In 1991, she became the only female member of the four-man band, The Pearls. It was in the course of her several performances with the band all over Nigeria that she resolved to go into professional music school.
				</p>
				<p>
					In 2002, Uduak released her first album, Hold On. This gained a lot of recognition in Nigeria because of the unique way the songs were delivered. The song, Judah shot her more into limelight as it was used as a closing credit song in Jeta Amata’s movie, Black Mamba. However, she could not get herself signed onto any music label. In 2006, she released The Father’s Heart. This was a live recording done in a church complex in the heart of Calabar. In 2010, after so much pressure by fans to hear her voice, Uduak staged another concert in Calabar where she performed a few songs from her soon to be released album, Uduak Daniel. Three of the songs were released as singles. 
				</p>
				<p>
					Uduak’s music is a mix of gospel, jazz, R&B and afro beat. She sings mainly in English, Nigeria’s pidgin English and Ibibio. In it all, her strong, dramatic, powerful and mind-bugling-noted vacals stand out. She looks forward to becoming a celebrated best-selling female vocal someday.
				</p>
			</div>

			<div>
				<h1 id="humanitarian">Humanitarian</h1>
				<p>
					Read more about Uduak Daniel’s humanitarian work  on this link <br>
					<a href="http://developmentoptions.org.ng" target="_blank">www.developmentoptions.org.ng</a>
				</p>
				
			</div>

			<div>
				<h1 id="career">Career</h1>
				<p>
					Find out about Uduak, the career lady.<br>
					<a href="https://www.linkedin.com/pub/uduak-daniel/28/236/471" target="_blank">LinkedIn</a>
				</p>
				
			</div>

		</div>
		
	</div>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$('a[href*=#]:not([href=#])').click(function() 
		{
			$("ul.about a").removeClass("current");
			$(this).addClass("current");
	    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) 
	    	{
	      		var target = $(this.hash);
	      		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      		if (target.length) 
	      		{
	        		$('html,body').animate({
	          		scrollTop: target.offset().top
	        		}, 1000);
	        		return false;
	      		}
	    	}
	  	});
	})
	</script>
<?php
include_once("footer.php");
?>