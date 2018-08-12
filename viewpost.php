<?php require('classes/class.posts.php');

$postz = new Posts();
$post = $postz->getpost($_GET['id']);
$row = $post->fetch();

//if post does not exists redirect user.
if($row['postID'] == ''){
	header('Location: ./');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?=head(); ?>
</head>
<body>

	<div id="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Блог</h1>
                    <hr />
                    <p><a href="./"><i class="fa fa-undo" aria-hidden="true"></i> Блог</a></p>
                    
                    <?php
                        echo '<div>';
                            echo '<h1>'.$row['postTitle'].'
                            <a title="Удалить запись" data-id="'.$row['postID'].'" class="btn btn-sm pull-right pdel"><i class="fa fa-trash" aria-hidden="true"></i></a>
                            <a data-toggle="modal" data-target="#editnews" title="редактировать запись" data-id="'.$row['postID'].'" class="btn btn-default btn-sm pull-right editjs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></h1>';
                            echo '<p>'.date('jS M Y', strtotime($row['postDate'])).'</p>';
                            echo '<img class="w100" src="images/'.($row['postImage'] ? $row['postImage'] : 'a_blank_flag.png').'" />';
                            echo '<p>'.$row['postCont'].'</p>';
                        echo '</div>';
                    ?>

                </div>
            </div>
        </div>
    </div>
    <?php require('includes/edit.php'); ?>
    <?=scripts(); ?>
</body>
</html>