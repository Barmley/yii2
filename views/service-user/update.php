<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceUser */

$this->title = 'Update Service User: ' . $model->UserId;
$this->params['breadcrumbs'][] = ['label' => 'Service Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->UserId, 'url' => ['view', 'id' => $model->UserId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
