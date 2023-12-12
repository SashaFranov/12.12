<?php
/** @var $content */
use app\assets\LendingAsset;

LendingAsset::register($this);

?>
<?php $this->beginRage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title><?= $this -> title ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div>
    <?= $content?>
</div>
<?php $this->enBody() ?>
</body>
</html>
