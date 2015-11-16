<?php require('components/head.html');?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Price</th>
        <th>Description</th>
        <th></th>
    </tr>
    <?php
        echo('<tr>');
        echo('<form id="updatebook" method="post" action="/controller/update.php" >');
        echo('<td><input type="text"   size="1"  value="'.$book->getId().'"    name="id" readonly /></td>');
        echo('<td><input type="text"   size="20" value="'.$book->getTitle().'" name="title"  /></td>');
        echo('<td><input type="number"   maxlength="6" value="'.$book->getPrice().'" name="price"  /></td>');
        echo('<td><textarea rows="3" name="description" >'.$book->getDescription().'</textarea></td>');
        echo('<td><input type="submit" value="update" ></td>');
        echo('</form>');
        echo('</tr>');
    ?>
</table>
<?php require('components/foot.html');?>