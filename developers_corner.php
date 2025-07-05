<?php include 'header.php'; ?> 
<style>
   .code-block {
   background: rgba(31, 41, 55, 0.5);
   padding: 1.5rem;
   border-radius: 0.5rem;
   box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
   }
   .code-block pre {
   margin: 0;
   }
   .btn-custom {
   background-color: #1f2937;
   color: white;
   }
   .card {
   border: none;
   box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
   }
   .card-title {
   font-size: 24px;
   font-weight: bold;
   padding-bottom: 20px;
   }
   .card-text {
   font-size: 20px;
   }
   .section-title {
   font-size: 2rem;
   font-weight: bold;
   }
   .section-subtitle {
   color: #6c757d;
   }
   .text-primary{
   color: #3D23A7!important;
   }
   .no-hover:hover {
      width: 215px!important;
      border-radius: 50px!important; 
      background: rgb(121,79,209)!important;
      background: linear-gradient(-31deg, rgb(121 79 209 / 25%) 0%, rgb(204 163 105 / 25%) 100%)!important; 
      border: 2px solid #ffffff40!important;
      color: #ffffff!important;
   }

   .learn_more_hover > a > div > .learn_more_span{
      display: none;
   } 
   .learn_more_hover:hover >  a > div > .learn_more_span{
      display: block;
      font-size: 18px;
      font-weight: 600;
      margin: 3px;
   } 

   .list-group > .card:hover{
      background-color: #d6c7fa26;
      box-shadow: none;
   }
   .learn_more_span{
      font-size: 16px;
      font-weight: 700;
      padding: 3px;
   }
   .list-group > div:hover{
      background-color: #d6c7fa26;
   }
   hr {margin: 0!important;}
</style>
<div class="container-fluid py-5  page-top" style=" background: url('assets/img/dev_banner_bg.png') no-repeat center center/cover; height: 80vh;">
   <div class="container-fluid py-5">
      <div class="row align-items-center">
         <div class="col-md-6">
            <button class="btn btn-custom mb-4 no-hover" style="width: 215px;border-radius: 50px; background: rgb(121,79,209);
               background: linear-gradient(-31deg, rgb(121 79 209 / 25%) 0%, rgb(204 163 105 / 25%) 100%); border: 2px solid #ffffff40;">
            Welcome Developers
            </button>
            <h1 class="display-4 fw-bold text-white mb-4">Let's Turn Your Trading Ideas Into Reality</h1>
            <p class="text-secondary" style="color:#ffffffbd!important;">Get the most out of QuantXpress with comprehensive guides and tutorials on all of our products and Solutions.</p>
         </div>
         <div class="col-md-6 mt-4 mt-md-0">
            <img src="assets/img/dev-banner_img.png" alt="Image" class="img-fluid">
         </div>
      </div>
   </div>
</div>
<div class="d-flex align-items-center justify-content-center py-5 bg-white">
   <div class="container-fluid py-5">
      <div class="row align-items-center">
         <div class="col-md-6 text-center">
            <img alt="Illustration of a person sitting on a server with a cloud upload icon and various tech elements around" 
               class="img-fluid" src="assets/img/explore_products.svg"/>
         </div>
         <div class="col-md-6 mt-4 mt-md-0">
            <h2 class="fw-bold text-dark mb-4 main_title text-start p-0 pe-5" >
               Explore Products
            </h2>
            <p class="  sub_title text-start px-0 pe-5">
               QuantXpress empowers you to create and customize powerful trading systems. Build bespoke trading applications, strategies, and tools to streamline your trading workflow and bring your algorithmic edge to life. Get started quickly with our extensive developer resources: sample code, articles, tutorials, and API.
            </p>
         </div>
      </div>
   </div>
