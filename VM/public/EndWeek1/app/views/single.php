<article>
    <div class="row">
      <div class="large-2 medium 12 small 12 columns"><p class="pgris">ID</p></div>
      <div class="large-7 medium 12 small 12 columns"><p class="pgris">title</p></div>
      <div class="large-3 medium 12 small 12 columns"><p class="pgris">price</p></div>
      <hr>
    </div>
</article>
<?php
foreach ($dbh->query($single) as $row)
{?>
<!--BOOK-->
<article>
    <div class="row">
      <div class="large-2 medium 12 small 12 columns"><p><?php $render->html($row['id']);?></p></div>
      <div class="large-7 medium 12 small 12 columns"><p><strong><?php $render->html($row['title']);?></strong></p></div>
      <div class="large-3 medium 12 small 12 columns"><p><strong><?php $render->html("$ ".$row['price']);?></strong></p></div>
    </div>
    <div class="row collapse">
      <div class="large-12 medium 12 small 12 columns"><p><?php $render->html($row['description']);?></p></div>
    </div>
    <div class="row collapse">
      <a href="./"><input type="submit" class="button postfix" name="submit" value="Back!"></a>
    </div>
</article>
<?php } ?>
