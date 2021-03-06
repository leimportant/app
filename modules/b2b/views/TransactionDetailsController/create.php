<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\b2b\models\TransactionDetails */

$this->title = Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Transaction Details',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Transaction Details'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaction-details-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
