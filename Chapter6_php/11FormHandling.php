<?php include '11Database.php' ?>
<body>
    <?php include '12Menu.html' ?>
    <?php
    if(isset($_POST['submitbtn'])){
        $name = $_POST["stname"];
        $address = $_POST["staddress"];
        $email = $_POST["stemail"];
        $contact = $_POST["stcontact"];
        $password = $_POST["stpassword"];
        $confirmpassword = $_POST["stconfirmpassword"];
        echo "Welcome user {$name}";
        $sql="INSERT INTO student_tbl(name, address, email, contact, password) VALUES('" . $name . "','" . $address . "','" . $email . "','" . $contact . "','" . $password . "')";
        if($conn->query($sql) === TRUE){
            echo "Data Inserted Successfully";
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
