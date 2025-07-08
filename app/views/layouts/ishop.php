<?php

use Wfm\View;
/** $var $this View */
?>
<?= $this->getPart('parts/header'); ?>
<?php echo $this->content; ?>
<?= $this->getPart('parts/footer'); ?>
