<?php
class Login_model extends CI_Model
{
    public function validate($username,$password)
    {
        $q=$this->db->where(['username'=>$username,'password'=>$password])->get('user');
        if($q->num_rows())
        {
        return $q->row()->id;
        }
        else
        {
            return false;
        }
    }
    
    public function article_list()
    {
        
        $id=$this->session->userdata('id');
//        echo $id;
        $q=$this->db->query("Select * from article where user_id=$id");
//        $result=$q->result();
//        $q=$this->db->select('article_title')->from->('article')->where(['id'=>$id])->get();
//          $q=$this->db->select('*')->from('article')->where(['id'=>$id])->get();

//        print_r($q->result());
//        exit;
        return $q->result_array();
    }
    
    public function insert_article($array)
    {
        return $this->db->insert('article',$array);
    }
    
    public function edit_article($id)
    {
        
        $q=$this->db->select(['id','article_title','article_body'])
                    ->where('id',$id)
                    ->get('article');
        return $q->row();
    }
    
    public function update_article($array)
    {
       return $this->db->where('id',$array['id'])->update('article',$array);
    }
}
?>