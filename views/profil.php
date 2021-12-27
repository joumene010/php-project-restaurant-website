<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
	header('Location:shop_account');
}
require_once "header.php";
?>
<div class="profil" >
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					<h1 class="font-weight-bold text-color back_title">Account </h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
						<aside class="col-sm-10 mt-5 mb-5" style="margin-left:7%;" >
				<div class="card">
					<article class="card-body account">
						<h4 class="card-title mb-4 mt-1 text-center">Your informations</h4>
								<label>Your pseudo : <?php echo $_SESSION['user']['pseudo'] ?></label><hr>
								<label>Your fullname : <?php echo $_SESSION['user']['fullname'] ?></label><hr>
								<label>Your email : <?php echo $_SESSION['user']['email'] ?></label><hr>
								<label>Your phone number : <?php echo $_SESSION['user']['telephone'] ?></label><hr>
								<label>Your password : <?php echo $_SESSION['user']['password'] ?></label>
							</div>
							<div class="form-group">
								<button type="button" onclick="location.href='modifierUser.php'"  class="float-right btn btn-warning "> Edit </button>
							</div>                                                        
					</article>
				</div> 
			</aside> 
		</div>
</div> 
</div>
<?php
require_once 'footer.php' ; 
?>
