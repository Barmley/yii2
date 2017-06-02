<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceUserSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'UserId') ?>

    <?= $form->field($model, 'Uname') ?>

    <?= $form->field($model, 'UEmail') ?>

    <?= $form->field($model, 'UPass') ?>

    <?= $form->field($model, 'UCity') ?>

    <?php // echo $form->field($model, 'UStatus') ?>

    <?php // echo $form->field($model, 'UIsAdmin') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
