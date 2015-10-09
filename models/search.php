    <style>
        nav li{
            border: 1px solid #000;
        }
    </style>

    <?php
    //$mysqli = mysqli_connect("localhost","root","","myGaming");
    $mysqli = mysqli_connect("127.0.0.1","olthof","12345","18662_myband");

    //////////////////////////////

    if (isset($_GET['s']) && strlen($_GET['s']) > 0) {

        $search = $_GET['s'];
        $result = '';

        $query = "SELECT * FROM newsarticles WHERE title LIKE '%" . $search . "%'";
        $resultAblums = $mysqli->query($query);

    //    $query = "SELECT * FROM tracks WHERE na4me LIKE '%" . $search . "%'";
    //    $resultTracks = $mysqli->query($query);


        if ($resultAblums->num_rows > 0) {
            echo '<div class="livesearch">';
            while ($row = $resultAblums->fetch_assoc()) {
                print('<li> <p>name : ' . $row["title"] .'</p></li><br>');
            }
            echo '</div>';
        }else{
            echo '<div class="livesearch">';
            print('<li> no suggestions </li>');
            echo '</div>';
        }


    }

    ?>