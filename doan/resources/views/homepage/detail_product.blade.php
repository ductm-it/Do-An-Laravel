@extends('layouts.homepage')
@section('content')
<!-- banner -->
<div class="page-head">
    <div class="container">
        <h3>Single</h3>
    </div>
</div>
<!-- //banner -->
<!-- single -->
<div class="single">
    <div class="container">
        <div class="col-md-6 single-right-left animated wow slideInUp animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
            <div class="grid images_3_of_2">
                <div class="flexslider">
                    <!-- FlexSlider -->
                    <script>
                        // Can also be used with $(document).ready()
							$(window).load(function() {
								$('.flexslider').flexslider({
								animation: "slide",
								controlNav: "thumbnails"
								});
							});
                    </script>
                    <!-- //FlexSlider-->
                    <ul class="">
                        <div class="thumb-image"> <img src="{{$product->image}}" data-imagezoom="true"
                            class="img-responsive"> </div>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <div class="col-md-6 single-right-left simpleCart_shelfItem animated wow slideInRight animated" style="margin-top: 10%;"
            data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInRight;">
            <h3>{{$product->name}}</h3>
            <p><span class="item_price">{{number_format($product->outPrice)}} đ</span> </p>
            <div class="occasion-cart">
                <a href="#" class="item_add hvr-outline-out button2" onclick="addToCart({{$product->id}})">Add to cart</a>
            </div>

        </div>
        <div class="clearfix"> </div>

        <div class="bootstrap-tab animated wow slideInUp animated" data-wow-delay=".5s"
            style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
            <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab"
                            aria-controls="home" aria-expanded="true">Description</a></li>
                    <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab"
                            aria-controls="profile">
                            {{-- @foreach ($content as $item) --}}
                            Reviews(
                                {{$countComment}}
                            )
                            {{-- @endforeach --}}
                            
                    </a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active bootstrap-tab-text" id="home"
                        aria-labelledby="home-tab">
                        <h5>Product Brief Description</h5>
                    <p>{{$product->description}}</p>
                    </div>
                    <div role="tabpanel" class="tab-pane fade bootstrap-tab-text" id="profile"
                        aria-labelledby="profile-tab">
                        <div class="bootstrap-tab-text-grids">
                            @foreach ($content as $item)
                            <div class="bootstrap-tab-text-grid">
                                <div class="bootstrap-tab-text-grid-left">
                                    <img src="{{asset('images/men3.jpg')}}" alt=" " class="img-responsive">
                                </div>
                                <div class="bootstrap-tab-text-grid-right">
                                    <ul>
                                        <li><a href="#">{{$item->name}}</a></li>
                                    </ul>
                                    <p>{{$item->comment}}</p>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            @endforeach
                            @if(Auth::check())
                            @if (isset(Auth::user()->id))
                            <div class="add-review">
                                <h4>add a review</h4>
                                <form action="/comment" method="POST">
                                    @csrf
                                    <input type="text" name="product_id" value="{{$product->id}}" hidden>
                                    <textarea type="text" name="content"
                                        required="" placeholder="Message..."></textarea>
                                    <input type="submit" value="SEND">
                                </form>
                            </div>
                            @endif
                            @else
                            <div class="alert alert-secondary" role="alert">
                                
                                You need to login to comment <a href="#" data-toggle="modal" data-target="#myModal4" class="alert-link">Login</a>
                              </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //single -->
@endsection