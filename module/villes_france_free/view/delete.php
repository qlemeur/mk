<form class="form-horizontal" action="" method="POST">

	
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_departement</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_departement ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_slug</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_slug ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_nom ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_simple</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_nom_simple ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_reel</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_nom_reel ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_soundex</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_nom_soundex ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_nom_metaphone</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_nom_metaphone ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_code_postal</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_code_postal ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_commune</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_commune ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_code_commune</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_code_commune ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_arrondissement</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_arrondissement ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_canton</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_canton ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_amdi</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_amdi ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_2010</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_population_2010 ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_1999</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_population_1999 ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_population_2012</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_population_2012 ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_densite_2010</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_densite_2010 ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_surface</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_surface ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_deg</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_longitude_deg ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_deg</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_latitude_deg ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_grd</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_longitude_grd ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_grd</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_latitude_grd ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_longitude_dms</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_longitude_dms ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_latitude_dms</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_latitude_dms ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_zmin</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_zmin ?></div>
	</div>
		
	<div class="form-group">
		<label class="col-sm-2 control-label">ville_zmax</label>
		<div class="col-sm-10"><?php echo $this->oVilles_france_free->ville_zmax ?></div>
	</div>
		



<input type="hidden" name="token" value="<?php echo $this->token?>" />
<?php if($this->tMessage and isset($this->tMessage['token'])): echo $this->tMessage['token']; endif;?>


<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
		<input class="btn btn-danger" type="submit" value="Confirmer la suppression" /> <a class="btn btn-link" href="<?php echo $this->getLink('villes_france_free::list')?>">Annuler</a>
	</div>
</div>

</form>
