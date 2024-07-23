<table class="table table-striped">
	<tr>
		
		<th>username</th>
		
		<th>pid</th>
		
		<th>pswd</th>
		
		<th>login</th>
		
		<th>channels</th>
		
		<th>current_city</th>
		
		<th>interactions</th>
		
		<th>createdAt</th>
		
		<th>updatedAt</th>
		
		<th></th>
	</tr>
	<?php if($this->tUser):?>
		<?php foreach($this->tUser as $oUser):?>
		<tr <?php echo plugin_tpl::alternate(array('','class="alt"'))?>>
			
		<td><?php echo $oUser->username ?></td>
		
		<td><?php echo $oUser->pid ?></td>
		
		<td><?php echo $oUser->pswd ?></td>
		
		<td><?php echo $oUser->login ?></td>
		
		<td><?php echo $oUser->channels ?></td>
		
		<td><?php echo $oUser->current_city ?></td>
		
		<td><?php echo $oUser->interactions ?></td>
		
		<td><?php echo $oUser->createdAt ?></td>
		
		<td><?php echo $oUser->updatedAt ?></td>
		
			<td>
				
				
<a class="btn btn-success" href="<?php echo $this->getLink('user::edit',array(
										'id'=>$oUser->getId()
									) 
							)?>">Edit</a>
			| 
<a class="btn btn-danger" href="<?php echo $this->getLink('user::delete',array(
										'id'=>$oUser->getId()
									) 
							)?>">Delete</a>
			| 
<a class="btn btn-default" href="<?php echo $this->getLink('user::show',array(
										'id'=>$oUser->getId()
									) 
							)?>">Show</a>
			
				
				
			</td>
		</tr>	
		<?php endforeach;?>
	<?php else:?>
		<tr>
			<td colspan="10">Aucune ligne</td>
		</tr>
	<?php endif;?>
</table>

<p><a class="btn btn-primary" href="<?php echo $this->getLink('user::new') ?>">New</a></p>
			
