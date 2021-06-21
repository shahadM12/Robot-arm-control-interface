
    <?php
 
 include "header&footer.php";


?>
<table id="control">

<th>#</th>
<th>Motor1</th>
<th>Motor2</th>
<th>Motor3</th>
<th>Motor4</th>
<th>Motor5</th>
<th>Motor6</th>
<th>On</th>
<th>Off</th>





<?php

$host = "localhost"; 
$username = "root";    
$password = ""; 
$dbname = "control-interface";

$conn = new mysqli($host, $username, $password, $dbname);


$query = "SELECT * FROM datamotor";
$result = mysqli_query($conn,$query);

if ($result){
    while($row = mysqli_fetch_assoc($result)){

        echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Motor1'] . "</td><td>" . $row['Motor2'] . "</td><td>" . $row['Motor3'] . "</td><td>" . $row['Motor4'] . "</td><td>" . $row['Motor5'] . "</td><td>" . $row['Motor6'] . "</td><td>" . $row['On_value'] . "</td><td>" . $row['Off_value'] . "</td></tr>" ;
    
    
    }
    echo "</table>";
}
else{
    echo "يوجد خطا";
}


?>