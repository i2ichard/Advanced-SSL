<!-- After Loggin in -->

<div class="content">
	<div class="signup_wrap">
	<div class="logo">Money$mart</div>
	<div class="signin_form">
		<p><?php echo anchor('user/logout', 'Logout'); ?></p>
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
			<label for="">Fixed Income: </label>
			<input type="text" class="form-control"><br>
			<label for="">Fixed Expenses: </label>
			<input type="text" class="form-control"><br>
			<input type="button" class="btn btn-success" value="Calculate Budget">
		</div>
		<div class="col-lg-3 col-lg-offset-2">
			<h1>Budget</h1>
			<h5>Fixed income - Fixed Expense = Budget</h5>
		</div>
	</div>
		
	

</div><!--<div class="content">-->