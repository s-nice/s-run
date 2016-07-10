<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="page-container">
  <!-- Main Container -->
  <div id="main-container">

	<?= $content ?>

	<footer class="clearfix">
	  <div class="container">
		<div class="row">
		  <div class="col-xs-7">Copyright © 2016 www.s-run.com</div>
		  <div class="col-xs-5">
			<ul class="list-inline">
			  <li class="active">
				<a href="javascript:;">首页</a></li>
			  <li>
				<a href="">下载</a></li>
			  <li>
				<a href="">特色</a></li>
			  <li>
				<a href="">关于我们</a></li>
			</ul>
		  </div>
		</div>
	  </div>
	</footer>
  </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
