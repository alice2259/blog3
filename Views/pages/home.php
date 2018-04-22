<?php

    $heroPost = [];
    $db = Db::getInstance();
    $req = $db->query('SELECT post.title, post.headerImage, post.postID, post.imageCaption FROM post ORDER BY post.datePublished DESC limit 1;');
    $heroPost = $req->fetchAll();
    
    foreach ($heroPost as $info)    { ?>

<div class="header" style="padding:100px; background-image: url('Views/images/time_travel_wide.jpg'); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <h1 style="text-align: center; font-family: 'Amatic SC', cursive; 
        color: #FFF; text-shadow: 0px 0px 15px #333333; font-size: 80px">THE TIME TRAVELLER'S LIFE</h1>
        <h3 style="text-align: center; color: #FFF; text-shadow: 0px 0px 15px #333333;">Stories from time and space</h3>
</div>
<div>
    <br>
    <br>
</div>
<div class="header container rounded" style="padding:100px; background-image: url(<?php echo 'Views/images/' . $info['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <h2 style="text-align: center; color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $info['postID'] ?>"><?php echo $info['title'];?></a></h2>
    <h5 style="text-align: center; color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $info['imageCaption'];?></h5>
</div>

<?php };

    $secondaryPosts = [];
    $req = $db->query('SELECT post.title, post.headerImage, post.postID, post.imageCaption FROM post ORDER BY post.datePublished DESC limit 7 offset 1;');
    $secondaryPosts = $req->fetchall();

?>


<br>
<br>
<div class="container">    
  <div class="row">
    <div class="col-sm-4"> 
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[0]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[0]['postID'] ?>"><?php echo $secondaryPosts[0]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[0]['imageCaption']; ?></p>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[1]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[1]['postID'] ?>"><?php echo $secondaryPosts[1]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[1]['imageCaption']; ?></p>
        </div>
    </div>
    <div class="col-sm-4"> 
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[2]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[2]['postID'] ?>"><?php echo $secondaryPosts[2]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[2]['imageCaption']; ?></p>
        </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4"> 
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[3]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[3]['postID'] ?>"><?php echo $secondaryPosts[3]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[3]['imageCaption']; ?></p>
        </div>
    </div>
    <div class="col-sm-4"> 
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[4]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[4]['postID'] ?>"><?php echo $secondaryPosts[4]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[4]['imageCaption']; ?></p>
        </div>
    </div>
        <div class="col-sm-4"> 
        <div class="panel-body rounded" max-height="300px" style="padding-top:30px; padding-bottom:30px; padding-left:10px; padding-right:10px; background-image: url(<?php echo 'Views/images/' . $secondaryPosts[5]['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $secondaryPosts[5]['postID'] ?>"><?php echo $secondaryPosts[5]['title']; ?></a></h5>
            <p style="color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $secondaryPosts[5]['imageCaption']; ?></p>
        </div>
    </div>
  </div>
</div><br>