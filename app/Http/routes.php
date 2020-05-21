<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('middleware'  => ['web','admin']), function ()
{
    
    Route::get('/laravel-filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show');
    Route::post('/laravel-filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\LfmController@upload');
   

    // Show integration error messages
    Route::get('/laravel-filemanager/errors', [
        'uses' => '\Unisharp\Laravelfilemanager\controllers\LfmController@getErrors',
        'as' => 'getErrors',
    ]);

    // upload
    Route::any('/laravel-filemanager/upload', [
        'uses' => 'UploadController@upload',
        'as' => 'upload',
    ]);

    // list images & files
    Route::get('/laravel-filemanager/jsonitems', [
        'uses' => 'ItemsController@getItems',
        'as' => 'getItems',
    ]);

    // folders
    Route::get('/laravel-filemanager/newfolder', [
        'uses' => 'FolderController@getAddfolder',
        'as' => 'getAddfolder',
    ]);
    Route::get('/laravel-filemanager/deletefolder', [
        'uses' => 'FolderController@getDeletefolder',
        'as' => 'getDeletefolder',
    ]);
    Route::get('/laravel-filemanager/folders', [
        'uses' => 'FolderController@getFolders',
        'as' => 'getFolders',
    ]);

    // crop
    Route::get('/laravel-filemanager/crop', [
        'uses' => 'CropController@getCrop',
        'as' => 'getCrop',
    ]);
    Route::get('/laravel-filemanager/cropimage', [
        'uses' => 'CropController@getCropimage',
        'as' => 'getCropimage',
    ]);
    Route::get('/laravel-filemanager/cropnewimage', [
        'uses' => 'CropController@getNewCropimage',
        'as' => 'getCropimage',
    ]);

    // rename
    Route::get('/laravel-filemanager/rename', [
        'uses' => 'RenameController@getRename',
        'as' => 'getRename',
    ]);

    // scale/resize
    Route::get('/laravel-filemanager/resize', [
        'uses' => 'ResizeController@getResize',
        'as' => 'getResize',
    ]);
    Route::get('/laravel-filemanager/doresize', [
        'uses' => 'ResizeController@performResize',
        'as' => 'performResize',
    ]);

    // download
    Route::get('/laravel-filemanager/download', [
        'uses' => 'DownloadController@getDownload',
        'as' => 'getDownload',
    ]);

    // delete
    Route::get('/laravel-filemanager/delete', [
        'uses' => 'DeleteController@getDelete',
        'as' => 'getDelete',
    ]);


});
Route::group([
    'namespace' => 'back',
    'prefix'    => 'admin'
], function () {
    Route::group(['middleware' => ['web','admin']], function () {
      

        /*IndexController*/
        Route::get('/', [
            'uses' => "IndexController@index",
            'as'   => 'admin.index.index'
        ]);        
        /*CategorieController*/
        Route::get('/categorie', [
            'uses' => "CategorieController@index",
            'as'   => 'admin.categorie.index'
        ]);
        /*CategorieController  Edit*/
        Route::any('categorie/edit/{id}', [
            'uses' => "CategorieController@addEdit",
            'as'   => 'admin.categorie.edit'
        ]);       
        /*CategorieController create */
        Route::any('categorie/create', [
            'uses' => "CategorieController@addEdit",
            'as'   => 'admin.categorie.create'
        ]);   
        Route::any('categorie/anyData', [
            'uses' => "CategorieController@anyData",
            'as'   => 'admin.categorie.create'
        ]);   
        Route::any('categorie/sortTable', ['uses' => "CategorieController@sortTable"]);
        Route::get('categorie/delete/{id}', ['uses' => "CategorieController@delete"]);
         // sub cat
        /*SubcategoryController*/
            Route::get('/subcategory', [
                'uses' => "SubcategoryController@index",
                'as'   => 'admin.subcategory.index'
            ]);
            /*SubcategoryController  Edit*/
            Route::any('subcategory/edit/{id}', [
                'uses' => "SubcategoryController@addEdit",
                'as'   => 'admin.subcategory.edit'
            ]);       
            /*SubcategoryController create */
            Route::any('subcategory/create', [
                'uses' => "SubcategoryController@addEdit",
                'as'   => 'admin.subcategory.create'
            ]);   
            Route::any('subcategory/anyData', [
                'uses' => "SubcategoryController@anyData",
                'as'   => 'admin.subcategory.create'
            ]);   
            Route::get('subcategory/delete/{id}', ['uses' => "SubcategoryController@delete"]);
            Route::any('subcategory/sortTable', ['uses' => "SubcategoryController@sortTable"]);
        // sub catEnD
             // ProductController 
            /*ProductController*/
                Route::get('/product', [
                    'uses' => "ProductController@index",
                    'as'   => 'admin.product.index'
                ]);
                /*ProductController  Edit*/
                Route::any('product/edit/{id}', [
                    'uses' => "ProductController@addEdit",
                    'as'   => 'admin.product.edit'
                ]);       
                /*ProductController create */
                Route::any('product/create', [
                    'uses' => "ProductController@addEdit",
                    'as'   => 'admin.product.create'
                ]);   
                Route::any('product/anyData/{type?}', [
                    'uses' => "ProductController@anyData",
                    'as'   => 'admin.product.create'
                ]);   
                Route::get('product/delete/{id}', ['uses' => "ProductController@delete"]);
                Route::any('product/sortImages', ['uses' => "ProductController@sortImages"]);
                Route::any('product/deleteImages/{id}', ['uses' => "ProductController@deleteImages"]);
                Route::any('product/setMainImages/{id}/{products}', ['uses' => "ProductController@setMainImages"]);
                Route::any('product/getSubCat/{id?}', ['uses' => "ProductController@getSubCat"]);
            // productController catEnD

                    Route::any('product/type/{approved}', [
                        'uses' => "ProductController@type",
                        'as'   => 'admin.product.type.typeApproved'
                    ]);   
                    Route::any('product/type/{new}', [
                        'uses' => "ProductController@type",
                        'as'   => 'admin.product.type.typeNew'
                    ]);               
                    Route::any('product/type/{blocked}', [
                        'uses' => "ProductController@type",
                        'as'   => 'admin.product.type.typeBlocked'
                    ]);          
                      
                    Route::any('product/type/{delete}', [
                        'uses' => "ProductController@type",
                        'as'   => 'admin.product.type.typeDelete'
                    ]);          

        // user 
            /*UserController*/
            Route::get('/user', [
                'uses' => "UserController@index",
                'as'   => 'admin.user.index'
            ]);
            /*UserController  Edit*/
            Route::any('user/edit/{id}', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.edit'
            ]);       
            /*UserController create */
            Route::any('user/create', [
                'uses' => "UserController@addEdit",
                'as'   => 'admin.user.create'
            ]);   
            Route::any('user/anyData', [
                'uses' => "UserController@anyData",
                'as'   => 'admin.user.create'
            ]);   
           Route::get('user/delete/{id}', ['uses' => "UserController@delete"]);
        // end user

        // menu 
            /*menuController*/
            Route::get('/menu', [
            'uses' => "MenuController@index",
            'as'   => 'admin.menu.index'
            ]);
            /*MenuController  Edit*/
            Route::any('menu/edit/{id}', [
            'uses' => "MenuController@addEdit",
            'as'   => 'admin.menu.edit'
            ]);       
            /*MenuController create */
            Route::any('menu/create', [
            'uses' => "MenuController@addEdit",
            'as'   => 'admin.menu.create'
            ]);   
            Route::any('menu/anyData', [
            'uses' => "MenuController@anyData",
            'as'   => 'admin.menu.create'
            ]);              

            Route::get('menu/delete/{id}', ['uses' => "MenuController@delete"]);

            Route::get('menu/view/{id}', [
                'uses' => "MenuPagesController@view",
                'as'   => 'admin.menu.view'
            ]);         
            Route::get('MenuPages/isPageCheckedSave', [
                'uses' => "MenuPagesController@isPageCheckedSave",
                'as'   => 'admin.menu.isPageCheckedSave'
            ]);         
            Route::get('MenuPages/sortTable', [
                'uses' => "MenuPagesController@sortTable",
                'as'   => 'admin.menu.sortTable'
            ]);
        // menu EnD
            // pages 
            /*PagesController*/
            Route::get('/pages', [
            'uses' => "PagesController@index",
            'as'   => 'admin.pages.index'
            ]);
            /*PagesController  Edit*/
            Route::any('pages/edit/{id}', [
            'uses' => "PagesController@addEdit",
            'as'   => 'admin.pages.edit'
            ]);     
            /*PagesController  Edit*/
            Route::any('pages/edit_content/{id}/{lng?}', [
            'uses' => "PagesController@addEditContent",
            'as'   => 'admin.pages.edit'
            ]);       
            /*PagesController create */
            Route::any('pages/create', [
            'uses' => "PagesController@addEdit",
            'as'   => 'admin.pages.create'
            ]);   
            Route::any('pages/anyData', [
            'uses' => "PagesController@anyData",
            'as'   => 'admin.pages.create'
            ]);   
            Route::get('pages/delete/{id}', ['uses' => "PagesController@delete"]);
            Route::any('pages/sortTable', ['uses' => "PagesController@sortTable"]);
        // pages EnD

          // images
             Route::any('/images', [
            'uses' => "ImagesController@add",
            'as'   => 'admin.images.add'
            ]);   
             Route::any('/images/deleteImages/{id}', [
            'uses' => "ImagesController@deleteImages",
            'as'   => 'admin.images.deleteImages'
            ]);   
        // images EnD


             /*LangController*/
             Route::get('language', [
                 'uses' => "LanguageController@index",
                 'as'   => 'admin.lang.list'
             ]);
             Route::any('language/edit/{id?}', [
                 'uses' => "LanguageController@edit",
                 'as'   => 'admin.lang.edit'
             ]);
             Route::get('language/delete/{id}', ['uses' => "LanguageController@delete"]);
    });
});
Route::group([
    'namespace' => 'front',
    'middleware' => [
        'language',
        'web'
    ],
    'prefix' => '{lang?}'
], function(){
    Route::any('/auth', ['uses' => 'UserController@auth']);
    Route::any('/login/active/{token}', ['uses' => 'UserController@active']);
    Route::any('/user', ['uses' => 'UserController@userAccount']);
    Route::any('/reset', ['uses' => 'UserController@reset']);
    Route::any('/logout', ['uses' => 'UserController@logout']);
    Route::any('/user/reset', ['uses' => 'UserController@logout']);
    Route::any('/password/reset/{token}', ['uses' => 'UserController@changePassword']);
    
    Route::any('/pages/{slug}', [
            'uses' => 'PagesController@index',
            'as'   => 'front.page.index'
        ]);    
    Route::any('/categories/{cat}', [
            'uses' => 'ServicesController@index',
            'as'   => 'front.page.index'
        ]);    
    Route::any('/product/{id?}', [
            'uses' => 'ServiceController@index',
            'as'   => 'front.page.index'
        ]);   
 Route::any('/check/{id}', [
            'uses' => 'ServiceController@check',
            'as'   => 'front.page.check'
        ]);




    Route::get('{action}/{a?}',  function($lang){
        return redirect($lang . '/');
    });
    Route::get('/', [
            'uses' => 'IndexController@index',
            'as'   => 'front.index'
        ]);
    Route::any('/admin', ['uses' => 'IndexController@index']);
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
