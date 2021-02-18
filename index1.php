<?php
    $birthday = $_POST["age"];
    $interval = date_diff(date_create(), date_create($birthday));
    echo $interval->format("You are  %Y Year, %M Months, %d Days, %H Hours, %i Minutes, %s Seconds Old");
   
?>