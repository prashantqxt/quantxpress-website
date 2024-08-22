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

                                    <div class="main-title-white pt-0" style="line-height: 1.3;">Let's turn your <br class="mob"> Trending Ideas <br class="mob"> into reality </div> 

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
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took <br class="mob"> a galley of type and scrambled it to make a type
            </p> 
          </div>  
      </div>   

      <div class="box">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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

                  <div class="para-text py-3 height-20">
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
      </div>
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
                <a href="#">Acrobat learn and support</a>
              </li>
              <li>
                <a href="#">Acrobat services</a>
              </li>
              <li>
                <a href="#">Acrobat sign</a>
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
                <a href="#">Acrobat learn and support</a>
              </li>
              <li>
                <a href="#">Acrobat services</a>
              </li>
              <li>
                <a href="#">Acrobat sign</a>
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
                <a href="#">Acrobat learn and support</a>
              </li>
              <li>
                <a href="#">Acrobat services</a>
              </li>
              <li>
                <a href="#">Acrobat sign</a>
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
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4"> 
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
                News Title 1
              </h2>
            </div>
            <div class="d-flex items-center px-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4"> 
              
              <p class="para-text py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet...</p>
              
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
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4"> 
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
                News Title 2
              </h2>
            </div>
            <div class="d-flex items-center px-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4"> 
              
              <p class="para-text py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet...</p>
              
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
          <div class="w-full bg-white border border-gray-200 rounded-3 overflow-hidden hover:shadow-lg transition duration-300 p-4"> 
            <div class="p-4">
              <h2 class="my-1 small-title-dark font-bold leading-tight text-gray-800">
                News Title 3
              </h2>
            </div>
            <div class="d-flex items-center px-4">
                <img src="assets/img/profile.jpg" alt="Author Avatar" class="h-8 w-8 rounded-full">
                <div class="para-text ml-2" style="font-size: 1.2rem!important;">By Author Name <br> 13th Mar 2023</div>
            </div> 
   
            <div class="p-4"> 
              
              <p class="para-text py-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet...</p>
              
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
<script type="text/javascript">
  $(function () {
     $('.toggle-menu').click(function(){
      $('.exo-menu').toggleClass('display');
     });
  });
</script>
</html>
