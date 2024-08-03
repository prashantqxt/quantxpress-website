<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="info-header">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

<?php include 'header.php';?>
<!-- partial -->

<!-- Section 1-->

  <section id="porque-sec" class="uk-section  uk-light">
      <div> 
          <div uk-slider="velocity:1.3; easing: cubic-bezier(.4,0,.2,1)">
              <div class="uk-position-relative">
                  <div class="uk-slider-container uk-light">
                      <ul class="uk-slider-items uk-child-width-1-1">
                          <li class="banner-bg">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title-white">QX.MDS </div>
                                    <div class="second-title-white"> 
                                          .NET Suite for your Trading Application
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                          The QX.MDS is dependable high performance market data solution and provide access of high quality streaming  and historical market data of any asset class to your clients and trading desk through API model.  The solution captures high volume exchange data, consolidates and disseminates it to users through internet friendly REST and WebSocket streaming API and to ensure you have a clear view of all the data for informed trading decision.
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li>
                          <!-- <li class="banner-bg-2">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title">QXFinLib NET2 </div>
                                    <div class="second-title"> 
                                          Empower your Research, Optimize Back tests,
                                          Master the Markets
                                    </div>

                                    <div class="small-text py-4-d px-4"> 
                                          QXFinLib.NET is the ultimate toolkit for quant developers. Craft sophisticated trading systems with ease on the powerful .NET platform.  
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li>
                          <li class="banner-bg-3">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="text-center">
                                    <div class="main-title">QXFinLib .NET3 </div>
                                    <div class="second-title"> 
                                          Empower your Research, Optimize Back tests,
                                          Master the Markets
                                    </div>

                                    <div class="small-text py-4-d px-4"> 
                                          QXFinLib.NET is the ultimate toolkit for quant developers. Craft sophisticated trading systems with ease on the powerful .NET platform.  
                                    </div>

                                    <div class="btn-mg">
                                      <button class="dark-btn">Get Started</button>
                                      <button class="light-btn">Documentation</button>
                                    </div>
                                  </div>
                              </div>
                          </li> -->
                      </ul>
                      <a class="uk-position-center-left uk-position-medium" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                      <a class="uk-position-center-right uk-position-medium" href="#" uk-slidenav-next uk-slider-item="next"></a>
                  </div>
              </div>
              <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin-medium-top">
                  <li></li>
              </ul>
          </div>
      </div>
  </section>


  <section class="container py-6">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Innovative  <span class="span-title">Data <br> Architecture</span>
            
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
          </p>
        </div>
      </div>  

      <div class="w-100 my-5 pt-5">
        <img src="assets/img/data-arch.png">
      </div> 

  </section>

    <section class="container py-6">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Why choose   <span class="span-title">QX.MDS  <br> API</span> Solution?            
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type 
          </p>
        </div>
      </div>  

      <div class="d-flex justify-content-between mob-col pt-5">
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/algorithmic.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Market  Variable Concept
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  The retail and Institutional clients of brokers are now demanding a high performance robust Market Data API solution with ease to use and integrate with their trading application. QX.MDS Solutions standardized the Market Data API for streaming and Historical data.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/fix.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Intuitive and Easy to Use API
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Efficiently manage the entire order lifecycle with rapid quoting sequences through a single API command, eliminating concerns about looping in the generation of new order cycles.
                </div> 
              </div>
            </section>
          </div>
        </div>
        <div class="border w-33 hover-box">
          <div class="img-icon">
              <img src="assets/img/exchange.svg">
            </div>
          <div class="vertical"> 
            <!--  front side  -->
            <section class="front"> 
              
              <div class="d-flex filp-front-title">
                <div class="w-75 text">
                  Robust and Fast Streaming
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6" />
                  </svg>
                </div>
              </div>
            </section>

            <!--  back side  -->
            <section class="back"> 
              <div class="d-flex filp-front-title">
                <div class="w-85 gray flip-text ">
                  Streamline complex execution models with a single command like EnterLong, EnterShort, GoFlat, SetPosition etc, ensuring optimal order execution.

                </div> 
              </div>
            </section>
          </div>
        </div>
      </div> 
  </section>  

  <?php include 'footer.php';?>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/js/uikit-icons.min.js'></script>

  <script  src="assets/js/script.js"></script>
</body> 
<script type="text/javascript">
  $(function () {
     $('.toggle-menu').click(function(){
      $('.exo-menu').toggleClass('display');
     });
  });
</script>
</html>
