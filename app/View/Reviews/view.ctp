
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
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Review Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li> 
                    
                </ul>
            </div>
                     <?php endif ?>
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
		
		<div class="reviews view">

			<h2><?php  echo __('Review'); ?></h2>
			
			<div class="table-responsive">
				<table class="table table-striped table-bordered">
					<tbody>
						<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($review['Review']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Athlete'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($review['Athlete']['name'], array('controller' => 'athletes', 'action' => 'view', $review['Athlete']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($review['Review']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Email'); ?></strong></td>
		<td>
			<?php echo h($review['Review']['email']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Text'); ?></strong></td>
		<td>
			<?php echo h($review['Review']['text']); ?>
			&nbsp;
		</td>
</tr>					</tbody>
				</table><!-- /.table table-striped table-bordered -->
			</div><!-- /.table-responsive -->
			
		</div><!-- /.view -->

			
	</div><!-- /#page-content .span9 -->

</div><!-- /#page-container .row-fluid -->
