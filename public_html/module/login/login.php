	<section class="main">
		<section class="col-sm-12 top-bar"></section>
		<section class="col-sm-12 company">
			
			<div class="logo"><h1>CBTS<small>.in</small><br><small class="moto">Computer Based Test Series</small></h1></div>
			<div class="login"><h2><button class="btn btn-primary test-login">Test Login</button></h2></div>
			
		</section>
		<section class="col-sm-12 package">
			<h2>Our Test Packages<br><small>Giving Best Options For You</small></h2>
			<div class="col-sm-12 package-content">
				<?php 
					include "../adminlibrary/phplib.php"; 
					$sql = "select * from package";
					$result = $conn->query($sql);
					while ($package = $result->fetch_assoc()) {
						$no_of_test = 0;
						$ptable = "p".$package['pid'];
						$sql1 = "select test from {$ptable}";
						$result1 = $conn->query($sql1);
						while($row = $result1->fetch_assoc()){
							$no_of_test++;
						}
						$date = date_create($package['creation']);
						$date = date_format($date,"d M Y");
						echo "
							<div class='package-card col-sm-3 col-xs-10'>
								<h3>{$package['name']}</h3>
								<div><b>Description</b><br>{$package['description']}</div>
								<div><b>No Of Test : </b>{$no_of_test}</div>
								<div><b>Added On : </b>{$date}</div>
								<div>&#8377; {$package['price']}</div>
								<div><button class='btn btn-success buy-now'>Buy Now</button></div>
								
							</div>";
					}
				?>
				
			</div>
		</section>
		<section class="col-sm-12 footer">
			&copy; cbts.in All Rights Reserved
		</section>
	</section>
	<section class="test-login col-sm-12">
		<section class="col-sm-12 company" style="box-shadow: 0px 2px 5px grey;">
			<div class="logo"><h1>CBTS<small>.in</small><br><small class="moto">Computer Based Test Series</small></h1></div>
		</section>
		<div class="col-sm-5 signup-container">
			<h3>Sign UP</h3>
			<form action="./control/signup.php" class="signup-control">
				<input type="text" name="name" class="form-control" placeholder="Name">
				<input type="text" name="mobile" class="form-control" placeholder="Mobile No">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<br>
				<button class="btn btn-primary">Signup</button>
			</form>
			<div class="col-sm-6 well signup-box">Already Have Account <br> <button class="btn btn-success login-button">Login</button></div>
			<div class="col-sm-6 signup-box signup-error"></div>
		</div>

		<div class="col-sm-5 login-container">
			<h3>Login</h3>
			<form action="./control/login.php" class="login-control">
				<input type="text" name="mobile" class="form-control" placeholder="Mobile No">
				<input type="password" name="password" class="form-control" placeholder="Password">
				<br>
				<button class="btn btn-primary">Login</button>
			</form>
			<div class="col-sm-6 well signup-box">Not Registered Yet <br> <button class="btn btn-success signup-button">Signup</button></div>
			<div class="col-sm-6 signup-box login-error"></div>
		</div>
	</section>