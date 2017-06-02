<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ServiceUser */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Uname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UEmail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UPass')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UCity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'UStatus')->textInput() ?>

    <?= $form->field($model, 'UIsAdmin')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
