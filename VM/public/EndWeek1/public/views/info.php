<?php $sql = "SELECT * FROM books WHERE id=".$id;?>
<article class="infoArticle">
  <div class="row">
    <div class="medium-6 large-4 columns">
      <!-- book image -->
      <img class="thumbnail" name="bookImage" src="http://placehold.it/120x160">
    </div>
    <!-- info book -->
    <?php
    foreach ($dbh->query($sql) as $row)
    {?>
      <div class="medium-6 large-8 columns">
        <div class="infoBook">
        <p class="titleBook"><?php $render->html($row['title']);?></p>
        <p class="description"><?php $render->html($row['description']);?></p>
        <div class="row">
          <div class="small-2 columns">
            <label for="price">Price</label>
          </div>
          <div class="small-4 columns">
            <p class="price"><?php $render->html("$ ".$row['price']);?></p>
          </div>
          <div class="small-6 columns">
            <a href="#" class="button expanded" name="purchaseButton">Buy Now</a>
          </div>
        </div>

        </div>
      </div>
    <?php } ?>
  </div>
</article>
