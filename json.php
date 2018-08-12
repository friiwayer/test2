<?php

if($_SERVER['HTTP_X_REQUESTED_WITH'] && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{
    require('classes/class.posts.php');
    if($_POST['new'])
    {
        $rt = new Posts();
        echo $rt->new_post();
    }

    if($_POST['edit'] && $_POST['idp'])
    {
        $tt = new Posts();
        $post = $tt->getpost($_POST['idp']);
        $row = $post->fetch();
        echo json_encode($row);
    }

    if(isset($_POST['editpost']) && $_POST['editpost'])
    {
        $ep = new Posts();
        echo $ep->editpost();
    }

    if(isset($_POST['deltpost']) && $_POST['deltpost'])
    {
        $ep = new Posts();
        if($ep->remove_post($_POST['deltpost']))
        {
            echo true;
        }
    }
}