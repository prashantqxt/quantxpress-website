<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Developers</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

  <style type="text/css">
    .box { 
      background-color: #fff;
      border-radius: 3px;
      overflow: hidden;
    }

    .tab-list {
      margin: 0;
      padding: 0;
      list-style: none;
      display: flex;
      position: relative;
      border-bottom: 1px solid #ddd;
    }
     
    .tab-list::before {
      content: '';
      display: block;
      height: 2px;
      width: 33.333%;
      position: absolute;
      bottom: 0;
      background-color: #aaa;
      transition: .3s;
    }

    .tab-item {
      flex: 1;
      text-align: center;
      transition: .3s;
      opacity: 0.5;
    }

    .tab-toggle {
      display: none;
    }

    .tab-content {
      display: none;
    }

    .tab-toggle:nth-child(1):checked ~ .tab-list .tab-item:nth-child(1),
    .tab-toggle:nth-child(2):checked ~ .tab-list .tab-item:nth-child(2), 
    .tab-toggle:nth-child(3):checked ~ .tab-list .tab-item:nth-child(3) {
      opacity: 1;
    }
     
    .tab-toggle:nth-child(2):checked ~ .tab-list::before {
      transform: translateX(100%);
    }

    .tab-toggle:nth-child(3):checked ~ .tab-list::before {
      transform: translateX(200%);
    }
     
    .tab-toggle:nth-child(1):checked ~ .tab-container .tab-content:nth-child(1),
    .tab-toggle:nth-child(2):checked ~ .tab-container .tab-content:nth-child(2),
    .tab-toggle:nth-child(3):checked ~ .tab-container .tab-content:nth-child(3) {
      display: block;
    }

    .tab-trigger {
      display: block;
      padding: 10px 0;
      font-weight: 600;
    }

    .tab-container {
      padding: 15px 30px;
    }
    .card-box{
      height: 50vh;
    }

    @media (max-width: 768px){
      .height-20,.card-box {
          height: auto;
      }
    }
  </style>
</head>
<body>
<!-- partial:index.partial.html -->
<div class="info-header ">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

<?php include 'header.php';?>
<!-- partial -->

