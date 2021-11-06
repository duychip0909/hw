<?php 

    include('../hw_1/config/config.php');

    $id = $_GET['id'];

    //2. Create SQL Query to Delete Admin
    $sql = "DELETE FROM dbo_chiphi WHERE id='$id'";

    //Execute the Query
    $res = mysqli_query($conn, $sql);

    // Check whether the query executed successfully or not
    if($res==true)
    {
        //Query Executed Successully and Admin Deleted
        //echo "Admin Deleted";
        //Create SEssion Variable to Display Message
        //Redirect to Manage Admin Page
        header("location: index.php");
    }
    else
    {
        echo $sql;
        echo "lỗi";
    }



?>