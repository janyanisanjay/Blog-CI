<?php
class User_model extends CI_model
{
    public function display_articles()
    {
        $q=$this->db->query("Select * from article");
        return $q->result_array();
    }
}
?>