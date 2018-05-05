<?
/* @var $this AdvertsController */
/* @var $data Adverts */
?>


<div class="well advertList">
    <div style='float:left; width: 95px; height: 60px; overflow:hidden;'>
        <?php if ($data->gallery && $data->gallery->galleryPhotos) { ?>
            <?
            $this->widget('application.extensions.fancybox.AlFancybox', array(
                'config' => array(),
                    )
            );
            ?>
            <?php foreach ($data->gallery->galleryPhotos as $model) { ?>
                <a href="<?php echo $model->getUrl(); ?>" class="fancybox" rel="<?php echo CHtml::encode($data->id) ?>">
                    <img src="<?php echo $model->getPreview(); ?>" 
                         style='max-width:95px; max-height:60px;' alt="<?php echo CHtml::encode($data->name) ?>" />
                </a>
            <?
            }
        } else {
            ?>
            <a href="<? echo  Yii::app()->createUrl('adverts/view', array('id' => $data->id))
            ?>" class="fancybox" rel="<?php echo CHtml::encode($data->id) ?>">
                <img src="<?php echo Yii::app()->baseUrl . "/gallery/noimage.gif"; ?>" 
                     style='max-width:95px; max-height:60px;' alt="<?php echo CHtml::encode($data->name) ?>" />
            </a>
<?php } ?>
    </div>
    <div style='margin-left:100px'>
        <div>
            <?php echo CHtml::link(CHtml::encode($data->name), array('adverts/view', 'id' => $data->id)); ?>
               <?php if ($data->user_id == Yii::app()->user->id) { ?>
                <a href='<? echo  Yii::app()->createUrl('adverts/update', array('id' => $data->id))
                   ?>' class='redact'> редактировать </a>
<?php } ?>
        </div>
        <div><?php echo CHtml::encode(mb_substr($data->text, 0, 220)); ?></div>
    </div>
    <table class="table" style='display:none'>
        <tr class="alert-info">
            <td><b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>

            </td>
        </tr>
        <tr class="alert-block">
            <td> <b><?php echo CHtml::encode($data->getAttributeLabel('gallery_id')); ?>:</b>

            </td>
        </tr>
    </table>
</div>