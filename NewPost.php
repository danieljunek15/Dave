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
        include 'DatabaseConnection.php';

        if(isset($_POST["submit"])) {
            $titel = $_POST['title'];
            $image = $_POST['img_url'];
            $inhoud = $_POST['inhoud'];
            $auteur = $_POST['auteur'];
            if(!empty($titel) && !empty($image) && !empty($inhoud) && !empty($auteur)) {
                $daveNewPostData = $conn->prepare('INSERT INTO sociaal_dave_database.posts_dave (post_title, post_text, post_img, post_auteur) VALUE (?, ?, ?, ?)');
                $daveNewPostData->execute([$_POST['title'], $_POST['inhoud'], $_POST['img_url'], $_POST['auteur']]);
                header('Location: http://localhost/Hacaton%20begin%20van%20schooljaar/dave/HomePost.php');
            } else {
                echo "You did not fill in all the fields";
            }
        } else {
    ?>
        <form method="post">
            Titel:<br/> <input type="text" name="title"><br/><br/>
            URL afbeelding:<br/> <input type="text" name="img_url"><br/><br/>
            Inhoud:<br/> <textarea name="inhoud" cols="30" rows="10"></textarea><br/><br/>
            Name auteur:<br/> <input type="text" name="auteur"><br/><br/>
            <input type="submit" value="Publiceer" name="submit">
        </form>
    <?php 
        }
    ?>
    </div>
</body>
</html>