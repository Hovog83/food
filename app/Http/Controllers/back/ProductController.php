<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Validator;
use Yajra\Datatables\Datatables;
use App\Models\Common\Categorie;
use App\Models\Common\Subcategory;
use App\Models\Common\Image;
use App\Helpers\Images_up;
use App\Models\Common\Language;

class ProductController extends Controller{
    public function index(){
        return view('back.product.index',["type"=>null]);
    }    
    public function type($type){
        return view('back.product.index',["type"=>$type]);
    }

    public function addEdit(Request $request, $id = false) {
        $categorie = Categorie::where('status', '=', "ACTIVE")->select('id', 'name')->get();
        $subcategory = [];
        $cat = [null=>""];
        foreach ($categorie->toArray() as $key => $value) {
            $cat[$value["id"]] = $value["name"];
        }       
    	if(!$id){
	    	    $product = new Product();
            $url = 'admin/product/create';
    	}else{
            $product = Product::find($id);
            $subcategory = Subcategory::getSubcategoryByCatIdForProduct($product->cat_id);
            $url = 'admin/product/edit/'.$id;
    	}
        if ($request->isMethod('post')) {
            $rules = Product::rules();
            $rules['images.*'] = 'image|max:2000';
          $validator = Validator::make($request->all(),$rules);
	        if ($validator->fails()) {
	            return redirect($url)->withErrors($validator,"addEdit")->withInput();
	        }else{
                  if($request->images[0]){
                    $up =  new Images_up();
                    $images = $up->upload();
                  }

                    $title = preg_replace('/[^a-z-0-9?]+/iu', '_', $request->title);

                    $product->title       = $request->title;
                    $product->codeTitle   = $title;
                    $product->status      = $request->status;
                    $product->order       = $request->order;
                    $product->description = $request->description;
                    $product->cat_id      = $request->cat_id;
                    $product->price       = $request->price;
                    $product->oldPrice   = $request->oldPrice;
                    $product->save();

                  if($request->images[0]){


                    foreach ($images as $key => $value) {
                        $image_model = new Image();
                        $image_model->product_id = $product->id;
                        $image_model->image      = $value;
                        $image_model->order      =  $key;
                        $image_model->save();
                    }
                  }
	        }
	        return redirect('admin/product');
        }
        return view('back.product.addEdit',["product"=>$product,"cat"=>$cat,"subcategory"=>$subcategory]);
    }
    public function delete($id) {
        Product::find($id)->delete();
         return redirect('admin/product');
    }   



    public function getSubCat($id = false ) {
        $subcategory = array();
        if($id){
            $subcategory = Subcategory::getSubcategoryByCatIdForProduct($id);
        }
        echo json_encode($subcategory);die;
    }    
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData($type = null){

        if(!$type){
            $anyData =  Datatables::of(Product::select('*'));
        }else{
            $anyData =  Datatables::of(Product::select('*')->where('status', '=',strtoupper($type)));
        }
        return $anyData->addColumn('action', function ($cat) {
                     return '<a href="/admin/product/edit/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/admin/product/delete/'.$cat->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</a>';
                 })->editColumn('id', 'ID: {{$id}}')
        ->make(true);
    }

    public function sortImages(Request $request) {
        if ($request->isMethod('get')) {
              $sort_array = $request->images;
              $image_model = new Image();
              $image_model->sortImages($sort_array);
        }
      }
      public function setMainImages($id,$product) {
          $image_model = new Image();
          $image_model->setMainImages($id,$product);
          echo "true";
      }
      
      public function deleteImages($id) {
          $image_model = Image::find($id);
          $up =  new Images_up();
          $images = $up->deleteImages($image_model->image);
          Image::find($id)->delete();
          echo "true";
      }

}
