<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Taylor Swift Fan Page</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/table.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="../js/script.js"></script>
</head>

<body style="background-color: rgb(231, 207, 248);">
    <h1 class="join-page-top">Join Fans</h1>

    <div class="header" id="my-header"> <!-- anchor -->
        <a class="pagelink" href="../index.html">Home</a>
        <a class="pagelink" href="album.html">Albums</a> 
        <a class="pagelink" href="award.html">Awards</a>
        <a class="pagelink" href="contact.html">Contacts</a>
        <a class="pagelink" href="join.php">Join Fans</a>
    </div>

        <div>
            <h1 style="padding: 30px 0px 30px 30px; font-size: 30px;"> Show your support! Enter your name and email, and leave a comment for Taylor to see about her music! </h1>
        </div>
        
        <div style="padding: 30px 0px 30px 30px">
            <form action="join.php" method=post>
                <label for="lname">Name:</label><br>
                <input type="text" id="name" name="name" value=""><br><br>
                <label for="lemail">Email:</label><br>
                <input type="text" id="email" name="email" value=""><br><br>
                <label for="lcomment">Comment:</label><br>
                <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
                <br><br>
                <input type="submit" value="Submit">
                <br><br>
            </form> 
            <h3 style="margin-left:11%"> Top Fans </h3>
        </div>

        <?php
        $conn = mysqli_connect("localhost", "root", "r00tr00t", "talorswift");
        // Check connection
        if($conn === false) {
           die("ERROR: Could not connect. "
             . mysqli_connect_error());
        }
        // Store Fan in DB when fields are not Empty
        if($_POST['name'] !== null && trim($_POST['name']) !== '') {
            // Taking all values from the form data(input)
            $name =  $_POST['name'];
            $email = $_POST['email'];
            $comment = $_POST['comment'];
    
            // Performing insert query execution
            // here our table name is college
            $sql = "INSERT INTO fanlist VALUES ('$name', '$email','$comment')";
            if(mysqli_query($conn, $sql)) {
                echo "<h3 style='margin-left:30px;'>Thank you for joining.</h3>";
            } else {
                    echo "ERROR: Hush! Sorry $sql. " . mysqli_error($conn);
            }
        }
        //====== SHOW Existing FANS =======
        $sql = "SELECT * from fanlist";
        $result = mysqli_query($conn, $sql);
        echo("<table style='margin-left:30px'");
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

<br><br>        
</body>

</html>
