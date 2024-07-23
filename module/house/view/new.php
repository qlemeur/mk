<?php 
$oForm=new plugin_form($this->oHouse);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >

	
	<div class="form-group">
		<label class="col-sm-2 control-label">channel</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('channel',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">rewards</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('rewards',array('class'=>'form-control')) ?></div>
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
		<input type="submit" class="btn btn-success" value="Ajouter" /> <a class="btn btn-link" href="<?php echo $this->getLink('house::list')?>">Annuler</a>
	</div>
</div>
</form>
