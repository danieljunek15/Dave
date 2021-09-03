<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/daveNewPost.css">
    <title>DAVE</title>
</head>
<body>
    <div>
    <?php 
        include 'DatabaseConnectieDAVE.php';

        if(isset($_POST["submit"])) {
            $daveNewPostData = $conn->prepare('INSERT INTO sociaal_dave_database.posts_dave (post_title, post_text, post_img) VALUE (?, ?, ?)');
            $daveNewPostData->execute([$_POST['title'], $_POST['inhoud'], $_POST['img_url']]);
        } else {
    ?>
        <form method="post">
            Titel:<br/> <input type="text" name="title"><br/><br/>
            URL afbeelding:<br/> <input type="text" name="img_url"><br/><br/>
            Inhoud:<br/> <textarea name="inhoud" cols="30" rows="10"></textarea><br/><br/>
            <input type="submit" value="Publiceer" name="submit">
        </form>
    <?php 
        }
    ?>
    </div>
</body>
</html>