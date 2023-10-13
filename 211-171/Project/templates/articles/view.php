<?php

require __DIR__.'/../header.php';
echo '
<table class="table">
<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Name</th>
    <th scope="col">Text</th>
    <th scope="col">Author</th>
  </tr>
</thead>
<tbody>';
$i = 0;
foreach($articles as $article){
    echo '
    <tr>
      <th scope="row">'.++$i.'</th>
      <td>'.$article['name'].'</td>
      <td>'.$article['text'].'</td>
      <td>'.$article['author_id'].'</td>
    </tr>';
}
echo '
    </tbody>
    </table>';
require __DIR__.'/../footer.html';