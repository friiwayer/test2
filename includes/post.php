<?
$rt = '';
$rt .= '<div data-id="'.$row['postID'].'" class="well post_item">';
$rt .= '<div class="media">';
$rt .= '<h3><a data-id="'.$row['postID'].'" href="viewpost.php?id='.$row['postID'].'">'.$row['postTitle'].'</a> 
<a title="Удалить запись" data-id="'.$row['postID'].'" class="btn btn-sm pull-right pdel"><i class="fa fa-trash" aria-hidden="true"></i></a> 
<a data-toggle="modal" data-target="#editnews" title="редактировать запись" data-id="'.$row['postID'].'" class="btn btn-sm pull-right editjs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></h3>';
$rt .= '<p class="small">'.date('jS M Y H:i:s', strtotime($row['postDate'])).'</p>';
$rt .= '<div class="row"><div class="col-md-3"><img class="w100" src="images/'.($row['postImage'] ? $row['postImage'] : 'a_blank_flag.png').'" /></div> <p class="col-md-9">'.$row['postDesc'].'</p>
<p class="small pull-right"><a href="viewpost.php?id='.$row['postID'].'">Читать дальше</a></p>
</div>';
$rt .= '';
$rt .= '</div>';
$rt .= '</div>';

return $rt;