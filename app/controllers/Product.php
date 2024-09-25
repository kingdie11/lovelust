<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Product extends Controller {
	
    public function __construct()
    {
        parent:: __construct();
        $this->call->model('product_model');
    }

    public function read() {
        $data['prod'] = $this->product_model->read();
        //var_dump($prod);
        $this->call->view('product/display', $data);
    }

    public function create(){
        if($this->form_validation->submitted()) {
            $this->form_validation
                ->name('kdpm_last_name')
                    ->required()
                    ->alpha()
                ->name('kdpm_first_name')
                    ->required()
                    ->alpha()
                ->name('kdpm_gender')
                    ->required()
                    ->alpha()
                ->name('kdpm_address')
                    ->required()
                    ->max_length(200);
            if($this->form_validation->run()){
                $kdpm_last_name = $this->io->post('kdpm_last_name');
                $kdpm_first_name = $this->io->post('kdpm_first_name');
                $kdpm_email = $this->io->post('kdpm_email');
                $kdpm_gender = $this->io->post('kdpm_gender');
                $kdpm_address = $this->io->post('kdpm_address');
            
                if($this->product_model->create($kdpm_last_name, $kdpm_first_name, $kdpm_email,
                $kdpm_gender, $kdpm_address)){
                    set_flash_alert('success', 'User was added successfully');
                    redirect('product/add');
                }
            }else{
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('product/add');
            }
        }
        $this->call->view('product/create');
    }

    public function update($id){
        if($this->form_validation->submitted()) {
            $this->form_validation
                ->name('kdpm_last_name')
                    ->required()
                    ->alpha()
                ->name('kdpm_first_name')
                    ->required()
                    ->alpha()
                ->name('kdpm_email')
                    ->required()
                    ->alpha()
                ->name('kdpm_gender')
                    ->required()
                    ->alpha()
                ->name('kdpm_address')
                    ->required()
                    ->max_length(200);
            if($this->form_validation->run()){
                $kdpm_last_name = $this->io->post('kdpm_last_name');
                $kdpm_first_name = $this->io->post('kdpm_first_name');
                $kdpm_email = $this->io->post('kdpm_email');
                $kdpm_gender = $this->io->post('kdpm_gender');
                $kdpm_address = $this->io->post('kdpm_address');
            
                if($this->product_model->update($kdpm_last_name, $kdpm_first_name, $kdpm_email,
                $kdpm_gender, $kdpm_address, $id)){
                    set_flash_alert('success', 'User was updated successfully');
                    redirect('product/display');
                }
            }else{
                set_flash_alert('danger', $this->form_validation->errors());
                redirect('product/display');
            }
        }
        $data['product'] = $this->product_model->get_one($id);
        $this->call->view('product/update', $data);
    }

    public function delete($id){
        if($this->product_model->delete($id)){
            set_flash_alert('success', 'User was deleted successfully');
            redirect('product/display');
        }else{
            set_flash_alert('danger', 'Something went wrong');
            redirect('product/display');
        }
    }
}
?>
