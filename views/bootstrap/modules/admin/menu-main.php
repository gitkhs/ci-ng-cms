<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">관리자</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="<?=$site['r']?>">홈페이지 메인</a></li>
            <li class="<?php if($mod['group']=='stats') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=110&amp;group=stats&amp;content=counter">통 계</a></li>
            <li class="<?php if($mod['group']=='member') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=110&amp;group=member&amp;content=list">회원관리</a></li>
            <li class="<?php if($mod['group']=='site') :?>active<?php endif?>"><a href="<?=$site['r']?>/index.php?mid=110&amp;group=site&amp;content=agree">사이트관리</a></li>
        </ul>
        </div>

    </div>
</nav>
