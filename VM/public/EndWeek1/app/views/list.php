    <div class="row">
      <article>
        <div class="large-6 medium-6 small-6 columns"><h3>title</h3></div>
        <div class="large-6 medium-6 small-6 columns"><h3>price</h3></div>
      </article>
      <hr>
    </div>
    <!--BOOK-->
    <?php
    foreach ($dbh->query($list) as $row)
    {?>
    <article>
      <div class="row">
        <div class="large-6 medium-6 small-6 columns"><p><a href="<?php echo $_SERVER['REQUEST_URI'].'?action=single&id='.$row['id'];?>"><?php $render->html($row['title']);?></a></p></div>
        <div class="large-3 medium-3 small-3 columns"><p><strong><?php $render->html("$ ".$row['price']);?></strong></p></div>
        <div class="large-3 medium-3 small-3 columns"><a href="<?php echo $_SERVER['REQUEST_URI'].'?action=edit&id='.$row['id'];?>"><input class="button postfix" type="button" name="submit" value="Edit!"></a></div>
      </div>
    </article>
    <hr>
    <?php } ?>
