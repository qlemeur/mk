<table class="table table-striped">
	<tr>
		
		<th>channel</th>
		
		<th>rewards</th>
		
		<th>createdAt</th>
		
		<th>updatedAt</th>
		
		<th></th>
	</tr>
	<?php if($this->tHouse):?>
		<?php foreach($this->tHouse as $oHouse):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oHouse->channel ?></td>
		
		<td><?php echo $oHouse->rewards ?></td>
		
		<td><?php echo $oHouse->createdAt ?></td>
		
		<td><?php echo $oHouse->updatedAt ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('house::edit',array(
										'id'=>$oHouse->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('house::delete',array(
										'id'=>$oHouse->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('house::show',array(
										'id'=>$oHouse->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="5">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('house::new') ?>">New</a></p>
			
