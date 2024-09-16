<?php
require '../../includes/init.php';

$index = 0;
$propertydetails = select("SELECT * FROM propertydetails");
include pathof('includes/header.php');
?>
  <body>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"> </div>
      <div class="dot"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
      <!-- Page Header Start-->
      <?php include pathOf('includes/navbarTop.php') ?>
      <!-- Page Header Ends-->
      <!-- Page Body Start-->
      <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        <?php include pathOf('includes/sidebar.php') ?>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <h3>Product</h3>
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">ECommerce</li>
                    <li class="breadcrumb-item active">Product</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container-fluid product-wrapper">
            <div class="product-grid">
              <div class="feature-products">
                <div class="row m-b-10">
                  <div class="col-md-3 col-sm-2 products-total">
                    <div class="square-product-setting d-inline-block"><a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a></div>
                    <div class="square-product-setting d-inline-block"><a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a></div>
                    <div class="d-none-productlist filter-toggle">
                      <h6 class="mb-0">Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span></h6>
                    </div>
                    
                  </div>
                  <div class="col-md-9 col-sm-10 text-end"><span class="f-w-600 m-r-5">Showing Products 1 - 24 Of 200 Results</span>
                    <div class="select2-drpdwn-product select-options d-inline-block">
                      <select class="form-control btn-square" name="select">
                        <option value="opt1">Featured</option>
                        <option value="opt2">Highest Prices</option>
                        <option value="opt3">Lowest Prices</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">                            
                  <div class="col-md-12">
                    <div class="pro-filter-sec">
                      <div class="product-sidebar">
                        <div class="filter-section">
                          <div class="card">
                            <div class="card-header">
                              <h6 class="mb-0 f-w-600">Filters<span class="pull-right"><i class="fa fa-chevron-down toggle-data"></i></span></h6>
                            </div>
                            <div class="left-filter">
                              <div class="card-body filter-cards-view animate-chk">
                                <div class="product-filter">
                                  <h6 class="f-w-600">Category</h6>
                                  <div class="checkbox-animated mt-0">
                                    <label class="d-block" for="edo-ani5">
                                      <input class="checkbox_animated" id="edo-ani5" type="checkbox" data-original-title="" title="">Man Shirt
                                    </label>
                                    <label class="d-block" for="edo-ani6">
                                      <input class="checkbox_animated" id="edo-ani6" type="checkbox" data-original-title="" title="">Man Jeans
                                    </label>
                                    <label class="d-block" for="edo-ani7">
                                      <input class="checkbox_animated" id="edo-ani7" type="checkbox" data-original-title="" title="">Woman Top
                                    </label>
                                    <label class="d-block" for="edo-ani8">
                                      <input class="checkbox_animated" id="edo-ani8" type="checkbox" data-original-title="" title="">Woman Jeans
                                    </label>
                                    <label class="d-block" for="edo-ani9">
                                      <input class="checkbox_animated" id="edo-ani9" type="checkbox" data-original-title="" title="">Man T-shirt
                                    </label>
                                  </div>
                                </div>
                                <div class="product-filter">
                                  <h6 class="f-w-600">Brand</h6>
                                  <div class="checkbox-animated mt-0">
                                    <label class="d-block" for="chk-ani">
                                      <input class="checkbox_animated" id="chk-ani" type="checkbox" data-original-title="" title=""> Levi's
                                    </label>
                                    <label class="d-block" for="chk-ani1">
                                      <input class="checkbox_animated" id="chk-ani1" type="checkbox" data-original-title="" title="">Diesel
                                    </label>
                                    <label class="d-block" for="chk-ani2">
                                      <input class="checkbox_animated" id="chk-ani2" type="checkbox" data-original-title="" title="">Lee
                                    </label>
                                    <label class="d-block" for="chk-ani3">
                                      <input class="checkbox_animated" id="chk-ani3" type="checkbox" data-original-title="" title="">Hudson
                                    </label>
                                    <label class="d-block" for="chk-ani4">
                                      <input class="checkbox_animated" id="chk-ani4" type="checkbox" data-original-title="" title="">Denizen
                                    </label>
                                    <label class="d-block" for="chk-ani5">
                                      <input class="checkbox_animated" id="chk-ani5" type="checkbox" data-original-title="" title="">Spykar
                                    </label>
                                  </div>
                                </div>
                                <div class="product-filter slider-product">
                                  <h6 class="f-w-600">Colors</h6>
                                  <div class="color-selector">
                                    <ul>
                                      <li class="active white"></li>
                                      <li class="bg-primary">                                              </li>
                                      <li class="bg-secondary"></li>
                                      <li class="bg-success"></li>
                                      <li class="bg-warning"></li>
                                      <li class="bg-danger"></li>
                                      <li class="blue"></li>
                                      <li class="red"></li>
                                    </ul>
                                  </div>
                                </div>
                                <div class="product-filter pb-0">
                                  <h6 class="f-w-600">Price</h6>
                                  <input id="u-range-03" type="text">
                                  <h6 class="f-w-600">New Products</h6>
                                </div>
                                <div class="product-filter pb-0 new-products">
                                  <div class="owl-carousel owl-theme" id="testimonial">
                                    <div class="item">
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/01.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/02.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="product-box">
                                        <div class="d-flex">
                                          <div class="product-img me-3"><img class="img-fluid" src="../assets/images/ecommerce/03.jpg" alt="" data-original-title="" title=""></div>
                                          <div class="flex-grow-1">
                                            <div class="product-details">
                                              <div>                                                  
                                                <ul>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                  <li><i class="fa fa-star font-warning"></i></li>
                                                </ul>
                                                <p class="mb-0 f-w-700">Fancy Shirt</p>
                                                <div class="f-w-500">$100.00</div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="product-filter text-center"><img class="img-fluid banner-product" src="../assets/images/ecommerce/banner.jpg" alt="" data-original-title="" title=""></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="product-wrapper-grid">
                <div class="row">
                  <?php foreach ($propertydetails as $propertydetail) { ?>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="card">
                      <div class="product-box">
                        <div class="product-img"><img class="img-fluid" src=<?= urlOf('assets/images/uploads/') . $propertydetail['ImageFileName'] ?> alt="">
                          <div class="product-hover">
                            <ul>
                              <li><a href="cart.html"><i class="icon-shopping-cart"></i></a></li>
                              <li><a data-bs-toggle="modal" data-bs-target="#exampleModalCenter16"><i class="icon-eye"></i></a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="modal fade" id="exampleModalCenter16">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <div class="product-box row">
                                  <div class="product-img col-lg-6"><img class="img-fluid" src=<?= urlOf('assets/images/uploads/') . $propertydetail['ImageFileName'] ?> alt=""></div>
                                  <div class="col-lg-6 text-start">
                                    <div class="product-details"><a href="product-page.html">
                                        <h4><?= $propertydetail['PropertyName'] ?></h4></a>
                                      <div class="product-price">$50.00
                                      </div>
                                      <div class="product-view">
                                        <h6 class="f-w-600"><?= $propertydetail['Address'] ?></h6>
                                        <p class="mb-0"><?= $propertydetail['Details'] ?></p>
                                      </div>
                                      <div class="product-size">
                                        <ul>
                                          <li> 
                                            <button class="btn" type="button">M</button>
                                          </li>
                                          <li> 
                                            <button class="btn" type="button">L</button>
                                          </li>
                                          <li> 
                                            <button class="btn" type="button">Xl</button>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="product-qnty">
                                        <h6 class="f-w-600">Quantity</h6>
                                        <fieldset>
                                          <div class="input-group">
                                            <input class="touchspin text-center" type="text" value="5">
                                          </div>
                                        </fieldset>
                                        <div class="addcart-btn"><a class="btn btn-primary me-2" href="cart.html">Add to Cart                                                     </a><a class="btn btn-primary" href="product-page.html">View Details</a></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="product-details"><a href="product-page.html">
                            <h4><?= $propertydetail['PropertyName'] ?></h4></a>
                          <p><?= $propertydetail['Address'] ?></p>
                          <div class="product-price"><?= $propertydetail['Price'] ?></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php }?>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>

<?php
include pathof('includes/scripts.php');
?>