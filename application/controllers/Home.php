<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
                'nama' => "Putri Indah Mawarni",
                'alamat' => "Malang",
                'email' => "putri.pi1188@gmail.com",                
                );

        $data["tugas"] = array('Ngoding', 'Nyuci', 'Makan siang');
        
        $this->load->view('home',$data);
        
    }

}

/* End of file Controllername.php */
?>