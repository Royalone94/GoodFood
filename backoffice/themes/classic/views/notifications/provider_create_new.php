<nav class="navbar navbar-light justify-content-between">
<?php
$this->widget('zii.widgets.CBreadcrumbs', 
array(
'links'=>$links,
'homeLink'=>false,
'separator'=>'<span class="separator">
<i class="zmdi zmdi-chevron-right"></i><i class="zmdi zmdi-chevron-right"></i></span>'
));
?>
</nav>

  
<?php
$form = $this->beginWidget(
	'CActiveForm',
	array(
		'id' => 'upload-form',
		'enableAjaxValidation' => false,		
	)
);
?>

<div class="card">
  <div class="card-body">

<?php if(Yii::app()->user->hasFlash('success')): ?>
	<div class="alert alert-success">
		<?php echo Yii::app()->user->getFlash('success'); ?>
	</div>
<?php endif;?>

<?php if(Yii::app()->user->hasFlash('error')): ?>
	<div class="alert alert-danger">
		<?php echo Yii::app()->user->getFlash('error'); ?>
	</div>
<?php endif;?>

<div class="form-label-group">    
   <?php echo $form->textField($model,'provider_id',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'provider_id')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'provider_id'); ?>
   <?php echo $form->error($model,'provider_id'); ?>
   <small class="form-text text-muted">
    <?php echo t("This fields must not have spaces")?>
   </small>
</div>

<div class="form-label-group">    
   <?php echo $form->textField($model,'provider_name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'provider_name')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'provider_name'); ?>
   <?php echo $form->error($model,'provider_name'); ?>
</div>

<div class="form-label-group">    
   <?php echo $form->textField($model,'sender',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'sender')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'sender'); ?>
   <?php echo $form->error($model,'sender'); ?>
</div>


<div class="form-label-group">    
   <?php echo $form->textField($model,'sender_name',array(
     'class'=>"form-control form-control-text",
     'placeholder'=>$form->label($model,'sender_name')     
   )); ?>   
   <?php    
    echo $form->labelEx($model,'sender_name'); ?>
   <?php echo $form->error($model,'sender_name'); ?>
</div>

<div class="custom-control custom-switch custom-switch-md">  
  <?php echo $form->checkBox($model,"as_default",array(
     'class'=>"custom-control-input checkbox_child",     
     'value'=>1,
     'id'=>"as_default",
     'checked'=>$model->as_default==1?true:false
   )); ?>   
  <label class="custom-control-label" for="as_default">
   <?php echo t("Set as  Default")?>
  </label>
</div>    


<?php echo CHtml::submitButton('submit',array(
'class'=>"btn btn-green btn-full mt-3",
'value'=>t("Save")
)); ?>

<?php $this->endWidget(); ?>