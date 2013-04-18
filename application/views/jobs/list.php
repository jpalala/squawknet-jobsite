<?php 
	$this->load->view('top_template');
?>



<div id="container">
	<?php
	if(count($results) != 0) {
		foreach($results as $job) {
				echo '<div class="job">';
				echo '<h4>'.$job['company'].'</h4>'
				echo  '<strong>'.$job['title']. '</strong>';
				echo  '<br>Posted in [<a href="/category/'.$job['category'].'">'.$job['category'].'</a>] by ' . $job['author'] . ' - ' . $job['created'];
				echo '<br><br>';
			echo '</div>';
			
			}
	
		}
	} else {
		echo '<p><span class="notice">No jobs yet. Check back later</span></p>';
	}	
	?>
	
</div>	
<script type="text/javascript">

var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-24827085-1']);
	_gaq.push(['_setDomainName', 'squawknet.net']);
	_gaq.push(['_trackPageview']);
	_gaq.push(['_trackPageLoadTime']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>




</body>
</html>
