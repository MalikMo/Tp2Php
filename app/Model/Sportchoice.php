<?php
  class Sportchoice extends AppModel {

    public function getSportchoicesNames ($term = null) {
      if(!empty($term)) {
        $sportChoices = $this->find('list', array(
          'conditions' => array(
            'name LIKE' => trim($term) . '%'
          )
        ));
        return $sportChoices;
      }
      return false;
    }
  }