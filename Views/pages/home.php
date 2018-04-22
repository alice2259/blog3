<?php session_start();

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
<div class="header container" style="padding:100px; background-image: url(<?php echo 'Views/images/' . $info['headerImage'];?>); background-size: cover; background-repeat: no-repeat; background-position: 50% 50%;">
    <h2 style="text-align: center; color: #FFF; text-shadow: 0px 0px 15px #333333;"><a href="?controller=posts&action=showPost&id=<?php echo $info['postID'] ?>"><?php echo $info['title'];?></a></h2>
    <h5 style="text-align: center; color: #FFF; text-shadow: 0px 0px 15px #333333;"><?php echo $info['imageCaption'];?></h5>
</div>

<?php };

    $secondaryPosts = [];
    $req = $db->query('SELECT post.title, post.headerImage, post.postID, post.imageCaption FROM post ORDER BY post.datePublished DESC limit 6 offset 1;');
    $secondaryPosts = $req->fetchall();

?>


<br>
<br>
<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $secondaryPosts[0]['title']; ?></div>
        <div class="panel-body"><img src="<?php echo 'Views/images/' . $secondaryPosts[0]['headerImage'];?>" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-danger">
        
        <div class="panel-body" style="background-image: url(<?php echo 'Views/images/' . $secondaryPosts[1]['headerImage'];?>">
            <h5 style="color: #FFF; text-shadow: 0px 0px 15px #333333; padding: 50px;"><?php echo $secondaryPosts[1]['title']; ?></h5>
        </div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-success">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BLACK FRIDAY DEAL</div>
        <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer">Buy 50 mobiles and get a gift card</div>
      </div>
    </div>
  </div>
</div>