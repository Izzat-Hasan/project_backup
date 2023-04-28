<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
      $data = [
        'title' => 'Distributor Orders',
        'description' => 'This is an application to manage Distributor Orders for IDEA Corporation'
      ];
     
      $this->view('pages/index', $data);
    }

    public function google(){
      $data = [
        'title' => 'About Us',
        'description' => 'We are using this app to learn about PHP coding with databases.'
      ];

      $this->view('pages/google', $data);
    }
  }