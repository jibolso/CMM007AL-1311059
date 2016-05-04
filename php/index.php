<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog | Home</title>
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
    <nav><!-- site navigation -->
        <ul>
            <li><a href="blog.php?category=All">All Blog Items</a> </li>
            <li><a href="blog.php?category=Work">Work Items</a> </li>
            <li><a href="blog.php?category=University">University Items</a> </li>
            <li><a href="blog.php?category=Family">Family Items</a> </li>
            <li><a href="add.php">Insert a Blog Item</a> </li>

        </ul>
    </nav>
</header>
<main><!-- main section -->
    <section>
        <span class="entrySuccessful"><?php if(isset($_GET['f']) && $_GET['f'] == 1){echo "Blog Entry Failed";}?></span> <br>

        <p>
            Hey There.<br>
            This is my blog page. Yes! I want my voice to be heard.<br>
            Click on the navigation bar above to view all categories or some of the categories I will be writing about.

        </p>
    </section>
    <aside>
        <img src="../assets/images/blog.png" alt="myBlog Image" width="200px"/>
    </aside>
</main>
<footer>
    <span><hr></span>
    <p>Designed by Ajibola Obayemi, &copy; 2016</p>
</footer>

</body>
</html>