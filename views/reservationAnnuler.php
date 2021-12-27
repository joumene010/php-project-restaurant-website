<?php
    session_start();
    include "../connect.php";
    require_once "header.php";
    
?>
<div id='header-img' style="margin-bottom: 5%;">Reservation</div>
<div class="container">
    <div class="booking-form">
        <div class="form-header">
            <h4 class="modal-title">Cancel a Reservation</h5>
        </div>
        <div class="modal-body">
        <form action="annulerReservation.php" method="post" role="form">
            <div class="form-row">
                <div class="col-lg-5 col-md-7 form-group form_res">
                    <input type="date" name="date" class="form-control lab" id="date" placeholder="Date" required>
                </div>
                <div class="col-lg-5 col-md-7 form-group form_res">
                    <input type="time" class="form-control lab" name="time" id="time" placeholder="Coming Time" required>
                </div>
            </div>
            <button type="submit" class="btn btn-warning float-right mt-3" name="cancel-res"> cancel </button>
            <input type='hidden' value = '$key' name = 'id'>
        </form>
</div>
</div>
</div>
        <p style='margin:100px;'></p>
<?php
require_once "footer.php";
?>
       