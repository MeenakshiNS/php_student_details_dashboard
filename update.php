<?php include('conn.php');

if(isset($_POST['edit'])){
    $id=$_POST['update_id'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $dob=$_POST['dob'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    $query="UPDATE student_details SET firstname='$fname',lastname='$lname',dob='$dob',email=' $email',phone='$phone',address='$address' WHERE student_id='$id'";

    echo $query;
    $query_run=mysqli_query($conn,$query);

if($query_run){
    echo "data updated";
    header("location:http://localhost/studentportalproject/main.php");

}else{
    echo "data not updated" ;
}
}

?>