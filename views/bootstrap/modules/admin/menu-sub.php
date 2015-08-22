<?php if($mod['group']=='stats') : ?>
<li><a class="<?php if($mod['content']=='counter') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=counter">
    <?php if($mod['content']=='counter') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>접속건수
</a></li>
<li><a class="<?php if($mod['content']=='keyword') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=keyword">
    <?php if($mod['content']=='keyword') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>유입키워드
</a></li>

<?php elseif($mod['group']=='member') : ?>
<li><a class="<?php if($mod['content']=='list') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=list">
    <?php if($mod['content']=='list') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>회원조회
</a></li>
<li><a class="<?php if($mod['content']=='register') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=register">
    <?php if($mod['content']=='register') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>회원등록
</a></li>
<li><a class="<?php if($mod['content']=='point') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=point">
    <?php if($mod['content']=='point') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>포인트관리
</a></li>

<?php elseif($mod['group']=='site') : ?>
<li><a class="<?php if($mod['content']=='agree') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=agree">
    <?php if($mod['content']=='agree') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>약관관리
</a></li>
<li><a class="<?php if($mod['content']=='popup') :?>text-danger<?php endif?>" href="<?=$site['r']?>/index.php?mid=110&amp;group=<?=$mod['group']?>&amp;content=popup">
    <?php if($mod['content']=='popup') :?><span class="glyphicon glyphicon-chevron-right"></span> <?php endif?>팝업관리
</a></li>
<?php endif?>
