<?php

namespace App\Controllers;
use App\Models\AddAdminModel;
use App\Models\MenuModel;
// use App\Models\CustomersModel;
use App\Models\PlaceOrderModel;
use App\Models\UserModel;

class AdminController extends BaseController
{

  protected $db;
  public function __construct()
  {
    helper(['url', 'form']);
    $this->db = \Config\Database::connect();
  }

  public function admlogin()
  {
    return view('adminlogin');
  }

  public function index()
  {
    $db = \Config\Database::connect();
    $builder = $db->table('product');
    $builderr = $db->table('users');
    $countpro = $builder->countAll();
    $countuser = $builderr->countAll();

      $usermodel = new UserModel();
      $productmodel = new MenuModel();
      $placeordermodel = new PlaceOrderModel();

      $data = [
        'users' => $countuser,
        'products' => $countpro,
        'orderstat' => $placeordermodel->where('status', 'Order Confirmed')->get()->getNumRows(),
        'pending' => $placeordermodel->where('status', 'Order Placed')->get()->getNumRows(),
        'cancelled' => $placeordermodel->where('status', 'Cancelled by User')->get()->getNumRows(),
      ];
      
      return view('Admin/index', $data);
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
      $session = session();
      $session->setFlashdata('mssg', 'Successfully Added!');
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
        $productname = $this->request->getVar('productname');
        $description = $this->request->getVar('description');
        $price = $this->request->getVar('price');
        $quantity = $this->request->getVar('quantity');
        $category = $this->request->getVar('category');
        $image = $this->request->getVar('image');

        $menu = new MenuModel();
        $data = [
          'productname' => $productname,
          'description' => $description,
          'price' => $price,
          'quantity' => $quantity,
          'category' => $category,
          'image' => $image
        ];

        $menu->set($data)->where('id', $id)->update();
        $session = session();
        $session->setFlashdata('msg', 'Updated Successfully!');
        return redirect()->to('menuTable');
      
    }



    // CUSTOMERS SECTION

    public function customers()
    {
      $cus = new UserModel();
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

      $cus = new UserModel();
      $data = [
        'name' => $name,
        'email' => $email,
        'password' => $password
 
      ];
      $cus->save($data);
      return redirect()->to($_SERVER['HTTP_REFERER']);
    }

    
    public function myorders()
    {
      $order_model = new PlaceOrderModel();
        $data = [
            'placeorder' => $order_model->select('*')
            ->join('product', 'product.id = orders.menuid', 'right')
            ->join('users', 'users.id = orders.user_id', 'right')
            ->where('status', 'Order Placed')
            ->get()->getResultArray()
        ];
        // var_dump($data);
      return view('Admin/pages/orders', $data);
    }

    public function myhistory()
    {
      $order_model = new PlaceOrderModel();
        $data = [
            'historyorders' => $order_model->select('*')
            ->join('product', 'product.id = orders.menuid', 'right')
            ->join('users', 'users.id = orders.user_id', 'right')
            ->where('status', 'Ready To Serve')
            ->get()->getResultArray()
        ];
        // var_dump($data);
      return view('Admin/pages/historyorders', $data);
    }

    public function accept($id, $user_id){
      $place = new PlaceOrderModel();
      $place->set('status', 'Order Confirmed')->where('user_id', $user_id)
      ->where('menuid', $id)->update();

      return redirect()->route('adorders');
  }

  public function cancel($id, $user_id){
    $placeorder = new PlaceOrderModel();
    $placeorder->set('status', 'Order Cancelled')->where('user_id', $user_id)
    ->where('menuid', $id)->update();

    return redirect()->route('adorders');
}

  public function processing()
  {
    $ord = new PlaceOrderModel();
        $data = [
            'myplaceorder' => $ord->select('*')
            ->join('product', 'product.id = orders.menuid', 'right')
            ->join('users', 'users.id = orders.user_id', 'right')
            ->where('status', 'Order Confirmed')
            ->get()->getResultArray()
        ];
        // var_dump($data);

      return view('Admin/pages/processorders', $data);  
  }
  
  public function processed($id, $user_id){
    $placeorder = new PlaceOrderModel();
    $placeorder->set('status', 'Ready To Serve')->where('user_id', $user_id)
    ->where('menuid', $id)->update();

    return redirect()->route('processorders');
}

public function cancelled()
  {
    $order_model = new PlaceOrderModel();
        $data = [
            'placeorder' => $order_model->select('*')
            ->join('product', 'product.id = orders.menuid', 'right')
            ->join('users', 'users.id = orders.user_id', 'right')
            ->where('status', 'Cancelled by Seller')
            ->get()->getResultArray()
        ];
      return view('Admin/pages/cancelorders', $data);
  }

//   public function blocked($id, $user_id){
//     $cus = new UserModel();
//     $cus->set('status', 'BLOCKED')->where('id',id)
//     ->where('user_id', $id)->update();

//     return redirect()->route('customers');
// }

}

?>