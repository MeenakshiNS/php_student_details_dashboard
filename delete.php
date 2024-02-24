<?php include ("conn.php");
// $sqlDelete="TRUNCATE student_details";
// $result=mysqli_query($conn,$sqlDelete);

if(isset($_POST['delete'])) { 

    $id=$_POST['delete_id'];

    $query="DELETE FROM student_details WHERE student_id='$id'";
    $query_run=mysqli_query($conn, $query);
     if ($query_run) { 
        echo "data delete";
        header("location:http://localhost/studentportalproject/main.php");
    }else{
        echo  mysqli_error($conn);
    }
}

?>