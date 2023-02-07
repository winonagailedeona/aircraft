<?php

namespace App\Controllers;
use App\Models\MenuModel;
use App\Models\PlaceOrderModel;
use App\Models\CartModel;
use App\Models\CheckoutModel;

class ProductsController extends BaseController
{

  public function mycont()
  {
    $session = session();
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

  public function allProducts()
  {
    $ot = new MenuModel();
    $data = [
      'result' => $ot->findAll()
    ];
    return view('Menus/others', $data);
  }

  public function sp($id)
  {
    $pica_model = new MenuModel();
    $pica['pica'] = $pica_model->find($id);
    return view('Menus/single', $pica);
  }

  public function spm($id)
  {
    $meals_model = new MenuModel();
    $meals['meals'] = $meals_model->find($id);
    return view('Menus/singlemeals', $meals);
  }

  public function sps($id)
  {
    $sandwich_model = new MenuModel();
    $sandwich['sandwich'] = $sandwich_model->find($id);
    return view('Menus/singlesandwich', $sandwich);
  }

  public function spp($id)
  {
    $pasta_model = new MenuModel();
    $pasta['pasta'] = $pasta_model->find($id);
    return view('Menus/singlepasta', $pasta);
  }

  public function spd($id)
  {
    $dessert_model = new MenuModel();
    $dessert['dessert'] = $dessert_model->find($id);
    return view('Menus/singledessert', $dessert);
  }

  public function spmi($id)
  {
    $milktea_model = new MenuModel();
    $milktea['milktea'] = $milktea_model->find($id);
    return view('Menus/singlemilktea', $milktea);
  }

  public function spo($id)
  {
    $menu_model = new MenuModel();
    $result['result'] = $menu_model->find($id);
    return view('Menus/singlesearch', $result);
  }

  public function placeorder() 
  {
        $order_model = new PlaceOrderModel();
        $cart_model = new CartModel();
        $menuid = $this->request->getPost('menuid[]');
        $quan = $this->request->getPost('bilang[]');
        $total = $this->request->getPost('total[]');
        $note = $this->request->getPost('note');
        $datee = $this->request->getPost('datee');
        $timee = $this->request->getPost('timee');
        $type = $this->request->getPost('type');
        for($i = 0; $i < count($menuid); $i++){
            $data = [
                'menuid' => $menuid[$i],
                'user_id' => session()->get('id'),
                'orquantity' => $quan[$i],
                'total' => $total[$i],
                'note' => $note,
                'datee' => $datee,
                'timee' => $timee,  
                'type' => $type[$i]

            ];
            if($order_model->insert($data) == 0){
                
                $cart_model->where('menuid',  $menuid[$i])->where('user_id', session()->get('id'))->delete();
                
            }
        }
        return redirect()->route('orders');
  }

}

?>
