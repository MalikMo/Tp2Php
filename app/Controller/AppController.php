<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
    public $theme = "Cakestrap";
     public $helpers = array('I18n.I18n');
     public $components = array(
         'DebugKit.Toolbar',
        'Flash',
        'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'athletes',
                'action' => 'index'
            ),
            'logoutRedirect' => array(
                'controller' => 'athletes',
                'action' => 'index',
                'home'
            ),'unauthorizedRedirect' => array(
                'controller' => 'athletes',
                'action' => 'index',
            ),
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            ),
            'authorize' => array('Controller')
        )
    );

    public function beforeFilter() {
        $this->Auth->allow('display');
    }
    
    public function isAuthorized($user) {
        // Admin can access every action
        if (isset($user['role']) && $user['role'] === 'admin') {
            return true;
        }

        // Default deny
        $this->Session->setFlash("This action is not authorized");
        return false;
    }
}
