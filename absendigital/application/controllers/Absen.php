<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller{
    
    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        print_r(date("D"));
    }
}