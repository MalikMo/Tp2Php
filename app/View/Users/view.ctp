
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		 <div class="actions">




            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Athlete Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('controller' => 'athletes', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Athlete'), array('action' => 'add'), array('class' => '')); ?></li>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('User Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li>
                    <li class="list-group-item"><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
                    <li class="list-group-item"><?php echo $this->Form->postLink(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => ''), __('Are you sure you want to edit # %s?', $user['User']['id'])); ?> </li>
                    <li class="list-group-item"><?php echo $this->Form->postLink(__('Add User'), array('action' => 'add', $user['User']['id']), array('class' => ''), __('Are you sure you want to add # %s?', $user['User']['id'])); ?> </li>

                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Sport Menu')?>  <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 

                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Review Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 

                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Event Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li>  

                </ul>

            </div><!-- /.list-group -->

        </div><!-- /.actions -->

	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Username'); ?></strong></td>
		<td>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</td>
</tr><tr>	
</tr><tr>		<td><strong><?php echo __('Role'); ?></strong></td>
		<td>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($user['User']['email']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Athletes'); ?></h3>
				
				<?php if (!empty($user['Athlete'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Versus'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Sport Id'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($user['Athlete'] as $athlete): ?>
		<tr>
			<td><?php echo $athlete['id']; ?></td>
			<td><?php echo $athlete['name']; ?></td>
			<td><?php echo $athlete['versus']; ?></td>
			<td><?php echo $athlete['user_id']; ?></td>
			<td><?php echo $athlete['sport_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'athletes', 'action' => 'view', $athlete['id']), array('class' => 'btn btn-info btn-xs')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'athletes', 'action' => 'edit', $athlete['id']), array('class' => 'btn btn-info btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'athletes', 'action' => 'delete', $athlete['id']), array('class' => 'btn btn-info btn-xs'), __('Are you sure you want to delete # %s?', $athlete['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Athlete'), array('controller' => 'athletes', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- /.actions -->
				
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
