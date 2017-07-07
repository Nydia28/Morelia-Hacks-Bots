<?php

/**
 *
 */
class Info_facebook extends CI_Controller
{

  function __construct()
  {
    $this->load->database();
  }

public function get_info_facebook($id = FALSE) {
  if($id === FALSE) {
    $query= $this->db->get('post');
    return $query->result_array();
  }
  $query = $this->db->get_where('post', array('id'=>$id));
  return $query->row_array();

}

}



 ?>
