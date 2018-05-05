<?php
/* @var $this MessagesController */
/* @var $dataProvider CActiveDataProvider */
/* @var $userData CActiveRecord User */
/* @var $model CActiveRecord Messages */
?>

<h4><? echo  t('Dialog') ?> с 
    <a href='<?php echo Yii::app()->createUrl('user/view/', array('id' => $userData->id)) ?>'>
        <? echo  $userData->username ?></a>
</h4>

<div class='dialog'>
    <?php
    $this->widget('zii.widgets.CListView', array(
        'dataProvider' => $dataProvider,
        'itemView' => '_view',
    ));
    ?>
</div>

<?php echo $this->renderPartial('_form', array('model' => $model, 'receiver' => $userData->id)); ?>