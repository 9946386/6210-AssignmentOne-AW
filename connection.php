<?php

    // Create Database variables
    $user = "a9946386";
    $password = "Toiohomai1234";
    $db = "a9946386_scp";

    // Create php db connection variable
    $connection = new mysqli('localhost', $user, $password, $db) or die(mysqli_error($connection));

    // Get the data from the database and save in variable for use on the website
    $result = $connection->query("select * from subject") or die($connection->error);

    // Check if form has been filled out by checking POST value, then insert form contents into database.
    if(isset($_POST['item_no']))
    {
        // save all $_POST values from form into separate variables
        $item_no = $_POST['item_no'];
        $object_class = $_POST['object_class'];
        $subject_image = $_POST['subject_image'];
        $procedures = $_POST['procedures'];
        $description = $_POST['description'];
        $reference = $_POST['reference'];
        $additional_notes = $_POST['additional_notes'];

        // create insert command
        $sql = "insert into subject(item_no, object_class, subject_image, procedures, description, reference, additional_notes) values('$item_no', '$object_class', '$subject_image', '$procedures', '$description', '$reference', '$additional_notes')"; 

        if ($connection->query($sql) === TRUE) {
            //include 'template/insert_header.php';
            echo "<h1>Record created successfully</h1>
                  <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";
            //include 'template/footer.php';
           } 
           else 
           {
               //include 'template/insert_header.php';
               echo "<h1>Error creating record: {$connection->error}</h1>
               <p><a href='insert.php' class='btn btn-warning'>Back to form</a></p>";
               //include 'template/footer.php';
           }        
    } 
   

?>