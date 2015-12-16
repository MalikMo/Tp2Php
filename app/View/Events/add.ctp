
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
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Sport Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 

                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Review Menu')?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li> 
                    <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 

                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?=__('Event Menu')?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li>   

                </ul>

            </div><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <h2><?php echo __('Add Event'); ?></h2>

        <div class="events form">

            <?php echo $this->Form->create('Event', array('role' => 'form')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('title', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('score', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php
                    echo $this->Form->input('Athlete', array(
                        'type' => 'select',
                        'multiple' => 'checkbox'
                    ));
                    ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->