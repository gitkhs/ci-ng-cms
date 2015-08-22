<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">홈페이지 관리</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?=$site['r']?>">홈페이지 메인 <?=$page['content']?></a></li>
            <li class="<?php if($mod['group']=='basic') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=120&content=setting">기본설정</a></li>
            <li class="<?php if($mod['group']=='layout') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=120&amp;group=layout&content=style">레이아웃</a></li>
            <li class="<?php if($mod['group']=='page') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=120&amp;group=page&amp;content=main">페이지</a></li>
        </ul>
        </div>

    </div>
</nav>
