<!-- Footer -->
<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="row">
					<div class="col-md-4">
						<img src="images/logo-footer.png" alt="" class="footer-logo">
						<div class="social-icons">
							<a href="javascript:void(0);"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							<a href="javascript:void(0);"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-links first">
							<ul>
								<li><a href="javascript:void(0);">How It Works</a></li>
								<li><a href="javascript:void(0);">Help</a></li>
								<li><a href="javascript:void(0);" data-featherlight="#fl1">Sign Up</a></li>
								<li><a href="javascript:void(0);">Login</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="footer-links">
							<ul>
								<li><a href="javascript:void(0);">Become<br>A Transporter</a></li>
								<li><a href="javascript:void(0);">Place An Order</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="newsletterbox">
					<h3>Sign Up For Our Newsletter</h3>
					<form class="form-horizontal newsletter-form" action="" method="post">
				        <div class="form-group">
				            <label class="sr-only" for="inputEmail">Email Address</label>
				            <input type="email" class="form-control" id="inputEmail" placeholder="enter email address" required>
				        </div>
				        <button type="submit" class="btn btn-primary">Sign Up</button>				        
				    </form>
				</div>
			</div>
		</div>
	</div>
	<div class="copyright">
		&copy;Copyright<a href="javascript:void(0);">Terms & Conditions</a>
	</div>
</footer>

<!-- SIGN UP POPUP -->
<div class="lightbox" id="fl1">
	<div id="signup_form" class="signup-form">
		<div class="signupicon">
			<img src="images/icon-user.png" alt="">				
		</div>
		<h2>SIGN UP</h2>
		<form class="form-horizontal signupform" action="" method="post">
			<div class="form-group switch-btn">
		        Register as Company?
		        <label class="switch">
				  <input type="checkbox">
				  <span class="slider round"></span>
				</label>					
			</div>
	        <div class="form-group">
	            <label class="sr-only" for="inputFirstName">Name</label>
	            <input type="text" class="form-control" id="inputFirstName" placeholder="Name">
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputLastName">Surname</label>
	            <input type="text" class="form-control" id="inputLastName" placeholder="Surname">
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputEmail">Email Address</label>
	            <input type="email" class="form-control" id="inputEmail" placeholder="Email Address" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputEmail">Confirm Email Address</label>
	            <input type="email" class="form-control" id="inputEmail" placeholder="Confirm Email Address" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputEmail">Alternate Email Address</label>
	            <input type="email" class="form-control" id="inputEmail" placeholder="Alternate Email Address" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputContact">Contact Number</label>
	            <input type="text" class="form-control" id="inputContact" placeholder="Contact Number" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputAddress">Physical Address</label>
	            <input type="text" class="form-control" id="inputAddress" placeholder="Physical Address" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputPassword">Password</label>
	            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
	        </div>
	        <div class="form-group">
	            <label class="sr-only" for="inputPassword">Confirm Password</label>
	            <input type="password" class="form-control" id="inputPassword" placeholder="Confirm Password" required>
	        </div>
        
			<div class="checkbox terms">
	            <label>
	                <input type="checkbox" value="">
	                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
	                <em>I Agree To The <a href="javascript:void(0);">Terms & Conditions</a></em>
	            </label>
	        </div>
	        <button type="submit" class="btn btn-primary">Submit</button>
	        <div class="signin">
	        	<a href="javascript:void(0);"><img src="images/googleplus-signin.jpg" alt=""></a>
	        	<a href="javascript:void(0);"><img src="images/facebook-signin.jpg" alt=""></a>
	        </div>
	    </form>		
	</div>
</div>
<!-- SIGN UP POPUP -->


<div id="chatview">
	<a href="javascript:void(0);" class="chat-button">Live Chat</a>
</div>

<script src="<?php echo e(asset('/js/jquery.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/bootstrap.min.js')); ?>" type="text/javascript"></script>	
<script src="<?php echo e(asset('/js/css3-animate-it.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(asset('/js/featherlight.js')); ?>" type="text/javascript"></script>