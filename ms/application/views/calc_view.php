<!-- After Loggin in -->

<div class="content">
	<div class="signup_wrap">
	<div class="logo"><?php echo anchor('user/welcome', 'Money$mart'); ?></div>
	<div class="signin_form">
		<p class="logout"><?php echo anchor('user/logout', 'Logout'); ?></p>
	</div><!--<div class="signin_form">-->
	</div><!--<div class="signup_wrap">-->
	<div class="member">
	
	</div>
	<div class="row">
		<div class="col-lg-3 side_options">
			<ul>
				<li>User Option</li>
				<li>User Option</li>
				<li>User Option</li>
			</ul>
		</div>
		<div class="col-lg-3 col-lg-offset-4 data">
		<?php
		echo form_open();

		echo "<p>Fixed Income: </p>";
		echo "<p>";
		echo form_input('income');
		echo "</p>";

		echo "<p>Fixed Expense: </p>";
		echo "<p>";
		echo form_input('expense');
		echo "</p>";

		echo "<p>Additional Expense: </p>";
		echo "<p>";
		echo form_input('expense');
		echo "</p>";

		echo form_submit('calculate', 'Calculate');
		echo form_close();

		?>

		</div>
		<div class="col-lg-3 col-lg-offset-2 result">
			
			<p>Income: <?php echo $add; ?></p>
			<p>Expense: <?php echo $sub; ?></p>
			
		</div>
	</div>
		
	

</div><!--<div class="content">-->