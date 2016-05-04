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
            <li><a href="blog.php">All Blog Items</a> </li>
            <li><a href="blog.php">Work Items</a> </li>
            <li><a href="blog.php">University Items</a> </li>
            <li><a href="blog.php">Family Items</a> </li>
            <li><a href="add.php">Insert a Blog Item</a> </li>

        </ul>
    </nav>
</header>
<main>
        <div id="add">
            <form name="#" action="#" method="#">
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

</main>
<footer>
    <span><hr></span>
    <p>Designed by Ajibola Obayemi, &copy; 2016</p>
</footer>

</body>
</html>