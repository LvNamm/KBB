<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Type;

class CatalogueAdminController extends Authentication
{
    public function create(Request $request)
    {
        if (!$this->authentication($request))
            return redirect("/admin/login");
        return view("admin.create_catalogue");
    }

    public function searchProduct($keySearch){
        $products = Product::where('title', 'like', '%'.$keySearch.'%')->get();
        $products2 = array();
        foreach($products as $product){
            $product['types'] = $product->type()->get();
            array_push($products2,$product);
        }
        return $products2;
    }

    public function add(Request $request)
    {
        if (!$this->authentication($request))
            return redirect("/admin/login");

        try{
            $id = $request->id;
            if($id>0){
                $product = Product::find($id);
                if($product == null){
                    session(['create-product-error' => 'Lỗi!. Không thể tìm thấy sản phẩm']);
                    return redirect("/admin/create-catalogue");
                }
                else{
                    $types = $product->type()->get();
                    foreach($types as $type){
                        $check = true;
                        foreach($request->_id as $id){
                            if($type->id==$id){
                                $check = false;
                                break;
                            }
                            if($check)
                                $type->delete();
                        }
                    }
                    $_id = $request->_id;
                    $_type = $request->_type;
                    $_price = $request->_price;
                    $_less50 = $request->_less50;
                    $_50to200 = $request->_50to200;
                    $_200to500 = $request->_200to500;
                    $_500to1000 = $request->_500to1000;
                    $_more1000 = $request->_more1000;
                    $types = array();
                    for($i=0;$i<count($_id);$i++){
                        $type = Type::find($_id[$i]);
                        if($type == null){
                            $type = new Type();
                        }
                        $type->_less50 = $_less50[$i];
                        $type->_50to200 =$_50to200[$i];
                        $type->_200to500 = $_200to500[$i];
                        $type->_500to1000 = $_500to1000[$i];
                        $type->_more1000 = $_more1000[$i];
                        $type->name_type = $_type[$i];
                        $type->price = $_price[$i];
                        array_push($types,$type);
                    }
                    $product->show_in_catgolue = 1;
                    $product->save();
                    $product->type()->saveMany($types);
                    session(['create-product-sucess' => 'Thêm mới thành công']);
                    return redirect("/admin/create-catalogue");
                    
                }
            }
            
        }
        catch(Exception $ex){
            dd($ex);
        }
       
    }
    public function deleteFromCatalogue($link, Request $request){
        if (!$this->authentication($request))
            return redirect("/admin/login");
        $product = Product::where('link',$link)->first();
        $product->show_in_catgolue = 0;
        $product->save();
        return redirect("/catalogue");
    }
}
