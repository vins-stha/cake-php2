<?php
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger onclick="this.classList.add('hidden');">

<?php print_r($message);?>
<?php
  if(isset($message['book_name']['_empty'])){
    echo "<p><b> Book name : ".$message ['book_name']['_empty']."</p>";
  }
  if(isset($message['author_name']['_empty'])){
    echo "<p><b> Author name: ".$message ['author_name']['_empty']."</p>";
  }
  if(isset($message['author_name']['length'])){
    echo "<p><b>Author name :".$message ['author_name']['length']."</p>";
  }
  if(isset($message['price']['_empty'])){
    echo "<p><b> Price :".$message ['price']['_empty']."</p>";
  }
  if(isset($message['genre']['_empty'])){
    echo "<p><b> Genre :".$message ['genre']['_empty']."</p>";
  }
?>
   </div>
