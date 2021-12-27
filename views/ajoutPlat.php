<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once "header.php";
?>
<div class="sign" id="account-reg">
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					<h1 class="font-weight-bold text-color back_title ">Add a dish </h1>
				</div>
			</div>
		</div>
	</section>
	<div class="container">
		<div class="row">
			<div class="col-sm-2"></div>
			<aside class="col-sm-10 mt-5 mb-5" style="margin-left:-7%;" >
				<div class="card">
					<article class="card-body account">
						<h4 class="card-title mb-4 mt-1 text-center" style="color:#f7f4ef;">New dish</h4>
						<form method="POST" action="AjoutPlatC.php" id="ajouterplat_form">
							<div class="form-group">
								<label>Name </label>
								<input name="nom" id="nom" class="form-control" placeholder="Name"  type="text" required>
							</div> 
							<div class="form-group">
								<label>Price</label>
								<input name="prix" id="prix" class="form-control" placeholder="Price" type="number" step="0.01" min="0" required >
							</div>
							<div class="form-group">
								<label>Description</label>
								<input name="description" id="description" class="form-control" placeholder="Description" type="text">
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input name="photo" id="photo" class="form-control" type="file">
							</div>
							<div class="form-group">
								<button type="submit" class="float-right btn btn-primary "> Add  </button>
							</div>                                                        
					    </form>
					    <script src="js/ajoutPlat.js"></script>
					</article>
				</div> 
			</aside> 
		</div>
</div> 
</div>
<?php
require_once 'footer.php' ; 
?>
