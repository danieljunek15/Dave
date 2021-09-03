<?php 

include 'DatabaseConnection.php';

$davePostdata = $conn->prepare('SELECT * FROM sociaal_dave_database.posts_dave');
$davePostdata->execute();
$davePostdata = $davePostdata->fetchAll(PDO::FETCH_OBJ);

function displayContent()
{
    global $davePostdata;

    foreach ($davePostdata as $row) {
        ?>
        <form method="post">
            <div class="content">
                <img class="postImages" src="<?php echo $row->post_img; ?>">
                <div class="contentText">
                    <h2 class="awesome"><?php echo $row->post_title; ?></h2>
                    <p class="postText"><?php echo $row->post_text; ?></p><br>
                    <span class="details">Geschreven op <?php echo $row->time_date; ?> door <?php echo $row->post_auteur; ?>.</span>
                </div>
            </div>
        </form>
        <?php
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/HomePost.css">
    <title>dave home</title>
</head>
<body>
    <div class="outerContainer">
        <form action="NewPost.php" method="post">
            <div class="navbar">
                <input class="newPostButton" type="submit" name="newPost" value="Add new posts">
            </div>
        </form> 
        <div class="contentBox">
            <?php
            displayContent();
            ?>
        </div>
    </div>
</body>
</html>