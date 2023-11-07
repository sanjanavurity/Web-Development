<?php

    $conn = mysqli_connect("localhost", "root", "", "demo") or die("Could'nt connect");
    $query = mysqli_query($conn, "INSERT into tests values(2, 'sanjana', 'sanjana@gmail.com')");
    if($query){
        echo "Data inserted";
    }
    else{
        echo "Not inserted";
    }
?>