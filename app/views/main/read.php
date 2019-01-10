  <?php if (isset($news[0]['id'])): ?>
    <div class="container">
      <div class="panel panel-default">
          <div class="panel-heading"><b>Title: </b><?=$news[0]['title']; ?></div>
            <div class="panel-body"><b>News: </b>
                <?=$news[0]['news']; ?>
            </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <form method="get" action="/update">
              <button type="submit" name="news" value="<?=$news[0]['id'];?>" class="btn btn-info btn-block">Update</button>
          </form>
        </div>
        <div class="col-sm-6">
          <form method="POST" action="/delete">
             <button type="submit" name="delete" value="<?=$news[0]['id'];?>" class="btn btn-danger btn-block">Delete</button>
          </form>
        </div>
      </div>
    </div>
    <?php else: ?>
      <div class='container alert alert-danger'>
        <strong>Ошибка!</strong>Такой ID не существует. <a href="/">На главную</a>
      </div>
  <?php endif; ?>
