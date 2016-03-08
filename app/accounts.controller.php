
<?php
/*
*
*/


class AccountsController{

  public function __construct($app) {

    $this->routing($app);


  }

  public function routing($app) {

    $app->get('/accounts/create', function ($req, $res) {

      AccountsController::SignupModel();

    });

  }

  private static function SignupModel() {
    // create account
    $res = array(
      "message" => "Signup Successful",
      "results" => array(
        "user_id" => 1,
        "user_name" => "John Waweru",
        "timestamp" => "Today"
      ),
      "signed_up" => true
    );
    
    echo json_encode($res);

  }


}