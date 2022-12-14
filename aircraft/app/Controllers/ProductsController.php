<?php

namespace App\Controllers;
use App\Models\MenuModel;

class ProductsController extends BaseController
{

  public function mycont()
  {
    $con = new MenuModel();
    $data = [
      'milktea' => $con->where('category', 'milktea')->findAll()
    ];
    return view('Menus/continental', $data);
  }

  public function products()
  {
    $pr = new MenuModel();
    $data = [
      'pasta' => $pr->where('category', 'pasta')->findAll()
    ];
    return view('Menus/pasta', $data);
  }

  public function dessertProducts()
  {
    $de = new MenuModel();
    $data = [
      'dessert' => $de->where('category', 'dessert')->findAll()
    ];
    return view('Menus/dessert', $data);
  }

  public function mealsProducts()
  {
    $me = new MenuModel();
    $data = [
      'meals' => $me->where('category', 'meals')->findAll()
    ];
    return view('Menus/ricemeals', $data);
  }

  public function picaProducts()
  {
    $pi = new MenuModel();
    $data = [
      'pica' => $pi->where('category', 'pica')->findAll()
    ];
    return view('Menus/pica', $data);
  }

 
  public function sandwichProducts()
  {
    $sa = new MenuModel();
    $data = [
      'sandwich' => $sa->where('category', 'sandwich')->findAll()
    ];
    return view('Menus/sandwich', $data);
  }

  public function sp($id)
  {
    $pica_model = new MenuModel();
    $pica['pica'] = $pica_model->find($id);
    return view('Menus/single', $pica);
  }

}

?>
