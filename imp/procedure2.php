<?php 

$drop_query = "DROP PROCEDURE IF EXISTS bowling";
$result = mysqli_query($conn,$drop_query) or die('no12');

$sql = "   CREATE PROCEDURE bowling(IN start_y int,IN end_y int,IN bat varchar(15),IN team varchar(35),IN bowler_name varchar(20))
            BEGIN
            SELECT 
                count(*) AS TOTALBALLS,
                sum(case when player_dismissed!='' AND (dismissal_kind != 'run out'or dismissal_kind = 'retired hurt' OR dismissal_kind = 'hit wicket') then 1 else 0 end) as WICKETS,
                sum(case when wide_runs!=0 then 1 else 0 end) AS WideRuns,
                sum(case when bye_runs!=0 then 1 else 0 end) AS ByeRuns,
                sum(case when legbye_runs!=0 then 1 else 0 end) AS LegByeRuns,
                sum(case when noball_runs!=0 then 1 else 0 end) AS NoBalls,
                sum(batsman_runs) AS ScoredByBatsman,
                sum(total_runs) AS TotalRunsConceived
                FROM deliveries JOIN matches  
                ON deliveries.match_id = matches.id 
                WHERE batsman LIKE bat AND deliveries.bowling_team LIKE team AND deliveries.bowler LIKE bowler_name AND matches.season BETWEEN start_y AND end_y;
            END;";
$result = mysqli_query($conn,$sql) or die('no2') ; 


?>