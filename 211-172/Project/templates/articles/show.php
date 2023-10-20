<?php require(dirname(__DIR__).'/header.html')?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <p class="card-text"><?=$article->getText();?></p>
    <p class="card-text"><?=$user->getName()?></p>
    <a href="/Frame-211/211-172/Project/www/article/edit/<?=$article->getId();?>" class="card-link">Update Article</a>
    <a href="/Frame-211/211-172/Project/www/article/delete/<?=$article->getId();?>" class="card-link">Delete Article</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html')?>
