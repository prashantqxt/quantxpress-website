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

  <style type="text/css">
    .card-box-about {
      padding: 5% 5%!important;
    }
  </style>
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
                                    <div class="main-title-white">QX.FIX Engine </div>
                                    <div class="second-title-white"> 
                                          .NET based low latency FIX Engine Library
                                    </div>

                                    <div class="small-text-white py-4-d px-4"> 
                                        Multi-asset  and Low latency FIX Protocol SDK implementations that provide simple, quick, reliable and cost-effective 
                                        solutions to meet the needs of the most demanding trading applications.
                                        This package provides a simple implementation of the Financial Information Exchange Protocol (FIX) in .NET/C# specially 
                                        designed for mission critical, ultra low-latency, high frequency trading infrastructure and application frameworks.
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
             <span class="span-title">QX.FIX</span> Engine  <br> 
            Architecture            
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            QXFIX Engine has a flexible modular architecture based on .NET Framework  with scalability for growing business needs. Its multithreaded implementation makes it robust, fast and dependable.
          </p>
        </div>
      </div>  

      <div class="w-100 my-5 pt-5">
        <img src="assets/img/qx-engine.png">
      </div> 

  </section>

    <section class="container py-6">
      <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
          <p class="sec-title">
            Why choose   <span class="span-title">QX.FIX </span> Engine<br>
            SDK Solution?            
          </p>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            A unified low-latency market data API solution for brokers and exchange members, designed to enhance your proprietary trading strategies and operations while delivering greater value to your clients.
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
                  Fast Integration
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
                  Integrate FIX Engine in your .NET based application at wrap speed. QX.FIX Engine is the fastest way for developers to build integrations. Connect FIX counterparts in hours instead of days.
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
                  Low Cost with source code
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
                  The QX.FIX Engine SDK provides APIs freely accessible to the public, allowing developers to utilize them for any project without incurring fees. The only cost is a $10,000 license for the source code version, should it be required.
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
                  Implement Buy or Sell Side Solutions
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
                  Experience industry-leading FIX engine technology and services that integrate seamlessly into any technology environment, suitable for buy-side and sell-side firms of all sizes.
                </div> 
              </div>
            </section>
          </div>
        </div>
      </div> 
  </section>  
  

    <section class=" bg-gray py-6 mt-5">
    <div class="container">
        <div class="row pt-5 pb-5">
          <div class="text-center">
            <p class="sec-title">
                <span class="span-title">QX.FIX</span>  Engine Features
            </p>

            <p class="para-text">
                Provides a complete support for the FIX session level logic and enables FIX developers to focus on
                their organization's core business requirements.
                Allows easy and powerful customization of session level logic through configuration
                files (XML format) without affecting the code.
            </p> 
          </div>  
        </div>   

        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Comprehensive FIX Session Support: 
              </div>

              <div class="para-text pt-5">
                Focus on core business needs while relying on complete session-level logic.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Easy Customization: 
              </div>

              <div class="para-text pt-5">
                Modify session logic effortlessly through XML configuration files without altering the code.
              </div>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Multiple FIX Sessions: 
              </div>

              <div class="para-text pt-5">
                Create both initiators and acceptors for flexible session management.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Support for FIX Dialects: 
              </div>

              <div class="para-text pt-5">
                Accommodates non-standard implementations, including custom messages and fields.
              </div>
            </div>
          </div> 
        </div>

        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Custom GapFill Mechanisms:  
              </div>

              <div class="para-text pt-5">
                Tailor gap filling through XML configuration for enhanced control.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Linked Sequence Number Management: 
              </div>

              <div class="para-text pt-5">
                 Reset sequence numbers based on key events like Logon and Logout.
              </div>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Multiple FIX Sessions: 
              </div>

              <div class="para-text pt-5">
                Create both initiators and acceptors for flexible session management.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Custom Logon Framing:
              </div>

              <div class="para-text pt-5">
                 Design your own logon message structure for improved security.
              </div>
            </div>
          </div> 
        </div> 

        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Latency Monitoring:
              </div>

              <div class="para-text pt-5">
                Track message latencies and trigger alerts when thresholds are crossed.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Counterparty Backlog Monitoring: 
              </div>

              <div class="para-text pt-5">
                 Observe processing backlogs on the counterparty side for proactive management.
              </div>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Flexible Data Persistence:
              </div>

              <div class="para-text pt-5">
                Support for database and file-based persistence mechanisms.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Version Compatibility: 
              </div>

              <div class="para-text pt-5">
                 Fully supports all standard FIX Protocol versions and non-standard dialects.
              </div>
            </div>
          </div> 
        </div>  

        <div class="row">
          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Message Encoding and Validation:
              </div>

              <div class="para-text pt-5">
                 Ensure compliance with customizable FIX message encoding and validation levels.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Field Masking:
              </div>

              <div class="para-text pt-5">
                  Secure sensitive information by masking important fields like passwords.
              </div>
            </div>
          </div>


          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                Event-Based Alerts:
              </div>

              <div class="para-text pt-5">
                 Receive instant alerts for key events, such as message transactions and session state changes.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                 Customizable Logging: 
              </div>

              <div class="para-text pt-5">
                 Log specific event types for detailed tracking and auditing.
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 col-lg-6">
            <div class="card-box-about">
              <div class="para-text fw-bold">
                 Automatic Sequence Number Resetting:
              </div>

              <div class="para-text pt-5">
                Automate message sequence number resets according to exchange specifications on a daily or weekly basis.
              </div>
            </div>
          </div> 
        </div>  
    </div>
  </section>

 

  <section class="container py-6">    
    <div class="text-center">
      <p class="sec-title">
        <span class="span-title">Developer  </span> resources
      </p> 
      
      <p class="para-text">
        Get the help you need to build the FIX Enabled applications, tools and connectivity solutions
      </p>
      
      <div class="row container">
        <div class="col-12 col-md-4 col-lg-4">
          <div class="m-5 border rounded-5 para-text p-5  box-hover">
            <div>
              <img class="w-25" src="assets/img/rocket.png">
            </div>
            <div class="mt-5 font-weight-500">
              Get <span class="span-title">Started</span>  
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="m-5 border rounded-5 para-text p-5  box-hover">
            <div>
              <img class="w-25" src="assets/img/download.png">
            </div>
            <div class="mt-5 font-weight-500">
              <span class="span-title">Download </span> and <span class="span-title"> Install</span> 
            </div>
          </div>
        </div>

        <div class="col-12 col-md-4 col-lg-4">
          <div class="m-5 border rounded-5 para-text p-5  box-hover">
            <div>
              <img class="w-25" src="assets/img/out.png">
            </div>
            <div class="mt-5 font-weight-500">
              Samples <span class="span-title">Application</span> 
            </div>
          </div>
        </div>
    </div> 
  </div></section>
 
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
