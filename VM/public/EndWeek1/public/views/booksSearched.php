<?php
if ($_POST['bookName'] != "") {
  // Remove HTML tags from string to protect against XSS attacks.
  $string = htmlspecialchars(filter_var($_POST['bookName'], FILTER_SANITIZE_STRING));
  if (($string != "") && (preg_match("/[A-Z]/i", $_POST['bookName']))) {
  // This is to ensure that after removing all illegal characters, are not left with a blank field also for aceppt case insensitivity

      # Books search query
      //query  the database table
      $sql="SELECT id, title, price, description FROM books WHERE  title LIKE '%$string%'";
      $result = $dbh->query($sql);
      $count = $result->rowCount();
      if ($count >= 1) {    // Search query found matches
        foreach ($dbh->query($sql) as $row)
        {?>
            <article class="infoArticle">
              <div class="row">
                <div class="medium-6 large-4 columns">
                  <!-- book image -->
                  <img class="thumbnail" name="bookImage" src="http://placehold.it/120x160">
                </div>
                <!-- info book -->
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
              </div>
            </article>
          <?php }
        } else {  // Search query wasn't found any matches
          echo "<p>No Results were found.</p>";
        }
  }else { // Invalid search query
    echo "<p>Please enter a valid search query</p>";
  }
}else { // Empty search query
  echo "<p>Please enter a search query</p>";
}
?>
