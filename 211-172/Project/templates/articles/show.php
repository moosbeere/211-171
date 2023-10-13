<?php require(dirname(__DIR__).'/header.html')?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?=$article->getTitle();?></h5>
    <p class="card-text"><?=$article->getText();?></p>
    <p class="card-text"><?=$user->getName()?></p>
    <a href="#" class="card-link">Card link</a>
    <a href="#" class="card-link">Another link</a>
  </div>
</div>
<?php require(dirname(__DIR__).'/footer.html')?>
