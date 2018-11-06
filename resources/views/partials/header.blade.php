<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('product.index')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('product.shoppingCart')}}">Shopping Cart
                <span class="badge badge-secondary">{{Session::has('cart') ? Session::get('cart')->totalQty : ''}}</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    User Management
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    @if(Auth::check())

                        <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('user.logout')}}">Log Out</a>

                    @else

                        <a class="dropdown-item" href="{{route('user.signup')}}">User Signup</a>
                        <a class="dropdown-item" href="{{route('user.signin')}}">User Signin</a>

                    @endif

                </div>
            </li>
        </ul>
    </div>
</nav>
