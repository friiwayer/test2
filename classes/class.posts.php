<?php

include('includes/config.php');

class Posts
{
    protected $db;

    public function __construct() {
        global $db;
        $this->db = $db;
    }

    public function new_post()
    {
        $_POST = array_map( 'stripslashes', $_POST );
        extract($_POST);
        if($postTitle ==''){
            $error[] = 'Введите название записи';
        }
        if($postDesc ==''){
            $error[] = 'Введите текст записи';
        }
        if($postCont ==''){
            $error[] = 'Please enter the content.';
        }

        $image_name = '';
        if($_FILES['postImage'])
        {
            $file = $_FILES['postImage']['tmp_name'];

            $image = addslashes($_FILES['postImage']['tmp_name']);
            $image_name = addslashes($_FILES['postImage']['name']);
            $image_size = getimagesize($_FILES['postImage']['tmp_name']);
            $bannerpath = "images/".$image_name;
            move_uploaded_file($_FILES["postImage"]["tmp_name"],$bannerpath);
        }

        if(!isset($error)){

            try {
                $stmt = $this->db->prepare('INSERT INTO '.TABLE_POST.' (postTitle,postDesc,postCont,postDate,postImage) VALUES (:postTitle, :postDesc, :postCont, :postDate, :postImage)') ;
                $stmt->execute(array(
                    ':postTitle' => self::clr_txt($postTitle),
                    ':postDesc' => self::clr_txt($postDesc),
                    ':postCont' => self::clr_txt($postCont),
                    ':postDate' => date('Y-m-d H:i:s'),
                    ':postImage' => $image_name
                ));
                $post = '';
                $all = $this->get_posts();
                while($row = $all->fetch()){

                    $post .= require('includes/post.php');
                }
                return $post;

            } catch(PDOException $e) {
                echo $e->getMessage();
            }

        }
    }

    public static function clr_txt($txt)
    {
        $txt = strip_tags($txt);
        return $txt;
    }

    public function editpost()
    {
        $_POST = array_map( 'stripslashes', $_POST );
        extract($_POST);

        if($postID ==''){
            $error[] = 'ID';
        }
        if($postTitle ==''){
            $error[] = 'Введите название записи';
        }
        if($postDesc ==''){
            $error[] = 'Введите текст записи';
        }
        if($postCont ==''){
            $error[] = 'Please enter the content.';
        }

        $image_name = '';
        $imagez = '';
        $fields = '';
        if(!$_FILES['postImage']['tmp_name'])
        {
            $fields = array(
                ':postTitle' => self::clr_txt($postTitle),
                ':postDesc' => self::clr_txt($postDesc),
                ':postCont' => self::clr_txt($postCont),
                ':postDate' => date('Y-m-d H:i:s'),
                ':postID'   => $postID,
            );

            if(!isset($error)){
                $stmt = $this->db->prepare('UPDATE '.TABLE_POST.' SET postTitle=:postTitle,postDesc=:postDesc,postCont=:postCont,postDate=:postDate WHERE postID=:postID') ;
                $stmt->execute($fields);
                try {
                    $post = '';
                    $all = $this->getpost($postID);
                    $row = $all->fetch();
                    $post = require('includes/post.php');
                    return $post;

                } catch(PDOException $e) {
                    echo $e->getMessage();
                }

            }
        }

        if($_FILES['postImage']['tmp_name'])
        {
            $file = $_FILES['postImage']['tmp_name'];

            $image = addslashes($_FILES['postImage']['tmp_name']);
            $image_name = addslashes($_FILES['postImage']['name']);
            $image_size = getimagesize($_FILES['postImage']['tmp_name']);
            $bannerpath = "images/".$image_name;
            move_uploaded_file($_FILES["postImage"]["tmp_name"],$bannerpath);
            $fields = array(
                ':postTitle' => self::clr_txt($postTitle),
                ':postDesc' => self::clr_txt($postDesc),
                ':postCont' => self::clr_txt($postCont),
                ':postDate' => date('Y-m-d H:i:s'),
                ':postImage' => $image_name,
                ':postID'   => $postID,
            );

            if(!isset($error)){
                $stmt = $this->db->prepare('UPDATE '.TABLE_POST.' SET postTitle=:postTitle,postDesc=:postDesc,postCont=:postCont,postDate=:postDate,postImage=:postImage WHERE postID=:postID') ;
                $stmt->execute($fields);
                try {
                    $post = '';
                    $all = $this->getpost($postID);
                    $row = $all->fetch();
                    $post = require('includes/post.php');
                    return $post;

                } catch(PDOException $e) {
                    echo $e->getMessage();
                }

            }
        }

    }

    public function getpost($id)
    {
        $stmt = $this->db->prepare('SELECT * FROM '.TABLE_POST.' WHERE postID = :postID');
        $stmt->execute(array(':postID' => $id));
        return $stmt;
    }

    public function get_posts($orderby = 'postDate',$way = 'DESC')
    {
        $stmt = $this->db->query('SELECT * FROM '.TABLE_POST.' ORDER BY '.$orderby.' '.$way);
        return $stmt;
    }

    public function remove_post($pid)
    {
        $stmt = $this->db->prepare('DELETE FROM '.TABLE_POST.' WHERE postID = :postID');
        $stmt->execute(array(':postID' => $pid));
        return $stmt;
    }
}