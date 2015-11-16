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
        echo('<td><input type="text"   size="1"  value="'.$book->getId().'"     readonly/></td>');
        echo('<td><input type="text"   size="20" value="'.$book->getTitle().'"  readonly/></td>');
        echo('<td><input type="text"   size="3"  value="'.$book->getPrice().'"  readonly/></td>');
        echo('<td><textarea rows="3" readonly>'.$book->getDescription().'</textarea></td>');
        echo('<td><a href="/controller/edit.php?id='.$book->getId().'"><img src="/imgs/pen.svg"  width="25" height="25" alt="edit"></a></td>');
        echo('</tr>');
    ?>
</table>
<?php require('components/foot.html');?>