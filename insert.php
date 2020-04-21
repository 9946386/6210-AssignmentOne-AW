<!-- Adding the header page to add structure to the page -->
<?php include 'header.php' ?>

<div class="container">
    <!-- Title -->
    <h3><br>Enter new SCP Subject Form<br><br></h3>
    <!-- Creating the form to add new subjects to the database -->
    <form name="insert" method="POST" action="connection.php" class="form-group">
        <div class="form-group row">

            <!-- Subject Number -->
            <label for="subjectName" class="col-sm-3 col-form-label">Enter Subject Number</label>
            <br>
            <div class="col-sm-9">
                <input type="text" name="item_no" class="form-control" id="subjectName" placeholder="Use the following format SCP-###" required>
            </div>
            <br><br><br>

            <!-- Subject type -->
            <label for="class" class="col-sm-3 col-form-label">Enter Subject Class Type</label>
            <br>
            <div class="col-sm-9">
                <input type="text" name="object_class" class="form-control" id="class" placeholder="Class types: Euclid, Safe, Keter, Thaumiel, Neutralized" required>
            </div>
            <br><br><br>

            <!-- Subject Image -->
            <label for="image" class="col-sm-3 col-form-label">Enter link to subject image (if any available)</label>
            <br>
            <div class="col-sm-9">
                <input type="text" name="subject_image" class="form-control" id="image" placeholder="Use following format: images/image_name.(gif, jpg, png)">
            </div>
            <br><br><br>

            <!-- Subject Description -->
            <label for="description" class="col-sm-3 col-form-label">Enter Subject Description Details</label>
            <br>
            <div class="col-sm-9">
                <textarea name="description" rows="10" class="form-control" required  id="description" placeholder="Enter 'null' if not applicable -- Separate Paragraphs with \n"></textarea>
            </div>
            
            <!-- Subject Procedures -->
            <label for="procedures" class="col-sm-3 col-form-label">Enter Containment Procedures</label>
            <br>
            <div class="col-sm-9">
                <textarea name="procedures" rows="10" class="form-control" requried id="procedures" placeholder="Enter 'null' if not applicable -- Separate Paragraphs with \n"></textarea>
            </div>

            <!-- Subject Reference -->
            <label for="reference" class="col-sm-3 col-form-label">Enter Containment Reference</label>
            <br>
            <div class="col-sm-9">
                <textarea name="reference" rows="10" class="form-control" requried id="reference" placeholder="Enter 'null' if not applicable -- Separate Paragraphs with \n"></textarea>
            </div>

            <!-- Subject Additional Notes -->
            <label for="additionalNotes" class="col-sm-3 col-form-label">Enter Containment Additional Notes</label>
            <br>
            <div class="col-sm-9">
                <textarea name="additional_notes" rows="10" class="form-control" requried id="additionalNotes" placeholder="Enter 'null' if not applicable -- Separate Paragraphs with \n"></textarea>
            </div>

            <!-- Submit Button -->
            <div class="container">
                <input type="submit" class="btn btn-danger" name="submit" value="Submit Subject Data">
            </div>
        </div>
    </form>

    <!-- Footer -->
        <footer class="page-footer font-small bg-light rounded">
            <div class="footer-copyright text-center py-3">© 2020 Copyright: Comp.6210 Assignment 1 - 9946386 - Anya Webb</div>
        </footer>

</div>