</div>
<section style="background-color: #f0f4ff">
   <div style="width: 15%;position: absolute;right: 0;">
      <img src="assets/img/design_dev.png" alt="CTA" class="w-100 ">
   </div>
   <div class="container-fluid py-5">
      <div class="py-5">
         <!-- BlitzTrader Section -->
         <div class="mb-5">
            <h1 class=" main_title text-start p-0 pe-5 mb-2">BlitzTrader</h1>
            <p class="sub_title text-start px-0 pe-5" mb-4">BlitzTrader delivers a comprehensive trading solution designed to automate and streamline your Strategy development and trade automation processes end-to-end.</p>
            <div class="row g-4">
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5 ">API</h5>
                     <h3 class="card-title">QuickStarter</h3>
                     <p class="card-text sub_title text-start px-0 pe-5 h-100">Before diving into strategy development, familiarize yourself with key concepts of BlitzTrader.</p>
                     <a href="#" class="text-primary mt-5 pt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Strategy Development</h3>
                     <p class="card-text h-100">BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Sample Strategy</h3>
                     <p class="card-text h-100">Explore strategies further by examining the code of various pre-built strategies for different asset classes and trading rules.</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- QX.FinLib Section -->
         <div class="mb-5">
            <h1 class="section-title mb-2">QX.FinLib</h1>
            <p class="sub_title text-start px-0 pe-5">Leverage the QX.FinLib SDK and developer resources to develop strategies, conduct backtesting, and build analysis and trading tools</p>
            <div class="row g-4">
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">QuickStarter</h3>
                     <p class="card-text h-100">
                        Tutorial guides you through hands-on exercises to build skills and familiarity with the strategy research process.</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Strategy Development</h3>
                     <p class="card-text h-100"> Discover QX.FinLib SDK to build a backtest strategy and put them to work.</p>
                     <a href="#" class="text-primary mt-5 "> 
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Sample Strategy</h3>
                     <p class="card-text h-100">Explore sample code for various strategies across options and other asset classes.</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
         <!-- QX.FIXEngine Section -->
         <div>
            <h1 class="section-title mb-2">QX.FIXEngine</h1>
            <p class="sub_title text-start px-0 pe-5">The QX.FIXEngine SDK are implementation of the FIX protocol that provides an easy to integrate FIX API for industry standards based electronic trading communications.</p>
            <div class="row g-4">
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Documentation</h3>
                     <p class="card-text h-100"> Tutorial guides you through different component of QX.FIXEngine to build and integrate FIX Engine and parser in your application.</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Samples Code</h3>
                     <p class="card-text h-100">A selection of code samples for you to use to accelerate your FIX Engine development</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card p-4 h-100 hover-animation learn_more_hover">
                     <h5 class="text-primary mb-5">API</h5>
                     <h3 class="card-title">Blog</h3>
                     <p class="card-text h-100">What is FIX Engine?</p>
                     <a href="#" class="text-primary mt-5">
                        <div class="d-flex ">
                           <div class="learn_more_span">Learn More</div>
                           <div>
                              <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                              </svg>
                           </div>
                        </div>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section> 


