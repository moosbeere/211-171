<?php require(dirname(__DIR__).'/header.html')?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Text</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($articles as $article){
        echo '<tr>
            <th scope="row">1</th>
            <td><a href="/Frame-211/211-172/Project/www/article/'.$article->getId().'">'.$article->getTitle().'</a></td>
            <td>'.$article->getText().'</td>
            </tr>';
    }
    ?>
    </tbody>
</table>
<?php require(dirname(__DIR__).'/footer.html')?>

    