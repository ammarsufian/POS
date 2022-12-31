<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li>
                    <a class="{{ Request::is('index') ? 'active' : '' }}" href="{{url('index')}}" ><img src="{{ URL::asset('/assets/img/icons/dashboard.svg')}}" alt="img"><span> لوحة التحكم</span> </a>
                </li>
                <li class="submenu">
                    <a class="{{ Request::is('productlist','addproduct','editbrand','product-details','editsubcategory','editcategory','categorylist','editproduct','addcategory','subcategorylist','subaddcategory') ? 'active' : '' }} href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> المنتجات</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('productlist','editproduct') ? 'active' : '' }}" href="{{url('productlist')}}">لائحة المنتجات</a></li>
                        <li><a class="{{ Request::is('addproduct','product-details') ? 'active' : '' }}"href="{{url('addproduct')}}">إضافة منتج جديد</a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a class="{{ Request::is('customerlist','addbrand','importproduct','barcode') ? 'active' : '' }} href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> الزبائن</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('customerlist') ? 'active' : '' }}"href="{{url('customerlist')}}">لائحة الزبائن</a></li>
{{--                        <li><a class="{{ Request::is('addbrand','editbrand') ? 'active' : '' }}"href="{{url('addbrand')}}">إضافة زبون جديد</a></li>--}}
                    </ul>
                </li>
                <li class="submenu">
                    <a class="{{ Request::is('saleslist','pos','add-sales','sales-details','editsalesreturns','edit-sales','salesreturnlists','createsalesreturns') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/sales1.svg')}}" alt="img"><span> المبيعات</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a class="{{ Request::is('saleslist','sales-details') ? 'active' : '' }}" href="{{url('saleslist')}}">المبيعات</a></li>
                        <li><a class="{{ Request::is('pos') ? 'active' : '' }}" href="{{url('pos')}}">نقطة البيع</a></li>
                        <li><a class="{{ Request::is('add-sales','edit-sales') ? 'active' : '' }}" href="{{url('add-sales')}}">New Sales</a></li>
                        <li><a class="{{ Request::is('salesreturnlists','editsalesreturns') ? 'active' : '' }}" href="{{url('salesreturnlists')}}">Sales Return List</a></li>
                        <li><a class="{{ Request::is('createsalesreturns') ? 'active' : '' }}" href="{{url('createsalesreturns')}}">New Sales Return</a></li>
                    </ul>
                </li>
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('purchaselist','addpurchase','importpurchase','editpurchase') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/purchase1.svg')}}" alt="img"><span> Purchase</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('purchaselist','editpurchase') ? 'active' : '' }}" href="{{url('purchaselist')}}">Purchase List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addpurchase') ? 'active' : '' }}" href="{{url('addpurchase')}}">Add Purchase</a></li>--}}
{{--                        <li><a class="{{ Request::is('importpurchase') ? 'active' : '' }}" href="{{url('importpurchase')}}">Import Purchase</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('expenselist','createexpense','editexpense','expensecategory') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/expense1.svg')}}" alt="img"><span> Expense</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('expenselist') ? 'active' : '' }}" href="{{url('expenselist')}}">Expense List</a></li>--}}
{{--                        <li><a class="{{ Request::is('createexpense','editexpense') ? 'active' : '' }}" href="{{url('createexpense')}}">Add Expense</a></li>--}}
{{--                        <li><a class="{{ Request::is('expensecategory') ? 'active' : '' }}" href="{{url('expensecategory')}}">Expense Category</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}

{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('quotationlist','addquotation','editquotation') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/quotation1.svg')}}" alt="img"><span> Quotation</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('quotationlist','editquotation') ? 'active' : '' }}" href="{{url('quotationlist')}}">Quotation List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addquotation') ? 'active' : '' }}" href="{{url('addquotation')}}">Add Quotation</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('transferlist','addtransfer','importtransfer','edittransfer') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/transfer1.svg')}}" alt="img"><span> Transfer</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('transferlist','edittransfer') ? 'active' : '' }}" href="{{url('transferlist')}}">Transfer  List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addtransfer') ? 'active' : '' }}" href="{{url('addtransfer')}}">Add Transfer </a></li>--}}
{{--                        <li><a class="{{ Request::is('importtransfer') ? 'active' : '' }}" href="{{url('importtransfer')}}">Import Transfer </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('salesreturnlist','createsalesreturn','editsalesreturn','purchasereturnlist','editpurchasereturn','createpurchasereturn') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/return1.svg')}}" alt="img"><span> Return</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('salesreturnlist','editsalesreturn') ? 'active' : '' }}" href="{{url('salesreturnlist')}}">Sales Return List</a></li>--}}
{{--                        <li><a class="{{ Request::is('createsalesreturn') ? 'active' : '' }}" href="{{url('createsalesreturn')}}">Add Sales Return </a></li>--}}
{{--                        <li><a class="{{ Request::is('purchasereturnlist') ? 'active' : '' }}" href="{{url('purchasereturnlist')}}">Purchase Return List</a></li>--}}
{{--                        <li><a class="{{ Request::is('createpurchasereturn','editpurchasereturn') ? 'active' : '' }}" href="{{url('createpurchasereturn')}}">Add Purchase Return </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('customerlist','addcustomer','editcustomer','edituser','editsupplier','editstore','supplierlist','addsupplier','userlist','adduser','storelist','addstore') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> People</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('customerlist') ? 'active' : '' }}" href="{{url('customerlist')}}">Customer List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addcustomer','editcustomer') ? 'active' : '' }}" href="{{url('addcustomer')}}">Add Customer  </a></li>--}}
{{--                        <li><a class="{{ Request::is('supplierlist') ? 'active' : '' }}" href="{{url('supplierlist')}}">Supplier List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addsupplier','editsupplier') ? 'active' : '' }}" href="{{url('addsupplier')}}">Add Supplier </a></li>--}}
{{--                        <li><a class="{{ Request::is('userlist') ? 'active' : '' }}" href="{{url('userlist')}}">User List</a></li>--}}
{{--                        <li><a class="{{ Request::is('adduser','edituser') ? 'active' : '' }}" href="{{url('adduser')}}">Add User</a></li>--}}
{{--                        <li><a class="{{ Request::is('storelist') ? 'active' : '' }}" href="{{url('storelist')}}">Store List</a></li>--}}
{{--                        <li><a class="{{ Request::is('addstore','editstore') ? 'active' : '' }}" href="{{url('addstore')}}">Add Store</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('newcountry','countrieslist','editstate','editcountry','newstate','statelist') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/places.svg')}}" alt="img"><span> Places</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('newcountry','editcountry') ? 'active' : '' }}" href="{{url('newcountry')}}">New Country</a></li>--}}
{{--                        <li><a class="{{ Request::is('countrieslist') ? 'active' : '' }}" href="{{url('countrieslist')}}">Countries list</a></li>--}}
{{--                        <li><a class="{{ Request::is('newstate','editstate') ? 'active' : '' }}" href="{{url('newstate')}}">New State </a></li>--}}
{{--                        <li><a class="{{ Request::is('statelist') ? 'active' : '' }}" href="{{url('statelist')}}">State list</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="{{ Request::is('components') ? 'active' : '' }}" href="{{url('components')}}" ><i data-feather="layers"></i><span> Components</span> </a>--}}
{{--                </li>--}}
{{--                <li>--}}
{{--                    <a class="{{ Request::is('blankpage') ? 'active' : '' }}" href="{{url('blankpage')}}" ><i data-feather="file"></i><span> Blank Page</span> </a>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('error-404','error-500') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="alert-octagon"></i> <span> Error Pages  </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('error-404') ? 'active' : '' }}" href="{{url('error-404')}}">404 Error </a></li>--}}
{{--                        <li><a class="{{ Request::is('error-500') ? 'active' : '' }}" href="{{url('error-500')}}">500 Error </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('sweetalerts','tooltip','popover','ribbon','clipboard','drag-drop','rangeslider','toastr','text-editor',--}}
{{--                        'counter','scrollbar','spinner','notification','lightbox','stickynote','timeline','form-wizard') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="box"></i> <span>Elements </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('sweetalerts') ? 'active' : '' }}" href="{{url('sweetalerts')}}">Sweet Alerts</a></li>--}}
{{--                        <li><a class="{{ Request::is('tooltip') ? 'active' : '' }}" href="{{url('tooltip')}}">Tooltip</a></li>--}}
{{--                        <li><a class="{{ Request::is('popover') ? 'active' : '' }}" href="{{url('popover')}}">Popover</a></li>--}}
{{--                        <li><a class="{{ Request::is('ribbon') ? 'active' : '' }}" href="{{url('ribbon')}}">Ribbon</a></li>--}}
{{--                        <li><a class="{{ Request::is('clipboard') ? 'active' : '' }}" href="{{url('clipboard')}}">Clipboard</a></li>--}}
{{--                        <li><a class="{{ Request::is('drag-drop') ? 'active' : '' }}" href="{{url('drag-drop')}}">Drag & Drop</a></li>--}}
{{--                        <li><a class="{{ Request::is('rangeslider') ? 'active' : '' }}" href="{{url('rangeslider')}}">Range Slider</a></li>--}}
{{--                        <li><a class="{{ Request::is('rating') ? 'active' : '' }}" href="{{url('rating')}}">Rating</a></li>--}}
{{--                        <li><a class="{{ Request::is('toastr') ? 'active' : '' }}" href="{{url('toastr')}}">Toastr</a></li>--}}
{{--                        <li><a class="{{ Request::is('text-editor') ? 'active' : '' }}" href="{{url('text-editor')}}">Text Editor</a></li>--}}
{{--                        <li><a class="{{ Request::is('counter') ? 'active' : '' }}" href="{{url('counter')}}">Counter</a></li>--}}
{{--                        <li><a class="{{ Request::is('scrollbar') ? 'active' : '' }}" href="{{url('scrollbar')}}">Scrollbar</a></li>--}}
{{--                        <li><a class="{{ Request::is('spinner') ? 'active' : '' }}" href="{{url('spinner')}}">Spinner</a></li>--}}
{{--                        <li><a class="{{ Request::is('notification') ? 'active' : '' }}" href="{{url('notification')}}">Notification</a></li>--}}
{{--                        <li><a class="{{ Request::is('lightbox') ? 'active' : '' }}" href="{{url('lightbox')}}">Lightbox</a></li>--}}
{{--                        <li><a class="{{ Request::is('stickynote') ? 'active' : '' }}" href="{{url('stickynote')}}">Sticky Note</a></li>--}}
{{--                        <li><a class="{{ Request::is('timeline') ? 'active' : '' }}" href="{{url('timeline')}}">Timeline</a></li>--}}
{{--                        <li><a class="{{ Request::is('form-wizard') ? 'active' : '' }}" href="{{url('form-wizard')}}">Form Wizard</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('chart-apex','chart-js','chart-morris','chart-flot','chart-peity') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="bar-chart-2"></i> <span> Charts  </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('chart-apex') ? 'active' : '' }}" href="{{url('chart-apex')}}">Apex Charts</a></li>--}}
{{--                        <li><a class="{{ Request::is('chart-js') ? 'active' : '' }}" href="{{url('chart-js')}}">Chart Js</a></li>--}}
{{--                        <li><a class="{{ Request::is('chart-morris') ? 'active' : '' }}" href="{{url('chart-morris')}}">Morris Charts</a></li>--}}
{{--                        <li><a class="{{ Request::is('chart-flot') ? 'active' : '' }}" href="{{url('chart-flot')}}">Flot Charts</a></li>--}}
{{--                        <li><a class="{{ Request::is('chart-peity') ? 'active' : '' }}" href="{{url('chart-peity')}}">Peity Charts</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('icon-fontawesome','icon-feather','icon-ionic','icon-material','icon-pe7','icon-simpleline',--}}
{{--                        'icon-themify','icon-weather','icon-typicon','icon-flag') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="award"></i><span> Icons  </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('icon-fontawesome') ? 'active' : '' }}" href="{{url('icon-fontawesome')}}">Fontawesome Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-feather') ? 'active' : '' }}" href="{{url('icon-feather')}}">Feather Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-ionic') ? 'active' : '' }}" href="{{url('icon-ionic')}}">Ionic Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-material') ? 'active' : '' }}" href="{{url('icon-material')}}">Material Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-pe7') ? 'active' : '' }}" href="{{url('icon-pe7')}}">Pe7 Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-simpleline') ? 'active' : '' }}" href="{{url('icon-simpleline')}}">Simpleline Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-themify') ? 'active' : '' }}" href="{{url('icon-themify')}}">Themify Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-weather') ? 'active' : '' }}" href="{{url('icon-weather')}}">Weather Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-typicon') ? 'active' : '' }}" href="{{url('icon-typicon')}}">Typicon Icons</a></li>--}}
{{--                        <li><a class="{{ Request::is('icon-flag') ? 'active' : '' }}" href="{{url('icon-flag')}}">Flag Icons</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('form-basic-inputs','form-input-groups','form-horizontal','form-vertical','form-mask','form-validation',--}}
{{--                        'form-select2','form-fileupload') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="columns"></i> <span> Forms  </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('form-basic-inputs') ? 'active' : '' }}" href="{{url('form-basic-inputs')}}">Basic Inputs </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-input-groups') ? 'active' : '' }}" href="{{url('form-input-groups')}}">Input Groups </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-horizontal') ? 'active' : '' }}" href="{{url('form-horizontal')}}">Horizontal Form </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-vertical') ? 'active' : '' }}" href="{{url('form-vertical')}}"> Vertical Form </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-mask') ? 'active' : '' }}" href="{{url('form-mask')}}">Form Mask </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-validation') ? 'active' : '' }}" href="{{url('form-validation')}}">Form Validation </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-select2') ? 'active' : '' }}" href="{{url('form-select2')}}">Form Select2 </a></li>--}}
{{--                        <li><a class="{{ Request::is('form-fileupload') ? 'active' : '' }}" href="{{url('form-fileupload')}}">File Upload </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li  class="submenu">--}}
{{--                    <a class="{{ Request::is('tables-basic','data-tables') ? 'active' : '' }}" href="javascript:void(0);"><i data-feather="layout"></i> <span> Table  </span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('tables-basic') ? 'active' : '' }}" href="{{url('tables-basic')}}" >Basic Tables </a></li>--}}
{{--                        <li><a class="{{ Request::is('data-tables') ? 'active' : '' }}" href="{{url('data-tables')}}">Data Table </a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('chat','calendar','email') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/product.svg')}}" alt="img"><span> Application</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul >--}}
{{--                        <li><a class="{{ Request::is('chat') ? 'active' : '' }}" href="{{url('chat')}}">Chat</a></li>--}}
{{--                        <li><a class="{{ Request::is('calendar') ? 'active' : '' }}" href="{{url('calendar')}}">Calendar</a></li>--}}
{{--                        <li><a class="{{ Request::is('email') ? 'active' : '' }}" href="{{url('email')}}">Email</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('purchaseorderreport','inventoryreport','salesreport','invoicereport','purchasereport','supplierreport','customerreport') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/time.svg')}}" alt="img"><span> Report</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('purchaseorderreport') ? 'active' : '' }}" href="{{url('purchaseorderreport')}}">Purchase order report</a></li>--}}
{{--                        <li><a class="{{ Request::is('inventoryreport') ? 'active' : '' }}" href="{{url('inventoryreport')}}">Inventory Report</a></li>--}}
{{--                        <li><a class="{{ Request::is('salesreport') ? 'active' : '' }}" href="{{url('salesreport')}}">Sales Report</a></li>--}}
{{--                        <li><a class="{{ Request::is('invoicereport') ? 'active' : '' }}" href="{{url('invoicereport')}}">Invoice Report</a></li>--}}
{{--                        <li><a class="{{ Request::is('purchasereport') ? 'active' : '' }}" href="{{url('purchasereport')}}">Purchase Report</a></li>--}}
{{--                        <li><a class="{{ Request::is('supplierreport') ? 'active' : '' }}" href="{{url('supplierreport')}}">Supplier Report</a></li>--}}
{{--                        <li><a class="{{ Request::is('customerreport') ? 'active' : '' }}" href="{{url('customerreport')}}">Customer Report</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('newuser','userlists','newuseredit') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/users1.svg')}}" alt="img"><span> Users</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('newuser','newuseredit') ? 'active' : '' }}" href="{{url('newuser')}}">New User </a></li>--}}
{{--                        <li><a class="{{ Request::is('userlists') ? 'active' : '' }}" href="{{url('userlists')}}">Users List</a></li>--}}

{{--                    </ul>--}}
{{--                </li>--}}
{{--                <li class="submenu">--}}
{{--                    <a class="{{ Request::is('generalsettings','emailsettings','paymentsettings','createpermission','editpermission','currencysettings','grouppermissions','taxrates') ? 'active' : '' }}" href="javascript:void(0);"><img src="{{ URL::asset('/assets/img/icons/settings.svg')}}" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>--}}
{{--                    <ul>--}}
{{--                        <li><a class="{{ Request::is('generalsettings') ? 'active' : '' }}" href="{{url('generalsettings')}}">General Settings</a></li>--}}
{{--                        <li><a class="{{ Request::is('emailsettings') ? 'active' : '' }}" href="{{url('emailsettings')}}">Email Settings</a></li>--}}

{{--                        <li><a class="{{ Request::is('paymentsettings') ? 'active' : '' }}" href="{{url('paymentsettings')}}">Payment Settings</a></li>--}}
{{--                        <li><a class="{{ Request::is('currencysettings') ? 'active' : '' }}" href="{{url('currencysettings')}}">Currency Settings</a></li>--}}
{{--                        <li><a class="{{ Request::is('grouppermissions','editpermission','createpermission') ? 'active' : '' }}" href="{{url('grouppermissions')}}">Group Permissions</a></li>--}}
{{--                        <li><a class="{{ Request::is('taxrates') ? 'active' : '' }}" href="{{url('taxrates')}}">Tax Rates</a></li>--}}
{{--                    </ul>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
</div>
<!-- /Sidebar -->
