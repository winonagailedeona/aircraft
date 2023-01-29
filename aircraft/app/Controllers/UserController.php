<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CartModel;
use App\Models\MenuModel;
use App\Models\UserModel;
use App\Models\CheckoutModel;
use App\Models\PlaceOrderModel;

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

  public function faqs()
  {
    return view('faqs');
  }

  public function search()
  {

    $query = $this->request->getVar('search');
    $search = new MenuModel();
    $searching = array('name' => $query, 'category' => $query, '');
    $result['result'] = $search->like('name', $query)->orLike('category', $query)->orLike('description', $query)->get()->getResultArray();
    return view('Menus/others', $result);
  }

  public function checkout()
  {
    $id = session()->get('id');
    $cart_model = new CartModel();
    $cart_id = $this->request->getPost('id[]');
    
    if(isset($cart_id)){
      $checkout_model = new CheckoutModel();


    for($i = 0; $i < count($cart_id); $i++)
    {
      $checkout_model->insert(array('menuid' => $cart_id[$i], 'user_id' => $id));

    } 

    $cart["cart"] = $checkout_model->select('*')
      ->join('product', 'checkout.menuid = product.id', 'right')
      ->join('cart', 'checkout.menuid = cart.menuid', 'right')
      ->where('checkout.user_id', $id)->get()->getResultArray();

     return view('User/checkout', $cart);

    }
    else{
      return redirect('showcart');
    }
    
  }

  public function orders()
  {
    $placeorder = new PlaceOrderModel();
    $data = [
      'placeorder' => $placeorder->select('*')
      ->join('product', 'product.id = orders.menuid', 'right')
      ->where('orders.user_id', session()->get('id'))
    ];
    return view('User/orders', $data);
  }

  public function ordershistory()
  {
    return view('User/orderhistory');
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

    return view('User/cart', $cart);
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
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $sandwich = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$sandwich['price'] * (int)$quantity;

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

  public function cartp()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $pasta = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$pasta['price'] * (int)$quantity;

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

  public function cartd()
  {
    $id = $this->request->getPost('id');
    $userid = session()->get('id');
    $menu_model = new MenuModel();
    $cart_model = new CartModel();
    $dessert = $menu_model->find($id);
    $quantity =  $this->request->getPost('quantity');
    $price = (float)$dessert['price'] * (int)$quantity;

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

  //DELETING FROM CART
  public function deletecartitem($cartid = null)
  {
    $cartitem = new CartModel();
    $cartitem->delete(['cartid' => $cartid]);
    return redirect()->to('/showcart');
  }

}
