<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Accounts extends BaseController
{
    private function hash_password($password){
        return password_hash($password, PASSWORD_BCRYPT);
     }
    public function login()
    {
        if ($this->session?->get('logged_in')){
            return redirect()->to('/dashboard');
        }
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => ['required', 'max_length[20]'],
            'password' => ['required', 'min_length[6]'],
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();
        $password = $this->request->getPost('password') ?? '';

        if($isDataValid)
        {
            $accounts = new UsersModel();
            $auth = $accounts->where([
                'username' => $this->request->getPost('username'),
            ])->first();
            if($auth && password_verify($password, $auth['password']))
            {
                $data = array(
                    'username' 	=> $auth['username'],
                    'logged_in'	=> true
                );
                $this->session->set($data);
                return redirect()->to('/dashboard');
            }
            return redirect()->to('/');
        }
        return view('login');
    }

    public function register()
    {
        if ($this->session?->get('logged_in')){
            return redirect()->to('/dashboard');
        }
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => ['required', 'max_length[20]'],
            'password' => ['required', 'min_length[6]'],
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $accounts = new UsersModel();
            $accounts->insert([
                'nama' => $this->request->getPost('fullname'),
                'password' => $this->hash_password($this->request->getPost('password')),
                'username' => $this->request->getPost('username'),
                'role_id' => 1,
            ]);
            return redirect()->to('/');
        }
        return view('register');
    }

    public function lists(): string
    {
        $accounts = new UsersModel();
        $data['accounts'] = $accounts->findAll();
        return view('list_akun', $data);
    }

    public function dashboard(): string
    {
        return view('dashboard');
    }
    public function logout()
    {
        $data = array('username', 'logged_in');
        $this->session->remove($data);
        return redirect()->to('/');
    }
}
