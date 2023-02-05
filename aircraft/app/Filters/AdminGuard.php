<?php
namespace App\Filters;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AdminGuard implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $usertype = session()->get('usertype');
        if ($usertype !== 'ADMIN') {
            return redirect()->to(base_url('/signin'));
        }
    }


    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {

    }
}
