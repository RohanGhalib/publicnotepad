<div class="col-lg-3">
            <div class="sidebar">
                <div class="logo-text"><a href="index.php"><strong><i class="bi bi-journal-text"></i> PublicNotePad</strong></a></div>
                <div class="row mt-2 justify-content-center align-items-center"> 
                <div class="searchbox col-lg-9">
                    <i class="bi bi-search"></i><input type="text" placeholder="Search ">  
                </div>
                <div class="col-lg-2">
                <div class="addnewbutton" style="width: 20%">
                    <a href="index.php">

                    <i class="bi bi-plus"></i>
                </a>
                </div>
            </div>
            </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="listnotes overflow-auto " style="height: 400px; overflow-x: hidden !important;">
                        <?php
                            $query = "SELECT * FROM notes ORDER BY views DESC limit 150";
                            $result = mysqli_query($conn, $query);

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="note">';
                                echo '<a href="algo_view.php?id='. $row['id'].  '"><i class="bi bi-sticky-fill"></i>&nbsp; &nbsp; ' . htmlspecialchars($row['title']) .'</a>';
                                echo '</div>';
                            }
                            ?>
                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const searchBox = document.querySelector('.searchbox input');
                                const notes = document.querySelectorAll('.note');

                                searchBox.addEventListener('input', function() {
                                    const searchTerm = searchBox.value.toLowerCase();
                                    notes.forEach(function(note) {
                                        const noteText = note.textContent.toLowerCase();
                                        if (noteText.includes(searchTerm)) {
                                            note.style.display = '';
                                        } else {
                                            note.style.display = 'none';
                                        }
                                    });
                                });
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
