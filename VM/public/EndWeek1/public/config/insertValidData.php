<?php
$titleHasErrors = $idHasErrors = $priceHasErrors = $descriptionHasErrors = false;
$titleError = $idError = $priceError = $descriptionError = "";

  if (isset($_POST['submitUpdate'])) {
    if ($_POST["title"] != "") {
            $_POST['title'] = htmlspecialchars(filter_var($_POST['title'], FILTER_SANITIZE_STRING));
            if ($_POST['title'] == "") {
                $titleHasErrors = true;
                $titleError = "Please enter a valid title.";
            }else {
              $titleHasErrors = false;
              $title = $_POST['title'];
            }
        } else {
            $titleHasErrors = true;
            $titleError = "Title is required.";
        }

        if ($_POST['id'] != "") {
            $_POST['id'] = htmlspecialchars(filter_var($_POST['id'], FILTER_SANITIZE_STRING));
            if ($_POST['id'] == "") {
                $idHasErrors = true;
                $idError = "Invalid id.You should not typing anything here.";
            } else {
              if ((is_numeric($_POST['id']))  &&  ($_POST['id']>0)) {
                $idHasErrors = false;
                $idError = "Id doesn't have to change.";
              } else {
                  $idHasErrors = true;
                  $idError = "Invalid id.You should not typing anything here.";
                }
            }
        } else {
            $idHasErrors = true;
            $idError = "Id is required but you can't change that.'";
        }

    if ($_POST['price'] != "") {
            $temp_money = str_replace(",", ".", $_POST['price']);
            $_POST['price'] = htmlspecialchars(filter_var($temp_money, FILTER_VALIDATE_FLOAT, array('options' => array('decimal' => '.'))));
            if ($_POST['price'] == "" || $_POST['price'] <= 0) {
                $priceHasErrors = true;
                $priceError = "Please enter a valid price.";
            }else {
              $priceHasErrors = false;
              $_POST['price'] = number_format((float)$_POST['price'], 2);
              $price = $_POST['price'];
            }
        } else {
            $priceHasErrors = true;
            $priceError = "Price is required.";
        }

        if ($_POST['description'] != "") {
                $_POST['description'] = htmlspecialchars(filter_var($_POST['description'], FILTER_SANITIZE_STRING));
                if ($_POST['description'] == "") {
                    $descriptionHasErrors = true;
                    $descriptionError = "Please enter a valid description.";
                }else {
                  $descriptionHasErrors = false;
                  $description = $_POST['description'];
                }
            } else {
                $descriptionHasErrors = true;
                $descriptionError = "Description is required.";
            }
  }
  if ((isset($_POST['submitUpdate'])) && ($titleHasErrors == false) && ($idHasErrors == false) && ($priceHasErrors == false) && ($descriptionHasErrors ==  false)) {
    $connec_db->update($_GET['id'], $_POST['title'], $_POST['price'], $_POST['description']);
    $_SESSION['success'] = "success";
    header('Location: ' . $_SERVER['PHP_SELF'] . '');
  }
  /* for debugging
  var_dump($titleHasErrors);
  var_dump($titleError);
  var_dump($idHasErrors);
  var_dump($idError);
  var_dump($priceHasErrors);
  var_dump($priceError);
  var_dump($descriptionHasErrors);
  var_dump($descriptionError);

  var_dump($_SERVER["REQUEST_METHOD"]);
  */
