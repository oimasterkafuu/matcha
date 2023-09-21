<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html lang="zh-cmn-Hans-CN-Latn-pinyin">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <!-- IE 8浏览器的页面渲染方式 & 默认使用极速内核：针对国内浏览器产商 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <!-- 自适应 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <!-- 关闭百度转码 -->
    <meta http-equiv="x-dns-prefetch-control" content="on">
    <meta http-equiv="Cache-Control" content="no-transform">
    <meta http-equiv="Cache-Control" content="no-siteapp">
	<?php //设置 favicon
    if($this->options->favicon){ ?>
    <link rel="icon" type="image/x-icon" href="<?php $this->options->favicon(); ?>">
    <?php } 
    //输出网站标题、css 引用和其他 head 内容 ?>
    <title><?php Matcha::title($this); ?></title>
    <?php Matcha::head(); $this->header(); ?>

    <style>
        :root {
            --theme-color: <?php echo Matcha::getThemeColor(); ?>;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.css" integrity="sha384-GvrOXuhMATgEsSwCs4smul74iXGOixntILdUW9XmUC6+HX0sLNAK3q71HotJqlAn" crossorigin="anonymous">

    <!-- The loading of KaTeX is deferred to speed up page rendering -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/katex.min.js" integrity="sha384-cpW21h6RZv/phavutF+AuVYrr+dA8xD9zs6FwLpaCct6O9ctzYFfFr4dgmgccOTx" crossorigin="anonymous"></script>
    
    <script>
        const katexOptions = {
            delimiters: [
                {left: '$$', right: '$$', display: true},
                {left: '$', right: '$', display: false}
            ],
            throwOnError : false
        };
    </script>

    <!-- To automatically render math in text elements, include the auto-render extension: -->
    <script defer src="https://cdn.jsdelivr.net/npm/katex@0.16.8/dist/contrib/auto-render.min.js" integrity="sha384-+VBxd3r6XgURycqtZ117nYw44OOcIax56Z4dCRWbxyPt0Koah1uHoK0o4+/RRE05" crossorigin="anonymous"
        onload="renderMathInElement(document.body, katexOptions);"></script>
</head>