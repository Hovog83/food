<aside id="left-panel">
    <nav>
        <ul>
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">User</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.user.index') }}">
                        <a href="/admin/user" title="List"><span class="menu-item-parent">List</span></a>
                    </li>                    
                    <li class="{{ Menu::isActive('admin.user.create') }} {{ Menu::isActive('admin.user.edit') }}">
                        <a href="/admin/user/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>

                </ul>
            </li>            
          <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Categorie</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.categorie.index') }}">
                        <a href="/admin/categorie/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="{{ Menu::isActive('admin.categorie.create') }}">
                        <a href="/admin/categorie/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>
                    <li class="">
                        <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">Subcategory</span></a>
                        <ul>
                            <li class="{{ Menu::isActive('admin.subcategory.index') }}">
                                <a href="/admin/subcategory/" title="List"><span class="menu-item-parent">List</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.subcategory.create') }} {{ Menu::isActive('admin.subcategory.edit') }}">
                                <a href="/admin/subcategory/create" title="List"><span class="menu-item-parent">Create</span></a>
                            </li>
                        </ul>
                    </li>       
                </ul>
            </li>           
            
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">product</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.product.index') }}">
                        <a href="#" title="List"><span class="menu-item-parent"><i class="fa fa-lg fa-fw fa-users"></i> lists</span></a>
                        <ul>
                            <li class="{{ Menu::isActive('admin.product.index') }}">
                                <a href="/admin/product/" title="List"><span class="menu-item-parent">All list</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.product.type.typeApproved') }}">
                                <a href="/admin/product/type/approved" title="List"><span class="menu-item-parent">Approved list</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.product.type.typeNew') }}">
                                <a href="/admin/product/type/new" title="List"><span class="menu-item-parent">New list</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.product.type.typeBlocked') }}">
                                <a href="/admin/product/type/blocked" title="List"><span class="menu-item-parent">Blocked list</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.product.type.typeDelete') }}">
                                <a href="/admin/product/type/delete" title="List"><span class="menu-item-parent">Delete  list</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Menu::isActive('admin.service.create') }} {{ Menu::isActive('admin.service.edit') }}">
                        <a href="/admin/service/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>
                
                </ul>
            </li>
            <li class="">
                <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">menu</span></a>
                <ul>
                    <li class="{{ Menu::isActive('admin.menu.index') }}">
                        <a href="/admin/menu/" title="List"><span class="menu-item-parent">List</span></a>
                    </li>
                    <li class="{{ Menu::isActive('admin.menu.create') }} {{ Menu::isActive('admin.menu.edit') }}">
                        <a href="/admin/menu/create" title="List"><span class="menu-item-parent">Create</span></a>
                    </li>        

                    <li class="">
                        <a href="#" title="User"><i class="fa fa-lg fa-fw fa-users"></i> <span class="menu-item-parent">pages</span></a>
                        <ul>
                            <li class="{{ Menu::isActive('admin.pages.index') }}">
                                <a href="/admin/pages/" title="List"><span class="menu-item-parent">List</span></a>
                            </li>
                            <li class="{{ Menu::isActive('admin.pages.create') }} {{ Menu::isActive('admin.pages.edit') }}">
                                <a href="/admin/pages/create" title="List"><span class="menu-item-parent">Create</span></a>
                            </li>
                        </ul>
                    </li> 
                    <li class="{{ Menu::isActive('admin.images.add') }}">
                        <a href="/admin/images" title="List"><span class="menu-item-parent">Images</span></a>
                    </li>
                </ul>
            </li> 
        </ul>
    </nav>
    <span class="minifyme" data-action="minifyMenu">
        <i class="fa fa-arrow-circle-left hit"></i>
    </span>
</aside>