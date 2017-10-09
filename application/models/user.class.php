<?php
class user extends Model {


  public function __construct() {
    parent::__construct();

  }

  public function __set() {


  }

  public function __get() {


  }

  public function __destruct() {


  }

  public function getName() {
    return array (
      'userID'=>'rykoontz',
      'firstname'=>'Ryan',
      'lastname'=>'Koontz',
      'email'=>'rykoontz@umail.iu.edu',
      'role'=>'Developer'

    );

  }


}

 ?>
