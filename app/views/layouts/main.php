<?php
//use yii\helpers\Html;
//
//$asset = \app\assets\AppAsset::register($this);
//?>
<?php //$this->beginPage() ?>
    <!--    <!DOCTYPE html>-->
    <!--    <html lang="--><?//= Yii::$app->language ?><!--">-->
    <!--    <head>-->
    <!--        <meta charset="--><?//= Yii::$app->charset ?><!--">-->
    <!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
    <!--        --><?//= Html::csrfMetaTags() ?>
    <!--        <title>--><?//= Html::encode($this->title) ?><!--</title>-->
    <!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
    <!--        <link rel="shortcut icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
    <!--        <link rel="icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
    <!--        --><?php //$this->head() ?>
    <!--    </head>-->
    <!--    <body>-->
    <!--    --><?php //$this->beginBody() ?>
    <!--    --><?//= $content ?>
    <!--    --><?php //$this->endBody() ?>
    <!--    </body>-->
    <!--    </html>-->
<?php //$this->endPage() ?>



<!--    <!DOCTYPE html>-->
<!--    <html lang="--><?//= Yii::$app->language ?><!--">-->
<!--    <head>-->
<!--        <meta charset="--><?//= Yii::$app->charset ?><!--">-->
<!--        <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--        --><?//= Html::csrfMetaTags() ?>
<!--        <title>--><?//= Html::encode($this->title) ?><!--</title>-->
<!--        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>-->
<!--        <link rel="shortcut icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
<!--        <link rel="icon" href="--><?//= $asset->baseUrl ?><!--/favicon.ico" type="image/x-icon">-->
<!--        --><?php //$this->head() ?>
<!--    </head>-->
<!--    <body>-->
<!--    --><?php //$this->beginBody() ?>
<!--    --><?//= $content ?>
<!--    --><?php //$this->endBody() ?>
<!--    </body>-->
<!--    </html>-->
<?php //$this->endPage() ?>
<?php
use yii\helpers\Html;
$asset = \app\assets\AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,700" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">
    <title><?= Html::encode($this->title) ?></title>
    <!--    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700|Roboto:300,400,700" rel="stylesheet">-->
    <!--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css" rel="stylesheet">-->
    <!--    <link rel="stylesheet" href="css/components.css">-->
    <!--    <link rel="stylesheet" href="css/style.css">-->
    <?php $this->head() ?>
</head>

<?php $this->beginBody() ?>

<?= $content ?>
<?php $this->endBody() ?>

</html>
<?php $this->endPage() ?>
