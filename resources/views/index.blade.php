@extends('layouts.app')
@section('title','Home')
@section('bs')

@endsection
@section('content')
       
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="img-fluid" src="https://scontent-bom1-2.xx.fbcdn.net/v/t1.0-0/p640x640/60477367_2309391605787992_8442692934020628480_o.jpg?_nc_cat=100&_nc_ohc=oQxLXGOY4DYAQnY8xc5VjO5X9XKi2L9BBOtw5UROfuvKjlo63ujtVtSpw&_nc_ht=scontent-bom1-2.xx&oh=521c6ff3fe4b1deae4197dd0ec1ebe31&oe=5E6C518F" class="d-block w-100 h-91" alt="">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="https://scontent-bom1-2.xx.fbcdn.net/v/t1.0-0/p640x640/60477367_2309391605787992_8442692934020628480_o.jpg?_nc_cat=100&_nc_ohc=oQxLXGOY4DYAQnY8xc5VjO5X9XKi2L9BBOtw5UROfuvKjlo63ujtVtSpw&_nc_ht=scontent-bom1-2.xx&oh=521c6ff3fe4b1deae4197dd0ec1ebe31&oe=5E6C518F" class="d-block w-100 h-91" alt="">
              </div>
              <div class="carousel-item">
                <img class="img-fluid" src="https://scontent-bom1-2.xx.fbcdn.net/v/t1.0-0/p640x640/60477367_2309391605787992_8442692934020628480_o.jpg?_nc_cat=100&_nc_ohc=oQxLXGOY4DYAQnY8xc5VjO5X9XKi2L9BBOtw5UROfuvKjlo63ujtVtSpw&_nc_ht=scontent-bom1-2.xx&oh=521c6ff3fe4b1deae4197dd0ec1ebe31&oe=5E6C518F" class="d-block w-100 h-91" alt="">
              </div>
            </div>
          </div>
          <div class="container-fluid">
          <section>
            <div class="row p-8">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="image"></div>
                </div>
              <div class="col-lg-6 item-text">
                <div class="font-weight-bolder">
                    Basic English School is an preparatory school committed to educational excellence and the emotional, 
                    physical, and spiritual growth of children in an environment where traditional Indian values are emphasized.
                </div>
                <div class="text-center">
                    <a class="read-more-link rounded-0" href="#">Why us?</a>
                </div>
              </div>
            </div>
          </section>

        </div>
        <div class="container-fluid">
        <section>
             <div class="row mt-3">
                 <div class="col-md-6 px-0 pr-1" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                     <div class="py-2 text-center text-white" style="font-size:24px;background:#004677">Latest News</div>
                        <div class="scroll-text notification-blocks-child" id="notification1">
                            <ul class="notification">
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title Of news here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title Of news here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title Of news here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                            </ul>
                        <a class="more-updates" href="#">More Updates</a>
                        </div>
                    </div>
                 <div class="col-md-6 px-0 pl-1" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                     <div class="py-2 text-center text-white" style="font-size:24px;background:#004677">Events</div>
                        <div class="scroll-text notification-blocks-child" id="notification1">
                            <ul class="notification">
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title of events goes here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title of events goes here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="post-date">Oct<span>07</span></div>
                                    <div class="post-title">
                                    <a href="#" target="_blank" title="">
                                        Title of events goes here.
                                    </a> <span>2:40 pm</span>
                                    </div>
                                </li>
                            </ul>
                        <a class="more-updates" href="#">More Updates</a>
                        </div>
                    </div>
             </div>
         </section>
        </div>
@endsection