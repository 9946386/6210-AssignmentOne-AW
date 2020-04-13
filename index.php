<!-- Including the connection to database -->
<?php include 'connection.php'; ?>
<!-- Adding the header page to add structure to the page -->
<?php include 'header.php'; ?>

<div class="row">
    <div  class="col">
      <?php
      // Check if the subject get value exits
      if(isset($_GET['subject']))
      {
          // Remove single quotes from subject get value
          $item_number = trim($_GET['subject'], "'");

          // Run sql command to select record based on get value
          $record = $connection->query("select * from subject where item_no='$item_number'") or die($connection->error());

          // Convert $record into an array for us to print to screen
          $row = $record->fetch_assoc();
          
          // Create variables that hold data from database fields
          $item = $row['item_no'];
          $object_class = $row['object_class'];
          $procedures = $row['procedures'];
          $description = $row['description'];
          $reference = $row['reference'];
          $subject_image = $row['subject_image'];
          $additional_notes = $row['additional_notes'];

          // Take out \n and replace with <br><br>
          $procedures = str_replace('\n', '<br><br>', $procedures);
          $description = str_replace('\n', '<br><br>', $description);
          $reference = str_replace('\n', '<br><br>', $reference);
          $additional_notes = str_replace('\n', '<br><br>', $additional_notes);

          // If subject does not have an image
          if(empty($subject_image))
          {
            // Display the subject without the photo section
            echo "<h1>SCP Subject Database</h1>
            <h2>Item_#: {$item}</h2>
            <h3>Class: {$object_class}</h3>
            <h3>Procedures</h3>
            <p>{$procedures}</p>
            <h3>Description</h3>
            <p>{$description}</p>
            <h3>Reference</h3>
            <p>{$reference}</p>
            <h3>Additional Notes</h3>
            <p>{$additional_notes}</p>";
          }
          else
          {
            // Display the subject with a photo section
            echo "<h1>SCP Subject Database</h1>
            <h2>Item_#: {$item}</h2>
            <h3>Class: {$object_class}</h3>
            <p class='text-center'><img class='img-fluid rounded mx-auto d-block' src='images/{$subject_image}'></p>
            <h3>Procedures</h3>
            <p>{$procedures}</p>
            <h3>Description</h3>
            <p>{$description}</p>
            <h3>Reference</h3>
            <p>{$reference}</p>
            <h3>Additional Notes</h3>
            <p>{$additional_notes}</p>";
          }
      }
      ?>
    </div>
</div>

<!-- Footer -->
<div class="container">
        <footer class="page-footer font-small bg-light rounded">
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Comp.6210 Assignment 1 - 9946386 - Anya Webb</div>
        </footer>
</div>