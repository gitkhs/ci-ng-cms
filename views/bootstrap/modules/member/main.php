<?php
    include_once 'modules/'.$page['m'].'/_common.php';
?>

<!-- Begin Body -->
<div class="container">
    <div class="row">
        <!-- side menu -->
        <div class="col-sm-3 hidden-xs">
        <?php include_once $mod['dir'].'/_side.php';?>
        </div>

        <!-- content body -->
        <div class="col-sm-9">
            <!-- page menu -->
            <div class="page-menu panel panel-default visible-xs">
                <div class="panel-body">
                <?php include_once $mod['dir'].'/_top.php';?>
                </div>
            </div>
            <!-- page nav -->
            <?php include_once $site['layout'].'/content-nav.php';?>

            <!-- page content -->
            <?php include_once $page['content'] ? $mod['dir'].'/'.$page['content'].'.php' : $mod['dir'].'/myinfo.php';?>
        </div>

    </div> <!-- end row -->
</div>
