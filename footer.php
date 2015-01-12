	
  	<div class="container footer visible-lg visible-md">
      <footer>
          &copy; <?php echo gmdate("Y");?> Uduak Daniel. All rights reserved.
          <span class='pull-right'>Design - +234803 493 2833</span>
      </footer>
    </div>
    <?php 
    if ($_SERVER['REMOTE_HOST'] == 'http://uduakdaniel.com') {
    ?>
  	<script>
  		(function(i,s,o,g,r,a,m) {
  			i['GoogleAnalyticsObject'] = r;
  			i[r] = i[r] || function() {
  				(i[r].q=i[r].q||[]).push(arguments)
  			},
  			i[r].l = 1 * new Date();
  			a = s.createElement(o),
  			m = s.getElementsByTagName(o)[0];
  			a.async = 1;
  			a.src = g;
  			m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  		ga('create', 'UA-15095601-14', 'uduakdaniel.com');
  		ga('send', 'pageview');

	</script>
  <?php } ?>
  
</body>
</html>