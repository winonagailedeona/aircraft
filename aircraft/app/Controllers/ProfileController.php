<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class ProfileController extends Controller
{
    public function index()
    {
        $session = session();
        return view('homepage');
    }

    public function adminindex()
    {
        $session = session();
        return view('admin');
    }
}
