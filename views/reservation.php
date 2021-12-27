<?php
    session_start();
    include "../connect.php";
    require_once "header.php";
    
?>
<div id='header-img' style="margin-bottom: 5%;">Reservation</div>
<div class="container">
    <div class="booking-form">
        <div class="form-header">
            <h4 class="modal-title"> Make your Reservation</h5>
        </div>
        <div class="modal-body">
        <form action="ajoutReservation.php" method="post" role="form">
            <div class="form-row">
                <div class="form-group form_res" >
                    <input type="fullname" class="form-control lab" name="fullname" value="<?php echo $_SESSION['user']['fullname'];?>" required>
                </div>
                <div class="form-group form_res">
                    <input type="email" class="form-control lab" name="email" value="<?php echo $_SESSION['user']['email'] ?>" required >
                </div>
                <div class="form-group form_res">
                    <input type="phone" class="form-control lab" name="phone" value="<?php echo $_SESSION['user']['telephone'] ?>" required>
                </div>
                <div class="col-lg-5 col-md-7 form-group form_res">
                    <input type="date" name="date" class="form-control lab" id="date" placeholder="Date" required>
                </div>
                <div class="col-lg-5 col-md-7 form-group form_res">
                    <input type="time" class="form-control lab" name="time" id="time" placeholder="Coming Time" required>
                </div>
                <div class="col-lg-5 col-md-6 form-group form_res">
                    <input type="number" class="form-control lab" name="people" id="people" placeholder="No. of people" required min="0";>
                </div>
            </div>
            <button type="submit" class="btn btn-warning float-right mt-3">Book a Table</button>
            <input type='hidden' value = '$key' name = 'id'>
        </form>
       
</div>
</div>                    <a href="reservationAnnuler.php" class="link-warning" style="margin-left:255px; color:#feaa00 !important; font-size:20px; ">Cancel a Reservation</a>      
                        </div>  
                       
            </div>
            
        </div>
        </div>
        </div>
        <p style='margin:100px;'></p>
<?php
require_once "footer.php";
?>
       