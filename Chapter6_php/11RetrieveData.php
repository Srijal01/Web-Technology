<?php include '11Database.php' ?>
<?php
$sql = "SELECT * FROM student_tbl";
$result = $conn->query($sql); //$result contains all the table data
?>
<?php
if ($result->num_rows > 0) { //if $result contatins data
?>
    <table border=1px>
        <th>S No.</th>
        <th>Name</th>
        <th>Address</th>
        <th>Email</th>
        <th>Contact</th>
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