<?php

require 'connect.inc.php';

$query = "SELECT 'food','calories' FROM 'food' WHERE 'healthy_unhealthy'='u' AND 'calories'='100'";

if($query_run = mysql_query($query))
{
    while($query_row=mysql_fetch_assoc($query_run))  {
        
        $food = $query_row['food'];
        $calories = $query_row['calories'];
        
        echo $food .'has'.$calories.'calories.<br>';
    }
}else{
    
    echo mysql_error();
}

?>  