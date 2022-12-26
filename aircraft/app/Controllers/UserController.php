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
      return view('faqs');
    }

    public function showcart()
    {
      $id = session()->get('id');
        $cart_model = new CartModel();

        $cart['cart'] = $cart_model->select('*')
        ->join('product', 'cart.menuid = product.id', 'right')
        ->where('cart.user_id', $id)->get()->getResultArray(); 

        $cart['total'] = $cart_model->selectSum('total')
            ->where('user_id', $id)->get()->getResultArray();

        return view('User/cart', $cart);
    }

    public function deletecart($id = null)
    {
      $cart = new CartModel();
      $cart->delete(['id' => $id]);
      return redirect()->to('/showcart');
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
      $menu_model = new MenuModel();
      $pica = $menu_model->find($id);
      $quantity =  $this->request->getPost('quantity');
      $price = (float)$pica['price'] * (int)$quantity;    
      
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

    public function cartm()
    {
      $id = $this->request->getPost('id');
      $menu_model = new MenuModel();
      $meals = $menu_model->find($id);
      $quantity =  $this->request->getPost('quantity');
      $price = (float)$meals['price'] * (int)$quantity;    
      
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

    public function cartmi()
    {
      $id = $this->request->getPost('id');
      $menu_model = new MenuModel();
      $milktea = $menu_model->find($id);
      $quantity =  $this->request->getPost('quantity');
      $price = (float)$milktea['price'] * (int)$quantity;    
      
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
      $menu_model = new MenuModel();
      $search = $menu_model->find($id);
      $quantity =  $this->request->getPost('quantity');
      $price = (float)$search['price'] * (int)$quantity;    
      
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
}
?>
