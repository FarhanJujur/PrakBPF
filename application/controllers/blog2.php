<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Blog2 extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $data['judul'] = "Hann Blog";
        $data['isi'] = "Boku wa Shadow";
        $out = $this->load->view("blog_view", $data, true);
        echo $out;
    }
}
?>