<?php
session_start();
require_once "header.php";
if(empty($_SESSION['user']['pseudo'])){
	header('Location:shop_account');
}
$_SESSION['photo_prec']=$_POST['photo'];
?>
<body>
<div >
	<section class="page_header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 mt-3 text-center">
					<h1 class="font-weight-bold text-color back_title">Dishes </h1>
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
						<form method="POST" action="modifierPlatC.php" id="modifierplat_form"> 
							<div class="form-group">
								<label>Name </label>
								<input name="nom" id="nom" class="form-control" value="<?php echo $_POST['nom'];?>" type="text" required>
							</div>
							<div class="form-group">
								<label>Price</label>
								<input name="prix" id="prix" class="form-control" value="<?php echo $_POST['prix']; ?>" type="number" step="0.01" min="0" required>
							</div>
							<div class="form-group">
								<label>Description</label>
								<input name="description" id="description" class="form-control" value="<?php echo $_POST['description']; ?>" type="text">
							</div>
							<div class="form-group">
								<label>Picture</label>
								<input name="photo" id="photo" class="form-control" value="<?php echo $_POST['photo']; ?>" type="file">
							</div>
							<div class="form-group">
							<input type="hidden" value="<?PHP echo $_POST['id']; ?>" name="id">
								<button type="submit" class="float-right btn btn-warning "> Confirm modification  </button>
							</div>                                                        
					    </form>
					    <script src="js/modifierPlat.js"></script>
					</article>
				</div> 
			</aside> 
		</div>
</div> 
</div>
</body>
<?php
require_once 'footer.php' ; 
?>
