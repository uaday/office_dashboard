<?php
/**
 * Created by PhpStorm.
 * User: Sudipta
 * Date: 11/5/2017
 * Time: 12:49 AM
 */
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index()
    {
        $data['hero_header'] = TRUE;
        $data['main_content'] = $this->load->view('dashboard/view_dashboard', $data, TRUE);
        $this->load->view('view_master',$data);
    }
}

