<?php
session_start();
if(empty($_SESSION['user']['pseudo'])){
    header('Location:shop_account');
}
require_once "header.php";
include "../controller/userC.php";

    $userC=new userC();
    $listeUser=$userC->afficherUser();

?>
<body>
<section class="product-section  py-5">
        <div class="container" >
            <div class=" row justify-content-center pb-1">
                <div class="col-md-7 heading-section text-center">
                    <h1 class="font-weight-bold text-color back_title">
                        List users
                    </h1>
                </div>
            </div>
        </div>
</section>
<div class="container" >
    <div class="row">
            <div class="col-sm-2 "></div>
            <aside class="col-sm-12 mt-5 mb-5 ">
                <table class="table table-bordered tableau">
                    <thead>
                        <tr>
                            <th scope="col">Pseudo</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Password</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listeUser as $user){ ?>
                        <tr>
                            <td><?php echo $user['pseudo'] ?></td>
                            <td><?php echo $user['fullname'] ?></td>
                            <td><?php echo $user['password'] ?></td>
                            <td><?php echo $user['telephone'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                            <td><?php echo $user['role'] ?></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </aside>
        </div>
    </div>
    <div style="margin-bottom: 80px;"> </div>
</body>
<?php
require_once "footer.php";
?>

