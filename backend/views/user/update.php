<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\UserModel */

//$this->title = 'Update User Model: ' . $model->id;
$this->title = '编辑: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => '会员信息', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="user-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
