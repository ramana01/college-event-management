<?php
include_once 'classes/db1.php';
$result = mysqli_query($conn,"SELECT * FROM `event_info` WHERE 1");
?>


<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>GecFest 2k21</title>
</head>
    
    <body>
<?php include 'utils/adminHeader.php'?>
 
    
        <div class = "content">
            <div class = "container">
            <h1>Event details</h1>
            <?php
if (mysqli_num_rows($result) > 0) {
?>
                <table class="table table-hover" >
                    <thead>
                        <tr>
                            <th>Event_id</th>
                            <th>Event_name</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>location </th>
                            <th>Event_type_id</th>   
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                     $i=0;
                     while($row = mysqli_fetch_array($result)){
                            echo '<tr>';

                             echo '<td>' . $row['event_id'] . '</td>';                    
                            echo '<td>' . $row['event_title'] . '</td>';
                            echo '<td>' . $row['event_price'] . '</td>';
                            echo '<td>' . $row['Date'] . '</td>';
                            echo '<td>' . $row['time'] . '</td>';
                            echo '<td>'.$row['location'].'</td>';
                            echo '<td>'.$row['type_id'].'</td>';
                            echo '</tr>';  

                            
                $i++;
                        }
                      
                        ?>
                    </tbody>
                </table>
<?php
}

?>             
               
            </div>
        </div>
        
        <?php require 'utils/footer.php'; ?>
    </body>
</html>
