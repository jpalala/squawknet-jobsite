<!DOCTYPE html>

<html lang="en">

<head>

<title>{page_title}</title>

<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/stylesheet.css')?>" />

</head>

<body>

<!-- start of header -->

<div id="header">

<div id="navbar">

<div id="logo"><a href="#">Squawknet.net</a></div>

<div class="userLogin" style="float: right;">

<?=form_open('users/login');?>

	<table class="LoginForm">

	<tbody>

	<tr>

	<td><input id="username" type="name" name="username" placeholder="username" required></input><br />

	<small><a href="<?=site_url('forgot/password') ?>">Forgot password?</a></small></td>

	<td><input id="password" type="password" name="password" placeholder="password" required></input><br />

	<small><a href="<?=site_url('register')?>">Register here</a></small></td>

	<td><input type="submit" name="login" value="Login" id="submit"> <a href="<?=site_url('register');?>" id="register">Register</a>><br />&nbsp;</td>

	</tr>
	
	</tbody>

	</table>

	</form>

</div>

</div>

</div><!-- end of header -->

<!-- start of container -->
