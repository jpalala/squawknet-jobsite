<?php 
	$this->load->view('top');
?>


<div id="container">
	
	<div class="row">
		<div class="span6">
		<h1>Register</h1>
		<?php echo form_open("register/submit"); ?>
		
		<fieldset>
		<label>Username</label>
		<br><?=form_input('username');?>
		<label>Email:</label>
		<br>
		<?=form_input('email')?>
		
		<label>Password: <?=form_password('password');?></label<

		<label>Confirm Password:</label> 
		<?=form_password('vpassword');?>
			<br>

		</fieldset>
	<?=form_close();?>
	
		</div>
	</div>
	
		<?php
			$this->load->view('footer');
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
