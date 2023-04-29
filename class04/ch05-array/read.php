<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" width="100%">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Zip</th>
            <th>Action</th>
        </tr>
        <?php
$a = file("csv/addresses.csv");
// print_r($a);
foreach ($a as $key => $value) {
    $line_in_array = explode(",",$value);
    //print_r($line_in_array);
    echo "<tr>
    <td>".$line_in_array[0]."</td>
    <td>".$line_in_array[1]."</td>
    <td>".$line_in_array[2]."</td>
    <td>".$line_in_array[3]."</td>
    <td>".$line_in_array[4]."</td>
    <td>".$line_in_array[5]."</td>
    <td>EDIT |DELETE</td>
    </tr>";
}
?>
    </table>
</body>
</html>
