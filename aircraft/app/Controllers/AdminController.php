<?php

namespace App\Controllers;
use App\Models\AddAdminModel;
use App\Models\MenuModel;
use App\Models\CustomersModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }

        public function profile()
    {
        return view('Admin/pages/profile');
    }
    
    
    //MENU TABLE
    public function menuTable()
    {
      $me = new MenuModel();
      $data = [
        'menu' => $me->findAll()
      ];
      return view('Admin/pages/menu', $data);
    }

    public function saveMenu()
    {
      $name = $this->request->getVar('name');
      $description = $this->request->getVar('description');
      $price = $this->request->getVar('price');
      $quantity = $this->request->getVar('quantity');
      $category = $this->request->getVar('category');
      $image = $this->request->getVar('image');

      $me = new MenuModel();
      $data = [
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'quantity' => $quantity,
        'category' => $category,
        'image' => $image
      ];
      $me->save($data);
      return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function editMenu($id = null)
    {
      $menu = new MenuModel();
      $data['menu'] = $menu->where('id', $id)->first();
      return view('Admin/pages/editmenu', $data);
    }

    public function updateMenu()
      {
        $id = $this->request->getVar('id');
        $name = $this->request->getVar('name');
        $description = $this->request->getVar('description');
        $price = $this->request->getVar('price');
        $quantity = $this->request->getVar('quantity');
        $category = $this->request->getVar('category');
        $image = $this->request->getVar('image');

        $menu = new MenuModel();
        $data = [
          'name' => $name,
          'description' => $description,
          'price' => $price,
          'quantity' => $quantity,
          'category' => $category,
          'image' => $image
        ];

        $menu->set($data)->where('id', $id)->update();
        return redirect()->to('menuTable');
      
    }

    //ADD NEW ADMIN
    public function adminTable()
    {
      $ad = new AddAdminModel();
      $data = [
        'admin' => $ad->findAll()
      ];
      return view('Admin/pages/add_new_admin', $data);
    }

    public function saveAdmin()
    {
      $image = $this->request->getVar('image');
      $name = $this->request->getVar('name');
      $email = $this->request->getVar('email');
      $password = $this->request->getVar('password');
      $position = $this->request->getVar('position');

      $ad = new AddAdminModel();
      $data = [
        'image' => $image,
        'name' => $name,
        'email' => $email,
        'password' => $password,
        'position' => $position
 
      ];
      $ad->save($data);
      return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    public function editAdmin($id = null)
    {
      $admin = new AddAdminModel();
      $data['admin'] = $admin->where('id', $id)->first();
      return view('Admin/pages/editAdmin', $data);
    }

    public function updateAdmin()
      {
        $id = $this->request->getVar('id');
        $image = $this->request->getVar('image');
        $name = $this->request->getVar('name');
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $position = $this->request->getVar('position');

        $admin = new AddAdminModel();
        $data = [
          'image' => $image,
          'name' => $name,
          'email' => $email,
          'password' => $password,
          'position' => $position
        ];

          $admin->set($data)->where('id', $id)->update();
        return redirect()->to('/addAdmin');
      
    }

    public function deleteadmin($id = null)
    {
      $admin = new AddAdminModel();
      $admin->delete(['id' => $id]);
      return redirect()->to('/addAdmin');
    }

    // CUSTOMERS SECTION

    public function customers()
    {
      $cus = new CustomersModel();
      $data = [
        'users' => $cus->findAll()
      ];
      return view('Admin/pages/customers', $data);
    }

    public function saveCustomer()
    {
      $name = $this->request->getVar('name');
      $email = $this->request->getVar('email');
      $password = $this->request->getVar('password');

      $cus = new CustomersModel();
      $data = [
        'name' => $name,
        'email' => $email,
        'password' => $password
 
      ];
      $cus->save($data);
      return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    

}

?>
