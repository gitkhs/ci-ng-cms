<?php
    $mod = array('dir'=>'modules/'.$page['m'], 'group'=>$group, 'content'=>$content);

    $mod['group']   = $mod['group'] ? $mod['group'] : 'stats';
    $mod['content'] = $mod['content'] ? $mod['content'] : 'counter';
?>
