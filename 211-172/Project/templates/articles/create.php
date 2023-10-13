<?php require(dirname(__DIR__).'/header.html')?>
<form action="/Frame-211/211-172/Project/www/article/store" method="post">
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="text">Text</label>
    <input type="text" class="form-control" id="text" name="text">
  </div>
  <div class="form-group">
    <label for="author">Author</label>
    <select class="form-control" name="author" id="author">
      <?php foreach($users as $user):?>
        <option value="<?=$user->getId();?>"><?=$user->getName();?></option>
      <?php endforeach;?>
    </select>
</div>
  <button type="submit" class="btn btn-primary">Save</button>
</form>
<?php require(dirname(__DIR__).'/footer.html')?>
