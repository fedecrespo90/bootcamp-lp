<?php
foreach ($dbh->query($single) as $row)
{?>
<fieldset>
  <legend>Update a book!</legend>
  <form class="custom" action="./routes/<?php echo 'validate.php?id='.$row['id']?>" method="post">
        <div class="row collapse">
          <div class="large-12 medium-12 small-12 columns">
            <input type="text" name="id" value="<?php $render->html($row['id']);?>" disabled="disabled">
          </div>
        </div>
      <div class="row collapse">
          <div class="large-12 medium-12 small-12 columns">
            <input type="text" name="title" value="<?php $render->html($row['title']);?>" required="required">
          </div>
      </div>
      <div class="row collapse">
        <div class="large-12 medium-12 small-12 columns">
          <input type="text" name="price" value="<?php $render->html($row['price']);?>" required="required">
        </div>
      </div>
      <div class="row collapse">
        <div class="large-12 medium-12 small-12 columns">
          <textarea name="description" rows="8" required="required"><?php $render->html($row['description']);?></textarea>
        </div>
      </div>
      <div class="row collapse">
      <div class="large-12 medium-12 small-12 columns">
        <input type="submit" class="button postfix" name="submit" value="Upload!">
      </div>
      </div>

  </form>
</fieldset>
<?php } ?>
