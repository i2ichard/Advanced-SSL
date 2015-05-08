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
		<div class="col-lg-4 col-lg-offset-3 data">
		<?php
		echo form_open('calc');

		echo form_label('Fixed Income :');
		echo "<br/>";
		echo form_input(array('class' => 'input', 'name' => 'income'));
		echo "<br/>";
		echo form_label('Fixed Expense :');
		echo "<br/>";
		echo form_input(array('class' => 'input', 'name' => 'expense'));
		echo "<br/>";
		echo form_label('Additional Expense :');
		echo "<br/>";
		echo form_input(array('class' => 'input', 'name' => 'additional'));
		echo "<br/><br/>";
		echo form_submit(array('class' => 'btn btn-success', 'value' => 'Calculate'));
		echo form_close();

		?>

		</div>
		<div class="col-lg-4 col-lg-offset-1 result">
		
			

			<?php foreach($posts as $post){?>

			<p>Income: <?php echo $post->income;?></p>
			<p>Expense: <?php echo $post->expense;?></p>
			
			<?php }?>


			
		</div>
	</div>
		
	

</div><!--<div class="content">