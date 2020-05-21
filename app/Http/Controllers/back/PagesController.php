<?php

namespace App\Http\Controllers\back;

use App\Models\Common\Pages;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DB;
use Yajra\Datatables\Datatables;
use App\Models\Common\Language;

class PagesController extends Controller{
    public $leng;
    public function index(){
        return view('back.pages.index');
    }
    public function addEditContent(Request $request, $id = false, $leng = 'en') {
        $language = Language::getLanguages(Language::STATUS_ACTIVE);
            if(!$id){
             return redirect('admin/pages');
            }else{
                $pages = Pages::find($id);
                $url = 'admin/pages/edit/'.$id;
            }
            if ($request->isMethod('post')) {
              $validator = Validator::make($request->all(),['html'  => 'required|min:10']);
               if ($validator->fails()) {
                    return redirect($url)->withErrors($validator,'addEdit')->withInput();
                }else{         
                    if($leng == 'en'){
                     $pages->html = $request->html;
                     $pages->save();
                     return redirect('admin/pages');
                    }else{
                        if(\Schema::hasColumn('pages', 'html_'.$leng))  //check whether users table has email column
                        {
                             DB::table('pages')
                                ->where('id', $pages->id)
                                ->update(["html_".$leng => $request->html]);
                        }else{
                            $this->leng = "html_".$leng;
                           \Schema::table('pages', function ($table) {
                                $table->text($this->leng);
                            });
                           DB::table('pages')
                              ->where('id', $pages->id)
                              ->update(["html_".$leng => $request->html]);
                        }
                    }
                }
                return redirect('admin/pages');
            }
            $html = $pages->html;
            if($leng != "en"){
                $html_ = $pages->toArray();
                if(!empty($html_["html_".$leng])){
                    $html = $html_["html_".$leng];
                }else{
                 $html = $pages->html;
                }
            }

            return view('back.pages.addEditContent',["pages"=>$pages,"html"=>$html,"language"=>$language,"leng"=>$leng]);
    }
    public function addEdit(Request $request, $id = false) {
        if(!$id){
            $pages = new Pages();
            $url = 'admin/pages/create';
        }else{
            $pages = Pages::find($id);
            $url = 'admin/pages/edit/'.$id;
                // 'slug'  => 'required|max:10|unique:pages',
        }
        $image_model = DB::table('page_image');
        $images = $image_model->get();
        if ($request->isMethod('post')) {
          $validator = Validator::make($request->all(),Pages::rules());
           if ($validator->fails()) {
                return redirect($url)->withErrors($validator,'addEdit')->withInput();
            }else{         

                $title = preg_replace('/[^a-z-0-9?]+/iu', '_', $request->title);
                $language = array($title => $request->title);
                Language::insertKey($language,$id);

                 $pages->title     = $request->title;
                 $pages->slug      = $request->slug;
                 $pages->order     = $request->order;
                 $pages->html      = $request->html;
                 $pages->save();

            }
            return redirect('admin/pages');
        }
        return view('back.pages.addEdit',["pages"=>$pages,"images"=>$images]);
    }
    public function delete($id) {
        Pages::find($id)->delete();
         return redirect('admin/pages');
    }
    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData(){
        return Datatables::of(Pages::select('*')->orderBy('order'))
        ->addColumn('action', function ($cat) {
                     return '<a href="/admin/pages/edit/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a><a href="/admin/pages/edit_content/'.$cat->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit content</a><a href="/admin/pages/delete/'.$cat->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> delete</a>';
                 })->editColumn('id', '{{$id}}')
        ->make(true);
    }
     public function sortTable(Request $request){
         if ($request->isMethod('get')) {
               $sort_array = $request->sort;
               $Categorie = new Pages();
               $Categorie->sortTable($sort_array);
         }
     }   
}
