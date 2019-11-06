<?php 
    class Admin extends MY_Controller {

        public function index(){
            $this->form_validation->set_rules('username','Username','required');
            $this->form_validation->set_rules('password','Password','required');

            if($this->form_validation->run()){
                echo "Validation Successful";
            }
            else {
               $this->load->view('Users/ArticleList');

            }


        }
        
    }
?>