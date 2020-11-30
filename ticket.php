<?php include 'header.php'?>


<?php

 include 'config.php';

$sql="SELECT ticket_id,gate,no_of_seats,seats,amount FROM selection_table";
$result=mysqli_query($conn,$sql);
$a=mysqli_fetch_all($result);
print_r($a);
$sql="SELECT match_id,team1,team2 FROM schedule_table";
$result=mysqli_query($conn, $sql);
$b=mysqli_fetch_all($result);

?>
<h1 class="ticket">BOOKINGS </h1>
        <div class="row">
            
                <div class="cards-col col-lg-3 col-md-6">
					
                    <div class="card">
                        <div class="card-body">
						<h5 class="card-title">Ticket No: <?php echo htmlspecialchars($a['ticket_id']); ?></h5>
						<h5 class="card-title">Match No: <?php echo htmlspecialchars($b['match_id']); ?></h5>
                        <h5 class="card-title">Match:<?php echo htmlspecialchars($b['team1']); ?> v/s <?php echo htmlspecialchars($b['team2']); ?></h5>
                        <h5 class="card-title">Gate:<?php echo htmlspecialchars($a['gate']); ?> </h5>
                        <h5 class="card-title">No of Seats:<?php echo htmlspecialchars($a['no_of_seats']); ?></h5>
                        <h5 class="card-title">Seats:<?php echo htmlspecialchars($a['seats']); ?> </h5>
                        <h5 class="card-title">Amount:<?php echo htmlspecialchars($a['amount']); ?></h5>
                        </div>

                    </div>
				</div>
        
		</div>
		
<?php include 'footer.php'?>

