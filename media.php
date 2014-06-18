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
				<li><a href="#">Videos</a></li>
				<li><a href="#">Audios</a></li>
			</ul>
		</div>
		<div class="col-md-10">
			<ul class="list-inline media">
				<li>
					<img src="http://img.youtube.com/vi/ODl4KAQBRhA/0.jpg" alt="" class="img-thumbnail img-responsive"
					data-video="ODl4KAQBRhA">
					<span><strong>Help that soul.</strong></span>
					Uduak Daniel
				</li>
				<li>
					<img src="http://img.youtube.com/vi/wj3YqfWLwYQ/0.jpg" alt="" class="img-thumbnail img-responsive"
					data-video="wj3YqfWLwYQ">
					<span><strong>Here I am today.</strong></span>
					Uduak Daniel
				</li>
				<li>
					<img src="http://img.youtube.com/vi/d-gMP1g7Sdo/0.jpg" alt="" class="img-thumbnail img-responsive"
					data-video="d-gMP1g7Sdo">
					<span><strong>Fiak.</strong></span>
					Uduak Daniel
				</li>
				<li>
					<img src="http://img.youtube.com/vi/CSnh4Zx5wnI/0.jpg" alt="" class="img-thumbnail img-responsive"
					data-video="CSnh4Zx5wnI">
					<span><strong>The Gods.</strong></span>
					Uduak Daniel
				</li>
			</ul>
			
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function()
		{
			//Stop modal box from closing
            $('.waiting').modal({
                show: false
            });

			var media = $(".media");
			var modalPlayer = $(".modal-body iframe");

			media.find("img").click(function()
			{
				var video = $(this).data("video");
				var link = "//www.youtube.com/embed/"+video
				modalPlayer.attr("src",link);
				$('.waiting').modal('show');
				
			})
		});
	</script>

<?php
include_once("footer.php");
?>