<?php $this->renderPartial("/tpl/search-form",array(
 'link'=>$link
))?>

<?php echo CHtml::beginForm('','post',array(
  'id'=>"frm_datatables",
  'class'=>"frm_datatables",
  'onsubmit'=>"return false;"
)); 
?> 

<table class="ktables_list table_datatables">
<thead>
<tr>
<th width="10%"><?php echo t("#")?></th>
<th width="25%"><?php echo t("Name")?></th>
<th width="20%"><?php echo t("Date")?></th>
<th width="20%"><?php echo t("Total")?></th>
<th width="15%"><?php echo t("Actions")?></th>
</tr>
</thead>

<tbody></tbody>

</table>

<?php echo CHtml::endForm(); ?>

<?php $this->renderPartial("/admin/modal_delete");?>