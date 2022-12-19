<html>
<body>

Name:
Email:

Thank you for Joining!!! </BR>

<?php
     if($_GET['name']) {
        $conn = mysqli_connect("localhost", "root", "r00tr00t", "talorswift");
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
        // Taking all values from the form data(input)
        $name =  $_GET['name'];
        $email = $_GET['email'];
        $comment = $_GET['comment'];
         
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO fanlist VALUES ('$name',
            '$email','$comment')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>Thank you for joining Fan List.</h3>"
 
            echo nl2br("\n$name\n $email\n "
                . "$comment");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
     }    
$sql = "SELECT * from fanlist";
$result = mysqli_query($conn, $sql);
echo("<table>");
$first_row = true;
while ($row = mysql_fetch_assoc($result)) {
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
