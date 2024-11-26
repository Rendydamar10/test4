<?php

namespace App\Controllers;
use App\Models\user_login;
use App\Models\menu;


class landing extends BaseController
{
    public function index(): string
    {
        return view('landing-page');
    }
    public function login_member(): string
    {
        return view('login-member');
    }
    
    public function prosesLoginMember()
    {
        $model = new user_login();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');
        
        $user = $model->where('username', $username )->first();
        
        
        if ($user){

            $pass = $model->where('password', $password )->first();

            if($pass){

                $session = session();
                $session->set('username', $user['username']);
        
                return redirect()->to('/member');
            }         
        }

        return redirect()->to('/login-member')->with('error', 'Username atau password salah');
    
    }

    public function member(): string
    {
        $session = session();
        $userName = $session->get('username');

        
        return view('member-page', ['username' => $userName]);

        
    }
    public function k1(): string
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new menu();
        $data_menu = $menu_model->where('id_kategori','down')->findAll();

        return view('k1', ['data_menu' => $data_menu, 'username' => $userName]);
        
    }
    public function k2(): string
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new menu();
        $data_menu = $menu_model->where('id_kategori','up')->findAll();

        return view('k2', ['data_menu' => $data_menu, 'username' => $userName]);


    }
    public function k3(): string
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new menu();
        $data_menu = $menu_model->where('id_kategori','mt')->findAll();

        return view('k3', ['data_menu' => $data_menu]);

    }


    public function daftar_member()
    {
        return view('member-reg');
    }

    public function proses_daftar()
    {
        $inputData = [
            'email'    => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'nickname' => $this->request->getPost('nickname'),
        ];
    
        $validationRules = [
            'email'    => 'required|valid_email|is_unique[user_login.email]',
            'username' => 'required|alpha_numeric|min_length[5]|is_unique[user_login.username]',
            'password' => 'required|min_length[8]',
            'nickname' => 'required|alpha_space|min_length[3]',
        ];
    
        $validationMessages = [
            'email' => [
                'is_unique' => 'Email sudah terdaftar.',
            ],
            'username' => [
                'is_unique' => 'Username sudah terdaftar.',
            ],
        ];
    
        if (!$this->validate($validationRules, $validationMessages, $inputData)) {
            return redirect()->to(base_url('daftar'))->withInput()->with('validation', $this->validator);
        }
    
        $model = new user_login();
        $model->insert($inputData);
    
        return redirect()->to(base_url('daftar'))->with('success', 'Registrasi berhasil! Silakan <a href="login-member" class="text-primary">Login</a>');
    }
    

    public function bmi()
    {
        return view('bmi');
    }

    public function calculate()
    {
        $weight = $this->request->getPost('weight');
        $height = $this->request->getPost('height') / 100; // Konversi tinggi ke meter
    
        // Validasi input
        $validationRules = [
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
        ];
    
        if (!$this->validate($validationRules)) {
            return redirect()->to('/bmi')->withInput()->with('validation', $this->validator);
        }
    
        $bmi = $weight / pow($height, 2);
    
        $category = '';
        $suggestion = '';
        $comment = '';
    
        if ($bmi < 18.5) {
            $category = 'Berat Rendah';
            $suggestion = 'penaikan-berat-badan';
            $comment = 'Berat badan kamu terlalu rendah, Coba naikkan berat badan yuk.';
        } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
            $category = 'Normal';
            $suggestion = 'maintenance-berat-badan';
            $comment = 'Yeayy!! Berat badan kamu normal, Butuh saran maintenance berat badan?';
        } elseif ($bmi >= 25 && $bmi <= 29.9) {
            $category = 'Berat Berlebih';
            $suggestion = 'menurunkan-berat-badan';
            $comment = 'Berat badan kamu berlebih nih, untuk saran';
        } else {
            $category = 'Obesitas';
            $suggestion = 'menurunkan-berat-badan';
            $comment = 'berat badan kamu berlebih, cobalah untuk memngikuti saran kami.';
        }
    
        return view('bmi-hasil', [
            'bmi' => $bmi,
            'category' => $category,
            'suggestion' => $suggestion,
            'comment' => $comment
        ]);
    }
    

}
