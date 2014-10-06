<?php
    include 'top.php';
?>
    <ul>
    <?php foreach ($data as $key => $value) { ?>
        <li><?= $value ?></li>
    <?php } ?>
    </ul>


<?php
    include 'bottom.php';

