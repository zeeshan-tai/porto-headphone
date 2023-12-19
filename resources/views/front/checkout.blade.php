@extends('front.layout.master')
@section('main-content')
<main class="main main-test">
    <div class="container checkout-container">

        <div class="row">
            <div class="col-lg-7">
                <ul class="checkout-steps">
                    <li>
                        <h2 class="step-title">Billing details</h2>

                    <form action="{{ route('front.checkout') }}" method="POST" id="checkout_form">
                         @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>First name
                                            <abbr class="required" title="required">*</abbr>
                                        </label>
                                        <input type="text" name="first_name" class="form-control" required />
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Last name
                                            <abbr class="required" title="required">*</abbr></label>
                                        <input type="text" name="last_name" class="form-control" required />
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <label>Country / Region
                                    <abbr class="required" title="required">*</abbr></label>
                                    <input type="text" name="country" class="form-control" required />

                            </div>

                            <div class="form-group mb-1 pb-2">
                                <label>Street address
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" class="form-control" name="street_address" placeholder="House number and street name" required />
                            </div>

                            <div class="form-group">
                                <label>Town / City
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" name="town" class="form-control" required />
                            </div>

                            <div class="form-group">

                                <label>State / County <abbr class="required" title="required">*</abbr></label>
                                <input type="text" name="state" class="form-control" required />

                            </div>

                            <div class="form-group">
                                <label>Postcode / Zip
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="text" name="postcode" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Phone <abbr class="required" title="required">*</abbr></label>
                                <input type="tel" name="phone" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label>Email address
                                    <abbr class="required" title="required">*</abbr></label>
                                <input type="email" name="email_address" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label class="order-comments">Order notes (optional)</label>
                                <textarea class="form-control" name="order_note" placeholder="Notes about your order, e.g. special notes for delivery." required></textarea>
                            </div>
                        <button type="submit" class="btn btn-dark btn-place-order" form="checkout_form">
                            Place order
                        </button>
                    <form>
                    </li>
                </ul>
            </div>
            <!-- End .col-lg-8 -->

            <div class="col-lg-5">
                <div class="order-summary">
                    <h3>YOUR ORDER</h3>

                    <table class="table table-mini-cart">
                        <thead>
                            <tr>
                                <th colspan="2">Product</th>
                            </tr>
                        </thead>
                        @php $total = 0  ; @endphp
                        @if (session('cart'))
                        @foreach (session('cart') as $id => $product)
                        @php
                                $sub_total = $product['price'] * $product['quantity'];
                                $total += $sub_total;
                        @endphp
                            <tbody>
                                <tr>
                                    <td class="product-col">
                                        <h3 class="product-title">
                                            {{ $product['title'] }}
                                        </h3>
                                </td>

                                <td class="price-col">
                                    <span>${{ $sub_total }}</span>
                                </td>
                                </tr>
                         @endforeach
                        @endif
                        </tbody>
                        <tfoot>
                            <tr class="cart-subtotal">
                                <td>
                                    <h4>Total</h4>
                                </td>

                                <td class="price-col">
                                    <span>${{ $total }}</span>
                                </td>
                            </tr>



                        </tfoot>
                    </table>

                    <div class="payment-methods">
                        <h4 class="">Payment methods</h4>
                        <div class="info-box with-icon p-0">
                            <p>
                                CASH ON DELIVERY
                            </p>
                        </div>
                    </div>


                </div>
                <!-- End .cart-summary -->
            </div>
            <!-- End .col-lg-4 -->
        </div>
        <!-- End .row -->
    </div>
    <!-- End .container -->
</main>
@endsection
