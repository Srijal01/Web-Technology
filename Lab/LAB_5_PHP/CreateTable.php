<?php include 'Database.php' ?>
<?php
$sql="CREATE TABLE student_tbl(name varchar(200), address varchar(50), email varchar(30), contact varchar(50), password varchar(50));";
if($conn->query($sql)===TRUE){
    echo "Table created successfully";
}
else
{
    echo "Error creating table: " . $conn->error;
}
$conn->close();
?>