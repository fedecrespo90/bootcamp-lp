<?php
  // Sanitize and Validate form.
  include('./config/insertValidData.php');

  $sql = "SELECT * FROM books WHERE id=".$id;
  foreach ($dbh->query($sql) as $row)
  {?>

  <div class="row">
    <div class="medium-6 medium-centered large-10 large-centered columns">

      <form  action="index.php?action=edit&id=<?php echo $row["id"]?>" method="post">
        <fieldset>
          <legend>Update book info</legend>

          <div class="row ">
            <div class="large-10">
              <label>Title
                <input class="cursorText" type="text" name="title" value="<?php
                  if (!isset($_POST['submitUpdate'])) {
                    $render->html($row['title']);
                  } else {
                    if (!isset($title)) {
                      $title = "";
                    } else {
                      echo  htmlspecialchars($title);
                    }
                  } ?>" >
              </label>
              <?php if ($titleHasErrors) { ?>
                <small class="error"><?php echo $titleError;?></small>
              <?php } ?>
            </div>

            <div class="row" clearfix>
              <div class="small-4 large-2 columns left">
                <label>Id
                  <input type="text" name="id" value="<?php
                    if (!isset($_POST['submitUpdate'])) {
                      $render->html($row['id']);
                    } else {
                      if (!isset($id)) {
                        $id = "";
                      } else {
                        echo  htmlspecialchars($id);
                      }
                    } ?>" readonly />
                </label>
                <?php if ($idHasErrors) { ?>
                  <small class="error"><?php echo $idError;?></small>
                <?php } ?>
              </div>
              <div class="small-4 large-2 columns left">
                <div class="row collapse">
                  <label>Price</label>
                  <div class="small-3 columns">
                    <span class="prefix">$</span>
                  </div>
                  <div class="small-9 columns">
                      <input class="cursorText" name="price" type="text" value="<?php
                        if (!isset($_POST['submitUpdate'])) {
                          $render->html($row['price']);
                        } else {
                          if (!isset($price)) {
                            $price = "";
                          } else {
                            echo  htmlspecialchars($price);
                          }
                        } ?>">
                      <?php if ($priceHasErrors) { ?>
                        <small class="error"><?php echo $priceError;?></small>
                      <?php } ?>
                  </div>
                </div>
              </div>
            </div>

            <div class="description">
              <label>Description
                <textarea class="cursorText" type="text" name="description" rows="11" ><?php
                    if (!isset($_POST['submitUpdate'])) {
                      $render->html($row['description']);
                    } else {
                      if (!isset($description)) {
                        $description = "";
                      } else {
                        echo  htmlspecialchars($description);
                      }
                    } ?></textarea>
                <?php if ($descriptionHasErrors) { ?>
                  <small class="error"><?php echo $descriptionError;?></small>
                <?php } ?>
              </label>
            </div>


            <div class="row">
              <div class="small-6 small-centered uploadButton columns">
                <p class="uploadButton"><input type="submit" class="button success round expand" name="submitUpdate" value="Update"></p>
              </div>
            </div>

          </div>
        </fieldset>
      </form>

    </div>
  </div>
  <?php } ?>