<section class=" ">
   <div class="container-fluid py-5">
      <div class="row">
         <div class="col-md-6 mb-4 mb-md-0">
            <div class="flex-column" style="display: flex; justify-content: center;  align-items: left; height: 50vh;">
                <div class="main_title text-start p-0 pe-5">
                    QX.MarketData API
                </div>
                <div>
                    <img src="assets/img/hft_img.svg" alt="CTA" class="img-fluid slide-box">
                </div>
                <label class="p-0 mt-4 text-start sub_title">QX.MarketData API provides comprehensive financial market data access for developers and traders through partners broker.</label>
            </div>
         </div>
         <div class="col-md-6 h-100">
            <div class="list-group">
               <a href="#" class="card list-group-item-action d-flex py-4 px-5 mb-2 mob-p5">
                  <div class="d-flex">
                     <div>
                        <svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M18 17.5H5.5V20H18V17.5Z" fill="#3D23A7"/>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 0V30H25.5V5L20.5 0H0.5ZM23 10V27.5H3V2.5H15.5V10H23ZM23 7.5V6.25L19.25 2.5H18V7.5H23Z" fill="#3D23A7"/>
                        </svg>
                     </div>
                  </div>
                  <div class="d-flex mt-3">
                     <div class="w-100 ">
                        <p class="card-title text-dark fw-semibold">Documentation</p>
                     </div>
                     <div class="flex-shrink-1">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="40" height="40" rx="20" fill="#3D23A7" fill-opacity="0.55"/>
                           <path d="M12 20H27" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                           <path d="M22 15L27.8156 19.8464C27.9116 19.9263 27.9116 20.0737 27.8156 20.1536L22 25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                     </div>
                  </div>
               </a>

               <a href="#" class="card list-group-item-action d-flex py-4 px-5 mb-2 mob-p5">
                  <div class="d-flex">
                     <div>
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.9729L7.5 7.5L9.26777 9.26138L3.53554 14.9729L9.26777 20.7124L7.5 22.4738L0 14.9729Z" fill="#3D23A7"/>
                            <path d="M30 15.0288L22.4982 22.5L20.7301 20.739L26.4636 15.0288L20.7301 9.29069L22.4982 7.52973L30 15.0288Z" fill="#3D23A7"/>
                            <path d="M17.3762 7.52808L10.0047 21.3598L12.2418 22.4738L19.6133 8.64207L17.3762 7.52808Z" fill="#3D23A7"/>
                        </svg> 
                     </div>
                  </div>
                  <div class="d-flex mt-3">
                     <div class="w-100 ">
                        <p class="card-title text-dark fw-semibold">SDK</p>
                     </div>
                     <div class="flex-shrink-1">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="40" height="40" rx="20" fill="#3D23A7" fill-opacity="0.55"/>
                           <path d="M12 20H27" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                           <path d="M22 15L27.8156 19.8464C27.9116 19.9263 27.9116 20.0737 27.8156 20.1536L22 25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                     </div>
                  </div>
               </a>

               <a href="#" class="card list-group-item-action d-flex py-4 px-5 mb-2 mob-p5">
                  <div class="d-flex">
                     <div>
                        <svg width="26" height="30" viewBox="0 0 26 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path d="M18 17.5H5.5V20H18V17.5Z" fill="#3D23A7"/>
                           <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 0V30H25.5V5L20.5 0H0.5ZM23 10V27.5H3V2.5H15.5V10H23ZM23 7.5V6.25L19.25 2.5H18V7.5H23Z" fill="#3D23A7"/>
                        </svg>
                     </div>
                  </div>
                  <div class="d-flex mt-3">
                     <div class="w-100 ">
                        <p class="card-title text-dark fw-semibold">Developer Console Guide</p>
                     </div>
                     <div class="flex-shrink-1">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <rect width="40" height="40" rx="20" fill="#3D23A7" fill-opacity="0.55"/>
                           <path d="M12 20H27" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                           <path d="M22 15L27.8156 19.8464C27.9116 19.9263 27.9116 20.0737 27.8156 20.1536L22 25" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <div class="container-fluid py-5">
        <div class="row">
            <!-- Getting Started Section -->
            <div class="col-md-6 mb-4">
                <h2 class="h4 font-weight-bold mb-4">Getting started</h2>
                <hr>
                <div class="list-group">
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">First Options Backtesting Strategy</h3>
                        <p>
                          This article guides you through simple steps on how to build straddle and strangle options strategies using the QX.FinLib SDK</p>
                    </div>
                    <hr>
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">Technical Indicator Development</h3>
                        <p>
                           The QX.FinLib framework offers an easy setup for utilizing standard indicators as well as developing proprietary indicators tailored to your specific needs.</p>
                    </div>
                    <hr>
                    
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">Blitz Smart Order based Execution</h3>
                        <p>The Smart Order feature is a core component of the SDK, designed to streamline and enhance the robustness of your order execution logic, providing greater control over your trading operations.</p>
                    </div>
                    
                    <hr>
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">My First Strategy in Blitz</h3>
                        <p>
                           Kickstart your algorithmic trading journey in C#. Learn how to set up your environment, code strategies, and automate trades to enhance your market decision-making.</p>
                    </div>
                </div>
            </div>
            <!-- Popular Section -->
            <div class="col-md-6 mb-4">
                <h2 class="h4 font-weight-bold mb-4">Popular</h2>
                <hr>
                <div class="list-group">
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">NSE TBT Streaming</h3>
                        <p>
                           Tick-by-tick (TBT) data represents high-bandwidth order book information. This article explains how to effectively handle and manage this volume of data in your program.</p>
                    </div>
                    <hr>
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">Our Github</h3>
                        <p>
                           Sample apps demonstrating the features of the BlitzTrader, QX.FinLib, QX.FIX Engine and other products SDK</p>
                    </div>
                    <hr>
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">QX.FIX Engine Starter</h3>
                        <p>
                           This article provides step-by-step instructions for developing a basic application that exchanges financial information over the FIX protocol within a .NET environment</p>
                    </div>
                    <hr>
                    <div class="p-4">
                        <h3 class="h5 font-weight-bold text-primary">Blitz Retail Initiative</h3>
                        <p>
                           Our plan is to empower retail traders by providing access to algorithmic and automated trading solutions, enhancing their financial journey towards robust trading success.</p>
                    </div>
                </div>
            </div>
        </div>
   </div>
