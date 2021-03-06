<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\WidgetText */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Text Block',
]) . ' ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Text Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="text-block-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
