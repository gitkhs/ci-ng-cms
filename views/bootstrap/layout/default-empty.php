<!-- top -->
<div id="top">
<?php include_once FCPATH.'views/'.$site['layout'].'/layout/'.$site['theme'].'/top.php';?>
</div>

<!-- content -->
<div id="content">
    <?php include_once FCPATH.'/'.$path.'/'.$page['method'].'.php';?>
</div>


<!--  footer  -->
<div id="footer" class="navbar-inverse">
<?php include_once FCPATH.'views/'.$site['layout'].'/layout/'.$site['theme'].'/footer.php';?>
</div>
