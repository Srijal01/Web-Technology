<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }
        h2 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            font-size: 28px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        form {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        tr {
            margin-bottom: 15px;
        }
        td {
            padding: 12px 0;
        }
        td:first-child {
            font-weight: 600;
            color: #2c3e50;
            width: 40%;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #3498db;
            outline: none;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.3);
        }
        input[type="Submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 600;
            transition: background-color 0.3s;
            width: 100%;
        }
        input[type="Submit"]:hover {
            background-color: #2980b9;
        }
        #errpassid {
            color: #e74c3c;
            font-size: 14px;
            margin-left: 10px;
            font-weight: 500;
        }
        .password-container {
            display: flex;
            align-items: center;
        }
        .password-container input {
            flex-grow: 1;
        }
        .password-container span {
            margin-left: 10px;
            white-space: nowrap;
        }
        @media (max-width: 600px) {
            form {
                padding: 20px;
            }
            td {
                display: block;
                width: 100% !important;
                padding: 8px 0;
            }
            input[type="Submit"] {
                margin-top: 10px;
            }
        }
    </style>
</head>
<?php include '11Database.php' ?>
<?php
$id=$_GET['id'];
$sql="SELECT * FROM student_tbl WHERE id=$id";
$result = $conn->query($sql);
?>
<body>
    <?php include '12Menu.html' ?>
    <?php if($result->num_rows>0){
        while($row = $result->fetch_assoc()){
    ?>
    <h2>Student Registration</h2>
    <form action="12ModifyStudent.php" method="post" onsubmit="return checkPass();">
        <table>
            <tr>
                <input type="hidden" name="id" value="<?= $id ?>">
                <td>Name:</td>
                <td><input type="text" name="stname" placeholder="Enter your full name" value="<?=$row['name']?>" required></td>
            </tr>
            <tr>
                <td>Address:</td>
                <td><input type="text" name="staddress" placeholder="Enter your address" value="<?=$row['address']?>" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="stemail" placeholder="Enter your email" value="<?=$row['email']?>" required></td>
            </tr>
            <tr>
                <td>Contact:</td>
                <td><input type="text" name="stcontact" placeholder="Enter your phone number" value="<?=$row['contact']?>" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="stpassword" id="passid" placeholder="Create a password" value="<?=$row['password']?>" required></td>
            </tr>
            <tr>
                <td>Confirm Password:</td>
                <td class="password-container">
                    <input type="password" name="stconfirmpassword" id="conpassid" onkeyup="checkPass()" placeholder="Confirm your password" value="<?=$row['password']?>" required>
                    <span id="errpassid"></span>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register" name="submitbtn"></td>
            </tr>
        </table>
    </form>
    <?php
        }
    }
    ?>
    <script>
        function checkPass(){
            var v1 = document.getElementById("passid").value;
            var v2 = document.getElementById("conpassid").value;
            var errSpan = document.getElementById("errpassid");
            
            if(v1 === "" && v2 === "") {
                errSpan.innerHTML = "";
                return;
            }
            
            if(v1 === v2){
                errSpan.innerHTML = "✓";
                errSpan.style.color = "#2ecc71";
            }
            else {
                errSpan.innerHTML = "Passwords do not match!";
                errSpan.style.color = "#e74c3c";
            }
        }
    </script>
</body>
</html>