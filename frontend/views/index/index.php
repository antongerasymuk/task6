<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \app\helpers\ModelMapHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Country */

$this->title = 'Teacher Contact';
$this->params['breadcrumbs'][] = ['label' => 'Contact', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teacher-create">

	<h1>Add teacher contact</h1>

	<div class="teacher-form">

		<?php $form = ActiveForm::begin(); ?>

		<?= $form->field($model, 'name')->textInput() ?>
		<?= $form->field($model, 'email')->textInput() ?>
                <?= $form->field($model, 'level')->textInput() ?>
                <?= $form->field($model, 'site')->textInput() ?>
                <?= $form->field($model, 'age')->textInput() ?>
                <?= $form->field($model, 'comment')->textInput() ?>
                <?= $form->field($model, 'married')->checkbox() ?>

		<div class="form-group">
			<?= Html::submitButton('Create', ['class' => 'btn btn-primary', 'name' => 'category-button']) ?>
		</div>

		<?php ActiveForm::end(); ?>

	</div>
</div>