</section>

<section  style=" background: url('assets/img/bg_dev.svg') no-repeat center center/cover; min-height: 115vh;">
   <div class="container-fluid  ">
      <div class="main_title text-start p-0 pe-5">
         Developer Blog
      </div>
      <div class="row pb-5">
         <div class="col-md-4 mb-4 pb-5">
            <a href="blog_1.php">
               <div class="card h-100 hover-animation learn_more_hover">
                  <p class="text-primary" style="font-weight: bold;">
                    Technology
                  </p>
                  <img alt="Abstract purple shapes" class="card-img-top" src="assets/img/blog_1.png"/>
                  <div class="card-body">
                     <h5 class="card-title">
                        Streamlining Algorithmic Trading: How Blitz Unlocks Efficiency and Cost Savings
                     </h5>
                     <p class="card-text">
                        Algorithmic trading is a cornerstone of modern finance, allowing for swift, precise, and efficient execution of trades. However, building and maintaining custom trading solutions often create significant roadblocks for institutions.
                     </p>
                  </div>
                  <a href="blog_1.php" class="text-primary mt-3 px-3">
                     <div class="d-flex ">
                        <div class="learn_more_span">Read More</div>
                        <div>
                           <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                           </svg>
                        </div>
                     </div>
                  </a>
               </div> 
            </a>
         </div>
         <div class="col-md-4 mb-4 pb-5">
            <a href="blog_1.php">
                <div class="card h-100 hover-animation learn_more_hover">
                <p class="text-primary" style="font-weight: bold;">
                    Technology
                </p>
                <img alt="Abstract blue shapes" class="card-img-top" src="assets/img/blog_2.png"/>
                <div class="card-body">
                    <h5 class="card-title">
                        BlitzTrader: Unlock Your Inner Quant with the Future of Algorithmic Trading
                    </h5>
                    <p class="card-text">
                        In the landscape of algorithmic trading platforms, Blitz stands out as a revolutionary solution. Unlike traditional platforms that offer limited flexibility with predefined strategies, Blitz allows traders to create their own unique trading strategies autonomously.
                    </p>
                     
                </div>
                <a href="blog_1.php" class="text-primary mt-3 px-3">
                     <div class="d-flex ">
                        <div class="learn_more_span">Read More</div>
                        <div>
                           <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                           </svg>
                        </div>
                     </div>
                  </a>
                </div>
            </a>
         </div>
         <div class="col-md-4 mb-4 pb-5">
            <a href="blog_1.php">
                <div class="card h-100 hover-animation learn_more_hover">
                <p class="text-primary" style="font-weight: bold;">
                    Technology
                </p>
                <img alt="Abstract red and blue shapes" class="card-img-top" src="assets/img/blog_3.png"/>
                <div class="card-body">
                    <h5 class="card-title">
                        The Transformative Role of Technology in Modern Trading
                    </h5>
                    <p class="card-text">
                        In the ever-evolving landscape of financial markets, technology plays a pivotal role, revolutionizing the way trading is conducted. The advent of electronic trading marked a significant turning point, transitioning markets from manual outcry systems to automated electronic networks.
                    </p> 
                </div>
                <a href="blog_1.php" class="text-primary mt-3 px-3">
                     <div class="d-flex ">
                        <div class="learn_more_span">Read More</div>
                        <div>
                           <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M19.7991 9.89972C19.4086 9.50919 18.7754 9.50919 18.3849 9.89972C17.9944 10.2902 17.9944 10.9234 18.3849 11.3139L23.0418 15.9708L8.48542 15.9708C7.93314 15.9708 7.48542 16.4185 7.48542 16.9708C7.48542 17.5231 7.93314 17.9708 8.48542 17.9708L23.0418 17.9708L18.3849 22.6276C17.9944 23.0182 17.9944 23.6513 18.3849 24.0419C18.7754 24.4324 19.4086 24.4324 19.7991 24.0419L26.1631 17.6779C26.5536 17.2874 26.5536 16.6542 26.1631 16.2637L19.7991 9.89972Z" fill="#3D23A7"/>
                           </svg>
                        </div>
                     </div>
                  </a>
                </div>
            </a>
         </div> 
      </div>
   </div>
</section>
<?php include 'footer.php'; ?>