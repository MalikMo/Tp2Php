
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		 <div class="actions">



            
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Athlete Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('action' => 'index')); ?></li>

                </ul>
            </div>
             
                     <?php if ($this->Session->read('Auth.User.role') == "admin"): ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('User Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li>

                </ul>
            </div>
                     <?php endif ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Sport Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php endif ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Review Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php endif ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Event Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li> 
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li>  
                    <?php endif ?>
                </ul>

            </div><!-- /.list-group -->

        </div><!-- /.actions -->

		
	</div><!-- /#sidebar .span3 -->
	
	<div id="page-content" class="col-sm-9">
		
		<div class="athletes view">

			<h2><?php  echo __('Athlete'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($athlete['Athlete']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($athlete['Athlete']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Versus'); ?></strong></td>
		<td>
			<?php echo h($athlete['Athlete']['versus']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($athlete['User']['username'], array('controller' => 'users', 'action' => 'view', $athlete['User']['username']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Sport'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($athlete['Sport']['sport'], array('controller' => 'sports', 'action' => 'view', $athlete['Sport']['sport']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

					
			<div class="related">

				<h3><?php echo __('Related Reviews'); ?></h3>
				
				<?php if (!empty($athlete['Review'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Athlete Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Text'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($athlete['Review'] as $review): ?>
		<tr>
			<td><?php echo $review['id']; ?></td>
			<td><?php echo $review['athlete_id']; ?></td>
			<td><?php echo $review['name']; ?></td>
			<td><?php echo $review['email']; ?></td>
			<td><?php echo $review['text']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'reviews', 'action' => 'view', $review['id']), array('class' => 'btn btn-info btn-xs')); ?>
                            <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'reviews', 'action' => 'edit', $review['id']), array('class' => 'btn btn-info btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'reviews', 'action' => 'delete', $review['id']), array('class' => 'btn btn-info btn-xs'), __('Are you sure you want to delete # %s?', $review['id'])); ?>
                            <?php endif ?>
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				<?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>			
                                </div><!-- /.actions -->
				<?php endif; ?>
			</div><!-- /.related -->

					
			<div class="related">

				<h3><?php echo __('Related Events'); ?></h3>
				
				<?php if (!empty($athlete['Event'])): ?>
					
					<div class="table-responsive">
						<table class="table table-striped table-bordered">
							<thead>
								<tr>
											<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Score'); ?></th>
									<th class="actions"><?php echo __('Actions'); ?></th>
								</tr>
							</thead>
							<tbody>
									<?php
										$i = 0;
										foreach ($athlete['Event'] as $event): ?>
		<tr>
			<td><?php echo $event['id']; ?></td>
			<td><?php echo $event['title']; ?></td>
			<td><?php echo $event['score']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'events', 'action' => 'view', $event['id']), array('class' => 'btn btn-info btn-xs')); ?>
                             <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'events', 'action' => 'edit', $event['id']), array('class' => 'btn btn-info btn-xs')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'events', 'action' => 'delete', $event['id']), array('class' => 'btn btn-info btn-xs'), __('Are you sure you want to delete # %s?', $event['id'])); ?>
                                    <?php endif ?>
                            
			</td>
		</tr>
	<?php endforeach; ?>
							</tbody>
						</table><!-- /.table table-striped table-bordered -->
					</div><!-- /.table-responsive -->
					
				<?php endif; ?>

				<?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>			
                                </div><!-- /.actions -->
				<?php endif; ?>
			</div><!-- /.related -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
