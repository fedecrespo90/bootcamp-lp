<div class="row">
  <div class="large-6 medium-6 small-6 columns"><h3>Title</h3></div>
  <div class="large-6 medium-6 small-6 columns"><h3>Price</h3></div>
  <hr>
</div>
<!-- display the list -->
<?php
$list = "SELECT * FROM books";

foreach ($dbh->query($list) as $row) {
?>
  <!-- Loops over the array of books -->
  <div class="row">
    <div class="large-6 medium-6 small-6 columns">
      <p>
        <a href="<?php echo $_SERVER['REQUEST_URI'].'?action=info&id='.$row['id'];?>">
          <?php $render->html($row['title']);?>
        </a>
      </p>
    </div>
    <div class="large-3 medium-3 small-3 columns">
      <p class="price"><?php $render->html("$ ".$row['price']);?></p>
    </div>
    <div class="large-3 medium-3 small-3 columns"><a href="<?php echo $_SERVER['REQUEST_URI'].'?action=edit&id='.$row['id'];?>"><input class="button round postfix" type="button" name="submit" value="Edit!"></a></div>
    <hr>
  </div>
<?php } ?>
