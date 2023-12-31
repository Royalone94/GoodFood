<div class="row mb-4">
  <div class="col d-flex justify-content-start align-items-center"> 
   <h6 class="m-0 p-2 pd-5 with-icon-account with-icon"><?php echo t("Profile")?></h6>
  </div> <!--col-->     
</div> <!--row-->


<div class="card">
  <div class="card-body">
  
  <div class="row">
    <div class="col-md-4">
    
    <div class="preview-image mb-2">
     <div class="col-lg-7">
      
      <div class="position-relative"> 
	       <div class="skeleton-placeholder rounded-circle img-120"></div>
	       <img class="lazy img-fluid mb-2 rounded-circle img-120" data-src="<?php echo $avatar;?>"/>
	  </div>
      
     </div>     
    </div>
     
    <div class="attributes-menu-wrap">
    <?php $this->widget('application.components.WidgetUserProfile',array());?>
    </div>
    
    </div> <!--col-->
    <div class="col-md-8">
    
    
	<div class="card">
	  <div class="card-body" id="vue-manage-account" v-cloak>
	  
	   <component-change-phoneverify
         ref="cphoneverify"
         @after-submit="verifyAccountDelete"
          :label="{
		    steps: '<?php echo t("2-Step Verification")?>',
		    for_security: '<?php echo CJavaScript::quote(t("For your security, we want to make sure it's really you."))?>', 
		    enter_digit: '<?php echo CJavaScript::quote(t("Enter 6-digit code"))?>',  			    
		    resend_code: '<?php echo CJavaScript::quote(t("Resend Code"))?>',
		    resend_code_in: '<?php echo CJavaScript::quote(t("Resend Code in"))?>',
		    code: '<?php echo CJavaScript::quote(t("Code"))?>',
		    submit: '<?php echo CJavaScript::quote(t("Submit"))?>',			    
		 }"
         >   
       </component-change-phoneverify>
       
       <DIV v-if="is_loading" class="overlay-loader">
		  <div class="loading mt-5">      
		    <div class="m-auto circle-loader" data-loader="circle-side"></div>
		  </div>
      </DIV>  

	  
	  <template v-if="steps==1">
	  
	  <h5 class="mb-4">Manage account</h5>
	  	  
	  <template v-if="steps_request_data==1">
	  <h6>Account Data</h6>
	  <p>You can request an archive of your personal information. We'll notify you when it's ready to download.
</p>

      <div v-cloak v-if="error.length>0" class="alert alert-warning mb-2" role="alert">
		    <p v-cloak v-for="err in error" class="m-0">{{err}}</p>	    
	  </div>    
	   
      <a href="javascript:;" class="text-green" @click="requestArchive" >Request archive</a>     
      </template>
      
      <template v-else-if="steps_request_data==2">
        <h6>We received your data request</h6>
        <p>we'll send your data as soon as we can. this process may take a few days. You will receive an email once your data is ready.</p>
      </template>
      
      <hr/>
	  
      <h6>Delete Account</h6>
	  <p>You can request to have your account deleted and personal information removed. If you have both a DoorDash and Caviar account, then the information associated with both will be affected to the extent we can identify that the accounts are owned by the same user.</p>

      <a href="javascript:;" class="text-green" @click="confirm" >Delete account</a>
      
      </template>
      
      <template v-else-if="steps==2">
        <h5 class="mb-4">Your account is being deleted</h5>
        <p>You will be automatically logged out. Your account will be deleted in the next few minutes.</p>
        <p>Note: We may retain some information when permitted by law.</p>
      </template>
           
      
	  </div> <!--body-->
	</div> <!--card-->
    
    </div> <!--col-->
  </div> <!--row-->
  
  </div> <!--card-body-->
</div> <!--card-->

<DIV id="vue-bootbox">
<component-bootbox
ref="bootbox"
@callback="Callback"
size='medium'
:label="{
  confirm: '<?php echo CJavaScript::quote(t("Confirm account deletion"))?>',
  are_you_sure: '<?php echo CJavaScript::quote(t("Are you sure you want to delete your account and customer data from [site_title]?[new_line] This action is permanent and cannot be undone.",array(
      '[site_title]'=> Yii::app()->params['settings']['website_title'],
      '[new_line]'=>"<br/><br/>"
   )))?>',
  yes: '<?php echo CJavaScript::quote(t("Delete Account"))?>',
  cancel: '<?php echo CJavaScript::quote(t("Don't Delete"))?>',  
  ok: '<?php echo CJavaScript::quote(t("Okay"))?>',  
}"
>
</component-bootbox>
</DIV>