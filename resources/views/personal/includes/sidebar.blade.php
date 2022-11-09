<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Sidebar -->
    <div class="sidebar">
        <ul class="pt-3 nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="" class="nav-link">
                    {{--                    <i class=" far fa-clipboard"></i>--}}
                    <i class="nav-icon fas fa-home"></i>
                    <p>
                        Главная
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.client.index')}}" class="nav-link">
                    {{--                    <i class=" far fa-clipboard"></i>--}}
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Контрагенты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.product.index')}}" class="nav-link">
                    {{--                    <i class=" far fa-clipboard"></i>--}}
{{--                    <i class=" fas fa-cart-shopping"></i>--}}
                    <i class="nav-icon fas fa-shopping-cart"></i>
                    <p>
                        Продукты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.user.requisite.index')}}" class="nav-link">
                    {{--                    <i class=" far fa-clipboard"></i>--}}
                    {{--                    <i class=" fas fa-cart-shopping"></i>--}}
{{--                    <i class=" fas fa-shopping-cart"></i>--}}
{{--                    <i class=" fad fa-money-check-edit-alt"></i>--}}
                    <i class="nav-icon fas fa-money-check"></i>
                    <p>
                        Реквезиты
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('personal.invoice.index')}}" class="nav-link">
                    {{--                    <i class=" far fa-clipboard"></i>--}}
                    {{--                    <i class=" fas fa-cart-shopping"></i>--}}
                    {{--                    <i class=" fas fa-shopping-cart"></i>--}}
                    {{--                    <i class=" fad fa-money-check-edit-alt"></i>--}}
                    <i class="nav-icon fas fa-money-check"></i>
                    <p>
                        Счет
                    </p>
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar -->
</aside>
