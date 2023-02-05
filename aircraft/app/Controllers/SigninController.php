<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\UserModel;
use App\Models\AdminModel;

class SigninController extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('signin');
    }

    public function loginAuth()
    {
        $session = session();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $userModel->where('email', $email)->first();

        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'name' => $data['name'],
                    'email' => $data['email'],
                    'isLoggedIn' => TRUE
                ];
                if($data['state'] == 'BLOCKED'){
                    $session->setFlashdata('msssg', 'Your account has been blocked by admin.');
                    return redirect()->to('/signin');
                }
                else if ($data['usertype'] == 'ADMIN'){
                    $session->set($ses_data);
                    return redirect()->to('/admin');
                }
                else if ($data['usertype'] == 'USER'){
                    $session->set($ses_data);
                    return redirect()->to('/profile');
                }

            }else{
                $session->setFlashdata('msg', 'Password is incorrect.');
                return redirect()->to('/signin');
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to('/signin');
        }
    }

    public function admin()
    {
        helper(['form']);
        echo view('adminlogin');
    }

    public function logout()
{
    session()->destroy();
    return redirect()->to(base_url('/signin'));
}


}
