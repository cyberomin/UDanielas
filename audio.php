<?php
include_once("header.php");
?>
	
	<div class="modal fade waiting">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-body">
	                
	                	<iframe width="520" height="315" src="" frameborder="0" allowfullscreen></iframe>
	                
	            </div>
	        </div>
	        <!-- /.modal-content -->
	    </div>
	    <!-- /.modal-dialog -->
	</div>


	<div class="container about">
		<div class="header">
			<h2>Media</h2>
		</div>
		<div class="col-md-2">
			<ul class="list-unstyled about">
				<li><a href="/media">Videos</a></li>
				<li><a href="#">Audios</a></li>
				<li><a href="#">Books</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<!--<ul class="list-unstyled">
				<li>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/165636525&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</li>
				<li>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/165639268&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</li>
				<li>
					<iframe width="100%" height="166" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/165639268&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
				</li>
			</ul>!-->

			<ul class="list-inline media">
				<li>
					<a href="/holdon">
						<img src="/images/album/hold_on.jpg" alt="" class="img-thumbnail img-responsive"
						data-toggle="tooltip" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="Miracle / True God / Help That Soul/ Fiak / Judah / Jesus / Only You / Hold On /
						Lead Me On / My Keeper">
					</a>
					<span><strong>Hold On <i>(2002)</i></strong></span>
				</li>

				<li>
					<a href="/tfh">
						<img src="/images/album/tfh.jpg" alt="" class="img-thumbnail img-responsive"
						data-toggle="tooltip" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="Arise Nigeria / The Father's heart / Judah ">
						<span><strong>The Father's Heart <i>(2006)</i></strong></span>
					</a>
				</li>

				<li>
					<a href="/promo">
						<img src="/images/album/promo.jpg" alt="" class="img-thumbnail img-responsive"
						data-toggle="tooltip" data-container="body" data-toggle="popover" data-placement="right" 
						data-content="Arise Africa / Wonderful thing / Jesus (Medley) ">
						<span><strong>Uduak Daniel Promo Copy <i>(2010)</i></strong></span>
					</a>
				</li>

				

				<!--<li>
					<img src="/images/album/ud.jpg" alt="" class="img-thumbnail img-responsive"
					data-toggle="tooltip" data-container="body" data-toggle="popover" data-placement="right" 
					data-content="Wonderful King / True God / I Will Rise / Lead me on ">
					<span><strong>Uduak Daniel</strong></span>
				</li>!-->


			</ul>
			
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function() {
			$(".media li img").hover(function() {

				$(this).popover('show')
			}, function() {

				$(this).popover('hide')
			});
			
		})
	</script>

<?php
include_once("footer.php");
?>