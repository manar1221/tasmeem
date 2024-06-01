<div>
    <section id="home" class="home">
        <h1>{{__('mycustom.welcome1')}}</h1>
        <h2>{{__('mycustom.welcome2')}}</h2>
      <div class="wave wave1"></div>
      <div class="wave wave2"></div>
      <div class="wave wave3"></div>
    </section>

    <section id="about" class="about">
      <h1 class="heading">{{__('mycustom.Aboutus')}}</h1>
      <div class="row">
          <div class="content">
              <h3>{{__('mycustom.about1')}}</h3>
              <p>{{__('mycustom.about2')}}</b><br>
                {{__('mycustom.about3')}}</p>
              <a href="#paragraph"><button class="btn">{{__('mycustom.readmore')}}</button></a>
          </div>
      </div>
    </section>

    <div class="pt-5 pb-5" style="background-color: #f2f2f2;">
      <div class="container">
        <div class="row">
          <div class="section-head col-sm-12" id="service">
            <h1>{{__('mycustom.Ourservices')}}</h1>
            <p>{{__('mycustom.Ourservices1')}}</p>
          </div>
          <div class="col-lg-4 col-sm-6 anim">
            <div class="item">
              <div class="image card">
                  <img src="{{asset('assets/images/تصميم-فيديو-موشن-جرافيك-منتجات 1.png')}}">
                  </div>
              <h6>{{__('mycustom.motion1')}}</h6>
              <p>{{__('mycustom.motion2')}} <br>
                {{__('mycustom.motion3')}} <br>
                {{__('mycustom.motion4')}} <br>
                {{__('mycustom.motion5')}} </p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 anim">
              <div class="item">
                <div class="image card">
                    <img src="{{asset('assets/images/تصميم-موقع-الكتروني.webp')}}">
                    </div>
                <h6>{{__('mycustom.web1')}}</h6>
                <p>
                   {{__('mycustom.web2')}}<br>
                   {{__('mycustom.web3')}}<br>
                   {{__('mycustom.web4')}}<br>
                   {{__('mycustom.web5')}}
                </p>
              </div>
            </div>
          <div class="col-lg-4 col-sm-6 anim">
            <div class="item">
              <div class="image card">
                  <img src="{{asset('assets/images/تصميم-مواقع-الكترونية_.webp')}}">
                  </div>
              <h6>{{__('mycustom.services1')}} </h6>
              <p>
                  {{__('mycustom.services2')}}<br>
                  {{__('mycustom.services3')}}<br>
                  {{__('mycustom.services4')}}<br>
                  {{__('mycustom.services5')}}
              </p>
            </div>
          </div>

          <div class="col-lg-4 col-sm-6 anim">
              <div class="item">
                <div class="image card">
                    <img src="{{asset('assets/images/ادارة-حسابات-السوشيال-منتجات.webp')}}">
                    </div>
                <h6>{{__('mycustom.social1')}}</h6>
                <p>{{__('mycustom.social2')}}
              </p>
          </div>
          </div>
          <div class="col-lg-4 col-sm-6 anim">
              <div class="item">
                <div class="image card">
                    <img src="{{asset('assets/images/تصميم-الهوية-التجارية.webp')}}">
                    </div>
                <h6>{{__('mycustom.graphic1')}}</h6>
                <p>{{__('mycustom.graphic2')}}<br>
                   {{__('mycustom.graphic3')}}<br>
                   {{__('mycustom.graphic4')}}<br>
                   {{__('mycustom.graphic5')}}<br>
                   {{__('mycustom.graphic6')}}</p>
              </div>
            </div>
      </div>
    </div>

    <section class="counters">
      <div class="container">
          <div>
              <i class="far fa-clock fa-4x"></i>
              <div class="counter" data-target="13500">0</div>
              <h3>Working Hours</h3>
          </div>
          <div>
              <i class="fas fa-gift fa-4x"></i>
              <div class="counter" data-target="720">0</div>
              <h3>Completed Projects</h3>
          </div>
          <div>
              <i class="fas fa-users fa-4x"></i>
              <div class="counter" data-target="480">0</div>
              <h3>Happy Clients</h3>
          </div>
          <div>
              <i class="fas fa-award fa-4x"></i>
              <div class="counter" data-target="120">0</div>
              <h3>Awards Received</h3>
          </div>
      </div>
    </section>

    <div class="pt-5 pb-5">
      <div class="container">
        <div class="row">
          <div class="section-head-1 col-sm-12" style="text-align: center;">
            <h4 style="margin-top: -5rem;" id="portfolio">{{__('mycustom.OurProjects')}}</h4>

            <p>{{__('mycustom.OurProjects1')}}
              </p>
          </div>

          <div class="col-lg-3 col-sm-6 anim">
              <a href="https://bezrteltanmia.org/" style="text-decoration: none;">
              <div class="item">
                <div class="image card">
                  <img src="{{asset('assets/images/logo.jpeg')}}">
                </div>
                <h6>{{__('mycustom.bezrteltanmia')}}</h6>
              </div>
            </a>
            </div>

            <div class="col-lg-3 col-sm-6 anim" style="text-decoration: none;">
              <a href="https://artspaceegypt.com/" style="text-decoration: none;">
              <div class="item">
                <div class="image card">
                <img src="{{asset('assets/images/final edit logo art space-02.jpg')}}">
                </div>
                <h6>{{__('mycustom.ARTSpace')}}</h6>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-sm-6 anim">
              <a href="https://helwan.store/" style="text-decoration: none;">
              <div class="item">
                <div class="image card">
                <img src="{{asset('assets/images/logotas2.jpg')}}" style="height: 220px;">
                </div>
                <h6> {{__('mycustom.HelwanStore')}} </h6>
              </div>
            </a>
            </div>
            <div class="col-lg-3 col-sm-6 anim" style="text-decoration: none;">
              <div class="item">
                <div class="image card">
                <img src="{{asset('assets/images/smart.jpg')}}" style="height:185px;">
                </div>
                <h6>{{__('mycustom.Smartsolutions')}}</h6>
              </div>
            </div>
        </div>
      </div>
    </div>

    <section id="paragraph">
        <div class="communicate">
        <h3>{{__('mycustom.ContactUs1')}}</h3>
        <p>{{__('mycustom.ContactUs2')}}</p>
        <a href="#contact"><button class="btn">{{__('mycustom.ContactUs')}}</button></a>
        </div>
    </section>

    {{-- <section class="team" style="margin-top: 7rem;">
      <h1 class="heading" style="margin-top: -1.5rem;" id="team">{{__('mycustom.priceplans')}}</h1>
      <p></p>
      <div class="row">
          <div class="card">
              <div class="image">
                  <img src="{{asset('assets/images/ادارة-حسابات-السوشيال-منتجات.webp')}}">
              </div>
              <div class="info">
                  <h3><span>{{__('mycustom.SocialMedia')}}</span></h3>
                  <div>
                    <a href="socialEng.html"><button class="btn">{{__('mycustom.show')}}</button></a>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
            <div class="card">
                <div class="image">
                    <img src="{{asset('assets/images/تصميم-مواقع-الكترونية_.webp')}}">
                </div>
                <div class="info">
                    <h3><span>{{__('mycustom.Websites')}}</span></h3>
                    <div>
                    <a href="webEng.html"><button class="btn">{{__('mycustom.show')}}</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card">
                <div class="image">
                    <img src="{{asset('assets/images/تصميم-فيديو-موشن-جرافيك-منتجات 1.png')}}">
                </div>
                <div class="info">
                    <h3><span>{{__('mycustom.MotionGraphicVideos')}}</span></h3>
                    <div>
                    <a href="motionEng.html"><button class="btn">{{__('mycustom.show')}}</button></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    <section id="contact" class="contact">
      <h1 class="heading">{{__('mycustom.getintouch')}}</h1>
    </section>
    <div class="contact-in">
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d110562.78464800169!2d31.3196544!3d30.0056576!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458342722109f49%3A0x8164db4d10cac6c!2z2K3ZhNmI2KfZhtiMINit2YTZiNin2YYg2KfZhNio2YTYr9iMINmC2LPZhSDYrdmE2YjYp9mG2Iwg2YXYrdin2YHYuNipINin2YTZgtin2YfYsdip4oCs!5e0!3m2!1sar!2seg!4v1693040052314!5m2!1sar!2seg" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-form">
            <div class="col-lg-6 col-md-6 footer-contact" style="font-size: 1.5rem;">
                <h1>{{__('mycustom.ContactUs')}}</h1>
                <p>
                    <br>
                    <strong>Phone:</strong> +201110487092<br><br>
                    <strong>Email:</strong> info@eltasmem.com<br>
                </p>

                <div class="social-links-contact">
                    <a href="https://www.facebook.com/profile.php?id=61550279819181"><i class="ion-logo-facebook"></i></a>
                    <a href="https://www.instagram.com/tasmim_software/"><i class="ion-logo-instagram"></i></a>
                    <a href="https://wa.link/sa19fv"><i class="ion-logo-whatsapp"></i></a>
                    <a href="https://mail.google.com/mail/u/0/?tab=rm&ogbl#inbox"><i class="ion-logo-googleplus"></i></a>
                </div>

            </div>
        </div>

    </div>

    <section class="faq">
        <h1 class="heading" style="margin-top: -2rem; color: #D5B7CF;" id="faq">FAQ</h1>
        <div class="row">
            <div class="accordion-container">
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>{{__('mycustom.faq1')}}</h3>
                    </div>
                    <div class="accordion-body">
                        <p>{{__('mycustom.faq11')}}</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>{{__('mycustom.faq2')}}</h3>
                    </div>
                    <div class="accordion-body">
                        <p>{{__('mycustom.faq22')}}</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>{{__('mycustom.faq3')}}</h3>
                    </div>
                    <div class="accordion-body">
                        <p>{{__('mycustom.faq33')}}</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>{{__('mycustom.faq4')}}</h3>
                    </div>
                    <div class="accordion-body">
                        <p>{{__('mycustom.faq44')}}</p>
                    </div>
                </div>
                <div class="accordion">
                    <div class="accordion-header">
                        <span>+</span>
                        <h3>{{__('mycustom.faq5')}}</h3>
                    </div>
                    <div class="accordion-body">
                        <p>{{__('mycustom.faq55')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
