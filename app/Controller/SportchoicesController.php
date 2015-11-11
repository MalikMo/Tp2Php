<?php
  class SportchoicesController extends AppController {

    public $components = array('RequestHandler');
    
    public function add() {
  if ($this->request->is('ajax')) {
        $term = $this->request->query('term');
        $sportChoicesNames = $this->Sportchoice->getSportchoicesNames($term);
        $this->set(compact('sportChoicesNames'));
        $this->set('_serialize', 'sportChoicesNames');
      }
    }
  }
