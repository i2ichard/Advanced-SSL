<!-- <div class="container"> -->
<div id="content">
<div class="signup_wrap">
<div class="logo">Money$mart</div>
<div class="signin_form">
	<?php echo form_open("user/login"); ?>
	    <label for="email">Email:</label>
    	<input type="text" id="email" name="email" value="" />
	    <label for="pass">Password:</label>
		<input type="password" id="pass" name="pass" value="" />
        <input type="submit" class="btn btn-info" value="Log in" />
    <?php echo form_close(); ?>
</div><!--<div class="signin_form">-->
</div><!--<div class="signup_wrap">-->
<div class="filler_top"></div>
<div class="row">
	<div class="col-lg-7 tagline">
		<p>A smarter way to<br>manage your money.<br>Take your first step to<br>financial freedom.</p>
	</div>	
	<div class="col-lg-4 main">
		<div class="reg_form">
		<div class="form_title">Sign up for free</div>
		<?php echo validation_errors('<p class="error">'); ?>
			<?php echo form_open("user/registration"); ?>
				<p>
					<label for="user_name">User Name:</label>
					<input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
				</p>        
				<p>
					<label for="email_address">Your Email:</label>
					<input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
				</p>
				<p>
					<label for="password">Password:</label>
					<input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
				</p>
				<p>
					<label for="con_password">Confirm Password:</label>
					<input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
				</p>        
				<p>
					<input type="submit" class="btn btn-success" value="Submit" />
				</p>
			<?php echo form_close(); ?>
		</div><!--<div class="reg_form">-->	
	</div>

		
</div>
<div class="filler_bottom"></div>    
</div><!--<div id="content">-->	
<!-- </div> --><!--<div class="container">-->	
