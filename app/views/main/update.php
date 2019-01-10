<div class="container form-group">
  <form method="post" action="/postUpdate">
    <input type="hidden" name="id" value="<?=$news[0]['id']; ?>" >
    <label for="title"><h4>Title:</h4></label>
    <input type="text" name="title" class="form-control" value="<?=$news[0]['title']; ?>">
    <label for="comment"><h4>News:</h4></label>
    <textarea name="news" class="form-control" rows="5"><?=$news[0]['news']; ?></textarea></br>
    <button type="submit" name="submit" class="btn btn-primary form-control">Update news</button><hr>
  </form>
</div>
