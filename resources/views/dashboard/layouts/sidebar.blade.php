<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                    <span data-feather="home"></span>
                    Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/orders*') ? 'active' : '' }}" href="{{ route('orders') }}">
                    <span data-feather="file"></span>
                    Orders
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/products*') ? 'active' : '' }}" href="{{ route('products') }}">
                    <span data-feather="shopping-cart"></span>
                    Products
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/carts') ? 'active' : '' }}" href="{{ route('carts') }}">
                    <span data-feather="users"></span>
                    Carts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span data-feather="bar-chart-2"></span>
                    Reports
                </a>
            </li>
        </ul>

        {{--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">--}}
            {{--<span>Saved reports</span>--}}
            {{--<a class="d-flex align-items-center text-muted" href="#">--}}
                {{--<span data-feather="plus-circle"></span>--}}
            {{--</a>--}}
        {{--</h6>--}}
        {{--<ul class="nav flex-column mb-2">--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                    {{--<span data-feather="file-text"></span>--}}
                    {{--Current month--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                    {{--<span data-feather="file-text"></span>--}}
                    {{--Last quarter--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                    {{--<span data-feather="file-text"></span>--}}
                    {{--Social engagement--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item">--}}
                {{--<a class="nav-link" href="#">--}}
                    {{--<span data-feather="file-text"></span>--}}
                    {{--Year-end sale--}}
                {{--</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    </div>
</nav>