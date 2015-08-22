<?php if($mod['group']=='basic') : ?>
<!-- 기본설정메뉴 -->
<li><a class="<?php if($mod['content']=='setting') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=setting">
    <?php if($mod['content']=='setting') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>세 팅
</a></li>
<li><a class="<?php if($mod['content']=='menu') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=menu">
    <?php if($mod['content']=='menu') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>메 뉴
</a></li>
<li><a class="<?php if($mod['content']=='bbs') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=bbs">
    <?php if($mod['content']=='bbs') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>게 시 판
</a></li>
<li><a class="<?php if($mod['content']=='member') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=member">
    <?php if($mod['content']=='member') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>회원가입설정
</a></li>
<?php elseif($mod['group']=='layout') : ?>
<!-- 레이아웃메뉴 -->
<li><a class="<?php if($mod['content']=='style') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=style">
    <?php if($mod['content']=='style') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>스 타 일
</a></li>
<li><a class="<?php if($mod['content']=='top') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=top">
    <?php if($mod['content']=='top') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>상단(로고) 영역
</a></li>
<li><a class="<?php if($mod['content']=='footer') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=footer">
    <?php if($mod['content']=='footer') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>하단(회사정보) 영역
</a></li>
<?php elseif($mod['group']=='page') : ?>
<!-- 페이지메뉴 -->
<li><a class="<?php if($mod['content']=='main') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=120&amp;group=<?=$mod['group']?>&amp;content=main">
    <?php if($mod['content']=='main') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>메인 페이지
</a></li>
<?php endif?>
