 @extends('user.app')
@section('title') catalog-list-page @endsection
@section('content')
   <!-- ========================= SECTION PAGETOP ========================= -->
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Category Page</h2>
        </div> <!-- container //  -->
    </section>
    <!-- ========================= SECTION INTRO END// ========================= -->

<section class="section-content bg padding-y">
    <div class="container">

        <div class="row">
            <aside class="col-sm-3">

                <div class="card card-filter">
                    <article class="card-group-item">
                        <header class="card-header">
                            <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Category</h6>
                            </a>
                        </header>
                        <div style="" class="filter-content collapse show" id="collapse22">
                            <div class="card-body">
                                <form class="pb-3">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Search" type="text">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
                                        </div>
                                    </div>
                                </form>

                                <ul class="list-unstyled list-lg">
                                    <li><a href="#">Cras justo odio <span class="float-right badge badge-light round">142</span> </a></li>
                                    <li><a href="#">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a></li>
                                    <li><a href="#">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a></li>
                                    <li><a href="#">Another item <span class="float-right badge badge-light round">12</span>  </a></li>
                                </ul>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse33">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Price  </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse33">
                            <div class="card-body">
                                <input type="range" class="custom-range" min="0" max="100" name="">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Min</label>
                                        <input class="form-control" placeholder="$0" type="number">
                                    </div>
                                    <div class="form-group text-right col-md-6">
                                        <label>Max</label>
                                        <input class="form-control" placeholder="$1,0000" type="number">
                                    </div>
                                </div>
                                <!-- form-row.// -->
                                <button class="btn btn-block btn-outline-primary">Apply</button>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                    <article class="card-group-item">
                        <header class="card-header">
                            <a href="#" data-toggle="collapse" data-target="#collapse44">
                                <i class="icon-action fa fa-chevron-down"></i>
                                <h6 class="title">By Feature </h6>
                            </a>
                        </header>
                        <div class="filter-content collapse show" id="collapse44">
                            <div class="card-body">
                                <form>
                                    <label class="form-check">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-label">
                    <span class="float-right badge badge-light round">5</span> Samsung
                                        </span>
                                    </label>
                                    <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-label">
                    <span class="float-right badge badge-light round">13</span> Mersedes Benz
                                        </span>
                                    </label>
                                    <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-label">
                    <span class="float-right badge badge-light round">12</span> Nissan Altima
                                        </span>
                                    </label>
                                    <!-- form-check.// -->
                                    <label class="form-check">
                                        <input class="form-check-input" value="" type="checkbox">
                                        <span class="form-check-label">
                    <span class="float-right badge badge-light round">32</span> Another Brand
                                        </span>
                                    </label>
                                    <!-- form-check.// -->
                                </form>
                            </div>
                            <!-- card-body.// -->
                        </div>
                        <!-- collapse .// -->
                    </article>
                    <!-- card-group-item.// -->
                </div>
                <!-- card.// -->

            </aside>
            <!-- col.// -->
            <main class="col-sm-9">

                <article class="card card-product">
                    <div class="card-body">
                        <div class="row">
                            <aside class="col-sm-3">
                                <div class="img-wrap"><img src="{{ asset('/user/images/items/2.jpg')}}"></div>
                            </aside>
                            <!-- col.// -->
                            <article class="col-sm-6">
                                <h4 class="title"> Ut wisi enim ad minim veniam  </h4>
                                <div class="rating-wrap  mb-2">
                                    <ul class="rating-stars">
                                        <li style="width:80%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="label-rating">132 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <!-- rating-wrap.// -->
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                            </article>
                            <!-- col.// -->
                            <aside class="col-sm-3 border-left">
                                <div class="action-wrap">
                                    <div class="price-wrap h4">
                                        <span class="price"> $56 </span>
                                        <del class="price-old"> $98</del>
                                    </div>
                                    <!-- info-price-detail // -->
                                    <p class="text-success">Free shipping</p>
                                    <br>
                                    <p>
                                        <a href="#" class="btn btn-primary"> Buy now </a>
                                        <a href="#" class="btn btn-secondary"> Details  </a>
                                    </p>
                                </div>
                                <!-- action-wrap.// -->
                            </aside>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card-body .// -->
                </article>
                <!-- card product .// -->

                <article class="card card-product">
                    <div class="card-body">
                        <div class="row">
                            <aside class="col-sm-3">
                                <div class="img-wrap"><img src="{{ asset('/user/images/items/1.jpg')}}"></div>
                            </aside>
                            <!-- col.// -->
                            <article class="col-sm-6">
                                <h4 class="title"> Ut wisi enim ad minim veniam  </h4>
                                <div class="rating-wrap mb-2">
                                    <ul class="rating-stars">
                                        <li style="width:50%" class="stars-active">
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                    <div class="label-rating">12 reviews</div>
                                    <div class="label-rating">154 orders </div>
                                </div>
                                <!-- rating-wrap.// -->
                                <p> Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Lorem ipsum dolor sit amet, consectetuer adipiscing elit, Ut wisi enim ad minim veniam </p>
                            </article>
                            <!-- col.// -->
                            <aside class="col-sm-3 border-left">
                                <div class="action-wrap">
                                    <div class="price-wrap h4">
                                        <span class="price"> $245 </span>
                                        <del class="price-old"> $528</del>
                                    </div>
                                    <!-- info-price-detail // -->
                                    <p class="text-success">Free shipping</p>
                                    <br>
                                    <p>
                                        <a href="#" class="btn btn-primary"> Buy now </a>
                                        <a href="#" class="btn btn-secondary"> Details  </a>
                                    </p>
                                </div>
                                <!-- action-wrap.// -->
                            </aside>
                            <!-- col.// -->
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- card-body .// -->
                </article>
                <!-- card product .// -->

            </main>
            <!-- col.// -->
        </div>

    </div>
    <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->
@stop
 