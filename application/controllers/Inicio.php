<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url','form','security'));
        $this->load->library(array('form_validation','session'));
    }

    public function index()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('inicio');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }

    public function publicos()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('servidores_publicos');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }

    public function candidatos()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('candidatos');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }

    public function federales()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('publicos/federales');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }

    public function estatales()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('publicos/estatales');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }

    public function municipales()
    {
        $this->load->view('theme/header');
        $this->load->view('theme/nav');
        $this->load->view('publicos/municipales');
        $this->load->view('theme/scripts');
        $this->load->view('theme/footer');
    }
}
