<?php include '11Database.php' ?>
<body>
    <?php include '12Menu.html' ?>
    <?php
    if(isset($_POST['submitbtn'])){
        $id = $_POST['id'];
        $name = $_POST["stname"];
        $address = $_POST["staddress"];
        $email = $_POST["stemail"];
        $contact = $_POST["stcontact"];
        $password = $_POST["stpassword"];
        $confirmpassword = $_POST["stconfirmpassword"];
        echo "Welcome user {$name}";
        $sql="UPDATE student_tbl SET name='".$name."', address='".$address."', email='".$email."', contact='".$contact."', password='".$password."' WHERE id=$id";
        if($conn->query($sql) === TRUE){
            echo "<h2>Data Inserted Successfully.</h2>";
        }
        else{
            echo "Error Inserting Data: " . $conn->error;
        }
        $conn->close();
    }
    else{
        echo "No data are submitted";
    }
    ?>
</body>