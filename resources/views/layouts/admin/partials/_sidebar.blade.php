<div id="sidebarMain" class="d-none">
    <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered  ">
        <div class="navbar-vertical-container text-capitalize">
            <div class="navbar-vertical-footer-offset">
                <div class="navbar-brand-wrapper justify-content-between">
                    <!-- Logo -->

                    @php($restaurant_logo=\App\Models\BusinessSetting::where(['key'=>'logo'])->first()->value)
                    <a class="navbar-brand" href="#" aria-label="Front">
                        <img class="navbar-brand-logo" onerror="this.src='assets/admin/img/160x160/img2.jpg'" alt="Logo">
                        <img class="navbar-brand-logo-mini" onerror="this.src='assets/admin/img/160x160/img2.jpg'" alt="Logo">
                    </a>

                    <!-- End Logo -->

                    <!-- Navbar Vertical Toggle -->
                    <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-vertical-aside-toggle btn btn-icon btn-xs btn-ghost-dark">
                        <i class="tio-clear tio-lg"></i>
                    </button>
                    <!-- End Navbar Vertical Toggle -->
                </div>

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <ul class="navbar-nav navbar-nav-lg nav-tabs">
                        <!-- Dashboards -->
                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin')?'show':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link" href="#" title="Dashboards">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    dashboard
                                </span>
                            </a>
                        </li>

                        <!-- End Dashboards -->

                        <li class="nav-item">
                            <small class="nav-subtitle">possystem</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <!-- POS -->
                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin/pos/*')?'active':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:">
                                <i class="tio-shopping nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">POS</span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: {{Request::is('admin/pos/*')?'block':'none'}}">
                                <li class="nav-item {{Request::is('admin/pos/')?'active':''}}">
                                    <a class="nav-link " href="#" title="pos">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">pos</span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/pos/orders')?'active':''}}">
                                    <a class="nav-link " href="#" title="orders">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">orders
                                            <span class="badge badge-info badge-pill ml-1">
                                                {{\App\Models\Order::Pos()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="navbar-vertical-aside-has-menu ">
                            <a class="js-navbar-vertical-aside-menu-link nav-link" href="../../../admin-views/client/index.blade.php" title="Cadastro">
                                <i class="tio-home-vs-1-outlined nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    Cadastro de clientes
                                </span>
                            </a>
                        </li>
                        <!-- End POS -->

                        <li class="nav-item">
                            <small class="nav-subtitle">ordersection</small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin/orders*')?'active':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:">
                                <i class="tio-shopping-cart nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                    order
                                </span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: {{Request::is('admin/order*')?'block':'none'}}">
                                <li class="nav-item {{Request::is('admin/orders/list/all')?'active':''}}">
                                    <a class="nav-link" href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            all
                                            <span class="badge badge-info badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/pending')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            pending
                                            <span class="badge badge-soft-info badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'pending'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/confirmed')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            confirmed
                                            <span class="badge badge-soft-success badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'confirmed'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/processing')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            processing
                                            <span class="badge badge-warning badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'processing'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/out_for_delivery')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            out_for_delivery
                                            <span class="badge badge-warning badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'out_for_delivery'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/delivered')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            delivered
                                            <span class="badge badge-success badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'delivered'])->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/returned')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            returned
                                            <span class="badge badge-soft-danger badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'returned'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/orders/list/failed')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            failed
                                            <span class="badge badge-danger badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'failed'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item {{Request::is('admin/orders/list/canceled')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            canceled
                                            <span class="badge badge-soft-dark badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where(['order_status'=>'canceled'])->notSchedule()->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>

                                <li class="nav-item {{Request::is('admin/orders/list/schedule')?'active':''}}">
                                    <a class="nav-link " href="#" title="">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">
                                            scheduled
                                            <span class="badge badge-soft-info badge-pill ml-1">
                                                {{\App\Models\Order::notPos()->where('delivery_date','>',\Carbon\Carbon::now()->format('Y-m-d'))->count()}}
                                            </span>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Pages -->



                        <li class="nav-item">
                            <small class="nav-subtitle">product section </small>
                            <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                        </li>

                        <!-- Pages -->
                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin/banner*')?'active':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:">
                                <i class="tio-image nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">banner </span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: {{Request::is('admin/banner*')?'block':'none'}}">
                                <li class="nav-item {{Request::is('admin/banner/add-new')?'active':''}}">
                                    <a class="nav-link " href="#">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">add new </span>
                                    </a>
                                </li>
                                <li class="nav-item {{Request::is('admin/banner/list')?'active':''}}">
                                    <a class="nav-link " href="# ">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">list</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Pages -->


                        <!-- Pages -->
                        <li class="navbar-vertical-aside-has-menu {{Request::is('admin/category*')?'active':''}}">
                            <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:">
                                <i class="tio-category nav-icon"></i>
                                <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">category</span>
                            </a>
                            <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: {{Request::is('admin/category*')?'block':'none'}}">
                                <li class="nav-item {{Request::is('admin/category/add')?'active':''}}">
                                    <a class="nav-link " href="#" title="add new category">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">category</span>
                                    </a>
                                </li>

                                <li class="nav-item {{Request::is('admin/category/add-sub-category')?'active':''}}">
                                    <a class="nav-link " href="#" title="add new sub category">
                                        <span class="tio-circle nav-indicator-icon"></span>
                                        <span class="text-truncate">sub_category</span>
                                    </a>
                                </li>

                                {{--<li class="nav-item {{Request::is('admin/category/add-sub-sub-category')?'active':''}}">
                                <a class="nav-link " href="#" title="add new sub sub category">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">Sub-Sub-Category</span>
                                </a>
                        </li>--}}
                    </ul>
                    </li>
                    <!-- End Pages -->


                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu {{Request::is('admin/attribute*')?'active':''}}">
                        <a class="js-navbar-vertical-aside-menu-link nav-link" href="#">
                            <i class="tio-apps nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                attribute
                            </span>
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu {{Request::is('admin/addon*')?'active':''}}">
                        <a class="js-navbar-vertical-aside-menu-link nav-link" href="#">
                            <i class="tio-add-circle-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                addon
                            </span>
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu {{Request::is('admin/product*')?'active':''}}">
                        <a class="js-navbar-vertical-aside-menu-link nav-link nav-link-toggle" href="javascript:">
                            <i class="tio-premium-outlined nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">product</span>
                        </a>
                        <ul class="js-navbar-vertical-aside-submenu nav nav-sub" style="display: {{Request::is('admin/product*')?'block':'none'}}">
                            <li class="nav-item {{Request::is('admin/product/add-new')?'active':''}}">
                                <a class="nav-link " href="#" title="add new product">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">add new </span>
                                </a>
                            </li>
                            <li class="nav-item {{Request::is('admin/product/list')?'active':''}}">
                                <a class="nav-link " href="#" title="product list">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">list </span>
                                </a>
                            </li>
                            <li class="nav-item {{Request::is('admin/product/bulk-import')?'active':''}}">
                                <a class="nav-link " href="#" title="bulk import">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">bulk_import </span>
                                </a>
                            </li>
                            <li class="nav-item {{Request::is('admin/product/bulk-export')?'active':''}}">
                                <a class="nav-link " href="#" title="bulk export">
                                    <span class="tio-circle nav-indicator-icon"></span>
                                    <span class="text-truncate">bulk_export </span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- End Pages -->

                    <li class="nav-item">
                        <small class="nav-subtitle" title="Layouts">business section </small>
                        <small class="tio-more-horizontal nav-subtitle-replacer"></small>
                    </li>

                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu {{Request::is('admin/branch*')?'active':''}}">
                        <a class="js-navbar-vertical-aside-menu-link nav-link" href="#">
                            <i class="tio-shop nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                branch
                            </span>
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Pages -->
                    <li class="navbar-vertical-aside-has-menu {{Request::is('admin/message*')?'active':''}}">
                        <a class="js-navbar-vertical-aside-menu-link nav-link" href="#">
                            <i class="tio-messages nav-icon"></i>
                            <span class="navbar-vertical-aside-mini-mode-hidden-elements text-truncate">
                                messages
                            </span>
                        </a>
                    </li>
                    <!-- End Pages -->

                    <!-- Pages -->

                    <!-- End Pages -->

                    <li class="nav-item" style="padding-top: 100px">
                        <div class="nav-divider"></div>
                    </li>
                    </ul>
                </div>
                <!-- End Content -->
            </div>
        </div>
    </aside>
</div>

<div id="sidebarCompact" class="d-none">

</div>


{{--<script>
    $(document).ready(function () {
        $('.navbar-vertical-content').animate({
            scrollTop: $('#scroll-here').offset().top
        }, 'slow');
    });
</script>--}}