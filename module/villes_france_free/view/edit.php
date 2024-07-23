<?php 
$oForm=new plugin_form($this->oVilles_france_free);
$oForm->setMessage($this->tMessage);
?>
<form class="form-horizontal" action="" method="POST" >
	
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_departement</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_departement',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_slug</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_slug',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_nom',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_simple</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_nom_simple',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_reel</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_nom_reel',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_soundex</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_nom_soundex',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_metaphone</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_nom_metaphone',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_code_postal</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_code_postal',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_commune</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_commune',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_code_commune</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_code_commune',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_arrondissement</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_arrondissement',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_canton</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_canton',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_amdi</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_amdi',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_2010</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_population_2010',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_1999</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_population_1999',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_2012</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_population_2012',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_densite_2010</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_densite_2010',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_surface</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_surface',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_deg</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_longitude_deg',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_deg</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_latitude_deg',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_grd</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_longitude_grd',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_grd</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_latitude_grd',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_dms</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_longitude_dms',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_dms</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_latitude_dms',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_zmin</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_zmin',array('class'=>'form-control')) ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_zmax</label>
		<div class="col-sm-10"><?php echo $oForm->getInputText('ville_zmax',array('class'=>'form-control')) ?></div>
	</div>
		
	
	

<?php echo $oForm->getToken('token',$this->token)?>

<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input type="submit" class="btn btn-success" value="Modifier" /> <a class="btn btn-link" href="<?php echo $this->getLink('villes_france_free::list')?>">Annuler</a>
	</div>
</div>
</form>

