<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Page */

$this->title = Yii::t('app', 'Update Page').':' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pages'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>

<div class="panel panel-default">
    <div class="panel-header"> <?= Html::encode($this->title) ?> </div>
    <div class="panel-body">
<div class="Page-update">

 

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
    </div></div>