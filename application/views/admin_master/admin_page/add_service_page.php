<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Please Select Service Location: </h5>
    <br>
    <div style="background-color:white;color:black">
        <h5 style="text-align:center; color:red">
        <?php echo $message=$this->session->userdata('message');
        
        if($message){
            $this->session->unset_userdata('message');
        }
        
        ?>
        </h5>
        <br>
        <form action="<?php echo base_url()?>Admin/save_service" method="post">
          Service  Location  name:
            <input type="text" name="service_location_name" >
            <br><br><br><br>
           <input type="submit" value="Submit">
        </form> 
    </div>
</div>

