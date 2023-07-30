@extends('front.master.master')

@section('title')
{{ $seoInfoTitle }}
@endsection


@section('body')
<div class="support-area pt-100 pb-70">
    <div class="container">

        <div class="section-title">
            <h2>@if(!$mainTitle)

                @else
                            {{ $mainTitle->service_title }}
                            @endif</h2>
            </div>
    <div class="row justify-content-center">
    <div class="col-sm-6 col-lg-4">
    <div class="support-item">
    <i class="flaticon-free-delivery"></i>
    <h3>Free Next Day Delivery</h3>
    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
    <img src="assets/images/support-shape1.png" alt="Shape">
    </div>
    </div>
    <div class="col-sm-6 col-lg-4">
    <div class="support-item">
    <i class="flaticon-call-center"></i>
    <h3>24/7 Online Support</h3>
    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
    <img src="assets/images/support-shape1.png" alt="Shape">
    </div>
    </div>
    <div class="col-sm-6 col-lg-4">
    <div class="support-item">
    <i class="flaticon-giftbox"></i>
    <h3>Weekly Gift Voucher</h3>
    <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
    <img src="assets/images/support-shape1.png" alt="Shape">
    </div>
    </div>
    <div class="col-sm-6 col-lg-4">
        <div class="support-item two">
        <i class="flaticon-free-delivery"></i>
        <h3>Free Next Day Delivery</h3>
        <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
        <img src="assets/images/support-shape1.png" alt="Shape">
        </div>
        </div>
        <div class="col-sm-6 col-lg-4">
        <div class="support-item three">
        <i class="flaticon-call-center"></i>
        <h3>24/7 Online Support</h3>
        <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
        <img src="assets/images/support-shape1.png" alt="Shape">
        </div>
        </div>
        <div class="col-sm-6 col-lg-4">
        <div class="support-item four">
        <i class="flaticon-giftbox"></i>
        <h3>Weekly Gift Voucher</h3>
         <p>Lorem ipsum dolor sit amet, cons etetur sadipscing elitr</p>
        <img src="assets/images/support-shape1.png" alt="Shape">
        </div>
    </div>
    </div>
    </div>







    <div class="buy-area two ptb-100">
        <div class="buy-shape">
        <img src="assets/images/shape6.png" alt="Shape">
        <img src="assets/images/shape7.png" alt="Shape">
        </div>
        <div class="container">
            <div class="section-title">
                <h2>@if(!$mainTitle)

                    @else
                                {{ $mainTitle->about_title }}
                                @endif</h2>
                </div>
        <div class="row align-items-center">
        <div class="col-lg-6">
        <div class="buy-content">
        <h2>Buy Best Electronics At A Cheaper Rate</h2>
        <p>Green AKG Bluetooth Headphones</p>
        <ul>
        <li>$160.00</li>
        <li>
        <del>$200.00</del>
        </li>
        </ul>
        <a class="common-btn two" href="#ddd">
        Order Now
        <img src="assets/images/shape1.png" alt="Shape">
        <img src="assets/images/shape2.png" alt="Shape">
        </a>
        </div>
        </div>
        <div class="col-lg-6">
        <div class="buy-img">
        <img src="assets/images/buy-main2.png" alt="Buy">
        </div>
        </div>
        </div>
        </div>
        </div>


        <div class="sale-area">
            <div class="container-fluid">


            <div class="row justify-content-center">
                <div class="section-title">
                    <center><h2>@if(!$mainTitle)

                        @else
                                    {{ $mainTitle->choose_title }}
                                    @endif</h2></center>
                    </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="sale-item sale-bg-two">
                    <img src="assets/images/sale-main2.png" alt="Sale">
                    <div class="inner">
                    <h3><span class="percent">5%</span> Christmas <span>Sale</span></h3>
                    <p>On All Smart Watch</p>
                    <a href="#">Shop Now</a>
                    </div>
                    </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="sale-item sale-bg-two">
                        <img src="assets/images/sale-main2.png" alt="Sale">
                        <div class="inner">
                        <h3><span class="percent">5%</span> Christmas <span>Sale</span></h3>
                        <p>On All Smart Watch</p>
                        <a href="#">Shop Now</a>
                        </div>
                        </div>
                        </div>
                        <div class="col-sm-6 col-lg-4">
                            <div class="sale-item sale-bg-two">
                            <img src="assets/images/sale-main2.png" alt="Sale">
                            <div class="inner">
                            <h3><span class="percent">5%</span> Christmas <span>Sale</span></h3>
                            <p>On All Smart Watch</p>
                            <a href="#">Shop Now</a>
                            </div>
                            </div>
                            </div>

                            <div class="col-sm-6 col-lg-4">
                                <div class="sale-item sale-bg-two">
                                <img src="assets/images/sale-main2.png" alt="Sale">
                                <div class="inner">
                                <h3><span class="percent">5%</span> Christmas <span>Sale</span></h3>
                                <p>On All Smart Watch</p>
                                <a href="#">Shop Now</a>
                                </div>
                                </div>
                                </div>

            <div class="col-sm-6 col-lg-4">
            <div class="sale-item sale-bg-two">
            <img src="assets/images/sale-main2.png" alt="Sale">
            <div class="inner">
            <h3><span class="percent">5%</span> Christmas <span>Sale</span></h3>
            <p>On All Smart Watch</p>
            <a href="#">Shop Now</a>
            </div>
            </div>
            </div>
            <div class="col-sm-6 col-lg-4">
            <div class="sale-item sale-bg-three">
            <img src="assets/images/sale-main3.png" alt="Sale">
            <div class="inner">
            <h3><span class="percent">10%</span> Winter <span>Sale</span></h3>
            <p>On All Cameras</p>
            <a href="#">Shop Now</a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>


