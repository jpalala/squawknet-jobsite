<?php
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<link rel="stylesheet" href="http://squawknet.net/jobs/codeignite.css" type="text/css">

	
</head>
<body>

<div id="container">
	<h1>Welcome to Squawknet Jobs</h1>

	<div id="body">
	<h2> Login>>	</h2>
<?php echo form_open('login/user'); ?>


<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="text" name="password" value="" size="50" />
<?php echo form_submit('login_button', 'Login');

<?php echo form_close(); ?>
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
