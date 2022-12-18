<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CartModel;
use App\Models\MenuModel;

class UserController extends Controller
{
    public function profile()
    {
      return view('User/profile');
    }

    public function orders()
    {
      return view('User/orders');
    }

    public function faqs()
    {
      return view('Menus/faqs');
    }

    public function showcart()
    {
      $id = session()->get('id');
        $cart_model = new CartModel();
        $cart = [
          'items' => $cart_model->where('user_id', $id)->findAll()
        ];
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
    public function cart($id)
    {
      $pica_model = new MenuModel();
      $pica = $pica_model->find($id);
      $values = [
        'user_id' => session()->get('id'),
        'prod_name' => $pica['name'],
        'quantity' => $pica['quantity'],
        'image' => $pica['image'],
        'price' => $pica['price'],
        'size' => 0,
        'total' => $pica['price'] * $pica['quantity']
      ];
      $cart_model = new CartModel();
      var_dump($values);
      $cart = $cart_model->insert($values);
      
      return redirect('showcart');
    }

    public function cartm($id)
    {
      $meals_model = new MenuModel();
      $meals = $meals_model->find($id);
      $values = [
        'user_id' => session()->get('id'),
        'prod_name' => $meals['name'],
        'quantity' => $meals['quantity'],
        'image' => $meals['image'],
        'price' => $meals['price'],
        'size' => 0,
        'total' => $meals['price'] * $meals['quantity']
      ];
      $cart_model = new CartModel();
      var_dump($values);
      $cart = $cart_model->insert($values);
      
      return redirect('showcart');
    }

    public function carts($id)
    {
      $sandwich_model = new MenuModel();
      $sandwich = $sandwich_model->find($id);
      $values = [
        'user_id' => session()->get('id'),
        'prod_name' => $sandwich['name'],
        'quantity' => $sandwich['quantity'],
        'image' => $sandwich['image'],
        'price' => $sandwich['price'],
        'size' => 0,
        'total' => $sandwich['price'] * $sandwich['quantity']
      ];
      $cart_model = new CartModel();
      var_dump($values);
      $cart = $cart_model->insert($values);
      
      return redirect('showcart');
    }

    public function cartp($id)
    {
      $pasta_model = new MenuModel();
      $pasta = $pasta_model->find($id);
      $values = [
        'user_id' => session()->get('id'),
        'prod_name' => $pasta['name'],
        'quantity' => $pasta['quantity'],
        'image' => $pasta['image'],
        'price' => $pasta['price'],
        'size' => 0,
        'total' => $pasta['price'] * $pasta['quantity']
      ];
      $cart_model = new CartModel();
      var_dump($values);
      $cart = $cart_model->insert($values);
      
      return redirect('showcart');
    }

    public function cartd($id)
    {
      $dessert_model = new MenuModel();
      $dessert = $dessert_model->find($id);
      $values = [
        'user_id' => session()->get('id'),
        'prod_name' => $dessert['name'],
        'quantity' => $dessert['quantity'],
        'image' => $dessert['image'],
        'price' => $dessert['price'],
        'size' => 0,
        'total' => $dessert['price'] * $dessert['quantity']
      ];
      $cart_model = new CartModel();
      var_dump($values);
      $cart = $cart_model->insert($values);
      
      return redirect('showcart');
    }

    
}
?>
