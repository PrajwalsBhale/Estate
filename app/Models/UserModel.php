<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
  protected $table = 'users';
  protected $primaryKey = 'user_id';

  protected $allowedFields = ['user_firstname', 'user_lastname', 'user_email', 'user_contact','user_username','user_password','timestamp'];
 
 


}
