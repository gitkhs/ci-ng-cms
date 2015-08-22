<!DOCTYPE html>
<html>
    <head>
    <?php include_once $site['layout'].'/header.php';?>
    </head>
<body>
    <div id="content">
    <?php include_once 'modules/'.$page['m'].'/'.($page['p'] ? $page['p'] : 'main').'.php';?>
    </div>    
</body>
</html>
