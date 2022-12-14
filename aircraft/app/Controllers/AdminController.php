<?php

namespace App\Controllers;
use App\Models\AddAdminModel;
use App\Models\MenuModel;

class AdminController extends BaseController
{
    public function index()
    {
        return view('Admin/index');
    }

    
    //MEALS TABLE
    public function mealsTable()
    {
      $me = new MenuModel();
      $data = [
        'meals' => $me->where('category', 'meals')->findAll()
      ];
      return view('Admin/pages/menus/meals/Meals', $data);
    }

    public function saveMeals()
    {
      $name = $this->request->getVar('name');
      $description = $this->request->getVar('description');
      $price = $this->request->getVar('price');
      $quantity = $this->request->getVar('quantity');
      $image = $this->request->getVar('image');

      $me = new MenuModel();
      $data = [
        'name' => $name,
        'description' => $description,
        'price' => $price,
        'quantity' => $quantity,
        'image' => $image
      ];
      $me->save($data);
      return redirect()->to($_SERVER['HTTP_REFERER']);
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

    //ADD NEW ADMIN
    public function adminTable()
    {
      $ad = new AddAdminModel();
      $data = [
        'admin' => $ad->findAll()
      ];
      return view('Admin/pages/add_new_admin', $data);
    }


}

?>
