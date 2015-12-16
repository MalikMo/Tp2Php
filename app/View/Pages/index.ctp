<div id="page-container" class="row">
    <div class="container">



        <div class="actions">

            <ul class="list-group">
                <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                    <div class="dropdown">
                        <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?= __('Athlete Menu') ?> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                    <li class="list-group-item"><?php echo $this->Html->link(__('List Athletes'), array('controller' => 'athletes', 'action' => 'index'), array('class' => '')); ?></li>         
               
                    
                        </ul>
                    </div>
                <?php endif ?>
                <?php if ($this->Session->read('Auth.User.role') == "admin"): ?>
                    <div class="dropdown">
                        <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?= __('User Menu') ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li class="list-group-item"><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index'), array('class' => '')); ?></li> 
                            <li class="list-group-item"><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'), array('class' => '')); ?></li>

                        </ul>
                    </div>
                <?php endif ?>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?= __('Sport Menu') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Sports'), array('controller' => 'sports', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                            <li class="list-group-item"><?php echo $this->Html->link(__('New Sport'), array('controller' => 'sports', 'action' => 'add'), array('class' => '')); ?></li> 
                        <?php endif ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?= __('Review Menu') ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Reviews'), array('controller' => 'reviews', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                            <li class="list-group-item"><?php echo $this->Html->link(__('New Review'), array('controller' => 'reviews', 'action' => 'add'), array('class' => '')); ?></li> 
                        <?php endif ?>
                    </ul>
                </div>
                <div class="dropdown">
                    <a href="#" class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown"><?= __('Event Menu') ?>  <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li class="list-group-item"><?php echo $this->Html->link(__('List Events'), array('controller' => 'events', 'action' => 'index'), array('class' => '')); ?></li>
                        <?php if ($this->Session->read('Auth.User.role') == "admin" || $this->Session->read('Auth.User.role') == "user"): ?>
                            <li class="list-group-item"><?php echo $this->Html->link(__('New Event'), array('controller' => 'events', 'action' => 'add'), array('class' => '')); ?></li>  
                        <?php endif ?>
                    </ul>
                </div>




            </ul><!-- /.list-group -->

        </div><!-- /.actions -->



        <div class="jumbotron">
            <p style="text-align:center; "> <?php echo $this->Html->image("dessinAnimate.svg", array('controller' => 'pages',
                'action' => 'display','escape' => false, 'height' => '600px'));?> </p>
            <h1>About the Olympic website!</h1> 
            <p>This page is my php class Project...</p>
            <p>Malik Mottawi</p>
            <p>420-267 MO Développer un site Web et une application pour Internet</p>
            <p>Automne 2015, Collège Montmorency</p>
            <p>Dans Athlete, Vous pouvez ajouter ou modifier et visionner un images.</p>
            <p>Il existe aussi dans Athlete une liste dynamique ou subcategorie change selon le categorie selectionner.</p>
            <p>Dans Sport, Vous avez l'auto complete qui va chercher les donnes similaires dans la base de donnes.</p>
            <p>Lorsqu'un utilisateur crée un compte, il recoit un message email qui lui permet d'activer son compte.</p>
            <p>Si un utilisateur se connect avec un compte non activé, il ne pourrait pas voir les informations supplémentaire des athletes dans l'index des athletes :</p>
            <p><li>Versus</li> </p>
            <p><li>Sport</li> </p>
            <p><li>User</li></p>
            <p><li>Subcategories</li> </p>
            <p><li>Action</li> </p>
            <p>Lorsque le administrateur crée un utilisateur, il ne recoit pas de email car on considère que l'admin crée un utilisateur actif.</p>
            <p>Pour Tester : </p>
            <p><li>admin/admin est activer (admin)</li> </p>
            <p><li>user/user est activer (user)</li> </p>
            <p><li>exemple/exemple n'est pas activer (visitor)</li></p>
            <a href="http://www.databaseanswers.org/data_models/olympic_sports/index.htm"> Lien vers le model exemple</a>
        </div>

        <img src="http://www.databaseanswers.org/data_models/olympic_sports/images/data_model_inheritance_with_entities.gif">
    </div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->