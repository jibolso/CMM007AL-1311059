<?php require_once('connection/db.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>myBlog | Add</title>
    <link href="../assets/css/main.css" rel="stylesheet" />
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <div id="title">
        <span id="mainTitle"><a href="../index.html">myBlog</a> </span><br>
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
    <?php if($_SERVER['REQUEST_METHOD'] === 'GET'){

    ?>
        <div id="add">
            <form name="addForm" action="<?{$_SERVER['PHP_SELF'];}?>" method="post">
                <div>
                    <label for="entryTitle">Entry Title</label>
                    <input type="text" id="entryTitle" name="entryTitle" value="" required/>
                </div>

                <div>
                    <label for="entrySummary">Entry Summary</label>
                    <textarea name="entrySummary" id="entrySummary" rows="10" cols="10" required></textarea>
                </div>

                <div>
                    <label for="entryCategory">Category</label>
                    <select name="entryCategory" id="entryCategory" required>
                        <option value="">Select</option>
                        <option value="Work">Work</option>
                        <option value="University">Sport</option>
                        <option value="Family">Family</option>
                    </select>
                </div>

                <div>
                    <label for="submittedBy">Submitted By</label>
                    <input type="text" id="submittedBy" name="submittedBy" value="" />
                </div>
                <div>
                    <button type="submit" id="submit">Submit</button>
                </div>
            </form>
        </div>
    <? }elseif($_SERVER['REQUEST_METHOD'] === 'POST'){

            if(isset($_POST['entryTitle']) && isset($_POST['entrySummary']) && isset($_POST['entryCategory'])){
                $entryTitle = validation($_POST['entryTitle']);
                $entrySummary = mysqli_real_escape_string($db, validation($_POST['entrySummary']));
                $entryCategory = validation($_POST['entryCategory']);
                $submittedBy = validation($_POST['submittedBy']);


                $sql = "INSERT INTO blogview(`entryTitle`, `entrySummary`, `category`, `submitter`)
                        VALUES ('{$entryTitle}', '{$entrySummary}', '{$entryCategory}', '{$submittedBy}')";


                if (!$pushQuery = mysqli_query($db, $sql)){
                    header("Location:index.php?f=1");
                }else {
                    header("Location:blog.php");
                }

            }else{
                header("Location: index.php");
            }
    }
    ?>

</main>
<footer>
    <span><hr></span>
    <p>Designed by Ajibola Obayemi, &copy; 2016</p>
</footer>

</body>
</html>

<?php

//creating an input for form validation
    function validation($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>