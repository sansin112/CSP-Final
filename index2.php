<html>
<body>

Name:
Email:

Thank you for Joining!!! </BR>

<?php
    $conn = mysqli_connect("localhost", "root", "r00tr00t", "talorswift");
    // Check connection
    if($conn === false){
       die("ERROR: Could not connect. "
         . mysqli_connect_error());
    }
$sql = "SELECT * from fanlist";
$result = mysqli_query($conn, $sql);
echo("<table>");
$first_row = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($first_row) {
        $first_row = false;
        // Output header row from keys.
        echo '<tr>';
        foreach($row as $key => $field) {
            echo '<th>' . htmlspecialchars($key) . '</th>';
        }
        echo '</tr>';
    }
    echo '<tr>';
    foreach($row as $key => $field) {
        echo '<td>' . htmlspecialchars($field) . '</td>';
    }
    echo '</tr>';
}
echo("</table>");

        // Close connection
        mysqli_close($conn);
        ?>

</body>
</html>
