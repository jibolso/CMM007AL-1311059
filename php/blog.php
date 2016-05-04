<?php require('connection/db.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link href="../assets/css/main.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div id="title">
        <span id="mainTitle"><a href="index.php">myBlog</a> </span><br>
        <span id="subTitle">because the internet needs to know what i think</span>
    </div>
    <nav>
        <ul>
            <li><a href="blog.php?category=All">All Blog Items</a> </li>
            <li><a href="blog.php?category=Work">Work Items</a> </li>
            <li><a href="blog.php?category=University">University Items</a> </li>
            <li><a href="blog.php?category=Family">Family Items</a> </li>
            <li><a href="add.php">Insert a Blog Item</a> </li>

        </ul>
    </nav>
</header>
<main>
    <section id="blogPage">
        <?php
            if(isset($_GET['category']) && $_GET['category'] == 'All'){
                $sql = "SELECT * FROM blogview";
                $db_parse = mysqli_query($db, $sql);
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>All</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        <hr>
                        ";
                    }
                }else {
                    echo "<p>No result to display</p>";
                }

            }elseif(isset($_GET['category']) && $_GET['category'] == 'Work'){
                $sql = "SELECT * FROM blogview WHERE category = 'Work'";
                $db_parse = mysqli_query($db, $sql);
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        <hr>
                        ";
                    }
                }else {
                    echo "<p>No result to display</p>";
                }
            }elseif(isset($_GET['category']) && $_GET['category'] == 'University'){
                $sql = "SELECT * FROM blogview WHERE category = 'University'";
                $db_parse = mysqli_query($db, $sql);
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        <hr>
                        ";
                    }
                }else {
                    echo "<p>No result to display</p>";
                }
            }elseif(isset($_GET['category']) && $_GET['category'] == 'Family'){
                $sql = "SELECT * FROM blogview WHERE category = 'Family'";
                $db_parse = mysqli_query($db, $sql);
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        <hr>
                        ";
                    }
                }else {
                    echo "<p>No result to display</p>";
                }
            }else{
                $sql = "SELECT * FROM blogview";
                $db_parse = mysqli_query($db, $sql);
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>All</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        <hr>
                        ";
                    }
                }else {
                    echo "<p>No result to display</p>";
                }
            }


        ?>

    </section>
</main>
<footer>
    <span><hr></span>
    <p>Designed by Ajibola Obayemi, &copy; 2016</p>
</footer>

</body>
</html>