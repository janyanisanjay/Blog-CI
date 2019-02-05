<?php
class User extends MY_Controller
{
    public function index()
    {
//        $this->load->helper('html');
        $this->load->model("User_model");
        $article=$this->User_model->display_articles();
//        print_r($article);
//        exit;
        $this->load->view('User/User',['article'=>$article]);
    }
}
?>