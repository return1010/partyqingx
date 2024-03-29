<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Questioninfo */

$this->title = 'Update Questioninfo: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Questioninfos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->qID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="questioninfo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
