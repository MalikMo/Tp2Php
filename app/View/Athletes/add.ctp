
<div id="page-container" class="row">

    <div id="sidebar" class="col-sm-3">

        <div class="actions">




            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?= __('Athlete Menu') ?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('action' => 'index')); ?></li>

                </ul>
            </div>
            <?php if ($this->Session->read('Auth.User.role') == "admin"): ?>
                <div class="dropdown">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?= __('User Menu') ?><span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
                        <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li>

                    </ul>
                </div>
            <?php endif ?>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?= __('Sport Menu') ?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php endif ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?= __('Review Menu') ?><span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 
                    <?php endif ?>
                </ul>
            </div>
            <div class="dropdown">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><?= __('Event Menu') ?> <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li>
                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li>  
                    <?php endif ?>
                </ul>

            </div><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <h2><?php echo __('Add Athlete'); ?></h2>

        <div class="athletes form">

            <?php echo $this->Form->create('Athlete', array('role' => 'form', 'type' => 'file')); ?>

            <fieldset>

                <div class="form-group">
                    <?php echo $this->Form->input('name', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('versus', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('user_id', array('class' => 'form-control', 'default' => $this->Session->read('Auth.User.id'))); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('sport_id', array('class' => 'form-control')); ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php
                    echo $this->Form->input('Event', array(
                        'type' => 'select',
                        'multiple' => 'checkbox'
                    ));
                    ?>
                </div><!-- .form-group -->
                <div class="form-group">
                    <?php echo $this->Form->input('category_id', array('label' => 'Niveau' ,'class' => 'form-control')); ?>
                </div><!-- .form-group --> 
                <div class="form-group">
                    <?php echo $this->Form->input('subcategory_id', array('label' => 'Concentration' ,'class' => 'form-control')); ?>
                </div><!-- .form-group -->   
                <div class="form-group">
                    <?php echo $this->Form->input('athlete_image', array('type' => 'file')); ?>
                </div><!-- .form-group -->

                <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-info')); ?>

            </fieldset>

            <?php echo $this->Form->end(); ?>

        </div><!-- /.form -->

    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->
<?php
$this->Js->get('#AthleteCategoryId')->event('change', $this->Js->request(array(
            'controller' => 'subcategories',
            'action' => 'getByCategory'
                ), array(
            'update' => '#AthleteSubcategoryId',
            'async' => true,
            'method' => 'post',
            'dataExpression' => true,
            'data' => $this->Js->serializeForm(array(
                'isForm' => true,
                'inline' => true
            ))
        ))
);
?>