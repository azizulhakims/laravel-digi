@extends('frontend.layouts.master')

@section('content')

  

        <!--========================== Banner Section Start ==========================-->
       @include('frontend.home.sections.banner')
        <!--========================== Banner Section End ==========================-->

        <!-- ======================== Category Section Start =========================== -->
        @include('frontend.home.sections.category')
        <!-- ======================== Category Section End =========================== -->

        <!-- ===========================  Product Section Start ========================== -->
        @include('frontend.home.sections.product')
        <!-- ===========================  Product Section End ========================== -->

        <!-- ======================= Featured Products Start =============================== -->
        @include('frontend.home.sections.featured-product')
        <!-- ======================= Featured Products End =============================== -->

        <!-- ======================= Selling Products Start ========================= -->
        @include('frontend.home.sections.selling-product')
        <!-- ======================= Selling Products End ========================= -->

        <!-- ======================= To Featured Author Start =============================== -->
        @include('frontend.home.sections.featured-author-product')
        <!-- ======================= To Featured Author End =============================== -->

        <!-- ======================= Counter Top performance Author Start =============================== -->
        @include('frontend.home.sections.counter')
        <!-- ======================= Top performance Author End =============================== -->

        <!-- ======================= Become seller section start ==================== -->
        @include('frontend.home.sections.become-seller')
        <!-- ======================= Become seller section End ==================== -->
    
@endsection