<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need("includes/head.php"); ?>
<body>
<header id="header" class="clearfix"><?php Matcha::siteName(); ?></header>
<?php $this->need('includes/sidebar.php'); ?>
<div id="body">
    <div class="container">
        <!-- 移动端导航 -->
        <div class="small-header" id="small-header"  onclick="window.open('<?php $this->options->siteUrl(); ?>','_self')">
            <div class="site-name"><?php Matcha::siteName(); ?></div>
            <div class="page-links"><?php Matcha::pageNav($this, "span"); ?></div>
        </div>