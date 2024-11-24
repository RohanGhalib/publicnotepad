<?php include 'header.php'; 
include 'db.php';?>
<body >
<div class="container-fluid">
    <div class="row mt-5">
       <?php include 'sidebar.php' ?>
        <div class="col-lg-9">
            <div class="notepadbox">
            <form action="addpost.php" method="POST"> 
                <label for="name">Title:</label>
                <input required type="text" name="title" id="title" class="form-control" maxlength="12" placeholder="Some Person">
                <br>

                <div id="editor"  name="note" style="height: 200px">
                    <h3>Anything you type will be engraved in the code of this site, forever!</h3>
                    <h4>Confess your crush, share your thoughts or do whatever you want!</h4>
                    <a href="https://rohanghalib.me/publicnotepad/view_note.php?id=7">Make Sure to read Readme before using!</a>
                </div>
                <input type="hidden" name="note" id="note">
                <script>
                    document.querySelector('form').onsubmit = function() {
                        document.querySelector('#note').value = quill.root.innerHTML;
                    };
                </script>
                <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>

<!-- Initialize Quill editor -->
<script>
  const quill = new Quill('#editor', {
    theme: 'snow',
  });
</script>
                <br>
                <input type="hidden" name="submit">
                <button class="submitbutton" type="submit">Post</button>
                </form>
            </div>
        </div>
    </div>
</div>


</html>