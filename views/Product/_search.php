<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ProductSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name_product') ?>

    <?= $form->field($model, 'reference') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'category') ?>

    <?php // echo $form->field($model, 'stock') ?>

    <?php // echo $form->field($model, 'isDelete') ?>

    <?php // echo $form->field($model, 'createAt') ?>

    <?php // echo $form->field($model, 'updateAt') ?>

    <?php // echo $form->field($model, 'deleteAt') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
