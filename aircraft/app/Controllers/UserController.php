<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CartModel;
use App\Models\MenuModel;
use App\Models\UserModel;
use App\Models\CheckoutModel;

class UserController extends Controller
{
  public function profile()
  {
    return view('User/profile');
  }

  public function about()
  {
    return view('about');
  }

  // public function checkoutDelete()
  // {

  // }

  public function checkout()
  {
    $id = session()->get('id');
    $cart_model = new CartModel();
    $cart_id = $this->request->getPost('id[]');
    // var_dump($cart_id);
    $cart_user_id = [
      'cart.user_id' => $id,
      'cart.menuid' => $cart_id,
    ];
    if(isset($cart_id)){
      $checkout_model = new CheckoutModel();


    for($i = 0; $i < count($cart_id); $i++)
    {
      $checkout_model->insert(array('menu_id' => $cart_id[$i], 'user_id' => $id));

    }


    $cart["cart"] = $checkout_model->select('*')
      ->join('product', 'checkout.menu_id = product.id', 'right')
      ->join('cart', 'checkout.menu_id = cart.menuid', 'right')
      ->where('checkout.user_id', $id)->get()->getResultArray();



     return view('User/checkout', $cart);

    }
    else{
      return redirect('showcart');
    }
    
  }

  // public function editprofile($id = null)
  // {
  //   $userModel = new UserModel();
  //   $user['user'] = $userModel->where('id', $id)->first();
  //   return view('User/profile', $data);
  // }

  // public function updateprofile()
  //   {
  //     $id = $this->request->getVar('id');
  //     $name = $this->request->getVar('name');
  //     $email = $this->request->getVar('email');

  //     $userModel = new UserModel();
  //     $data = [
  //       'name' => $name,
  //       'email' => $email
  //     ];

  //     $userModel->set($data)->where('id', $id)->update();
  //     return redirect()->to('userprofile');

  // }

  public function orders()
  {
    return view('User/orders');
  }

  public function faqs()
  {
    return view('faqs');
  }

  public function showcart()
  {
    session()->set('checkout', 'here');
    $id = session()->get('id');
    $cart_model = new CartModel();

    $cart['cart'] = $cart_model->select('*')
      ->join('product', 'cart.menuid = product.id', 'right')
      ->where('cart.user_id', $id)->get()->getResultArray();

    $cart['total'] = $cart_model->selectSum('total')
      ->where('user_id', $id)->get()->getResultArray();

    //  var_dump($cart['cart']);

    return view('User/cart', $cart);
  }




  public function search()
  {

    $query = $this->request->getVar('search');
    $search = new MenuModel();
    $searching = array('name' => $query, 'category' => $query, '');
    $result['result'] = $search->like('name', $query)->orLike('category', $query)->orLike('description', $query)->get()->getResultArray();
    return view('Menus/others', $result);
  }

  //ADDING TO CART
  public function cart()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $pica = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$pica['price'] * (int)$quantity;

    $resultExist = $cart_model->where('user_id', $userid)->where('menuid', $id)->find();
    $productInfo = $menu_model->find($id);
   

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$id,
      'bilang' => $quantity,
      'total' => $price
    ];
  
    
    if(count($resultExist) == 0 && $productInfo['quantity'] != 0){
   
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->insert($values);
    }
    elseif(count($resultExist) > 0 && $productInfo['quantity'] != 0){
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->set('bilang', $resultExist[0]['bilang'] + $quantity)->set('total', $resultExist[0]['total'] + $price)->where('user_id', $userid)->where('menuid', $id)->update();
    }
    else{
      echo 'out of stock';
    }
      


    return redirect('showcart');
  }

  public function cartmi()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $milktea = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$milktea['price'] * (int)$quantity;

    $resultExist = $cart_model->where('user_id', $userid)->where('menuid', $id)->find();
    $productInfo = $menu_model->find($id);

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$id,
      'bilang' => $quantity,
      'total' => $price
    ];
    
    if(count($resultExist) == 0 && $productInfo['quantity'] != 0){
   
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->insert($values);
    }
    elseif(count($resultExist) > 0 && $productInfo['quantity'] != 0){
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->set('bilang', $resultExist[0]['bilang'] + $quantity)->set('total', $resultExist[0]['total'] + $price)->where('user_id', $userid)->where('menuid', $id)->update();
    }
    else{
      echo 'out of stock';
    }

    return redirect('showcart');
  }

  public function cartm()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $meals = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$meals['price'] * (int)$quantity;

    $resultExist = $cart_model->where('user_id', $userid)->where('menuid', $id)->find();
    $productInfo = $menu_model->find($id);

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$id,
      'bilang' => $quantity,
      'total' => $price
    ];

    if(count($resultExist) == 0 && $productInfo['quantity'] != 0){
   
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->insert($values);
    }
    elseif(count($resultExist) > 0 && $productInfo['quantity'] != 0){
      $menu_model->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->set('bilang', $resultExist[0]['bilang'] + $quantity)->set('total', $resultExist[0]['total'] + $price)->where('user_id', $userid)->where('menuid', $id)->update();
    }
    else{
      echo 'out of stock';
    }

    return redirect('showcart');
  }

  public function carts()
  {
    $id = $this->request->getPost('id');
    $menu_model = new MenuModel();
    $sandwich = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$sandwich['price'] * (int)$quantity;

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$this->request->getPost('id'),
      'bilang' => $quantity,
      'total' => $price
    ];
    $cart_model = new CartModel();
    $cart = $cart_model->insert($values);

    return redirect('showcart');
  }

  public function cartp()
  {
    $id = $this->request->getPost('id');
    $menu_model = new MenuModel();
    $pasta = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$pasta['price'] * (int)$quantity;

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$this->request->getPost('id'),
      'bilang' => $quantity,
      'total' => $price
    ];
    $cart_model = new CartModel();
    $cart = $cart_model->insert($values);

    return redirect('showcart');
  }

  public function cartd()
  {
    $id = $this->request->getPost('id');
    $menu_model = new MenuModel();
    $dessert = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$dessert['price'] * (int)$quantity;

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$this->request->getPost('id'),
      'bilang' => $quantity,
      'total' => $price
    ];
    $cart_model = new CartModel();
    $cart = $cart_model->insert($values);

    return redirect('showcart');
  }

  

  public function carto()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $me = new MenuModel();
    $cart_model = new CartModel();
    $result = $me->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$result['price'] * (int)$quantity;

    $resultExist = $cart_model->where('user_id', $userid)->where('menuid', $id)->find();
    $productInfo = $me->find($id);

    $values = [
      'user_id' => session()->get('id'),
      'menuid' => (int)$id,
      'bilang' => $quantity,
      'total' => $price
    ];

    if(count($resultExist) == 0 && $productInfo['quantity'] != 0){
   
      $me->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->insert($values);
    }
    elseif(count($resultExist) > 0 && $productInfo['quantity'] != 0){
      $me->set('quantity', $productInfo['quantity'] - $quantity)->where('id', $id)->update();
      $cart_model->set('bilang', $resultExist[0]['bilang'] + $quantity)->set('total', $resultExist[0]['total'] + $price)->where('user_id', $userid)->where('menuid', $id)->update();
    }
    else{
      echo 'out of stock';
    }

    return redirect('showcart');
  }
}
