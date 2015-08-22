<!-- page header / logo -->
<header class="masthead hidden-xs">
    <div class="container">
    <div class="row">
    <div class="col col-sm-6">
    <h1><a href="<?=$site['r']?>" title="scroll down for your viewing pleasure">BNW Template</a>
    <p class="lead">2-column Layout + Theme for Bootstrap 3</p></h1>
    </div>
    <div class="col col-sm-6">
    <div class="well pull-right">
    <img src="<?=$site['r']?>/<?=$site['img']?>/280x100.png" class="img-responsive">
    </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row">
    <div class="col col-sm-12">

    <div class="panel">
    <div class="panel-body">
    You may want to put some news here  <span class="glyphicon glyphicon-heart-empty"></span>
    </div>
    </div>

    </div>
    </div>
    </div>
</header>    

<div id="menu" class="navbar-inverse" data-spy="affix" data-offset-top="232">
    <div class="container">
    <div class="row">
        <nav class="navbar navbar-static-top">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-navbar-collapse" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand visible-xs" href="<?=$site['r']?>">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="menu-navbar-collapse">
        <ul class="nav navbar-nav ">
            <?php foreach($mainmenu as $_R) :?>
            <li class="<?php if(element('pid',$page) && $page['pid']==$_R['mid']) :?>active<?php endif?>"><a href="<?=$site['r']?>/<?=$_R['class']?>/<?=$_R['method']?>/mid/<?=$_R['sid']?>"><?=$_R['mname']?></a></li>
            <?php endforeach?>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=$site['r']?>/member/login">로그인</a></li>
            <li class="dropdown <?php if($param['class']=='member') :?>active<?php endif?>">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">내계정 <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li class="<?php if($param['method']=='myinfo') :?>active<?php endif?>"><a href="<?=$site['r']?>/member/myinfo">정보수정</a></li>
                    <li class="<?php if($param['method']=='changepwd') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=103">비번변경</a></li>
                    <li class="<?php if($param['method']=='changepwd') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=104">회원탈퇴</a></li>
                    <li class="<?php if($param['method']=='logou') :?>active<?php endif?>"><a href="<?=$site['r']?>/member/login">로그아웃</a></li>
                    <li class="divider" role="separator"></li>
                    <li><a href="<?=$site['r']?>/index.php?mid=110">관리자</a></li>
                    <li class="divider" role="separator"></li>
                    <li><a href="<?=$site['r']?>/index.php?mid=120">마스터</a></li>
                </ul>
            </li>
            <li><a href="#">all menu</a></li>
        </ul>
        </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
        </nav>    
    </div>
    </div>
</div>
