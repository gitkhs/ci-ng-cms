<!-- content header -->
<?php include_once FCPATH.'/'.$mod['dir'].'/_header.php';?>

<!-- content body -->
<div class="container<?=$module->fluid ? '-fluid' : ''?>">
    <!-- page content -->
    <?php include_once FCPATH.'/'.$mod['dir'].'/'.$page['method'].'.php';?>
</div>            
