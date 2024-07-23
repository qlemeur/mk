<?php 
$oForm=new plugin_form($this->oUser);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">username</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('username',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pid</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('pid',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pswd</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('pswd',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">login</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('login',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">channels</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('channels',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">current_city</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('current_city',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">interactions</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('interactions',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">createdAt</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('createdAt',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">updatedAt</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('updatedAt',array('class'=>'form-control')) ?></div>
	</div>
		
	
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Modifier" /> <a class="btn btn-link" href="<?php echo $this->getLink('user::list')?>">Annuler</a>
	</div>
</div>
</form>

