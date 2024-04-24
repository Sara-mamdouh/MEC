  @include("partials.userpage._navbar")
 
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide mySwiper__slide ">        
          <img src="{{asset('image/slider/slider1.jpg')}}" alt="cc">
          <div class="mySwiper__slide__overlay">
					</div>
          <div class="mySwiper__slide__dec mySwiper__slide__dec--active">
            <div class="container">
              <h2><span>m</span>ec</h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil enim magnam veritatis quibusdam sequi odit quod, ad, facere hic mollitia libero quisquam nemo</p>
              <a href="">about us <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>    
          </div>
         
        </div>
        <div class="swiper-slide mySwiper__slide ">
          <img src="{{asset('image/slider/slider2.jpg')}}" alt="cc">
          <div class="mySwiper__slide__overlay">
					</div>
          <div class="mySwiper__slide__dec">
            <div class="container">
              <h2><span>m</span>ec</h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil enim magnam veritatis quibusdam sequi odit quod, ad, facere hic mollitia libero quisquam nemo</p>
              <a href="">about us <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>       
          </div>
         
        </div>
        <div class="swiper-slide mySwiper__slide ">
          <img src="{{asset('image/slider/slider3.jpeg')}}" alt="cc">
          <div class="mySwiper__slide__overlay">
					</div>
          <div class="mySwiper__slide__dec">
            <div class="container">
              <h2><span>m</span>ec</h2>
              <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil enim magnam veritatis quibusdam sequi odit quod, ad, facere hic mollitia libero quisquam nemo</p>
              <a href="">about us <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>    
          </div>
          
        </div>
        
        <div class="swiper-slide mySwiper__slide ">     
              <img src="{{asset('image/slider/slider4.jpg')}}" alt="cc">
              <div class="mySwiper__slide__overlay">
              </div>
              <div class="mySwiper__slide__dec">
                <div class="container">
                  <h2><span>m</span>ec</h2>
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil enim magnam veritatis quibusdam sequi odit quod, ad, facere hic mollitia libero quisquam nemo</p>
                  <a href="">about us <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>    
              </div>
             
        </div>
        
      </div>
      <div class="swiper-pagination"></div>
    </div>
