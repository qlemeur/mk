<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">channel</label>
		<div class="col-sm-10"><?php echo $this->oHouse->channel ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">rewards</label>
		<div class="col-sm-10"><?php echo $this->oHouse->rewards ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">createdAt</label>
		<div class="col-sm-10"><?php echo $this->oHouse->createdAt ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">updatedAt</label>
		<div class="col-sm-10"><?php echo $this->oHouse->updatedAt ?></div>
	</div>
		
	
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
			 <a class="btn btn-default" href="<?php echo $this->getLink('house::list')?>">Retour</a>
		</div>
	</div>
</form>
