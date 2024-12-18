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
                    <button class="btn btn-primary" onclick="copyToClipboard('<?php echo 'https://rohanghalib.me/publicnotepad/algo_view.php?id=' . $row['id']; ?>')">
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

                <div class="comment-container overflow-auto max-height-200">
                <h5 class="comment-heading">Comments:</h5>
                        <?php
                        $sql = "SELECT * FROM replys WHERE note_id = $id ORDER BY id DESC";
                        $result = mysqli_query($conn, $sql);
                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                $comment = $row["reply"];
                                echo '
                                <div class="comment-box">
                                    '. $comment .'
                                </div>';
                            }
                        } else {
                            echo '<p>No comments</p>';
                        }
                        ?>
                        
       
            
            </div>
            </div>
            <style>
                .comment-box{
                    background-color: #000000 !important;
                    width: 100%;
                    border-radius: 20px;
                    color: white;
                    padding: 10px;
                    padding-left: 20px;
                    margin-top: 10px;
                    word-wrap: break-word;
                }
.comment-heading{
    background-color: beige;
    color: black;
    padding: 5px;;
    border-radius: 50px;
}
            </style>
          <div class="addcomment">
            <div class="row">
            <form action="addcomment.php" method="POST">
                <div class="col">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="text" name="comment" class="form-control" placeholder="Add a comment" required></div><div class="col"><button type="submit" class="btn btn-primary">Add Comment</button></div></form>
            </div>  
        </div>
        </div>
    </div>
</div>


</html>