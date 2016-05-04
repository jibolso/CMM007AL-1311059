<?php require('connection/db.php') //passing the passing where the database lies?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog</title>
    <link href="../assets/css/main.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<header> <!-- header -->
    <div id="title">
        <span id="mainTitle"><a href="index.php">myBlog</a> </span><br>
        <span id="subTitle">because the internet needs to know what i think</span> <br>
        <span id="category"></span> <!-- Current category will be displayed here -->
    </div>
    <nav> <!-- navigation -->
        <ul>
            <li><a href="blog.php?category=All">All Blog Items</a> </li>
            <li><a href="blog.php?category=Work">Work Items</a> </li>
            <li><a href="blog.php?category=University">University Items</a> </li>
            <li><a href="blog.php?category=Family">Family Items</a> </li>
            <li><a href="add.php">Insert a Blog Item</a> </li>

        </ul>
    </nav>
</header>
<main><!-- page main -->
    <section id="blogPage">
        <?php
        //Displaying the various category based on the GET values
            if(isset($_GET['category']) && $_GET['category'] == 'All'){
                //Displaying All
                $sql = "SELECT * FROM blogview";
                $db_parse = mysqli_query($db, $sql);
                $count = mysqli_num_rows($db_parse);
                $hr_count =0;
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>All</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        ";
                        $hr_count++;
                        if($hr_count != $count){
                            echo "<hr>";
                        }
                    }
                    //Passing the value that shows at the header
                    echo "<script type='application/javascript'>";
                    echo "document.getElementById('category').innerHTML = 'All'";
                    echo "</script>";
                }else {
                    echo "<p>No result to display</p>";
                }

            }elseif(isset($_GET['category']) && $_GET['category'] == 'Work'){
                //Displaying Work Category
                $sql = "SELECT * FROM blogview WHERE category = 'Work'";
                $db_parse = mysqli_query($db, $sql);
                $count = mysqli_num_rows($db_parse);
                $hr_count =0;
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        ";
                        $hr_count++;
                        if($hr_count != $count){
                            echo "<hr>";
                        }
                    }
                    //Passing the value that shows at the header
                    echo "<script type='application/javascript'>";
                    echo "document.getElementById('category').innerHTML = 'Work'";
                    echo "</script>";
                }else {
                    echo "<p>No result to display</p>";
                }
            }elseif(isset($_GET['category']) && $_GET['category'] == 'University'){
                //Displaying University
                $sql = "SELECT * FROM blogview WHERE category = 'University'";
                $db_parse = mysqli_query($db, $sql);
                $count = mysqli_num_rows($db_parse);
                $hr_count =0;
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        ";
                        $hr_count++;
                        if($hr_count != $count){
                            echo "<hr>";
                        }
                    }
                    //Passing the value that shows at the header
                    echo "<script type='application/javascript'>";
                    echo "document.getElementById('category').innerHTML = 'University'";
                    echo "</script>";
                }else {
                    echo "<p>No result to display</p>";
                }
            }elseif(isset($_GET['category']) && $_GET['category'] == 'Family'){
                //Displaying Family
                $sql = "SELECT * FROM blogview WHERE category = 'Family'";
                $db_parse = mysqli_query($db, $sql);
                $count = mysqli_num_rows($db_parse);
                $hr_count =0;
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>{$row['category']}</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        ";
                        $hr_count++;
                        if($hr_count != $count ){
                            echo "<hr>";
                        }
                    }
                    //Passing the value that shows at the header
                    echo "<script type='application/javascript'>";
                    echo "document.getElementById('category').innerHTML = 'Family'";
                    echo "</script>";
                }else {
                    echo "<p>No result to display</p>";
                }
            }else{
                $sql = "SELECT * FROM blogview";
                $db_parse = mysqli_query($db, $sql);
                $count = mysqli_num_rows($db_parse);
                $hr_count =0;
                if(mysqli_num_rows($db_parse) >=1){
                    while($row = $db_parse->fetch_array()) {
                        echo "
                        <article>
                        <span class='btitle'>{$row['entryTitle']}</span> <span>by</span> <span class='bName'>{$row['submitter']}</span>
                        <p>All</p>
                         <p>{$row['entrySummary']}</p>
                        </article>
                        ";
                        $hr_count++;
                        if($hr_count != $count){
                            echo "<hr>";
                        }
                    }
                    //Passing the value that shows at the header
                    echo "<script type='application/javascript'>";
                    echo "document.getElementById('category').innerHTML = 'All'";
                    echo "</script>";
                }else {
                    echo "<p>No result to display</p>";
                }
            }

        $db->close();
        ?>

    </section>
</main>
<footer>
    <span><hr></span>
    <p>Designed by Ajibola Obayemi, &copy; 2016</p>
</footer>

</body>
</html>