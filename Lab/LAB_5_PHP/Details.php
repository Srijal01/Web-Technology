<?php include 'Database.php' ?>
<body>
    <?php include 'Menu.html' ?>
    <?php
    $id = $_GET['id'];  //as hidden
    $sql = "SELECT name, address FROM student_tbl WHERE id =$id";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "<h2>My information is</h2>";
        echo "<ol>";
        while($row=$result->fetch_assoc()){
            echo "<li>".$row['name'].", ".$row['address']."</li>";
        }
        echo "</ol>";
    }
    else{
        echo "<h2>No data to display.</h2>";
    }
?>
</body>