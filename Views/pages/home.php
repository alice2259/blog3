<?php session_start();

    $heroPost = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT post.title, post.headerImage, post.postID FROM post ORDER BY post.datePublished DESC limit 1;');
    $heroPost = $req->fetchAll();
    
    foreach ($heroPost as $info)    { ?>

<div class="header" style="padding:100px; background-image: url(<?php echo 'Views/images/' . $info['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <h2 style="text-align: center;"><a href="?controller=posts&action=showPost&id=<?php echo $info['postID'] ?>"><?php echo $info['title'];?></a></h2>
</div>
   


<?php } ?>