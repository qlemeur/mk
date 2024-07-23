<table class="table table-striped">
	<tr>
		
		<th>ville_departement</th>
		
		<th>ville_slug</th>
		
		<th>ville_nom</th>
		
		<th>ville_nom_simple</th>
		
		<th>ville_nom_reel</th>
		
		<th>ville_nom_soundex</th>
		
		<th>ville_nom_metaphone</th>
		
		<th>ville_code_postal</th>
		
		<th>ville_commune</th>
		
		<th>ville_code_commune</th>
		
		<th>ville_arrondissement</th>
		
		<th>ville_canton</th>
		
		<th>ville_amdi</th>
		
		<th>ville_population_2010</th>
		
		<th>ville_population_1999</th>
		
		<th>ville_population_2012</th>
		
		<th>ville_densite_2010</th>
		
		<th>ville_surface</th>
		
		<th>ville_longitude_deg</th>
		
		<th>ville_latitude_deg</th>
		
		<th>ville_longitude_grd</th>
		
		<th>ville_latitude_grd</th>
		
		<th>ville_longitude_dms</th>
		
		<th>ville_latitude_dms</th>
		
		<th>ville_zmin</th>
		
		<th>ville_zmax</th>
		
		<th></th>
	</tr>
	<?php if($this->tVilles_france_free):?>
		<?php foreach($this->tVilles_france_free as $oVilles_france_free):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oVilles_france_free->ville_departement ?></td>
		
		<td><?php echo $oVilles_france_free->ville_slug ?></td>
		
		<td><?php echo $oVilles_france_free->ville_nom ?></td>
		
		<td><?php echo $oVilles_france_free->ville_nom_simple ?></td>
		
		<td><?php echo $oVilles_france_free->ville_nom_reel ?></td>
		
		<td><?php echo $oVilles_france_free->ville_nom_soundex ?></td>
		
		<td><?php echo $oVilles_france_free->ville_nom_metaphone ?></td>
		
		<td><?php echo $oVilles_france_free->ville_code_postal ?></td>
		
		<td><?php echo $oVilles_france_free->ville_commune ?></td>
		
		<td><?php echo $oVilles_france_free->ville_code_commune ?></td>
		
		<td><?php echo $oVilles_france_free->ville_arrondissement ?></td>
		
		<td><?php echo $oVilles_france_free->ville_canton ?></td>
		
		<td><?php echo $oVilles_france_free->ville_amdi ?></td>
		
		<td><?php echo $oVilles_france_free->ville_population_2010 ?></td>
		
		<td><?php echo $oVilles_france_free->ville_population_1999 ?></td>
		
		<td><?php echo $oVilles_france_free->ville_population_2012 ?></td>
		
		<td><?php echo $oVilles_france_free->ville_densite_2010 ?></td>
		
		<td><?php echo $oVilles_france_free->ville_surface ?></td>
		
		<td><?php echo $oVilles_france_free->ville_longitude_deg ?></td>
		
		<td><?php echo $oVilles_france_free->ville_latitude_deg ?></td>
		
		<td><?php echo $oVilles_france_free->ville_longitude_grd ?></td>
		
		<td><?php echo $oVilles_france_free->ville_latitude_grd ?></td>
		
		<td><?php echo $oVilles_france_free->ville_longitude_dms ?></td>
		
		<td><?php echo $oVilles_france_free->ville_latitude_dms ?></td>
		
		<td><?php echo $oVilles_france_free->ville_zmin ?></td>
		
		<td><?php echo $oVilles_france_free->ville_zmax ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('villes_france_free::edit',array(
										'id'=>$oVilles_france_free->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('villes_france_free::delete',array(
										'id'=>$oVilles_france_free->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('villes_france_free::show',array(
										'id'=>$oVilles_france_free->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="27">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('villes_france_free::new') ?>">New</a></p>
			
