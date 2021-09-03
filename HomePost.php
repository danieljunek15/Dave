<?php 

include 'DatabaseConnectieDAVE.php';

$davePostdata = $conn->prepare('SELECT * FROM sociaal_dave_database.posts_dave');
$davePostdata->execute();
$davePostdata = $davePostdata->fetchAll(PDO::FETCH_OBJ);

function displayContent()
{
    global $davePostdata;

    foreach ($davePostdata as $row) {
        ?>
        <form method="post">
            <div>
                <h2><?php echo $row->post_title; ?></h2>
                <img src="<?php echo $row->post_img; ?>"><br/><br/>
                <b><?php echo $row->post_text; ?></b>
            </div>
            <span class="details">Geschreven op: <?php echo $row->time_date; ?></span>
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
    <title>Document</title>
</head>
<body>

    <?php
    displayContent();
    ?>

</body>
</html>