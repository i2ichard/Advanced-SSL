<div id="content">
<div class="signup_wrap">
<div class="signin_form">
	<?php echo form_open("user/login"); ?>
	    <label for="email">Email:</label>
    	<input type="text" id="email" name="email" value="" />
	    <label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="" />
        <input type="submit" class="" value="Sign in" />
    <?php echo form_close(); ?>
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
<div class="col-lg-6 col-lg-offset-1 success">
	<h1>Sign up successful</h1>
	<p>Please log in.</p>
</div>

</div><!--<div id="content">-->