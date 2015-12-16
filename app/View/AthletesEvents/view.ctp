
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
			
			<ul class="list-group">			
						<li class="list-group-item"><?php echo $this->Html->link(__('Edit Athletes Event'), array('action' => 'edit', $athletesEvent['AthletesEvent']['id']), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Form->postLink(__('Delete Athletes Event'), array('action' => 'delete', $athletesEvent['AthletesEvent']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $athletesEvent['AthletesEvent']['id'])); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Athletes Events'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Athletes Event'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('controller' => 'athletes', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'athletes', 'action' => 'add'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?> </li>
		<li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- /.list-group -->
			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="athletesEvents view">

			<h2><?php  echo __('Athletes Event'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($athletesEvent['AthletesEvent']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Athlete'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($athletesEvent['Athlete']['name'], array('controller' => 'athletes', 'action' => 'view', $athletesEvent['Athlete']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Event'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($athletesEvent['Event']['title'], array('controller' => 'events', 'action' => 'view', $athletesEvent['Event']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
