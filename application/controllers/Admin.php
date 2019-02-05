<?php
class Admin extends MY_Controller
{
    public function __construct() {        
    parent::__construct();
//    if($this->session->userdata('id'))
//        return redirect("Admin/login");
}
    public function login()
    {
//        $this->load->view("Admin/Admin");
//        $this->load->library('form_validation');
        $this->form_validation->set_rules('username','User Name','required|alpha');
        $this->form_validation->set_rules('password','Password','required|max_length[15]');
        if($this->form_validation->run())
        {
            $username=$this->input->post('username');
            $password=$this->input->post('password');
            $this->load->model("Login_model");
            
            $id=$this->Login_model->validate($username,$password);
           if($id)
           {
               $this->load->library('session');
               $this->session->set_userdata('id',$id);
               return redirect('Admin/welcome');
           }
           else
           {
            $this->session->set_flashdata('Login_failed',"Invalid Username or Password");   
//            echo "not Match";        
            return redirect("Admin/login");    
           }
        }
        else
        {
            $this->load->view("Admin/Admin");
        }
    }
    
    
    
    public function welcome()
    {
//        $this->load->library('session');
//        if($this->session->userdata('id')){
//            return redirect("login");
//        }
        $this->load->model("Login_model");
        $articles=$this->Login_model->article_list();
        $this->load->view("Admin/Admin_dashboard",['articles'=>$articles]);
        
    }
    public function logout()
    {   
        $this->session->unset_userdata('id');
        return redirect("Admin/login");
    }
    
    public function add_article()
    {
        $this->load->view("Admin/Add_article");
    }
    
    
    
    
    public function article_form_validate()
    {
        $config=[
            'upload_path'=>'./upload/',
            'allowed_types'=>'gif|jpg|png',
        ];
        $this->load->library('upload',$config);
        
        if($this->form_validation->run('add_article') && $this->upload->do_upload())
        {   
//            echo "right";
//            
            $post=$this->input->post();
            
            $data=$this->upload->data();//full details of file
//            print_r($data);
//            exit;
            $image_path = base_url("upload/".$data['raw_name'].$data['file_ext']);
            $post['image_path']=$image_path;
            $this->load->model("Login_model");
            if($this->Login_model->insert_article($post))
            {
            $this->session->set_flashdata('insert_msg',"Article added Successfully");
            return redirect("Admin/welcome");
            }
                
                
        }
        else{
//            echo "error";
            $upload_error=$this->upload->display_errors();
//            print_r(compact('upload_error'));
            $this->load->view("Admin/Add_article",compact('upload_error'));
        }
    }
    
    
    
    
    public function edit_article($id)
    {
        $this->load->model("Login_model");
        $r=$this->Login_model->edit_article($id);
//        print_r($r);
//        exit;
        $this->load->view("Admin/Edit_article",['r'=>$r]);
//        print_r($r);
//        echo $id;
    }
    

    public function update_article()
    {
        
        
        $post=$this->input->post();
//        print_r($post);
        $this->load->model("Login_model");
        if($this->Login_model->update_article($post))
        {
//            echo "updated";
            $this->session->set_flashdata('update_msg',"One Article updated Successfully");
                
            return redirect("Admin/welcome");
        }
    }
    
}


?>



















