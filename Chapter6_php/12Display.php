<?php include '11Database.php' ?>
<body>
    <?php include '12Menu.html' ?>
</body>
<?php
$sql = "SELECT * FROM student_tbl";
$result = $conn->query($sql); //$result contains all the table data
?>
<?php
if ($result->num_rows > 0) { //if $result contatins data
?>
    <table border=1px style="border-collapse: collapse; width: 100%">
        <th>S No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
        <th colspan="3">Actions</th>
        <?php
        $i = 0;
        while ($row = $result->fetch_assoc()) 
        { //table data are fetched into associative array and $row contain single row data
            $i++;
        ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $row["name"] ?></td>
                <td><?= $row["address"] ?></td>
                <td><?= $row["email"] ?></td>
                <td><?= $row["contact"] ?></td>
                <td>
                    <!--We need three buttons-->
                    <form action="12edit.php"method="get">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="submit" value="EDIT">
                    </form>
                </td>
                <td>
                    <form action="12delete.php"method="get">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="submit" value="DELETE">
                    </form>
                </td>
                <td>
                    <form action="12details.php"method="get">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <input type="submit" value="DETAILS">
                    </form>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
<?php
} 
else 
{
    echo "No data available in a table";
}
?>