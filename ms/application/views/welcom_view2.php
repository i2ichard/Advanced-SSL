<!-- After Loggin in -->

<div class="content">
	<div class="signup_wrap">
	<div class="logo">Money$mart</div>
	<div class="signin_form">
		<p class="logout"><?php echo anchor('user/logout', 'Logout'); ?></p>
	</div><!--<div class="signin_form">-->
	</div><!--<div class="signup_wrap">-->
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
		// ok so you are trying to prepopulate the field?
		//I want the user input to be put into the DB

		echo "<p>Fixed Income: </p>";
		echo "<p>"
		echo form_input('income');
		echo "</p>"

		echo "<p>Fixed Income: </p>";
		echo "<p>"
		echo form_input('income');
		echo "</p>"

		echo form_close();
		echo 


		?>

		</div>
		<div class="col-lg-3 col-lg-offset-2 result">
			<p>Fixed Income: <?php echo "Fixed Income"   ?></p>
            <p>Fixed Expense: <?php echo "Fixed Expense" ?></p>
            <p><?php echo "hello"; ?></p>
		</div>
	</div>
		
	

</div><!--<div class="content">-->