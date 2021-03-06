<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\ar\models\Pembelian */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Pembelian',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pembelians'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pembelian-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'items' => $items,
    ]) ?>

</div>
