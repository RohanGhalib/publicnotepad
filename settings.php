<?php include 'header.php'; 
include 'db.php';


?>
<body >
<div class="container-fluid">
    <div class="row mt-5">
       <?php include 'sidebar.php' ?>
        <div class="col-lg-9">
            <div class="notepadbox">
                <h1>Change Theme</h1>
                <br>
                Current Theme: <strong>Classic</strong>
                <br><br>
                <h5>Choose a theme and click Save</h5>
                <p>Thanks for the advice, RandomGuy!</p>
                <form action="changetheme.php" method="GET">
                    <select name="theme" id="theme" class="form-control">
                        <option value="1" <?php if ($theme == 1) echo 'selected'; ?>>Classic</option>
                        <option value="2" <?php if ($theme == 2) echo 'selected'; ?>>GruvBox Light</option>
                        <option value="3" <?php if ($theme == 3) echo 'selected'; ?>>GruvBox Dark</option>
                    </select>
                    <br>
                    <input type="hidden" name="submit">
                    <button class="submitbutton" type="submit">Save</button>
            </div>

        </div>
    </div>
</div>


</html>