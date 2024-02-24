<?php include ('conn.php');

if(isset($_POST['deleteall'])){
    // echo "all deleted";
    $query="TRUNCATE student_details";
    $query_run=mysqli_query($conn,$query);
    if($query_run){
        echo "all deleted";
        header("location:http://localhost/studentportalproject/main.php");
    }else{
        echo "error in deleting all";
    }
}

?>