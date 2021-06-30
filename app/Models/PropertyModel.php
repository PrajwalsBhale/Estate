<?php


// namespace App\Models;

// use CodeIgniter\Model;
// use CodeIgniter\Database\ConnectionInterface;


// class PropertyModel extends Model
// {
//   protected $db;
//   public function _construct(ConnectionInterface &$db)
//   {
//     $this->db = &$db;
//   }
   
//     public function get_property($id){
//       return $this->db->table('property, property_image')
//                       ->select('property.property_id , property_image.image_name')
//                       ->where('property.property_id = property_image.property_id')
//                       ->where('property.property_id', $id)
//                       ->get()
//                       ->getResultArray();
//     }
// }