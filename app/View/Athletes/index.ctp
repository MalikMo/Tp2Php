
<div id="page-container" class="row">
<div class="container">
  
    <div id="sidebar" class="col-sm-3">
   
        <div class="actions">

            <ul class="list-group">
                <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=__('Athlete Menu')?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <?php if ($this->Session->read('Auth.User.active')):?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Athlete'), array('action' => 'add'), array('class' => '')); ?></li>
                        <?php endif ?>
                    </ul>
                </div>
                <?php endif ?>
                <?php if ($this->Session->read('Auth.User.role') == "admin"): ?>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=__('User Menu')?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
                        <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li>

                    </ul>
                </div>
                <?php endif ?>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=__('Sport Menu')?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 
                        <?php endif ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=__('Review Menu')?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 
                        <?php endif ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?=__('Event Menu')?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                        <li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li>  
                        <?php endif ?>
                    </ul>
                </div>
                



            </ul><!-- /.list-group -->

        </div><!-- /.actions -->

    </div><!-- /#sidebar .col-sm-3 -->

    <div id="page-content" class="col-sm-9">

        <div class="athletes index">

            <h2><?php echo __('Athletes'); ?></h2>

            <div class="table-responsive">
                <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th><?php echo $this->Paginator->sort('name'); ?></th>
                            <th><?php echo $this->Paginator->sort('events'); ?></th>
                            <?php if ($this->Session->read('Auth.User.active')):?>
                            <th><?php echo $this->Paginator->sort('versus'); ?></th>
                            <?php endif ?>
                            <?php if ($this->Session->read('Auth.User.active')):?>
                            <th><?php echo $this->Paginator->sort('user_id'); ?></th>
                            <?php endif ?>
                            <?php if ($this->Session->read('Auth.User.active')):?>
                            <th><?php echo $this->Paginator->sort('sport_id'); ?></th>
                            <?php endif ?>
                            <?php if ($this->Session->read('Auth.User.active')):?>
                            <th><?php echo $this->Paginator->sort('subcategories_id'); ?></th><?php endif ?>
                            <?php if ($this->Session->read('Auth.User.active')):?>
                            <th class="actions"><?php echo __('Actions'); ?></th>
                            <?php endif ?>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($athletes as $athlete): ?>
                            <tr>
                                <td><?php echo h($athlete['Athlete']['name']); ?>&nbsp;</td>
                                <td><?php 
                    foreach ($athlete['Event'] as $event) { 
                        //echo h($event['Id']) . ' '; 
                        //echo $this->Html->tag('span', $event['title'] . ' ', array('class' => 'label label-info')) . " &nbsp;";
                        echo $this->Html->link($event['title'], array('controller' => 'events', 'action' => 'view', $event['id']), array('class' => 'label label-info')) . "&nbsp;" ;
                    } 
                    ?>
                    &nbsp;</td>
                                <?php if ($this->Session->read('Auth.User.active')):?>
                                <td><?php echo h($athlete['Athlete']['versus']); ?>&nbsp;</td>
                                <?php endif ?>
                                <?php if ($this->Session->read('Auth.User.active')):?>
                                <td>
                                    <?php echo $this->Html->link($athlete['User']['username'], array('controller' => 'users', 'action' => 'view', $athlete['User']['id'])); ?>
                                </td>
                                <?php endif ?>
                                <?php if ($this->Session->read('Auth.User.active')):?>
                                <td>
                                    <?php echo $this->Html->link($athlete['Sport']['sport'], array('controller' => 'sports', 'action' => 'view', $athlete['Sport']['sport'])); ?>
                                </td>
                                <?php endif ?>
                                <?php if ($this->Session->read('Auth.User.active')):?>
                                <td>
                                    <?php echo h($athlete['Subcategory']['name']); ?>
                                </td>
                                <?php endif ?>
                                <?php if ($this->Session->read('Auth.User.active')):?>
                                <td class="actions">
                                    <?php echo $this->Html->link(__('View'), array('action' => 'view', $athlete['Athlete']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                                    <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"  ): ?>
                                    <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $athlete['Athlete']['id']), array('class' => 'btn btn-info btn-xs')); ?>
                                    <?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $athlete['Athlete']['id']), array('class' => 'btn btn-info btn-xs'), __('Are you sure you want to delete # %s?', $athlete['Athlete']['id'])); ?>
                                    <?php endif ?>
                                    
                                </td>
                                <?php endif ?>
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