<div class="testimonials-area pb-100">
<div class="container">
<div class="section-title">
<h2>@if(!$mainTitle)

    @else
                {{ $mainTitle->tesi_title }}
                @endif</h2>
</div>
<div class="testimonials-slider owl-theme owl-carousel">
<div class="testimonials-item">
<i class="flaticon-quote"></i>
<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam volu ptua</p>
<h3>Adam Smith</h3>
<span>Co-Founder Of Company</span>
<img src="assets/images/testimonial1.jpg" alt="Testimonial">
</div>
<div class="testimonials-item">
<i class="flaticon-quote"></i>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum</p>
<h3>Jonathon Ronan</h3>
<span>Director Of Company</span>
<img src="assets/images/testimonial2.jpg" alt="Testimonial">
</div>
<div class="testimonials-item">
<i class="flaticon-quote"></i>
<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
<h3>Sarp Cesmeli</h3>
<span>Engineer Of Company</span>
<img src="assets/images/testimonial3.jpg" alt="Testimonial">
</div>
<div class="testimonials-item">
<i class="flaticon-quote"></i>
<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p>
 <h3>Tom Henry</h3>
<span>Staff Of Company</span>
<img src="assets/images/testimonial4.jpg" alt="Testimonial">
</div>
</div>
</div>
</div>





<div class="deal-area  pb-70">
    <div class="container">
    <div class="row">
    <div class="col-lg-12">
    <div class="section-title">
    <h2>@if(!$mainTitle)

        @else
                    {{ $mainTitle->product_title }}
                    @endif</h2>
    </div>
    <div class="deal-item">
    <span class="percent">-20%</span>

    <div class="inner align-items-center">
    <div class="left">
    <img src="assets/images/deal-main1.png" alt="Deal">
    </div>
    <div class="right">

    <h3>Best Bionic Thunder Headphones</h3>
    <ul class="price">
    <li>$130.00</li>
    <li><del>$150.00</del></li>
    </ul>
    <ul class="features">
    <li>
    <span>Main Features:</span>
    </li>
    <li>High Quality Sound</li>
    <li>Voice Cancellation</li>
    <li>Mobile Support</li>
    <li>3+ Years Warranty</li>
    </ul>


    </div>
    </div>
    </div>
    </div>



    </div>
    </div>
    </div>


    <div class="checkout-area  pb-70" id="ddd">
        <div class="container">
        <div class="section-title">
        <h2>@if(!$mainTitle)

            @else
                        {{ $mainTitle->billing_title }}
                        @endif</h2>
        </div>
        <form>
        <div class="row">
        <div class="col-lg-8">
        <div class="checkout-billing">
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Name:">
        </div>

        <div class="form-group">
        <input type="text" class="form-control" placeholder="Phone No:">
        </div>

        <div class="form-group">
            <select>
            <option>Select Area*</option>
            <option>Inside Dhaka</option>
            <option>Outside Dhaka</option>

            </select>
            </div>

        <div class="form-group">
        <textarea id="your-notes" rows="4" class="form-control" placeholder="Address"></textarea>
        </div>

        <div class="text-center">
        <button type="submit" class="btn common-btn">
        Place Order
        <img src="assets/images/shape1.png" alt="Shape">
        <img src="assets/images/shape2.png" alt="Shape">
        </button>
        </div>
        </div>
        </div>
        <div class="col-lg-4">
        <div class="checkout-order">
        <h3>Your Order:</h3>
        <ul class="align-items-center">
        <li>
        <img src="assets/images/checkout/checkout1.png" alt="Checkout">
        </li>
        <li>
        <h4>White Comfy Stool</h4>
        </li>
        <li>
        <span>$200.00</span>
        </li>
        </ul>

        <div class="inner">
        <h3>Shipping: <span>$15.00</span></h3>
        <h4>Total: <span>$395.00</span></h4>
        </div>
        </div>

        </div>
        </div>
        </form>
        </div>
        </div>
@endsection

@section('script')

@endsection
