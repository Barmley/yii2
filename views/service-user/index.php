<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ServiceUserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = $titlename;
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-user-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'UserId',
            'Uname:text:Имя',
            'UEmail:text:Почта',
            //'UPass:text:Пароль',
            'UCity:text:Город',
            // 'UStatus',
            // 'UIsAdmin',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
