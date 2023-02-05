<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CartModel;
use App\Models\MenuModel;
use App\Models\UserModel;
use App\Models\CheckoutModel;
use App\Models\PlaceOrderModel;
use App\Models\NewsfeedModel;

class UserController extends Controller
{


  public function profile(){
    $user_model = new UserModel();
    $data['profile'] = $user_model->where('id', session()->get('id'))->first();
    // var_dump($data['profile']);
      return view('User/profile', $data);
  }

  public function update_profile($id)
  {
      $usermodel = new UserModel();
      $data = [
          'name' => $this->request->getPost('name'),
          'username' => $this->request->getPost('username'),
          'address' => $this->request->getPost('address'),
          'contactno' => $this->request->getPost('contactno'),
      ];
      $usermodel->update($id, $data);
      $session = session();
      $session->setFlashdata('msg', 'Updated Successfully!');
      return redirect()->route('userprofile', $data);
  }


  public function about()
  {
    return view('about');
  }

  public function newsfeed()
  {
    $nf = new NewsfeedModel();
    $user_model = new UserModel();

    $data = [
      // 'cancelled' => $order_model->where('status', 'Cancelled by User')->get()->getNumRows(),
      'newsf' => $user_model-> select('*')
      ->join('nf', 'nf.user_id = users.id', 'right')
      ->where('nf_status', 'Approved')
      ->get()->getResultArray()
    ];
    return view('User/nf', $data);
  }

 
  public function savepost()
  {
    $user_id = session()->get('id');
    $nf_content = $this->request->getVar('nf_content');
    $nf_rating = $this->request->getVar('nf_rating');
    
    $nf = new NewsfeedModel();
    $data = [
      'user_id' => $user_id,
      'nf_content' => $nf_content,
      'nf_rating' => $nf_rating,
    ];
    $nf->save($data);
    $session = session();
    $session->setFlashdata('mssg', 'Successfully Submitted! Your Post is waiting to be approved!');
    return redirect('nf');
  }

  public function faqs()
  {
    return view('faqs');
  }

  public function search()
  {

    $query = $this->request->getVar('search');
    $search = new MenuModel();
    $searching = array('productname' => $query, 'category' => $query, '');
    $result['result'] = $search->like('productname', $query)->orLike('category', $query)->orLike('description', $query)->get()->getResultArray();
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

  //RECENT ORDERS
 

  public function orders()
  {$placeorder = new PlaceOrderModel();
    $data = [
        'placeorder' => $placeorder->select('*')
        ->join('product', 'product.id = orders.menuid', 'right')
        ->where('orders.user_id',  session()->get('id'))
        ->where('status', 'Order Placed')
        ->get()->getResultArray()
    ];
    // var_dump($data);
    return view('User/orders', $data);
  }

  public function confirmedorders()
  {$placeorder = new PlaceOrderModel();
    $data = [
        'placeorder' => $placeorder->select('*')
        ->join('product', 'product.id = orders.menuid', 'right')
        ->where('orders.user_id',  session()->get('id'))
        ->where('status', 'Order Confirmed')
        ->get()->getResultArray()
    ];
    // var_dump($data);
    return view('User/confirmedorders', $data);
  }

  public function cancelledorders()
  {$placeorder = new PlaceOrderModel();
    $data = [
        'placeorder' => $placeorder->select('*')
        ->join('product', 'product.id = orders.menuid', 'right')
        ->where('orders.user_id',  session()->get('id'))
        ->where('status', 'Cancelled by User')
        ->get()->getResultArray()
    ];
    // var_dump($data);
    return view('User/cancelledorders', $data);
  }

  public function readyorders()
  {$placeorder = new PlaceOrderModel();
    $data = [
        'placeorder' => $placeorder->select('*')
        ->join('product', 'product.id = orders.menuid', 'right')
        ->where('orders.user_id',  session()->get('id'))
        ->where('status', 'Ready To Serve')
        ->get()->getResultArray()
    ];
    // var_dump($data);
    return view('User/readyorders', $data);
  }

  

  public function showcart()
  {
    $session = session();

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

  public function ordershistory()
  {
    $placeorder = new PlaceOrderModel();
    $data = [
        'placeorder' => $placeorder->select('*')
        ->join('product', 'product.id = orders.menuid', 'right')
        ->where('orders.user_id',  session()->get('id'))
        ->where('status', 'Receive')
        ->get()->getResultArray()
    ];

    return view('User/orderhistory', $data);
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
  public function deletecart($id = null)
  {
    $cart = new CartModel();
    $cart->delete(['cartid' => $id]);
    return redirect()->to('/showcart');
  }

  public function cancelledbyuser($id, $user_id){
    $placeorder = new PlaceOrderModel();
    $placeorder->set('status', 'Cancelled by User')->where('user_id', $user_id)
    ->where('menuid', $id)->update();

    return redirect()->route('orders');
}

public function receive($id, $user_id){
  $placeorder = new PlaceOrderModel();
  $placeorder->set('status', 'Receive')->where('user_id', $user_id)
  ->where('menuid', $id)->update();

  return redirect()->route('ordershistory');
}
  

}
