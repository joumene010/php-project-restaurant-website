<?php
require_once "header.php";
?>
<div class="sign" id="account-reg">
	<div id='header-img' style="margin-bottom: 3%;">ACCOUNT
					<p class="p">Please login or signup to continue with your purchase</p> </div>
	<div class="container">
		<div class="row">
			<aside class="col-sm-5 mt-5" style="margin-left: 5%;">
				<div class="card">
					<article class="card-body account">
						<h4 class="card-title mb-4 mt-1 text-center">Existing Customer</h4>
						<form method="POST" action="login_verification.php" >
							<div class="form-group">
								<label >Your email/Pseudo</label>
								<input name="pseudo" class="form-control" placeholder="Email or Pseudo" type="text" required>
							</div> 
							<div class="form-group">
								<label>Your password</label>
								<input name="password" class="form-control" placeholder="******" type="password" required>
							</div>
							<div class="form-group">
								<button type="submit" class="float-right btn btn-warning "> Login  </button>
							</div>                                                        
					    </form>
					</article>
				</div> 
			</aside> 
			<div class="col-sm-2"></div>
			<aside class="col-sm-5 mt-5 mb-5" style="margin-left: -7%;" >
				<div class="card">
					<article class="card-body account">
						<h4 class="card-title mb-4 mt-1 text-center" style="color:#f7f4ef;">Register an account</h4>
						<form method="POST" action="AjoutuserC.php">
							<div class="form-group">
								<label>Pseudo</label>
								<input name="pseudo" class="form-control" placeholder="Pseudo" type="text" required>
							</div> 
							<div class="form-group">
								<label>Fullname </label>
								<input name="fullname" class="form-control" placeholder="Fullname" type="text" required>
							</div>
							<div class="form-group">
								<label>Email</label>
								<input name="email" class="form-control" placeholder="email" type="email" required>
							</div>
							<div class="form-group">
								<label>Phone number</label>
								<input name="telephone" class="form-control" placeholder="phone number" type="text" pattern="[0-9]{8}" required>
							</div>
							<div class="form-group">
								<label>Password</label>
								<input name="password" class="form-control" placeholder="******" type="password" required minlength="6">
							</div>
							<div class="form-group">
								<button type="submit" class="float-right btn btn-warning "> Login  </button>
							</div>                                                        
					    </form>
					</article>
				</div> 
			</aside> 
		</div>
</div> 
</div>
<?php
require_once 'footer.php' ; 
?>
