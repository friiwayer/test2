<?php require('classes/class.posts.php'); ?>
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
                    <div class="h1">Блог <a title="Добавить запись" data-toggle="modal" data-target="#addnews" class="pull-right btn btn-success btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-newspaper-o" aria-hidden="true"></i></a></div>
                    <hr />
                    <div class="posts">
                        <?php
                            try {
                                $posts = new Posts();
                                $all = $posts->get_posts();
                                while($row = $all->fetch()){
                                    $li .= require('includes/post.php');
                                }
                                echo $li;
                            } catch(PDOException $e) {
                                echo $e->getMessage();
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
	</div>
    <?php require('includes/edit.php'); ?>
    <?=scripts(); ?>
</body>

</html>