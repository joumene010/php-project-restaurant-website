<?php
session_start();
require_once "header.php";
if(empty($_SESSION['user']['pseudo'])){
	header('Location:shop_account');
}
?>
<div class="sign">
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					<h1 class="font-weight-bold text-color ">Edit Account</h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<aside class="col-sm-10 mt-5 mb-5" style="margin-left: -7%;" >
				<div class="card">
					<article class="card-body account">
						<form method="POST" action="modifierUserC.php"> 
							<div class="form-group">
								<label>Your fullname </label>
								<input name="fullname" class="form-control" value="<?php echo $_SESSION['user']['fullname'];?>" type="text" required>
							</div>
							<div class="form-group">
								<label>Your email</label>
								<input name="email" class="form-control" value="<?php echo $_SESSION['user']['email']; ?>" type="email" required>
							</div>
							<div class="form-group">
								<label>Your phone number</label>
								<input name="telephone" class="form-control" value="<?php echo $_SESSION['user']['telephone']; ?>" type="text" required pattern="[0-9]{8}">
							</div>
							<div class="form-group">
								<label>Your password</label>
								<input name="password" class="form-control" value="<?php echo $_SESSION['user']['password']; ?>" type="text" required minlength="6">
							</div>
							<div class="form-group">
								<button type="submit" class="float-right btn btn-warning "> Confirm modification  </button>
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
