<nav class="navbar navbar-light justify-content-between">
<a class="navbar-brand">
<h5><?php echo CHtml::encode($this->pageTitle)?></h5>
</a>
</nav>

<DIV class="card w-75 m-auto">
 <div class="card-body">
 
   <?php if(is_array($themes) && count($themes)>=1):?>
   <div class="d-flex align-items-center">
     <div class="mr-4">
       <img class="img-400" src="<?php echo $themes[0]['screenshot']?>">
     </div>
     <div>
     
       <h6 class="font-weight-light"><?php echo t("Active theme")?></h6> 
       <h5><?php echo ucwords($themes[0]['theme_name'])?></h5>
       
       <a href="<?php echo Yii::app()->createUrl('/theme/settings')?>" class="btn btn-green normal">
        <div class="d-flex align-items-center">
          <div class="mr-2"><i class="zmdi zmdi-settings"></i></div>
          <div>Customize</div>
        </div>
       </a>
     
     </div>
   </div>
   <!--flex-->
   <?php else :?>
   <p class="alert alert-warning"><?php echo $error?></p>
   <?php endif;?>
 
 </div>
</DIV>