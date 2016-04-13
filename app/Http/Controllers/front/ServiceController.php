<?php

namespace App\Http\Controllers\front;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Models\Common\Categorie;
use App\Models\Common\Subcategory;
use App\Models\Common\Service;


class ServiceController extends Controller{

    public function index($lg,$id=null){
        $categorie    = new Categorie();
        $subcategory  = new Subcategory();
        $serviceModel = new Service();
        $service      = $serviceModel->getService($id);
        $serviceImges = $service->getServiceImages()->toArray();
        $service      =  $service->toArray();
        $view         = 'front.service.service';
        $data         = array(
                "categorie"    => $categorie,
                "serviceModel" => $serviceModel,
                "subcategory"  => $subcategory,
                "serviceImges" => $serviceImges,
                "service"      => $service,
            );
       return view($view,$data);
    }
}