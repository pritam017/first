<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#main-menu"
                aria-controls="main-menu"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="./">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./">
                    <img src="images/logo2.png" alt="Logo"></a>
            </div>

                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="{{ route('home') }}">
                                <i class="menu-icon fa fa-dashboard"></i>Dashboard
                            </a>
                        </li>
                        <li class="menu-item-has-children dropdown">
                            <a
                                href="#"
                                class="dropdown-toggle"
                                data-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false">
                                <i class="menu-icon fa fa-laptop"></i>POS</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li>
                                    <i class="fa fa-puzzle-piece"></i>
                                    <a href="{{ route('pos') }}">Sell Product</a>
                                </li>


                            </ul>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-laptop"></i>Employee</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-puzzle-piece"></i>
                                        <a href="{{ route('employee.index') }}">Manage Employee</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-id-badge"></i>
                                        <a href="{{ route('employee.create') }}">Add New Employee</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Customer</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('customer.index') }}">Manage Customer</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('customer.create') }}">Add New Customer</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Supplier</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('supplier.index') }}">Manage Supplier</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('supplier.create') }}">Add New Supplier</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Salary</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('salary.index') }}">Advance Salary</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('salary.create') }}">Pay Advance Salary</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('totalsalary') }}">Pay Salary</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="">Last Month Salary</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Categories</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('category.index') }}">Manage Category</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Product</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('product.index') }}">Manage Product</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('product.create') }}">Add Product</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('productImport') }}">Import Product</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-table"></i>Expense</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('todayexpense') }}">Today Expense</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('yearly') }}">Yearly Expense</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('expense.index') }}">Monthly Expense</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('expense.create') }}">Add Expense</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-laptop"></i>Orders</a>
                                <ul class="sub-menu children dropdown-menu">

                                    <li>
                                        <i class="fa fa-id-badge"></i>
                                        <a href="{{ route('pending-order') }}">Pending Orders</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-id-badge"></i>
                                        <a href="{{ route('order.index') }}">Success Orders</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-laptop"></i>Sales Report</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('todaysale') }}">Today Sales</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('yearlysale') }}">Yearly Sales</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-table"></i>
                                        <a href="{{ route('sales.index') }}">Monthly Sales</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown">
                                <a
                                    href="#"
                                    class="dropdown-toggle"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="menu-icon fa fa-laptop"></i>Attendence</a>
                                <ul class="sub-menu children dropdown-menu">
                                    <li>
                                        <i class="fa fa-puzzle-piece"></i>
                                        <a href="{{ route('attendence.create') }}">Add Attendence</a>
                                    </li>
                                    <li>
                                        <i class="fa fa-id-badge"></i>
                                        <a href="{{ route('attendence.index') }}">All Attendence</a>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                    </div>
            <!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
