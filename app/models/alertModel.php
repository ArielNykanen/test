<?php
    require_once 'model.php';
    require_once '../app/bl/BLAdmins.php';

class UsersModel implements Imodel {

  private $admin_id;
  private $admin_name;
  private $admin_role;
  private $admin_phone;
  private $admin_email;
  private $admin_password;

  public function __construct($arr) {
    if (!empty($arr['admin_id']))
    $this->flight_id = $arr['admin_id'];

    $this->admin_name = $arr["admin_name"];
    $this->admin_role = $arr["admin_role"];
    $this->admin_phone = $arr["admin_phone"];
    $this->admin_email = $arr["admin_email"];
    $this->admin_password = $arr["admin_password"];
  
  }

function __get($data){
    return $this->$data;
  
}

function __set($data, $data2){

}



// Lazy load
//  function someModel() {
//   if (empty($this->someModel)) {
//       $sbl= new BusinessLogicSome();
//       $this->someModel = $pbl->getOne($this->some_id);
//   }
//   return $this->someModel;
// }

}

?>