<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AdminModel;

class AdminController extends BaseController
{
    public function admin()
    {
        return view ('/admin/index');
    }
    public function login()
    {
        return view ('adminlog');
    }
    public function register()
    {
        return view ('adminreg');
    }
    public function authreg()
        {
            helper(['form']);
            $rules = [
                'username' => 'required|min_length[1]|max_length[25]',
                'password' => 'required|min_length[1]|max_length[25]'
            ];
            if($this->validate($rules)){
                $adminModel = new AdminModel();
                $data = [
                    'username' => $this->request->getVar('username'),
                    'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
                ];
                $adminModel->save($data);
                return redirect()->to('/login');
            }else{
                $data['validation'] = $this->validator;
                return view('/register',$data);
            }
        }
        public function authlog()
        {
          $session = session();
          helper(['form']);
          $rules = [
              'username' => 'required|min_length[1]|max_length[99]',
              'password' => 'required|min_length[1]|max_length[99]'
          ];
          if($this->validate($rules)){
              $main = new AdminModel();
              $data = [
                  'username' => $this->request->getVar('username'),
                  'password' => password_hash($this->request->getVar('password'),PASSWORD_DEFAULT)
              ];
              $main->save($data);
              return redirect()->to('/main');
          }else{
              $session->setFlashdata('msg','Failed to create an account. Try Again');
              $data['validation'] = $this->validator;
              return view('adminregister');
        }
}
}
