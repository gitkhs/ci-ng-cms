<!-- top -->
<div id="top">
<?php include_once FCPATH.'views/'.$site['layout'].'/layout/'.$site['theme'].'/top.php';?>
</div>

<!-- content -->
<div id="content">
<div class="container <?php if(element('module', $page) && $page['module']->fluid) :  echo '-fluid'; endif?>">

    <?php if(element('module', $page) && $page['module']->kind == 'side') :?>
    <div class="row">
        <?php if($page['module']->side=='lt') : ?>
        <!-- side menu -->
        <div class="col-sm-3 hidden-xs">
            <ul class="list-group">
                <?php foreach($submenu as $_R) :?>
                <a class="list-group-item <?php if($_R['mid']==$param['mid']) :?>active<?php endif?>" href="<?=$site['r']?>/<?=$_R['class']?>/<?=$_R['method']?>/mid/<?=$_R['mid']?>"><?=$_R['mname']?></a>
                <?php endforeach?>
            </ul>
        </div>
        <?php endif ?>
    <?php endif?>
    
    <!-- method content -->
    <?php if(element('module', $page) && $page['module']->kind == 'side') :?><div class="col-sm-9"><?php endif?>

    <?php if(element('module', $page) && $page['module']->kind == 'top') :?>
    <ul class="nav nav-pills">
        <?php foreach($submenu as $_R) :?>
        <li class="<?php if($_R['mid']==$param['mid']) :?>active<?php endif?>"><a href="<?=$site['r']?>/<?=$_R['class']?>/<?=$_R['method']?>/mid/<?=$_R['mid']?>"><?=$_R['mname']?></a></li>
        <?php endforeach?>
    </ul>        
    <?php endif?>

    <?php if(element('module', $page) && ($page['module']->kind == 'side' || $page['module']->kind == 'top')) :?>
    <!-- xs size menu -->
    <div class="text-right visible-xs" style="padding:8px 0;">
        <div class="btn-group">
          <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="glyphicon glyphicon-th-list"></span>
          </button>
          <ul class="dropdown-menu dropdown-menu-right">
            <?php foreach($submenu as $_R) :?>
            <li class="<?php if($_R['mid']==$param['mid']) :?>active<?php endif?>"><a href="<?=$site['r']?>/<?=$_R['class']?>/<?=$_R['method']?>/mid/<?=$_R['mid']?>"><?=$_R['mname']?></a></li>
            <?php endforeach?>
          </ul>
        </div>
    </div>
    <?php endif?>

    <?php include_once FCPATH.'/'.$path.'/'.$page['method'].'.php';?>

    <?php if(element('module', $page) && $page['module']->kind == 'side') :?>
    </div>  <!-- /div class="col-sm-9" -->
    <?php endif?>

    <?php if(element('module', $page) && $page['module']->kind == 'side') :?>
        <?php if($page['module']->side=='rt') : ?>
        <!-- side menu -->
        <div class="col-sm-3 hidden-xs">
            <ul class="list-group">
                <?php foreach($submenu as $_R) :?>
                <a class="list-group-item <?php if($_R['mid']==$param['mid']) :?>active<?php endif?>" href="<?=$site['r']?>/<?=$_R['class']?>/<?=$_R['method']?>/mid/<?=$_R['mid']?>"><?=$_R['mname']?></a>
                <?php endforeach?>
            </ul>
        </div>
        <?php endif ?>
    </div>
    <?php endif?>
</div>
</div>


<!--  footer  -->
<div id="footer" class="navbar-inverse">
<?php include_once FCPATH.'views/'.$site['layout'].'/layout/'.$site['theme'].'/footer.php';?>
</div>
