<?php

include 'config.php';

?>

<!DOCTYPE html>

<html lang="en">


        <link rel="stylesheet" type="text/css" href="style.css" /> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
<?php include 'header.php' ?>

          <div class="res">
            <form action="" method="post" >

                        <div class="title">Booking Details</div>

                        <div class="form">
                            <div class="input_field">
                         <label>User_id : </label>
                            <input type="text" class="input" name="user" placeholder="Enter your User_id">
                        </div>
                       
                        <div class="input_field">
                      <label>Match_id : </label>
                            <input type="text" class="input" name="match" placeholder="Match_id">
                        </div>

                    <div class="input_field">
                           <label>Match : </label>
                            <select name="Team1">
                                <option value="Team1">Team1</option>
                                <option value="RCB">RCB</option>
                                <option value="MI">MI</option>
                                <option value="CSK">CSK</option>
                                <option value="KKR">KKR</option>
                                <option value="KXIP">KXIP</option>
                                <option value="DC">DC</option>
                                <option value="RR">RR</option>
                                <option value="SRH">SRH</option>
                                </select> VS 

                                <select name="Team2">
                                    <option value="Team2">Team2</option>
                                    <option value="RCB">RCB</option>
                                    <option value="MI">MI</option>
                                    <option value="CSK">CSK</option>
                                    <option value="KKR">KKR</option>
                                    <option value="KXIP">KXIP</option>
                                    <option value="DC">DC</option>
                                    <option value="RR">RR</option>
                                    <option value="SRH">SRH</option>
                                     </select>
                            </div>

                            <div class="input_field">
                            <label>First name : </label>
                            <input type="text" class="input" name="Firstname" placeholder="Enter Your First Name">
                            </div>

                            <div class="input_field">
                             <label>Last name : </label>
                            <input type="text" class="input" name="Lastname" placeholder="Enter Your Last Name">
                            </div>

                            <div class="input_field">
                            <label>Gender :  </label>
                            <input type="radio" name="gender" id="male" value="male"><label for="m">Male</label>
                            <input type="radio" name="gender" id="female" value="female"><label for="f">Female</label>
                            <input type="radio" name="gender" id="others" value="others"><label for="o">Others</label>
                            </div>

                            <div class="input_field">
                            <label>DoB : </label>
                            <input type="date" class="input" name="dob">
                            </div>
                        
                            <div class="input_field">
                            <label>Ph number : </label>
                            
                            <input type="text" class="input" name="phno" placeholder="Enter Your Phone no">
                            </div>


                            <div class="input_field">
                            <label>Payment Mode : </label>
                            <input type="radio" name="pay" id="Credit" value="Credit"><label for="C">Credit Card</label>
                            <input type="radio" name="pay" id="Debit" value="Debit"><label for="D">Debit Card</label>
                           </div>

                           <div class="input_field">
                           <label>Seats : </label>
                           <input type="number" min='0' max='50' class="input" id="seats" name="seats" placeholder="Enter number of seats">
                           </div>

                           <div class="input_field">
                            <input type="submit" value="Confirm" name="Confirm" class="btn">
                        </div>
</div>

</form>
</div>
    
<?php include 'footer.php' ?>

<?php 
if(isset($_POST['Confirm'])){

   $Firstname = $_POST['Firstname'];
   $Lastname = $_POST['Lastname'];
   $gender = $_POST['gender'];
   $dob = $_POST['dob'];
   $phno = $_POST['phno'];
   $pay = $_POST['pay'];
   $seats = $_POST['seats'];

   $sql= "INSERT INTO 'booking_table'('first_name', 'last_name', 'gender', 'DOB', 'Ph_no', 'payment','no_of_seats')
 VALUES ('$Firstname','$Lastname','$gender','$dob','$phno','$pay','$seats')";
   $result = mysqli_query($conn,$sql);

}
?>
</html>