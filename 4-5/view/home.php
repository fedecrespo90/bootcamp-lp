<?php require('components/head.html');?>
<input type="text" id="search" placeholder="Search..." />
<table id="books">
    <tr>
        <th>Books</th>
    </tr>
    <?php
    foreach ($books as $book){
        echo('<tr class="item">');
        echo('<td><a href="/controller/inspect.php?id='.$book->getId().'">'.$book->getTitle().'<a/></td>');
        echo('</tr>');
    }
    ?>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="/js/scripts.js"></script>
<?php require('components/foot.html');?>
