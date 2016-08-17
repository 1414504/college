<?php
$message = "";
if(isset($_POST['save_college']))
{
    $name = $_POST['college_name'];
    $category = $_POST['college_category'];
    $summary = $_POST['college_summary'];

    $con = new mysqli("ap-cdbr-azure-east-c.cloudapp.net", "b1236d751c9714", "41e55854", "acsm_dd5dc4ba52b59d7");
    
    $sql = "insert into collegeTable (college_name, college_summary, college_category)values('$name', '$summary','$category')";
    
    $con->query($sql);
    $con->close();
    $message = "<h3>Data saved successfully</h3>";
    
}//end if statement
