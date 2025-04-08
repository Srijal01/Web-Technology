<?php include '11Database.php' ?>
<body>
    <?php include '12Menu.html' ?>
    <?php
    $id = $_GET['id'];
    $sql = "DELETE FROM student_tbl WHERE id=$id";
    $result = $conn->query($sql);
    echo "Student of id {$id} is deleted from the student table.";
    ?>
</body>