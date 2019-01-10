<div class="container form-group">
  <form action="/create" method="post">
    <label for="title"><h4>Title:</h4></label>
    <input type="text" name="title" class="form-control">
    <label for="comment"><h4>News:</h4></label>
    <textarea name="news" class="form-control" rows="5"></textarea></br>
    <button type="submit" name="submit" class="btn btn-primary form-control" value="">Publish news</button><hr>
  </form>
</div>
<div class="container">
<?php if(!empty($news)): ?>
<?php foreach($news as $new): ?>
  <div class="panel panel-default">
      <div class="panel-heading"><b>Title: </b><?=$new['title']; ?></div>
        <div class="panel-body"><b>News: </b>
            <?=$new['news']; ?>
        </div>
  </div>
  <div class="row">
    <div class="col-sm-4">
      <form action="/read" method="get">
        <button type="submit" name="news" value="<?=$new['id'];?>" class="btn btn-default btn-block">Read news</button>
      </form>
    </div>
    <div class="col-sm-4">
      <form action="/update" method="get">
        <button type="submit" name="news" value="<?=$new['id'];?>" class="btn btn-info btn-block">Update</button>
      </form>
    </div>
    <div class="col-sm-4">
      <form action="/delete" method="post">
        <button type="submit"  name="delete" value="<?=$new['id'];?>" class="btn btn-danger btn-block">Delete</button>
      </form></br>
    </div>
  </div>
  <?php endforeach; ?>
  <?php endif; ?>
</div>
