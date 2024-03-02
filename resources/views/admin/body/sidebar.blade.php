<div class="vertical-menu">
    <div data-simplebar class="h-100">
        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                <img style="object-fit: cover;" src="{{ asset('backend/assets/images/cofe_logo.png') }}" alt="" class="avatar-md rounded-circle">
            </div>
            <div class="mt-3">
                <h4 class="font-size-16 mb-1">The Classic Cofe House</h4>
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="ri-home-heart-line"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('food') }}" class="waves-effect">
                        <i class=" ri-shopping-cart-2-line"></i>
                        <span>Order List</span>
                    </a>
                </li>

                {{-- <li>
                    <a href="" class="waves-effect">
                        <i class="ri-time-line"></i>
                        <span>History</span>
                    </a>
                </li> --}}

                <li class="">
                    <a href="javascript: void(0);" class="has-arrow waves-effect" aria-expanded="false">
                        <i class="ri-add-circle-line"></i>
                        <span>Insert</span>
                    </a>
                    <ul class="sub-menu mm-collapse" aria-expanded="false" style="height: 0px;">
                        <li><a href="{{ route('food.drink.food') }}">Food & Drink</a></li>
                        <li><a href="{{ route('food.all') }}">Food</a></li>
                        <li><a href="{{ route('food.drink') }}">Drink</a></li>
                        <li><a href="{{ route('food.insert') }}">Insert</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>