<nav id="main-nav">
    <ul class="second-nav">
    <li><a href="{{ route('index') }}"><i class="feather-home me-2"></i> Home</a></li>
    <li><a href="{{ route('orderList') }}"><i class="feather-list me-2"></i> My Orders</a></li>
    <li><a href="{{ route('checkOut') }}"><i class="feather-list me-2"></i> Checkout</a></li>


    </ul>
    <ul class="bottom-nav">
    <li class="email">
    <a class="text-danger" href="{{ route('index') }}">
    <p class="h5 m-0"><i class="feather-home text-danger"></i></p>
    Home
    </a>
    </li>
    {{-- <li class="github">
    <a href="faq.html">
    <p class="h5 m-0"><i class="feather-message-circle"></i></p>
    FAQ
    </a>
    </li>
    <li class="ko-fi">
    <a href="contact-us.html">
    <p class="h5 m-0"><i class="feather-phone"></i></p>
    Help
    </a>
    </li> --}}
    </ul>
    </nav>
