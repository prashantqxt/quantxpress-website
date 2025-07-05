<?php
define('APP_ROOT', dirname(dirname(__FILE__)));
require_once APP_ROOT . '/header.php';
?>
<style>
@media (max-width: 767px) {
    .mob-h-100 {
        height: 125vh !important;
    }
    .pd-25{
        padding: 0 25% !important;
    }
    .slider {
        position: relative;
        width: 100%;
        height: 35vh!important;
    }
    .slider-img {
        width: 80%;
        height: 100%!important;
        position: absolute;
        left: 10%;
        /* top: 10%; */
        overflow: hidden;
    }
    .prev {
        position: absolute;
        top: 45%;
        left: -2.5%!important;
        cursor: pointer;
        border: 1px solid #202223;
        padding: 5px!important;
        stroke: #202223;
        border-radius: 52%;
    }
    .next {
        position: absolute;
        top: 45%;
        right: -1.5%!important;
        cursor: pointer;
        border: 1px solid #202223;
        padding: 5px!important;
        stroke: #202223;
        border-radius: 50%;
    }
}
.slider-img{
    width:80%;
    height:100%;
    position:absolute;
    left:10%;
    /* top:10%; */
    overflow:hidden;
  }
  .prev{
    position:absolute;
    top:45%;
    left:2.5%;
    cursor:pointer;
    border: 1px solid #202223;
    padding: 15px;
    stroke: #202223;
    border-radius: 50%;
  }
  .next{
    position:absolute;
    top:45%;
    right:2.5%;
    cursor:pointer;
    border: 1px solid #202223;
    padding: 15px;
    stroke: #202223;
    border-radius: 50%;
  }
  .prev:hover, .next:hover, .prev:hover > svg, .next:hover > svg {
    color: #202223;
    background: #202223;
    stroke: #f5ecec;
}
  .transition {
    transition:.5s linear;
  }
  .slide-img{
    width:100%;
    height:100%;
    position:absolute;
    top:0%;
    left:0%;
    display:flex;
    align-items:center;
    justify-content:center;
  }
  .slide-img img{
        border: 10px solid #7700d2;
        border-radius: 40px;
    }
/* WebKit Browsers (Chrome, Safari, Edge) */
.custom-scrollbar::-webkit-scrollbar {
  width: 8px;
}

.custom-scrollbar::-webkit-scrollbar-track {
  background: #202223;
  border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
  background-color: #202223;
  border-radius: 10px;
  border: 2px solid #f0f0f0;
}

/* Firefox */
.custom-scrollbar {
  scrollbar-width: thin;
  scrollbar-color: #202223 #f0f0f0;
}
.slider{
    position: relative;
    width: 100%;
    min-height: 75vh;
}
.btn:hover {
    color: #fff !important;
}
.banner_btn{
    background:#202223;
}
.banner_btn:hover {
    border-radius: 4px;
    background:rgba(255, 255, 255, 0) !important;
    color: #171321 !important;
    border: 1px solid #171321 !important;
}
.banner_btn:hover > svg > path {
    fill: #171321;
    stroke: #171321;
}

