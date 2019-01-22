<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
data1.html

<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$qwe): $mod = ($i % 2 );++$i;?><h1><?php echo ($qwe[id]); ?>--<?php echo ($qwe[pass]); ?>--<?php echo ($qwe[time]); ?>--<?php echo ($qwe[statu]); ?></h1><?php endforeach; endif; else: echo "" ;endif; ?>
</body>
</html>