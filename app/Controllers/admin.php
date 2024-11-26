<?php

namespace App\Controllers;

use App\Models\admin_login;
use App\Models\user_login;
use App\Models\menu;
use App\Models\profile_user;

class admin extends BaseController
{

    public function index()
    {
        return view('admin_dash/login');
    }


    public function produk()
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new menu();

        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_menu') ? $this->request->getVar('page_menu') : 1;

        $menu_data = $menu_model->paginate(9999, 'page_menu', $currentPage);
        $pagination = $menu_model->pager;

        return view('admin_dash/produk/index', [
            'username' => $userName,
            'menu_data' => $menu_data,
            'pager' => $pagination,
            'currentPage' => $currentPage
        ]);
    }



    public function prosesloginadmin()
    {
        $model = new admin_login();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $user = $model->where('username', $username)->first();


        if ($user) {

            $pass = $model->where('password', $password)->first();

            if ($pass) {

                $session = session();
                $session->set('username', $user['username']);

                return redirect()->to('/dashboard');
            }
        }

        return redirect()->to('/admin123')->with('error', 'Username atau password salah');

    }


    public function dashboard()
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new menu();
        $user_model = new user_login();

        $menuc = $menu_model->countAll();
        $userc = $user_model->countAll();

        return view('admin_dash/dashboard', ['username' => $userName, 'menuc' => $menuc, 'userc' => $userc,]);
    }


    public function add_produk()
    {
        $session = session();
        $userName = $session->get('username');

        return view('admin_dash/produk/add', ['username' => $userName]);
    }

    public function proses_add_produk()
    {
        $nama_kategori = $this->request->getPost('nama_kategori');
        $nama_menu = $this->request->getPost('nama_menu');
        $kalori_menu = $this->request->getPost('kalori_menu');
    
        $foto_menu = $this->request->getFile('foto_menu');
    
    
        $validationRules = [
            'nama_kategori' => 'required',
            'nama_menu' => 'is_unique[menu.id_menu]',
            'foto_menu' => 'uploaded[foto_menu]|max_size[foto_menu,1024]|is_image[foto_menu]',
        ];
    
        $validationMessages = [
            'nama_menu' => [
                'is_unique' => 'Menu sudah terdaftar.',
            ],
            'foto_menu' => [
                'is_image' => 'File yang diupload bukan gambar.',
                'mime_in' => 'Format gambar tidak didukung. Gunakan format JPG, JPEG, PNG, atau GIF.',
            ],
        ];
    
        if (!$this->validate($validationRules, $validationMessages)) {
            $session = session();
            $session->setFlashdata('error', $this->validator->getErrors());
            return redirect()->to(current_url(true))->withInput();
        }
    
        $foto_menu->move('uploads');
    
        $nama_file_gambar = $foto_menu->getName();
    
        $model = new menu();
        $model->transStart();
    
        try {
            $model->insert([
                'id_kategori' => $nama_kategori,
                'id_menu' => $nama_menu,
                'foto_menu' => $nama_file_gambar,
                'kalori_menu' => $kalori_menu,
            ]);
    
            $model->transComplete();
    
            return redirect()->to(current_url(true))->with('success', 'Berhasil! <a href="produk" class="text-primary">Lihat</a>');
        } catch (\Exception $e) {
            $model->transRollback(); 
            if (strpos($e->getMessage(), 'Duplicate entry') !== false) {
                $session = session();
                $session->setFlashdata('error', ['id_menu' => 'Menu sudah terdaftar.']);
                return redirect()->to(current_url(true))->withInput();
            }
    
            return redirect()->to(current_url(true))->withInput()->with('error', 'Terjadi kesalahan saat menyimpan data.');
        }
    }
    

    public function edit_menu($nama_menu = null)
    {
        $menu_model = new menu();
        $data_menu = $menu_model->find($nama_menu);

        if ($data_menu === null) {
            return redirect()->to(base_url('produk'))->with('error', 'Data tidak ditemukan.');
        }

        $session = session();
        $userName = $session->get('username');

        return view('admin_dash/produk/edit', ['username' => $userName, 'data_menu' => $data_menu]);
    }

    public function proses_edit_menu()
    {
        $inputData = [
            'id_kategori' => $this->request->getPost('nama_kategori_baru'),
            'id_menu' => $this->request->getPost('nama_menu_baru'),
            'kalori_menu' => $this->request->getPost('kalori_menu_baru'),
        ];
    
        $foto_menu = $this->request->getFile('foto_menu_baru');
    
        $validationRules = [
            'foto_menu_baru' => 'uploaded[foto_menu_baru]|max_size[foto_menu_baru,1024]|is_image[foto_menu_baru]',
        ];
    
        $validationMessages = [
            'foto_menu_baru' => [
                'is_image' => 'File yang diupload bukan gambar.',
            ],
        ];
    
        if (!$this->validate($validationRules, $validationMessages)) {
            $session = session();
            $session->setFlashdata('error', $this->validator->getErrors());
            return redirect()->to(base_url('edit-menu'.'/'.$this->request->getPost('nama_menu')))->withInput();
        }
            $foto_menu->move('uploads');
            $inputData['foto_menu'] = $foto_menu->getName();
    
        $menu_model = new menu();
        $id_menu = $this->request->getPost('nama_menu');
        $menu_model->where('id_menu', $id_menu)->set($inputData)->update();
    
        return redirect()->to(base_url('produk'))->with('success', 'Data berhasil diperbarui.');
    }
    

    public function hapusMenu($id)
    {
        $menu_model = new menu();
        $menu_model->where('id_menu', $id)->delete();

        return redirect()->to(base_url('produk'))->with('success', 'Data berhasil dihapus.');
    }


    public function user_login()
    {
        $session = session();
        $userName = $session->get('username');

        $menu_model = new user_login();

        $pager = \Config\Services::pager();
        $currentPage = $this->request->getVar('page_menu') ? $this->request->getVar('page_menu') : 1;

        $menu_data = $menu_model->paginate(9999, 'page_menu', $currentPage);
        $pagination = $menu_model->pager;

        return view('admin_dash/user-login/index', [
            'username' => $userName,
            'menu_data' => $menu_data,
            'pager' => $pagination,
            'currentPage' => $currentPage
        ]);

    }


    public function edit_user($nama_user = null)
    {
        $menu_model = new user_login();
        $data_menu = $menu_model->find($nama_user);

        if ($data_menu === null) {
            return redirect()->to(base_url('akun'))->with('error', 'Data tidak ditemukan.');
        }

        $session = session();
        $userName = $session->get('username');

        return view('admin_dash/user-login/edit', ['username' => $userName, 'data_menu' => $data_menu]);
    }

    public function proses_edit_user()
    {
        $inputData = [
            'email' => $this->request->getPost('email_baru'),
            'username' => $this->request->getPost('username_baru'),
            'password' => $this->request->getPost('password_baru'),
            'nickname' => $this->request->getPost('nickname_baru'),
        ];
    
        $user_model = new user_login(); 
        $emaill = $this->request->getPost('email_baru');
        $user_model->where('email', $emaill)->set($inputData)->update();
    
        return redirect()->to(base_url('akun'))->with('success', 'Data berhasil diperbarui.');
    }
    

    public function hapususer($id)
    {
        $menu_model = new user_login();
        $menu_model->where('username', $id)->delete();

        return redirect()->to(base_url('akun'))->with('success', 'Data berhasil dihapus.');
    }



    public function proses_add_user()
    {
        $inputData = [
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'nickname' => $this->request->getPost('nickname'),
        ];

        $validationRules = [
            'email' => 'required|valid_email|is_unique[user_login.email]',
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
            return redirect()->to(base_url('tambah-user'))->withInput()->with('validation', $this->validator);
        }

        $model = new user_login();
        $model->insert($inputData);

        return redirect()->to(base_url('tambah-user'))->with('success', 'Berhasil! Silakan <a href="akun" class="text-light">Lihat</a>');
    }

    public function add_user_login()
    {
        $session = session();
        $userName = $session->get('username');
        
        return view('admin_dash/user-login/add', ['username' => $userName]);
    }
    
    
    public function setting($nama_user = null)
    {
        $session = session();
        $userName = $session->get('username');
        
        $menu_model = new admin_login();
        $data_menu = $menu_model->find($nama_user);
        
        if ($data_menu === null) {
            return redirect()->to(base_url('setting'))->with('error', 'Data tidak ditemukan.');
        }
        
        return view('admin_dash/setting/index', ['username' => $userName, 'data_menu' => $data_menu]);
    }

    public function proses_edit_admin()
    {
        $inputData = [
            'username' => $this->request->getPost('username_baru'),
            'password' => $this->request->getPost('password_baru'),
        ];
    
        $user_model = new admin_login(); 
        $emaill = $this->request->getPost('username_baru');
        $user_model->where('username', $emaill)->set($inputData)->update();
    
        return redirect()->to(current_url())->with('success', 'Data berhasil diperbarui.');
    }
    
    public function logout()
    {
        session()->destroy();

        return redirect()->to(base_url('admin123'))->with('success', 'Anda telah berhasil logout.');
    }
    public function mem_logout()
    {
        session()->destroy();

        return redirect()->to(base_url('login-member'))->with('success', 'Anda telah berhasil logout.');
    }

    
}