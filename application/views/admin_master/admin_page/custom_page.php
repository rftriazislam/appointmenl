<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Please Select Time: </h5>
    <br>
    <a href="<?php echo base_url()?>Admin/add_timer"><button>Fixed</button></a>
    <div style="background-color:white;color:black">
        <h5 style="text-align:center; color:red">
        <?php echo $message=$this->session->userdata('message');
        
        if($message){
            $this->session->unset_userdata('message');
            
        }
        
        ?>
        </h5>
        <br>
        <form action="<?php echo base_url()?>Admin/save_timer" method="post">
          Month name:
          <input type="date" minlength="" required="" name="date_name" >
          <br>
          <br>
          Time 1:
          <input type="time" required=""  name="timer_1" ><br>
           Time 2:
          <input type="time" required=""  name="timer_2" ><br>
           Time 3:
          <input type="time" required=""  name="timer_3" ><br>
           Time 4:
          <input type="time" required=""  name="timer_4" ><br>
           Time 5:
          <input type="time" required=""  name="timer_5" ><br>
           Time 6:
          <input type="time" required=""  name="timer_6" ><br>
           Time 7:
          <input type="time" required=""  name="timer_7" ><br>
          
           Time 8:
          <input type="time" required=""  name="timer_8" ><br>
            <br><br><br><br>
           <input type="submit" value="Submit">
        </form> 
    </div>
</div>





