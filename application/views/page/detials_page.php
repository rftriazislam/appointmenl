<br>
<div class="container">
    <h5 style="color:#c61c2e;" >Please Select Details </h5>

    <div style="background-color:white;color:black">
        <form action="<?php echo base_url()?>Welcome/save_details" method='post'>
            <input  type="hidden" value="<?php echo $location; ?>" name="location" >
            <input  type="hidden" value="<?php echo $id?>"  name="id">
            <input  type="hidden" value="<?php echo $time?>"  name="time"> 
            <input  type="hidden" value="<?php echo $date?>"  name="date"> 
            <label class="ff"  for="selectError3"><b>Name</b></label><br>
            <input required="" class="select"   type="text" name="name"><br> 
            <label class="ff" for="selectError3"><b>Phone</b></label><br>
            <input required="" class="select" type="number" name="phone" ><br> 
            <label class="ff" for="selectError3"><b>E-mail</b></label><br>
            <input required=""  class="select"  type="email" name="email" >
            <br><br>
            <div class="">
                <label class="ff" for="selectError3"><b>Number of person</b></label>
                <br>
                <h6>Note:If you are more then 5 persons, then two slots should be booked.</h6>
                <div class="control">
                    <select class="select" required="" name="number_person">
                        <option></option>
                        <option value="1"><b>1</b></option>
                        <option value="2"><b>2</b></option>
                        <option value="3"><b>3</b></option>
                        <option value="4"><b>4</b></option>
                        <option value="5"><b>5</b></option>
                    </select>
                </div>
                <label class="ff" for="selectError3"><b>Passport number applicant</b></label><br>
                <input class="select" required="" type="number" name="passport_number" ><br> <br>

                <label class="ff" for="selectError3"><b>Date of birth applicant</b></label><br>
                <input class="select"  required=""type="date" name="birth_date" ><br> <br>
                <label class="ff" for="selectError3"><b>Notes</b></label><br>
                <textarea  class="selectt"   type="text" name="notes" ></textarea>
                <br><br>
                <button type="submit" style="float:left" class="btn btn-danger"><b>Next</b></button>
                </form> 
            </div>
    </div>