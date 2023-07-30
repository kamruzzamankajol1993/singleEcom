<footer class="footer-area pt-100 "  >
    <div class="footer-shape">
    <img src="{{ asset('/') }}public/front/assets/images/footer-right-shape.png" alt="Shape">
    <img src="{{ asset('/') }}public/front/assets/images/shape5.png" alt="Shape">
    </div>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-sm-6 col-lg-4">
    <div class="footer-item">
    <div class="footer-logo">
    <a class="logo" href="index.html">
    <img src="{{ asset('/') }}{{ $seoInfoIcon }}" alt="Logo">
    </a>
    <ul>
    <li>
    <i class="flaticon-pin"></i>
    <a href="#">
        @if(!$contactList)

        @else
{{ $contactList->address }}
        @endif


    </a>
    </li>
    <li>
    <i class="flaticon-phone-call"></i>
    @if(!$contactList)

    @else


<a href="tel:{{ $contactList->phone_one }}">{{ $contactList->phone_one }}</a>
    <a href="tel:{{ $contactList->phone_two }}">{{ $contactList->phone_two }}</a>
    @endif




    </li>
    <li>
    <i class="flaticon-email"></i>
    @if(!$contactList)

    @else
    <a href="{{ $contactList->email_one }}"><span class="__cf_email__" >{{ $contactList->email_one }}</span></a>
    <a href="{{ $contactList->email_two }}"><span class="__cf_email__" >{{ $contactList->email_two }}</span></a>
    @endif
    </li>
    </ul>
    </div>
    </div>
    </div>
    <div class="col-sm-6 col-lg-4">
    <div class="footer-item">
    <div class="footer-services">
    <h3>Our Policy</h3>
    <ul>
    <li>
    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Return Policy</a>
     </li>

    <a href="privacy-policy.html">Privacy Policy</a>
    </li>
    <li>
    <a href="contact.html">Term & Condition</a>
    </li>
    </ul>
    </div>
    </div>
    </div>

    <div class="col-sm-6 col-lg-4">
        <div class="footer-item">
        <div class="footer-services">
        <h3>Customer Services</h3>
        <ul>
        <li>
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Return Policy</a>
         </li>

        <a href="privacy-policy.html">Privacy Policy</a>
        </li>
        <li>
        <a href="contact.html">Term & Condition</a>
        </li>
        </ul>
        </div>
        </div>
        </div>

    </div>


    <div class="row align-items-center">
    <div class="col-sm-6 col-lg-6">
    <div class="payment-cards">
        <p>Copyright ©2020 </p>
    </div>
    </div>
    <div class="col-sm-6 col-lg-6">
    <div class="social-links">
    <ul>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-facebook'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-twitter'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-linkedin'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-skype'></i>
    </a>
    </li>
    <li>
    <a href="#" target="_blank">
    <i class='bx bxl-youtube'></i>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div>
    </div>
    </footer>