</style>
<section class="page-top">
        <div class="carousel mob-h-100" style="height: 75vh;">
            <div class="slide container-fluid active ">
                <div class="row">
                        <div class="col-12 col-md-5 col-lg-5 py-3 text-start pd-25">
                            <img src="/assets/img/blitztrader.svg" alt="CTA" class="img-fluid pe-5 slide-box">

                            <p class="sub_title text-start px-0 pe-5" style="font-weight: 400;">
                                Transform your sophisticated trading ideas into automated system
                                with unmatched speed to market, like never before!
                            </p>

                            <a href="http://192.168.1.6:3001/docs/Developer-Guide/Introduction/Getting%20Started">
                            <button class="btn">
                                Get Started
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m0 0l6 6m-6-6l-6 6"></path></svg>
                            </button>
                            </a>
                        </div>

                        <div class="col-12 col-md-7 col-lg-7 py-3">

                            <div class="row custom-scrollbar" style="flex-flow: row;overflow: auto;">
                                <div class="col-12 col-md-6 col-lg-6 py-3">
                                    <div class="card card-box p-3">
                                        <img src="/assets/img/instance.png" alt="CTA" class="img-fluid slide-box">

                                        <p class="sub_title text-start px-0">
                                            Asset-neutral and enterprise-scale solutions to automate sophisticated trading strategies across any market.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 py-3">
                                    <div class="card card-box p-3">
                                        <img src="/assets/img/btb_home.png" alt="CTA" class="img-fluid slide-box">

                                        <p class="sub_title text-start px-0">
                                            Maximize efficiency with server-based execution of thousands of trading strategies, enabling scalable, multi-market operations and optimal execution
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 col-lg-6 py-3">
                                    <div class="card card-box p-3">
                                        <img src="/assets/img/scalpert.png" alt="CTA" class="img-fluid slide-box">

                                        <p class="sub_title text-start px-0">
                                            Customize your trading dashboard to monitor strategies and define action items for a semi-automated trading model.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-8 col-lg-8 py-3">
                                    <img src="/assets/img/bit-image-4.png" alt="CTA" class="img-fluid slide-box">
                                </div>
                                <div class="col-12 col-md-4 col-lg-4 py-5">
                                    <div class="card_title text-start" style="font-weight: 700;">
                                        Get Started Today
                                    </div>
                                    <div class="sub_title text-start p-0">
                                        Connect with us for trading automation
                                    </div>
                                    <a href="contact-us">
                                        <button class="btn banner_btn" style="width: 175px; height: 40px;">
                                        Contact Us
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m0 0l6 6m-6-6l-6 6"></path></svg>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="main_title text-center">How It Works</div>

            <div class="desk">
                <div class="progress-container py-5">
                    <div class="progress-bar-line"></div>

                    <div class="progress-step">
                        <img src="/assets/img/blitz_icon_1.svg" alt="blitz_icon_1">
                        <span>Conceptualize your trading model.</span>
                    </div>

                    <div class="progress-step">
                        <img src="/assets/img/blitz_icon_2.svg" alt="blitz_icon_1">
                        <span>Develop your strategy using BlitzTrader SDK. </span>
                    </div>

                    <div class="progress-step">
                        <img src="/assets/img/blitz_icon_3.svg" alt="blitz_icon_3">
                        <span>Test in live or simulated environments.</span>
                    </div>

                    <div class="progress-step">
                        <img src="/assets/img/blitz_icon_4.svg" alt="blitz_icon_4">
                        <span>Optimize and refine your strategy.</span>
                    </div>

                    <div class="progress-step">
                        <img src="/assets/img/blitz_icon_5.svg" alt="blitz_icon_5">
                        <span>Deploy and execute in production.</span>
                    </div>
                </div>
            </div>
            <div class="mob mt-5 mb-5">
                <img src="/assets/img/products_1.png" alt="how-it-works-mob" class="img-fluid">
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5" style=" background: url('assets/img/reason-bg.png') no-repeat center center/cover;">
            <div class="main_title text-start p-0 pe-5">5 Reasons to choose Blitztrader</div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4">
                        <img  style="width: 61px; height: 60px;" src="/assets/img/reasons_icon_1.png" alt="reason_icon_1" class="img-fluid mb-3">
                        <h2 class="card_title p-0">Fast time to the market</h2>
                        <p class="sub_title text-start px-0">BlitzTrader's open architecture allows rapid transition from idea conception to live deployment, enabling traders to capitalize on market opportunities in matter of days.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4">
                        <img style="width: 61px; height: 60px;" src="/assets/img/reasons_icon_2.png" alt="reason_icon_2" class="img-fluid mb-3">
                        <h2 class="card_title p-0">One Stop Algorithmic Trading</h2>
                        <p class="sub_title text-start px-0">
                            BlitzTrader is a comprehensive automated trading platform that provides a one-stop solution for algorithmic trading. With its open architecture, it offers flexibility and customization to meet diverse trading needs.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4">
                        <img style="width: 92.29px; height: 60px;" src="/assets/img/reasons_icon_3.png" alt="reason_icon_1" class="img-fluid mb-3">
                        <h2 class="card_title p-0">Unified Platform</h2>
                        <p class="sub_title text-start px-0">BlitzTrader's asset-neutral and market-agnostic platform integrates Order Management System (OMS), Risk Management System (RMS), and seamless liquidity provider connectivity.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4">
                        <img style="width: 60.24px; height: 60px;" src="/assets/img/reasons_icon_4.png" alt="reason_icon_2" class="img-fluid mb-3">
                        <h2 class="card_title p-0 ">Standardized the process of Algorithmic trading Development</h2>
                        <p class="sub_title text-start px-0">BlitzTrader provides SDK and standardized tools and methodologies to ensures a consistent and efficient environment for crafting and deploying trading strategies.</p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4">
                        <img style="width: 85px; height: 60px;" src="/assets/img/reasons_icon_5.png" alt="reason_icon_2" class="img-fluid mb-3">
                        <h2 class="card_title p-0 ">Advance trade Execution Capabilities</h2>
                        <p class="sub_title text-start px-0">BlitzTrader offers advanced trade execution capabilities that can be easily customized and integrated into trading strategies, allowing for efficient order routing and best execution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5" style="background-color: #F4F6FF">
            <div class="row centered-content">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5">Powerful Strategy Development Framework</div>
                    <p class="sub_title text-start px-0 pe-5"> Leverage the BlitzTrader .NET Strategy development SDK to swiftly bring your proprietary trading ideas to life across diverse markets and asset classes. Our framework offers a user-friendly yet robust mechanism for developing algorithmic strategies with a market-agnostic approach.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Powerful Strategy Development Framework
                        </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body p-20">
                            Leverage the BlitzTrader .NET Strategy development SDK to swiftly bring your proprietary trading ideas to life across diverse markets and asset classes. Our framework offers a user-friendly yet robust mechanism for developing algorithmic strategies with a market-agnostic approach.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Market Variable Concept
                        </button>
                        </h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">
                            Design strategies using market-neutral variables, allowing seamless deployment across different markets without the need for code modifications
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Smart Order Concept
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">
                             Efficiently manage the entire order lifecycle with rapid quoting sequences through a single API command, eliminating concerns about looping in the generation of new order cycles.
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                            Smart Execution framework
                        </button>
                        </h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">Streamline complex execution models with a single command like EnterLong, EnterShort, GoFlat, SetPosition etc, ensuring optimal order execution.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfive">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">
                                Server Side Deployment
                        </button>
                        </h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">Optimize your trading strategies by deploying them on the server side for improved performance, reliability, and scalability. With server-side deployment, you can enhance the overall performance and responsiveness of your trading system, enabling you to achieve better results in the dynamic financial markets.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingsix">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">
                        Live and Historical Market Data Event
                        </button>
                        </h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">Access real-time and historical market data to make informed trading decisions. Our platform offers seamless access to market trends, helping you identify opportunities and execute trades confidently with accurate, up-to-date information.
                        </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingseven">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseseven" aria-expanded="false" aria-controls="flush-collapseseven">
                        Technical Analysis Library
                        </button>
                        </h2>
                        <div id="flush-collapseseven" class="accordion-collapse collapse" aria-labelledby="flush-headingseven" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">Leverage our extensive technical analysis library, featuring support for over 100+ indicators. Customize your trading strategies with ease using our framework, empowering you to develop and integrate your own proprietary indicators tailored to your specific trading requirements.
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5">
            <div class="row centered-content ">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5 ">Unlock Cost-Effective Trading Success with BlitzTrader.</div>
                        <p class="sub_title text-start px-0 pe-5 mb-0 " style="font-weight: 6   00;">
                            In an industry where institutions are investing millions to develop proprietary trading platforms, BlitzTrader emerges as the smart alternative.
                        </p>

                        <p class="sub_title text-start px-0 pe-5">
                            Our open platform is designed to accommodate all your trading needs at a fraction of the cost, allowing you to save significantly on your investment.
                            <br><br>
                            BlitzTrader is not just a product; it’s a tailored solution for your automated trading requirements. With our cutting-edge technology, you can achieve exceptional results while streamlining your operations.
                        </p>
                        <p class="sub_title text-start px-0 pe-5 mb-0" style="color:#3D23A7;">
                            Choose BlitzTrader — the intelligent investment for the future of automated trading!
                        </p>

                    </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                    <img src="/assets/img/trading_img.png" alt="trading_img" class="img-fluid px-5 slide-box">
                </div>
            </div>
        </div>
    </section>

    <section style=" background: url('assets/img/blitztrader_bg_cta.png') no-repeat center center/cover;">
        <div class="container-fluid py-5" >
            <div class="text-center py-3" style="font-size:18px;">SNAPSHOT</div>
            <div class="main_title text-center">BlitzTrader Build to evolve your
            Algorithmic Trading Journey</div>
            <p class="sub_title">BlitzTrader is engineered to transform your automated trading experience,
                delivering cutting-edge solutions for all your algorithmic trading needs across
                diverse asset classes—equities, derivatives, and beyond. Stay ahead of the curve
                and seize every market opportunity with BlitzTrader’s powerful, precision-driven platform.
            </p>

            <div class="slider">
                <div class="slider-img">
                        <div class="slide-img slide_1">
                            <img src="/assets/img/home_image_1.png" alt="trading_img" class="img-fluid slide-box">
                        </div>
                        <div class="slide-img slide_2">
                            <img src="/assets/img/home_image_2.png" alt="trading_img" class="img-fluid slide-box">
                        </div>
                        <div class="slide-img slide_3">
                            <img src="/assets/img/home_image_3.png" alt="trading_img" class="img-fluid slide-box">
                        </div>
                        <div class="slide-img slide_4">
                            <img src="/assets/img/home_image_4.png" alt="trading_img" class="img-fluid slide-box">
                        </div>
                        <div class="slide-img slide_5">
                            <img src="/assets/img/home_image_5.png" alt="trading_img" class="img-fluid slide-box">
                        </div>
                </div>

                <div class="prev">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 12h-15m0 0l5.625-6M4.5 12l5.625 6"></path></svg>
                </div>
                <div class="next">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid py-5" style=" background: url('assets/img/api_bg.png') no-repeat center center/cover;">
            <div class="main_title p-0">BlitzTrader SDK/API</div>
            <p class="sub_title text-start ps-0">Explore BlitzTrader SDK/API to bring life to your trading ideas
            </p>

            <div class="row">
                <!-- Card 1 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                    <a href="developers_corner" class="w-100">
                    <div class="card p-3 h-100 d-flex flex-column justify-content-between">
                        <div>
                        <h2 class="card_title mb-3">BlitzTrader Developer Hub</h2>
                        <p class="sub_title text-start">
                            Kickstart your journey with BlitzTrader and access the tools you need to bring your trading ideas to life.
                            Explore a comprehensive library of resources, including code samples, concept, architecture and tools to
                            build, refine, and execute successful trading strategies.
                        </p>
                        </div>
                        <div class="mt-3">
                        <p class="discover d-flex align-items-center gap-2">
                            View More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                            </svg>
                        </p>
                        </div>
                    </div>
                    </a>
                </div>

                <!-- Card 2 -->
                <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                    <a href="qxfinlib" class="w-100">
                    <div class="card p-3 h-100 d-flex flex-column justify-content-between">
                        <div>
                        <h2 class="card_title mb-3">Blitz Sample Strategies Code</h2>
                        <p class="sub_title text-start">
                            Explore our GitHub repository, featuring a variety of sample code for different strategies designed to accelerate your learning in strategy development.
                        </p>
                        </div>
                        <div class="mt-3">
                        <p class="discover d-flex align-items-center gap-2">
                            View More
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                            </svg>
                        </p>
                        </div>
                    </div>
                    </a>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container-fluid py-5" style="background-color: #F4F6FF">

        <div class="main_title text-center">FAQ</div>


        <div class="accordion-faq">

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-1">
            <label for="faq-1" class="accordion-faq-label">Can BlitzTrader automate my options-based strategy?</label>
            <div class="accordion-faq-content">
              <p class="p-20">Absolutely! BlitzTrader is designed to any trading strategy, including advanced options strategies. The SDK enables dynamic instrument selection based on premiums, ATM/OTM strikes, and models like straddles, strangles, iron condors, bull call spreads, and more. Seamlessly integrate options chains, Greeks, and position adjustments with our intuitive SDK APIs, empowering you to execute complex options strategies with ease.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-2">
            <label for="faq-2" class="accordion-faq-label">Does BlitzTrader support the applying of technical indicators on options time series data?</label>
            <div class="accordion-faq-content">
              <p class="p-20">Yes! BlitzTrader’s technical indicator framework is asset-class agnostic, including support for options. With over 100 built-in indicators and the option to create custom indicators, you can conduct advanced technical analysis on options data. Utilize historical data to make informed trading decisions with just a few lines of code.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-3">
            <label for="faq-3" class="accordion-faq-label">What is the typical time to develop and deploy a proprietary rule-based strategy in BlitzTrader?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                BlitzTrader streamlines the strategy development process, enabling quicker time-to-market. Depending on the complexity of your strategy, development can take anywhere from a few hours to a few days. You primarily focus on coding your trading rules, while BlitzTrader manages key complexities such as order management (OMS), risk management systems (RMS), order routing, real-time market data alerts, execution, and position change alerts. With just 50-100 lines of code, you can develop a sophisticated market-making or complex options strategy with proprietary execution capabilities.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-4">
            <label for="faq-4" class="accordion-faq-label">Can my strategy support trading across multiple markets?</label>
            <div class="accordion-faq-content">
              <p class="p-20">Absolutely! BlitzTrader’s strategy framework simplifies the complexities of interconnected markets, allowing your strategy to concentrate solely on market variables concept. These variables can be dynamically mapped to any tradable instrument across different physical markets. This design enables seamless scaling of your strategy to any market—without requiring changes to your core strategy code.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-5">
            <label for="faq-5" class="accordion-faq-label">How is BlitzTrader different from other trading platforms?</label>
            <div class="accordion-faq-content">
              <p class="p-20">BlitzTrader stands out by offering a comprehensive solution that integrates both alpha generation
                and execution within a single framework, unlike many platforms that focus solely on signal generation without
                 integrated execution. Optimized for server-based, containerized environments, BlitzTrader delivers
                  superior execution performance. <br>

                  Unlike platforms that are limited to pre-built strategies,
                  BlitzTrader empowers you to break free from the constraints that often lead institutions
                  to develop proprietary trading systems.
                  With BlitzTrader, you can swiftly deploy complex trading models across any asset class and market,
                  enhancing your trading capabilities while significantly reducing time-to-market.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-6">
            <label for="faq-6" class="accordion-faq-label">Can BlitzTrader automate my options-based strategy?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
               Absolutely! BlitzTrader is designed to any trading strategy, including advanced options strategies. The SDK enables dynamic instrument selection based on premiums, ATM/OTM strikes, and models like straddles, strangles, iron condors, bull call spreads, and more. Seamlessly integrate options chains, Greeks, and position adjustments with our intuitive SDK APIs, empowering you to execute complex options strategies with ease.
                </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-7">
            <label for="faq-7" class="accordion-faq-label">How can I integrate multiple traders into a single automated trading platform?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                BlitzTrader is an enterprise-grade platform built on a robust client-server architecture. It allows you to consolidate diverse trading strategies from multiple teams within your organization onto a single system while ensuring independent strategy performance.
                With its advanced admin capabilities, you can onboard trading groups, assign tailored permissions, and manage strategy execution seamlessly. The platform also provides comprehensive tools to monitor and maintain risk, ensuring a secure and efficient trading environment for all users.
                </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-8">
            <label for="faq-8" class="accordion-faq-label">Which markets does BlitzTrader support for trading?</label>
            <div class="accordion-faq-content">
              <p class="p-20">BlitzTrader is designed to seamlessly integrate with any electronic market worldwide. Initially launched with support for prominent Indian exchanges and broker-native connectivity, we have also expanded to include global market connectivity for our clients. Our agile development process allows us to build and integrate new market connectivity adapters within weeks, tailored to your specific requirements. BlitzTrader ensures you’re always ready to trade across markets, wherever opportunities arise.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-9">
            <label for="faq-9" class="accordion-faq-label">What is the cost of BlitzTrader?</label>
            <div class="accordion-faq-content">
              <p class="p-20">Our pricing reflects the immense value and opportunities we deliver as your technology partner in trade automation. BlitzTrader is designed for institutional prop desks, trading firms, and professional trading teams. For detailed cost information, please contact us. Let’s discuss how BlitzTrader can empower your trading journey.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-10">
            <label for="faq-10" class="accordion-faq-label">What programming languages do I need to learn to develop strategies in BlitzTrader?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                While easy-language models or drag-and-drop frameworks work well for simple strategies, they often fall short for complex trading models. BlitzTrader leverages the power and flexibility of high-level programming languages like C# (.NET) to provide greater freedom in strategy development. The platform offers boilerplate templates and user-friendly API functions, allowing you to focus on your core strategy logic without getting bogged down by system intricacies like complex order execution, position management, or error handling. Designed to streamline development, BlitzTrader ensures faster time-to-market and includes robust debugging tools to identify and resolve coding issues early in the process.</p>
            </div>
          </div>
        </div>
    </section>


<?php
define('APP_ROOT', dirname(dirname(__FILE__)));
require_once APP_ROOT . '/footer.php';
?>
<script type="module">
    import Frame from 'https://cdn.jsdelivr.net/gh/ofekN/Frame/src/frame.js';

    let current = 0;
    const slides = [...document.querySelectorAll('.slide-img')];
    const total = slides.length;

    // Initialize positions
    slides.forEach((slide, i) => {
      slide.style.left = `${i * 100}%`;
    });

    function goToSlide(index) {
      slides.forEach((slide, i) => {
        Frame.run(slide, {
          left: `${(i - index) * 100}%`,
          duration: 0.5
        });
      });
    }

    document.querySelector('.next').addEventListener('click', () => {
      current = (current + 1) % total;
      goToSlide(current);
    });

    document.querySelector('.prev').addEventListener('click', () => {
      current = (current - 1 + total) % total;
      goToSlide(current);
    });
  </script>