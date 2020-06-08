<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Please Select Service </h5>
    <br>


</div>

<div style="background-color:white;color:black">
    <form action="<?php echo base_url() ?>Welcome/timer" method="post">

        <div class="">
            <label class="ff" for="selectError3"><b>Service</b></label>

            <br>
            <div class="control">
                <select class="select" required="" name="location">

                    <?php
                    foreach ($service as $s_service) {
                     $service_location_name=$s_service->service_location_name;
                        ?>

                        <option value="<?php echo $service_location_name ?>" ><b><?php echo $s_service->service_location_name ?></b></option>
<?php } ?>  
                </select>
            </div>
        </div>
        <br> <br><br><br>
        <div class="form-actions">

            <button type="submit" style="float:left" class="btn btn-danger"><b> Next </b></button>
        </div>


    </form>


</div>  