<form class="form-horizontal" action="" method="POST">

	
	<div class="form-group">
		<label class="col-sm-2 control-label">username</label>
		<div class="col-sm-10"><?php echo $this->oUser->username ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pid</label>
		<div class="col-sm-10"><?php echo $this->oUser->pid ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">pswd</label>
		<div class="col-sm-10"><?php echo $this->oUser->pswd ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">login</label>
		<div class="col-sm-10"><?php echo $this->oUser->login ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">channels</label>
		<div class="col-sm-10"><?php echo $this->oUser->channels ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">current_city</label>
		<div class="col-sm-10"><?php echo $this->oUser->current_city ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">interactions</label>
		<div class="col-sm-10"><?php echo $this->oUser->interactions ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">createdAt</label>
		<div class="col-sm-10"><?php echo $this->oUser->createdAt ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">updatedAt</label>
		<div class="col-sm-10"><?php echo $this->oUser->updatedAt ?></div>
	</div>
		



<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('user::list')?>">Annuler</a>
	</div>
</div>

</form>
