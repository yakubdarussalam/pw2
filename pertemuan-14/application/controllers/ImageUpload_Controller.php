<?php 
class ImageUpload_Controller extends CI_Controller
{
    function __construct()
    {
    parent::__construct();
    //load Helper for Form
    $this->load->helper('url', 'form'); 
    $this->load->library('form_validation');
    }
    function index(){
        $this->load->view('imageupload_form');
    }
    function listImage(){
    $this->load->helper('directory'); //load directory helper
    $dir = "upload/"; // Your Path to folder
    $map = directory_map($dir);
    var_dump($map);
    $data['map']=$map;
        $this->load->view('display_image',$data);
    }
    public function upload() 
    {
        $config['upload_path'] = FCPATH.'/upload/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 2000;
  
  
        $this->load->library('upload', $config);
  
        if (!$this->upload->do_upload('profile_pic')) 
        {
            $error = array('error' => $this->upload->display_errors());
  
            $this->load->view('imageupload_form', $error);
        } 
        else
        {
            $data = array('upload_data' => $this->upload->data());
           // $data = array('image_metadata' => $this->upload->data());
           $uploaded_data = $this->upload->data();
           $new_data = [
				'filename' => $uploaded_data['file_name']
		   ];
           $this->load->model('User_model','mdl');
        //    $this->mdl->addImage($new_data);
           $this->load->view('imageupload_success', $data);
        }
    }
  
}
?>