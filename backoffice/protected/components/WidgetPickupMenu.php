<?php
Yii::import('zii.widgets.CMenu', true);

class WidgetPickupMenu extends CMenu
{		 
	 public function init()
	 {		 		 	  
	 	  	 	  	 	  
	 	  $menu = array();
	 	  $menu[]=array(
	 	    'label'=>'<i class="zmdi zmdi-settings"></i>'.t("Settings"),
	 	    'url'=>array("/services/settings_pickup")
	 	  );	 	  	 	 	 	
	 	  
	 	  $menu[]=array(
	 	    'label'=>'<i class="zmdi zmdi-comments"></i>'.t("Instructions"),
	 	    'url'=>array("/services/pickup_instructions"),
	 	    'itemOptions'=>array(
	 	      'class'=>"instructions"
	 	    )
	 	  );	 	  	 	 	 		 	  
	 	  	 	
	 	  $this->items = $menu;	 	  
	 	  	 	  
	 	  $this->encodeLabel = false;
	 	  $this->activeCssClass = "active";
	 	  $this->activateParents = true;
	 	  $this->htmlOptions = array(
	 	    'class'=>'services-menu'
	 	  ); 
	 	  $this->submenuHtmlOptions = array(
	 	    'class'=>'services-sub-menu'
	 	  ); 
	 	  
	 	  parent::init();
	 }
	 
}
/*end class*/