
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">




            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Athlete Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('controller' => 'athletes', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Athlete'), array('action' => 'add'), array('class' => '')); ?></li>
                    <?php endif ?>
                </ul>
            </div>
                    <?php if ($this->Session->read('Auth.User.role') == "admin"): ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('User Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                   <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li>

                </ul>
            </div>
                    <?php endif ?>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Sport Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 

                </ul>
            </div>
                    <?php endif ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Review Menu')?><span class="caret"></span></button>
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
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<div class="sports index">
		
			<h2><?php echo __('Sports'); ?></h2>
			
			<div class="table-responsive">
				<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><?php echo $this->Paginator->sort('sport'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
					</thead>
					<tbody>
<?php foreach ($sports as $sport): ?>
	<tr>
		<td><?php echo h($sport['Sport']['sport']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sport['Sport']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sport['Sport']['id']), array('class' => 'btn btn-info btn-xs')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sport['Sport']['id']), array('class' => 'btn btn-info btn-xs'), __('Are you sure you want to delete # %s?', $sport['Sport']['id'])); ?>
                    <?php endif ?>
		</td>
	</tr>
<?php endforeach; ?>
					</tbody>
				</table>
			</div><!-- /.table-responsive -->
			
			<p><small>
				<?php
					echo $this->Paginator->counter(array(
					'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
					));
				?>
			</small></p>

			<ul class="pagination">
				<?php
					echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
					echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'tag' => 'li', 'currentClass' => 'disabled'));
					echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
				?>
			</ul><!-- /.pagination -->
			
		</div><!-- /.index -->
	
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->