<?php
    include_once 'modules/'.$page['m'].'/_common.php';
?>
<link href="<?=$site['r']?>/<?=$mod['dir']?>/main.css" rel="stylesheet">

<!-- top menu -->
<?php include_once $mod['dir'].'/menu-main.php';?>


<!-- Begin Body -->
<div id="content" class="container-faluid">
    <!-- side menu -->
    <div class="side-menu col-sm-3 col-md-2 hidden-xs">
        <nav class="affix">
            <ul class="list-unstyled">
            <?php include $mod['dir'].'/menu-sub.php';?>
            </ul>
        </nav>
    </div>

    <!-- content body -->
    <div class="main-board col-sm-9 col-md-10">
        <!-- page menu -->
        <div class="page-menu panel panel-default visible-xs">
            <div class="panel-body">
                <ul class="page-menu list-inline">
                <?php include $mod['dir'].'/menu-sub.php';?>
                </ul>        
            </div>
        </div>

        <!-- page body -->
        <div class="page-body">
        <?php include_once $mod['dir'].'/'.$mod['group'].'/'.$mod['content'].'.php';?>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var wh = $(window).height() - $('.navbar-fixed-top').height();
        var ch = $('#content .main-board').height();
        if(ch<wh) {
            $('#content .main-board').height(wh);
        }
    });
</script>
