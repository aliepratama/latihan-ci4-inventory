<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Accounts extends BaseController
{
    public function login()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'username' => ['required', 'max_length[20]'],
            'password' => ['required', 'min_length[6]'],
        ]);
        $isDataValid = $validation->withRequest($this->request)->run();

        if($isDataValid)
        {
            $accounts = new UsersModel();
            $auth = $accounts->where([
                'username' => $this->request->getPost('username'),
                'password' => $this->request->getPost('password'),
            ])->first();
            if($auth)
            {
                return redirect()->to('/dashboard');
            }
            return redirect()->to('/');
        }
        return view('login');
    }

    public function register()
    {
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
                'password' => $this->request->getPost('password'),
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
}
