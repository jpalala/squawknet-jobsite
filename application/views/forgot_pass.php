<?php
	$this->load->view('top_template');

?>
<div id="container">
	<h1 class="warning">incomplete page</h1>
	<?=form_open('forgot/submit')?>
	<table><tr>
		<td><label>Email:</label></td>
		<td><?=form_input('email')?></td>
	</tr>
	
	<tr>
		<td><?=form_hidden('verify_user',$this->session->userdata('username'))?></td>
		<td><?=form_submit('submit','reset password');?></td>
	</tr>
	</table>
	<? 
	$this->load->view('footer');
	
?>

