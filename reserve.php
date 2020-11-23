<?php



?>
<!doctype html>
        <title>Reservation Page</title>
        <?php include 'header.php' ?>
        <link rel="stylesheet" type="text/css" href="style.css" /> 
        <br>
        <br>
          <div class="res">
            <form id="res" method="post" action="...php">
                        <h1>Booking Details</h1>
                      <br> <label>User_id : </label>
                            <input type="text" name="user" id="name" placeholder="Enter your User_id"><br>
                      <br> <label>Match_id : </label>
                            <input type="text" name="match" id="name" placeholder="Match_id"><br>
                           <br> <label>Match : </label>
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
                                <br>
                           <br> <label>First name : </label>
                            <input type="text" name="name1" id="name" placeholder="Enter Your First Name"><br>
                      <br>  <label>Last name : </label>
                            <input type="text" name="name2" id="name" placeholder="Enter Your Last Name"><br>
                        
                            <br><label>Gender :  </label><input type="radio" name="male" value="m" id="g">Male
                             <input type="radio" name="female" value="f" id="g">Female
                            <input type="radio" name="others" value="o" id="g">Others<br>
                        
                            <br><label>DoB : </label>
                        <input type="date" name="date" id="name"><br>
                        
                            <br><label>Phone number : </label>
                            <select name="">
                                <option value="+91">+91</option>
                                <option value="+92">+92</option>
                                <option value="+93">+93</option>
                                <option value="+94">+94</option>
                                <option value="+95">+95</option>
                                <option value="+96">+96</option>
                                <option value="+97">+97</option>
                            </select>
                            <input type="number" name="number" id="name" placeholder="Enter Your Phone no"><br>
                        
                            <br><label>Select Gate : </label>
                           <input type="radio" name="gate1" value="g" >Gate 1
                            <input type="radio" name="gate2" value="g">Gate 2
                            <input type="radio" name="gate3" value="g" >Gate 3
                        <br>
                                <br><label>Select no of seats : </label>
                                <input type="number" name="number1" id="name" placeholder="Enter the number of seats"><br>

                                <br><label>Select Payment Mode : </label>
                                <input type="radio" name="credit" value="C" id="g" >Credit Card
                                 <input type="radio" name="debit" value="D" id="g">Debit Card <br>
                    
                    <div>
                                <br>
                                <button type="Submit" id="sel">Save </button>
                                <button type="submit" id="sel">Select The Seats</button>
                            </br>
                        
                        </form>

                    </div> 
</div>
    
<?php include 'footer.php' ?>
</html>