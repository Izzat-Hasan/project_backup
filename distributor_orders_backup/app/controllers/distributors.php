<?php
Class Distributors extends Controller{
    public function __construct(){
        if(!isLoggedIn()){
            redirect('users/login');
        }

        $this->distributorModel = $this->model('Distributor');
    }
    public function index(){
        $distributors = $this->distributorModel->getDistributors();
        $data = ['distributors'=> $distributors];
        $this->view('distributors/index', $data);
    }

    public function show($id){
        $distributor = $this->distributorModel->getDistributorById($id);
        $data = [
            'distributor' =>$distributor,
        ];

        $this->view('distributors/show', $data);
    }

    public function delete($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if($this->distributorModel->deleteDistributor($id)){
            redirect('distributors');
          } else {
            die('Something went wrong');
          }
        } else {
          redirect('distributors');
        }
      }
      public function add(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize post array
          $_post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
            'distributor_name' => trim($_post['distributor_name']),
            'distributor_email' => trim($_post['distributor_email']),
            'distributor_number' => trim($_post['distributor_number']),
            'email_err' => '',
            'name_err' => '',
            'number_err' => ''
   
          ];
  
          // Validate data
          if(empty($data['distributor_name'])){
            $data['name_err'] = 'Please enter a name';
          }
          if(empty($data['distributor_number'])){
              $data['number_err'] = 'Please enter a number';
            }
          if(empty($data['distributor_email'])){
            $data['email_err'] = 'Please enter an email';
          }

  
          // Make sure no errors
          if(empty($data['name_err']) && empty($data['email_err']) && empty($data['number_err'])){
            // Validated
      
            if($this->distributorModel->addDistributor($data)){
              redirect('distributors');
            } else {
              die('Something went wrong');
            }
          } else {
            // Load view with errors
            $this->view('distributors/add', $data);
          }
  
        } else {
          $data = [
            'email_err' => '',
            'name_err' => '',
            'number_err' => ''
        
          ];
    
          $this->view('distributors/add', $data);
        }
      }
      public function edit($id){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
          // Sanitize post array
          $_post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
          $data = [
               'id' => $id,
              'distributor_name' => trim($_post['distributor_name']),
              'distributor_email' => trim($_post['distributor_email']),
              'distributor_number' => trim($_post['distributor_number']),
              'name_err' => '',
              'email_err' => '',
              'number_err' => ''

            ];
    
  
          // Validate data
          if(empty($data['distributor_name'])){
              $data['name_err'] = 'Please enter a distributor name name';
          }
          if(empty($data['distributor_email'])){
              $data['email_err'] = 'Please enter a distributor email';
          }
          if(empty($data['distributor_number'])){
          $data['number_err'] = 'Please enter a enter a number';
          }
          
  
          // Make sure no errors
          if(empty($data['name_err']) && empty($data['email_err']) && empty($data['number_err'])){
            // Validated
            if($this->distributorModel->updateDistributor($data)){
              redirect('distributors');          
            } else {
              die('Something went wrong');
            }
            
            
          } else {
            // Load view with errors
            $this->view('distributors/edit', $data);
          }
  
        } else {
          $distributor = $this->distributorModel->getDistributorById($id);
  
  
          $data = [
            'id' => $id,
            'distributor_name' => $distributor->distributor_name,
            'distributor_email' => $distributor->distributor_email,
            'distributor_number' => $distributor->distributor_number

          ];
    
          $this->view('distributors/edit', $data);
        }
      }
  
}
?>