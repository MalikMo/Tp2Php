
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">
		
			<ul class="list-group">
				<li class="list-group-item"><?php echo $this->Html->link(__('List Athletes Events'), array('action' => 'index')); ?></li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('controller' => 'athletes', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Athlete'), array('controller' => 'athletes', 'action' => 'add')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index')); ?> </li>
				<li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add')); ?> </li>
			</ul><!-- /.list-group -->
		
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Athletes Event'); ?></h2>

		<div class="athletesEvents form">
		
			<?php echo $this->Form->create('AthletesEvent', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('athlete_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('event_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->

					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->