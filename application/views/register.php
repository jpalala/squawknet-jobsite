<?php 
	$this->load->view('top_template');
?>



	<div id="container">
	<div id="return_message"></div>
	<?=form_open('users/add');?>	
	<fieldset>
	<label>Username</label>
		<br>	<?=form_input('username');?>
	<label>Email</label>
		<br>
		<?=form_input('email')?>
	
	<label><?=form_password('password');?></label<
	</fieldset>
	<fieldset>
	<label>Type:</label> 
		<ul class="selection">
			<li>Job Poster:<?=form_radio('user_type','jobposter', false)?></li>
			<li>Job Seeker: <?=form_radio('user_type','jobseeker', false)?></li>
		</ul>


	</fieldset>>
	</form>
	</div>

<script>
	$(document).ready(function() {
	
		$("div#return_message").hide();
		$("button#register").click(function(evt) {
			evt.preventDefault();
			$.post('<?php echo site_url('users/signup') ?>',
				$("form").serialize(), function(data) { 
					$("#return_message").html(data).show();
				}, 'html');
		});
	});
</script>
<?php 

	$this->load->view('footer');
?>
