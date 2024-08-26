<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css'>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.42/css/uikit.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">

</head>
<style type="text/css">
  .cta-hide{
      display: none;
    }
</style>
<body>
<!-- partial:index.partial.html -->
<div class="info-header">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</div>

<?php include 'header.php';?>
<!-- partial -->

<!-- Section 1-->

  <section id="porque-sec" class="uk-section  uk-light" >
      <div> 
          <div uk-slider="velocity:1.3; easing: cubic-bezier(.4,0,.2,1)">
              <div class="uk-position-relative">
                  <div class="uk-slider-container uk-light">
                      <ul class="uk-slider-items uk-child-width-1-1">
                          <li class="contact-bg">
                              <div class="uk-container uk-container-small" uk-slider-parallax="opacity: 0,1,0">
                                  <div class="dev">

                                    <!-- <div class="small-text-white" style="padding-bottom: 0!important;"> 
                                     Contact Us
                                    </div> -->

                                    <div class="main-title-white blue pt-3" style="line-height: 1.3;">Contact Us </div> 

                                    <div class="small-text-white  blue"> 
                                      Partner with us to leverage cutting-edge Automated  <br class="mob"> trading solutions and drive your success forward.
                                    </div>
 
                                  </div>
                              </div>
                          </li> 
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
             <span class="span-title contact-text_title"  >Let’s  <br class="mob"> Connect </span>            
          </p>

          <div class="para-text contact-text py-4 pe-5">
            Want to know more  <br class="mob"> about our products, <br class="mob"> Got any queries or
            <br class="mob"> request support.
          </div>

          <div class="py-4 para-text"> 

            <div class="para-text pt-5">
              <strong>Contact Us</strong>

              <div class="para-text pt-4">
                    +91 1234567890   |   +91 1234567890
              </div>
            </div>

            <div class="para-text pt-5">
              <strong>Email Address</strong>

              <div class="para-text pt-4">
                  info@quantxpress.com   |   support@quantxpress.com
              </div>
            </div>

            <div class="para-text pt-5">
              <strong>Address</strong>

              <div class="para-text pt-4">
                  11/16 Kumar City, Kalyani Nagar, <br class="mob">
                  Pune-14 India
              </div>
            </div> 
          </div>
        </div>

        <div class="col-12 col-md-6 col-lg-6" style="padding-top: 10px;">
          <p class="para-text">
            <strong>Fields marked with an <span style="color: red;"> * </span> are required</strong>
          </p>
            <form class="py-4"> 
                <div class="form-group pb-4">
                  <label for="exampleFormControlInput1" class="para-text">Name <span style="color:red;">*</span></label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name">
                </div>
                <div class="form-group pb-4">
                  <label for="exampleFormControlInput1" class="para-text">Email  <span style="color:red;">*</span></label>
                  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter Email">
                </div>

                <div class="form-group pb-4">
                  <label for="exampleFormControlInput1" class="para-text">Phone <span style="color:red;">*</span></label>
                  <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Phone">
                </div>
                <div class="form-group pb-4">
                  <label for="exampleFormControlSelect1" class="para-text">Country </label>
                  <select class="custom-select custom-select-lg mb-3">
                    <option selected>Select</option>
                    <option value="1">India</option>
                    <option value="2">USA</option>
                    <option value="3">UK</option>
                    <option value="1">Germany</option>
                    <option value="2">Switzerland</option>
                    <option value="3">Netherland </option>
                    <option value="1">Australia</option>
                    <option value="2">Singapore</option>
                    <option value="3">Hongkong</option>
                    <option value="3">South Africa</option>
                  </select>
                </div>
                <div class="form-group pb-4">
                  <label for="exampleFormControlSelect2" class="para-text">I'm interested in</label>
                  <select class="form-control form-select custom-select-lg mb-3">
                    <option selected> Select</option>
                    <option value="1">Interested in BlitzTrader</option>
                    <option value="2">Interested in Strategy development</option>
                    <option value="3">Interested in Backtesting solutions</option>
                    <option value="1">Interested in HFT solutions</option>
                    <option value="2">Interested in market connectivity solutions</option>
                    <option value="3">Looking for trading technology partner</option>
                  </select>
                </div>
                <div class="form-group pb-4">
                  <label for="exampleFormControlTextarea1" class="para-text">Tell us more</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
                </div>

                <button type="submit" class="btn dark-btn mt-5">Submit</button>
              </form>
          </p>
        </div>
      </div>   
  </section>

  <section class="w-100">
     <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3782.5781980346887!2d73.90815867592774!3d18.547953768335883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c112e93fa093%3A0x7cfd3daf1c42eb17!2sKumar%20City%2C%203%2C%20Adarsh%20Nagar%2C%20Kalyani%20Nagar%2C%20Pune%2C%20Maharashtra%20411006!5e0!3m2!1sen!2sin!4v1722579206417!5m2!1sen!2sin"  height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>

  <section class="bg-cta">
    <div class="d-flex  container">
      <div class="w-25">
        &nbsp
      </div>
      <div class="w-75">
        <div class="para-text  ps-4">
            WE’RE HERE FOR YOU
        </div>
      </div>
    </div>

    <div class="d-flex  container">
      <div class="w-25">
        <img class="w-100" style="height: 75px;" src="assets/img/line.svg">
      </div>
      <div class="w-75">
        <div class="cta-heading  ps-4">Start Your Automation Journey Now!</div>
      </div>
    </div>

    <div class="d-flex  container">
      <div class="w-25">
        &nbsp
      </div>
      <div class="w-75"> 
        <div class="ps-4" ><button class="dark-btn_2 mob-mt-5">Request Demo</button></div>
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
