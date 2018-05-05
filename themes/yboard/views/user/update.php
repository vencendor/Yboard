<?php
/* @var $this ReviewsController */
/* @var $model Reviews */

$this->breadcrumbs = array(
    t('Profile') => array('user', array("id" => $model->id)),
    t('Update'),
);
?>

<h1> <? echo  t('Profile update') ?> </h1>

<?php echo $this->renderPartial('_form', array('model' => $model)); ?>