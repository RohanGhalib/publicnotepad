<?php include 'header.php'; 
include 'db.php';


?>
<body >
<div class="container-fluid">
    <div class="row mt-5">
        <?php include 'sidebar.php' ?>
        <div class="col-lg-9">
            <div class="notepadbox">
            <div class="noteview overflow-auto" style="height: 500px;">
                <?php
                if(isset($_GET['id'])){
                    $id = $_GET['id'];
                    $query = "SELECT * FROM notes WHERE id = $id";
                    $result = mysqli_query($conn, $query);
                    $row = mysqli_fetch_assoc($result);
                }else{
                    header("Location: index.php");
                    exit();
                }
                ?>
                <h1><?php echo $row["title"] ?> 
                    <button class="btn btn-primary" onclick="copyToClipboard('<?php echo 'https://rohanghalib.me/publicnotepad/view_note.php?id=' . $row['id']; ?>')">
                        <i class="bi bi-copy"></i>
                    </button>
                </h1>
                <script>
                    function copyToClipboard(text) {
                        navigator.clipboard.writeText(text).then(function() {
                            alert('Link Copied To Clipboard!');
                        }, function(err) {
                            console.error('Could not copy text: ', err);
                        });
                    }
                </script>
                <p><?php echo $row["note"] ?></p>
            </div>
        </div>
    </div>
</div>


</html>