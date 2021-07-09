<?php namespace App\Models;

use CodeIgniter\Model;

class PropertyModel extends Model{
  protected $table = 'property';
  protected $primaryKey = 'property_id';

  protected $allowedFields = ['property_title','property_description','property_address','property_city','property_state','property_country','property_zipcode','property_type','property_status','property_price','property_features','property_image','property_areasize','property_bedrooms','property_bathrooms','property_garages','user_id'];
 
  public function getProperty($id){
    return $this->db->table('property')->select('*')
                                    ->join('users','property.user_id = users.user_id')
                                    ->where('property.user_id',$id)
                                    ->get()
                                    ->getResultArray();
  }
  public function getPropertySingle($id){
    return $this->db->table('property')->select('*')
                                    ->join('users','property.user_id = users.user_id')
                                    ->where('property.property_id',$id)
                                    ->get()
                                    ->getResultArray();
  }

}
