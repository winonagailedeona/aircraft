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

    public function showcart()
    {
      $id = session()->get('id');
        $cart_model = new CartModel();
        $cart = [
          'items' => $cart_model->where('user_id', $id)->findAll()
        ];
        return view('User/cart', $cart);
    }

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

    public function search()
    {
    
      $query = $this->request->getVar('search');
      $search = new MenuModel();
      $searching = array('name' => $query, 'category' => $query, '');
      $result['result'] = $search->like('name', $query)->orLike('category', $query)->orLike('description', $query)->get()->getResultArray();
      return view('Menus/others', $result);
      
      
    }
}
?>