<!-- Section 1-->

  <section id="porque-sec" class="uk-section  uk-light">
      <div> 
          <div uk-slider="velocity:1.3; easing: cubic-bezier(.4,0,.2,1)">
              <div class="uk-position-relative">
                  <div class="uk-slider-container uk-light">
                      <ul class="uk-slider-items uk-child-width-1-1">
                          <li class="dev-bg">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="dev">

                                    <div class="small-text-white" style="padding-bottom: 0!important;"> 
                                     Welcome Developers
                                    </div>

                                    <div class="main-title-white pt-3" style="line-height: 1.3;">Let's turn your <br class="mob"> Trading Ideas <br class="mob"> into reality </div> 

                                    <div class="small-text-white  "> 
                                      Get the most out of QuantXpress with comprehensive guides and <br class="mob"> tutorials on all of our products and Solutions.
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

  <section class="container py-3">
      <div class="row pt-5 pb-5">
          <div class="text-center">
            <p class="sec-title">
                 Explore  <span class="span-title">Products</span> 
            </p>

            <p class="para-text">
                QuantXpress empowers you to create and customize powerful trading systems. Build bespoke trading applications, strategies, and tools to streamline your trading workflow and bring your algorithmic edge to life. Get started quickly with our extensive developer resources: sample code, articles, tutorials, and API 
            </p> 
          </div>  
      </div>   

      <div class="row mt-5">
        <div class="row pt-5 pb-5">
          <div class="text-left">
            <p class="sec-title">
                  <span class="span-title">Blitz</span>Trader
            </p>

            <p class="para-text">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p> 
          </div>  
        </div> 
        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/quickstarter.png">
            </div>

            <div class="small-title-dark py-3">
              QuickStarter
            </div>

            <div class="para-text py-3 height-25 height-20">
              Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/strategy.png">
            </div>

            <div class="small-title-dark py-3">
              Strategy Development
            </div>

            <div class="para-text py-3 height-25 height-20">
              BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/sample.png">
            </div>

            <div class="small-title-dark py-3">
              Sample Strategy
            </div>

            <div class="para-text py-3 height-25 height-20">
              Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="row pt-5 pb-5">
          <div class="text-left">
            <p class="sec-title">
                  <span class="span-title">QX</span>.FinLib
            </p>

            <p class="para-text">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p> 
          </div>  
        </div> 
        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/quickstarter.png">
            </div>

            <div class="small-title-dark py-3">
              QuickStarter
            </div>

            <div class="para-text py-3 height-25 height-20">
              Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/strategy.png">
            </div>

            <div class="small-title-dark py-3">
              Strategy Development
            </div>

            <div class="para-text py-3 height-25 height-20">
              BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/sample.png">
            </div>

            <div class="small-title-dark py-3">
              Sample Strategy
            </div>

            <div class="para-text py-3 height-25 height-20">
              Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">

        <div class="row pt-5 pb-5">
          <div class="text-left">
            <p class="sec-title">
                  <span class="span-title">QX</span>.FIXEngine
            </p>

            <p class="para-text">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p> 
          </div>  
        </div> 

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/quickstarter.png">
            </div>

            <div class="small-title-dark py-3">
              QuickStarter
            </div>

            <div class="para-text py-3 height-25 height-20">
              Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/strategy.png">
            </div>

            <div class="small-title-dark py-3">
              Strategy Development
            </div>

            <div class="para-text py-3 height-25 height-20">
              BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="card-box">
            <div class="pb-4">
              <img class="w-25" src="assets/img/sample.png">
            </div>

            <div class="small-title-dark py-3">
              Sample Strategy
            </div>

            <div class="para-text py-3 height-25 height-20">
              Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
            </div>

            <div class="border-line"></div>

            <div class="d-flex mt-5">
                <div class="w-75 text-box-bottom text-left">
                  Learn More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div>
          </div>
        </div>
      </div>


      <!-- <div class="box">
        <input type="radio" class="tab-toggle" name="tab-toggle" id="tab1" checked>
        <input type="radio" class="tab-toggle" name="tab-toggle" id="tab2">
        <input type="radio" class="tab-toggle" name="tab-toggle" id="tab3">

        <ul class="tab-list">
          <li class="tab-item">
            <label class="tab-trigger para-text" for="tab1">BlitzTrader</label>
          </li>
          <li class="tab-item">
            <label class="tab-trigger para-text" for="tab2">QX.FinLib</label>
          </li>
          <li class="tab-item">
            <label class="tab-trigger para-text" for="tab3">QX.FIXEngine</label>
          </li>
        </ul>
        
        <div class="tab-container">
          <div class="tab-content">
            <div class="row mt-5">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/quickstarter.png">
                  </div>

                  <div class="small-title-dark py-3">
                    QuickStarter
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/strategy.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Strategy Development
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/sample.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Sample Strategy
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div class="row mt-5">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/quickstarter.png">
                  </div>

                  <div class="small-title-dark py-3">
                    QuickStarter
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/strategy.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Strategy Development
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/sample.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Sample Strategy
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="tab-content">
            <div class="row mt-5">
              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/quickstarter.png">
                  </div>

                  <div class="small-title-dark py-3">
                    QuickStarter
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/strategy.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Strategy Development
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-md-4 col-lg-4">
                <div class="card-box">
                  <div class="pb-4">
                    <img class="w-25" src="assets/img/sample.png">
                  </div>

                  <div class="small-title-dark py-3">
                    Sample Strategy
                  </div>

                  <div class="para-text py-3 height-25 height-20">
                    Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.
                  </div>

                  <div class="border-line"></div>

                  <div class="d-flex mt-5">
                      <div class="w-75 text-box-bottom text-left">
                        Learn More
                      </div>

                      <div class="w-25"> 
                        <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                          <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                        </svg>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
  </section>
 
 
  <section class=" dev py-6 mt-5">
    <div class="container">
        <div class="row pt-5 pb-5">
          <div class="text-left">
            <p class="sec-title">
                  <span class="span-title">Document</span>  Cloud
            </p>

            <p class="para-text">
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
            </p> 
          </div>  
        </div>   

        <div class="row pt-5 pb-5">
          <div class="col-12 col-md-4 col-lg-4"> 
            <div class="pb-4">
              <img class="w-25" src="assets/img/document.png">
            </div>

            <div class="small-title-dark py-2">
              Documentation <br class="mob"> &nbsp
            </div>

            <ul class="para-text ps-4 pt-2" style="list-style-type: number;">
              <li>
                <a href="#">How to write Simple Trading Execution Logic?</a>
              </li>
              <li>
                <a href="#">How to write a options based backtesting Strategy?</a>
              </li>
              <li>
                <a href="#">How to write a Bollinger Band Indicator in Blitz?</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-4 col-lg-4"> 
            <div class="pb-4">
              <img class="w-25" src="assets/img/dev.png">
            </div>

            <div class="small-title-dark py-2">
              Developer <br class="mob"> &nbsp
            </div>

            <ul class="para-text ps-4 pt-2" style="list-style-type: number;">
              <li>
                <a href="#">BlitzTrader Strategy <br>
                 Development</a>
              </li>
              <li>
                <a href="#">BlitzTrader Strategy <br>
                 Development</a>
              </li>
              <li>
                <a href="#">BlitzTrader Strategy <br>
                 Development</a>
              </li>
            </ul>
          </div>

          <div class="col-12 col-md-4 col-lg-4"> 
            <div class="pb-4">
              <img class="w-25" src="assets/img/document_cloud.png">
            </div>

            <div class="small-title-dark py-2">
              Helpful resources for <br class="mob"> document cloud
            </div>

            <ul class="para-text ps-4 pt-2" style="list-style-type: number;">
              <li>
                <a href="#">Why BlitzTrader? <br> &nbsp </a>
              </li>
              <li>
                <a href="#">Why BlitzTrader? <br> &nbsp </a>
              </li>
              <li>
                <a href="#">Why BlitzTrader? <br> &nbsp </a>
              </li>
            </ul>
          </div>
        </div>
    </div>
  </section>

  <section class="bg-gray  py-6"> 
    <div class="container">
      <div class="text-center pt-5">
        <p class="sec-title">
             <span class="span-title">N</span>ews
        </p>

        <p class="para-text">
            Get Updated On The Latest News
        </p> 
      </div>  
      <div class="row pt-5 pb-5 row-eq-height">
        <div class="col-12 col-md-4 col-lg-4 mb-5">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4" data-bs-toggle="modal" data-bs-target="#myModal"> 
            <img src="https://img.freepik.com/free-photo/business-person-looking-finance-graphs_23-2150461348.jpg" class="height-25 w-100 pb-4 object-cover">
            <div class="d-flex items-center px-4">
                <!-- <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div> -->
                <div class="primary para-text "> Pune, India | 15 Aug 2024 </div>
            </div> 
            <div class="px-4 pt-3">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800" style="font-size: 2rem;">
                QuantXpress Launches Market Data API Platform to Strengthen Infrastructure for Brokers and Financial Institutions
              </h2><br><br>
            </div>
            
   
            <div class="px-4 pt-3"> 
              
              <p class="para-text py-3 height-25">The platform allows brokers to stream real-time equity, futures, and options data directly from the exchange into their systems and disseminate it to their clients via WebSocket API.</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 mb-5">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4 " data-bs-toggle="modal" data-bs-target="#myModal2"> 
            <img src="https://img.freepik.com/free-photo/person-uses-tablet-governmental-cyber-security-room-working-russian-flag_482257-90680.jpg" class="height-25 w-100 pb-4 object-cover">
            <div class="d-flex items-center px-4">
                <!-- <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div> -->
                <div class="primary para-text "> Pune, India | 15 Aug 2024 </div>
            </div> 
            <div class="px-4 pt-3">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800" style="font-size: 2rem;">
                QuantXpress Unveils Tick-by-Tick Data Streaming Technology for Brokers and Trading Members of Indian Exchanges
              </h2> 
            </div> 
   
            <div class="px-4 pt-3"> 
              
              <p class="para-text py-3 height-25">QuantXpress Unveils Tick-by-Tick Data Streaming Technology for Brokers and Trading Members of Indian Exchanges</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4 mb-5">
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4" data-bs-toggle="modal" data-bs-target="#myModal3"> 
            <img src="https://img.freepik.com/free-photo/coworkers-examining-reports-papers-looking-statistics-annual-data-analytics-increase-profit-workers-group-planning-research-strategy-with-documents-business-development_482257-64771.jpg" class="height-25 w-100 pb-4 object-cover">
            <div class="d-flex items-center px-4">
                <!-- <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div> -->
                <div class="primary para-text "> Pune, India | 15 Aug 2024 </div>
            </div> 

            <div class="px-4 pt-3">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800" style="font-size: 2rem;">
                QuantXpress Launches Quant and Algo Trading Training Program for Aspiring Quant Engineers and Interns on BlitzTrader Platform
              </h2>
            </div>
   
            <div class="px-4 pt-3"> 
              
              <p class="para-text py-3 height-25">Designed by QuantXpress Pune, the program offers hands-on experience that includes training in designing profitable trading strategies, backtesting and optimizing processes, and implementing robust strategies for production systems using BlitzTrader</p>
              
              <div class="border-line"></div>

              <div class="d-flex mt-3">
                <div class="w-75 text-box-bottom">
                  Read More
                </div>

                <div class="w-25"> 
                  <svg style="color: #595959;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" viewBox="0 0 24 24">
                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.6" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                  </svg>
                </div>
            </div> 
            </div>
          </div>
        </div> 
      </div> 
    </div>  
  </section>

  <section class="container py-6"> 
    <div class="text-center pt-5">
      <p class="sec-title">
           Frequently <span class="span-title">asked</span> questions
      </p>

      <p class="para-text">
          Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
      </p> 
    </div>   
    <div class="accordion accordion-flush pt-5 pb-5" id="accordionFlushExample">
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
          <button class="accordion-button para-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
            What is BlitzTrade?
          </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body para-text py-4-d">BlitzTrader is next generation, most powerful and flexible algorithmic trading platform for retail and professional quant developers for rapid development, testing and deployment of simple to sophisticated trading strategies into constantly evolving financial marketplace.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
          <button class="accordion-button para-text collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            How do I get started with BlitzTrade?
          </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
          <div class="accordion-body para-text  py-4-d">BlitzTrader is next generation, most powerful and flexible algorithmic trading platform for retail and professional quant developers for rapid development, testing and deployment of simple to sophisticated trading strategies into constantly evolving financial marketplace.</div>
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

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content"> 
 
        <!-- Modal body -->
        <div class="modal-body p-5 modal-height">

          <h4 class="modal-title medium-title primary w-100">QuantXpress Launches Market Data API Platform to Strengthen Infrastructure for Brokers and Financial Institutions</h4> 

          <br>
          <div class="border-line"></div>
          <div class="primary para-text my-5 "> Pune, India | 15 Aug 2024 </div>


          <div class="para-text">
            QuantXpress, a leading technology company in the automated trading sector, today announced the launch of its new Market Data API Platform. This innovative platform is designed to enhance the market data API infrastructure for brokers and financial institutions, enabling them to deliver low-latency, high-quality real-time and historical market data to their clients.
          </div>

          <div class="para-text">
            The platform allows brokers to stream real-time equity, futures, and options data directly from the exchange into their systems and disseminate it to their clients via WebSocket API. It provides top-of-book prices, trade information, and essential market statistics, all delivered in a simple format for easy integration into trading, risk management, and distribution systems.
          </div>

          <div class="para-text">
            Commenting on the product launch, Sanjay Verma, Head of Product Delivery at QuantXpress, stated, “With the launch of QX.MDS, QuantXpress offers the most comprehensive solution in the market data space. It combines high performance with platform flexibility, low total cost of ownership, and a robust architecture.”
          </div>

          <div class="para-text">
            “We are continually seeking opportunities to enhance our clients’ experience, simplify their daily operations, improve efficiencies, and add value to the trade lifecycle,” said Ashish Bahety, Chief Operating Officer at QuantXpress.
          </div>

          <p class="para-text mt-5">
            <strong>About QuantXpress Technologies</strong>
          </p>

          <div class="para-text">
            QuantXpress Technologies delivers exceptional value to professional traders and financial firms by combining domain knowledge with technological expertise to create innovative trading solutions. Our relentless focus on innovation enables us to develop the trading solutions our customers need. QuantXpress provides end-to-end algorithmic trading solutions. For more information, visit us at <a href="#" class="blue">www.quantxpress.com</a> 
          </div> 
        </div> 
      </div>
    </div>
  </div> 

  <div class="modal" id="myModal2">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content"> 
 
        <!-- Modal body -->
        <div class="modal-body p-5 modal-height">

          <h4 class="modal-title medium-title primary w-100">QuantXpress Unveils Tick-by-Tick Data Streaming Technology for Brokers and Trading Members of Indian Exchanges</h4> 

          <br>
          <div class="border-line"></div>
          <div class="primary para-text my-5 "> Pune, India | 15 Aug 2024 </div>


          <div class="para-text">
            QuantXpress is excited to announce the launch of its Tick-by-Tick (TBT) data streaming technology, designed specifically for brokers and trading members of Indian exchanges. This groundbreaking technology enables users to capture real-time order book data and trades even without being in a co-location setup.
          </div>

          <div class="para-text">
            Tick-by-Tick data delivers comprehensive insights by providing detailed information for every tick received by the exchange from various market participants. It captures every single trade executed at the exchange, offering a precise view of market activity in each timeframe without missing any critical data points. Traditionally, due to the vast volume of data generated, TBT data has only been accessible within the co-location facilities of the National Stock Exchange (NSE). This type of data is essential for high-frequency traders, algorithmic trading systems, and researchers who require an in-depth understanding of market microstructure, liquidity patterns, and exact price movements.
          </div>

          <div class="para-text">
            Brokers’ proprietary desks and their clients consistently seek the highest quality market data available outside of co-location setups for enhanced research and optimal trade execution. QuantXpress's innovative technology provides access to granular data as a streaming solution that can be easily integrated with brokers’ retail platforms.
          </div>

          <div class="para-text">
            With the new TBT technology, brokers can now capture high-quality data directly into their trading systems. This technology is seamlessly integrated with BlitzTrader, QuantXpress's flagship algorithmic trading platform.
          </div>

          <p class="para-text mt-5">
            <strong>About QuantXpress Technologies</strong>
          </p>

          <div class="para-text">
            QuantXpress Technologies delivers exceptional value to professional traders and financial firms by combining domain knowledge with technological expertise to create innovative trading solutions. Our relentless focus on innovation empowers us to develop the trading solutions our customers need. QuantXpress provides end-to-end algorithmic trading solutions. For more information, visit us at  <a href="#" class="blue">www.quantxpress.com</a> 
          </div> 
        </div> 
      </div>
    </div>
  </div> 

  <div class="modal" id="myModal3">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content"> 
 
        <!-- Modal body -->
        <div class="modal-body p-5 modal-height">

          <h4 class="modal-title medium-title primary w-100">QuantXpress Launches Quant and Algo Trading Training Program for Aspiring Quant Engineers and Interns on BlitzTrader Platform</h4> 

          <br>
          <div class="border-line"></div>
          <div class="primary para-text my-5 "> Pune, India | 15 Aug 2024 </div>


          <div class="para-text">
            QuantXpress has officially launched an on-site internship program aimed at aspiring Quant Engineers, providing a unique opportunity for students to embark on careers in the rapidly growing field of quantitative trading. With the increasing demand for data-related roles, this internship program is both timely and essential.
          </div>

          <div class="para-text">
            Designed by QuantXpress Pune, the program offers hands-on experience that includes training in designing profitable trading strategies, backtesting and optimizing processes, and implementing robust strategies for production systems using BlitzTrader. The program is open to a diverse range of applicants, including undergraduates, postgraduates, and graduates from the fields of Computer Science and Mathematics. The only prerequisite is a strong interest in quantitative trading data and a desire to learn more about it.
          </div>

          <div class="para-text">
            QuantXpress is seeking candidates with strong analytical skills, effective communication abilities, a passion for data, and problem-solving capabilities. While prior experience in financial markets is not mandatory, a willingness to learn and grow is highly valued.
          </div>

          <div class="para-text">
           The Summer QuantXpress internship program brings together undergraduate students with backgrounds in Mathematics, Computer Science, and Business who share a common interest in quantitative trading. Each intern will gain experience and knowledge in the various aspects of a technology company, working collaboratively on projects that simulate the start-up experience. 
          </div>

          <div class="para-text">
           This immersive program is designed to provide hands-on exposure to the quantitative technology landscape. Interns will learn about the critical role of collaboration in development. Participants will leave with a deeper understanding of how a start-up functions and an awareness of potential career paths within quantitative and high-frequency trading technologies. 
          </div>

          <p class="para-text mt-5">
            <strong>Benefits of the Program:</strong>
          </p>
          
          <ul class="para-text ps-4 mt-5" style="list-style-type: circle;">
            <li> 
              Develop your analytical and problem-solving skills through cutting-edge projects in strategy modeling, financial product engineering, and algorithmic trading.
            </li>
            <li>
               High-performing interns may be considered for the Quantitative Finance Full-Time Associate Program, which offers in-depth knowledge and experience in the field. You will work alongside supportive colleagues who share a passion for using solid analysis to inform client decisions.
            </li> 
          </ul>

          <p class="para-text mt-5">
            <strong>About QuantXpress Technologies</strong>
          </p>

          <div class="para-text">
            QuantXpress Technologies delivers exceptional value to professional traders and financial firms by combining domain knowledge with technological expertise to create innovative trading solutions. Our relentless focus on innovation allows us to build the trading solutions our customers need. QuantXpress provides end-to-end algorithmic trading solutions. For more information, visit us at  <a href="#" class="blue">www.quantxpress.com</a> 
          </div> 
        </div> 
      </div>
    </div>
  </div> 
<script type="text/javascript">
  $(function () {
     $('.toggle-menu').click(function(){
      $('.exo-menu').toggleClass('display');
     });
  });
</script>
</html>
