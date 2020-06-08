<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Please Select Time: </h5>
    <br>

    <a href="<?php echo base_url() ?>Admin/custom"><button>Custom Set Time</button></a>

    <h5 style="color:#000000;"><b><u>Fixed Time</u></b></h5>

    <div style="background-color:white;color:black">
        <h5 style="text-align:center; color:red">
            <?php
            echo $message = $this->session->userdata('message');

          
            $input = '05/10/2019';
            $date = strtotime($input);
            $dat= date('d',$date);//date ber kora jai $date=date('Y-m-d',$date)
            $str = date('D,M', $date);//month name ber kora jai $month=date('D-M-Y',$date)

            if ($message) {
                $this->session->unset_userdata('message');
            }
            ?>
        </h5>
        <br>
        <form action="<?php echo base_url() ?>Admin/save_timer" method="post">
            Month name:
            <input type="date" required=""  name="date_name" >
            <br>
            <br>
            Time 1:
            <input  required=""  name="timer_1" value="08.00" ><br>
            Time 2:
            <input  required=""  name="timer_2" value="08.30" ><br>
            Time 3:
            <input  required=""  name="timer_3" value="09.00" ><br>
            Time 4:
            <input  required=""  name="timer_4" value="09.30" ><br>
            Time 5:
            <input  required=""  name="timer_5" value="10.00" ><br>
            Time 6:
            <input  required=""  name="timer_6" value="10.30" ><br>
            Time 7:
            <input  required=""  name="timer_7" value="11.00" ><br>
            Time 8:
            <input  required=""  name="timer_8" value="11.30" ><br>
            <br><br><br><br>
            <input type="submit" value="Submit">
        </form> 
    </div>
</div>



