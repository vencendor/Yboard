<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<?php $model = $data->gallery->galleryPhotos[0]; ?>
<a href="<? echo  Yii::app()->createUrl('adverts/view', array('id' => $data->id))
?>" class="fancybox" rel="<?php echo CHtml::encode($data->id) ?>">
    <?php if ($model) { ?>
        <img src="<?php echo $model->getPreview(); ?>" <
             style='max-width:95px; max-height:60px;' alt="<?php echo CHtml::encode($data->name) ?>" />

         <?php } ?>
</a>