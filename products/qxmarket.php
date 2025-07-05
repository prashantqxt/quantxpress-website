<?php
define('APP_ROOT', dirname(dirname(__FILE__)));
require_once APP_ROOT . '/header.php';
?>
<style>
        .accordion__header {
            padding: 1em;
            /* background-color: #ccc; */
            margin-top: 2px;
            display: flex ;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            border-bottom: 1px solid #ddd;
            font-size: 20px;
        }

        .accordion__header > * {
        margin-top: 0;
        margin-bottom: 0;
        font-size: 20px;
        font-weight: 600;
        }

        .accordion__header.is-active {
            background-color: #cfe2ff;
            color: #212529;
        }

        .accordion__toggle {
        margin-left: 10px;
        height: 3px;
        background-color: #212529;
        width: 13px;
        display: block;
        position: relative;
        flex-shrink: 1;
        border-radius: 2px;
        }

        .accordion__toggle::before {
        content: "";
        width: 3px;
        height: 13px;
        display: block;
        background-color: #212529;
        position: absolute;
        top: -5px;
        left: 5px;
        border-radius: 2px;
        }

        .is-active .accordion__toggle {
        background-color: #212529;
        }

        .is-active .accordion__toggle::before {
        display: none;
        }

        .accordion__body {
        display: none;
        padding: 1em;
        border-bottom: 1px solid #ccc;
        border-top: 0;
        }

        .accordion__body.is-active {
        display: block;
        }
        .accordion__body p {
            font-size:20px;
        }
        .ultimate_free{
            margin:0 15%;
        }
        .ultimate_free_titte{
            font-size: 18px;
            text-align: center;
            font-weight: 600;
            padding: 10px 0;
            color: #3D23A7;
        }
        .ultimate_free_sub_titte{
            font-size: 29px;
            font-family: "Inter", sans-serif;
            color: #3D23A7;
        }
        .bg-gradient_box {
            background: rgb(255,255,255);
            background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(218,225,255,1) 100%);
            text-align: center;
            border-radius: 12px;
            padding: 5%;
        }
        .card {
            border-radius: 1rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card p {
            margin: 0;
        }
        .exchange-logos img {
            max-height: 65px;
            margin: 0 1rem;
        }
        .primary_color {
            color: #3D23A7!important;
        }
        .tran_bg{
            background: #3d23a714!important;
        }
        .small {
            width: 50px;
            height: auto;
        }
        .medium {
            width: 100px;
            height: auto;
        }
        .large {
            width: 200px;
            height: auto;
        }
        .api_title{
            color: #3D23A7;
            font-size: 20px;
            padding: 12px 0;
            font-weight: 500;
        }
        .border-1{
            border: 1px solid #ddd!important;
            border-radius: 10px;
        }
        .benefit-icon {
            font-size: 1.5rem;
            margin-right: 1rem;
            font-family: "Inter", sans-serif;
        }
        .benefit-title {
            font-size: 1.25rem;
            font-weight: 600;
            font-family: "Inter", sans-serif;
            padding-left: 2%;
        }
        .benefit-description {
            margin-bottom: 1.5rem;
            font-family: "Inter", sans-serif;
        }
        .qxt-decription sub_title text-start{
            padding-left: 3%;
        }
        .box-slide{
            max-height: 80vh;
        }
        .slide:nth-child(1) {
            background: url('assets/img/API.png') no-repeat center center/cover;
        }
</style>
    <section class="page-top">
        <div class="carousel" style="height: 75vh;">
            <div class="slide container-fluid active ">
                <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 py-5">
                            <div class="text-start">
                                <img src="/assets/img/api_dev.svg" alt="CTA" class="img-fluid slide-box">
                            </div>
                            <div class="main_title text-start px-0 py-3" style="font-size: 32px;font-weight: 600;">
                                Simplifying and Democratize<br>
                                Market Data API Technology
                            </div>
                            <p class="sub_title text-start px-0 pt-0 m-0" style="font-weight: 400;font-size: 18px;">
                                 Empowering Brokers & Trading Desks to Deliver Real-Time Market Insights in a Flash. The technology is Free for Indian Exchange members to build ecosystem of market data API for their demanding client algo desk.
                            </p>

                            <div class="d-flex " style="z-index: 1;">
                                <button class="btn">
                                    Get Started
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m0 0l6 6m-6-6l-6 6"></path></svg>
                                </button>
                                <button class="btn_2">
                                    Documentation
                                </button>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 py-3">
                            <img src="/assets/img/api-banner.png" alt="CTA" class="img-fluid slide-box w-75">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container bg-gradient_box">
            <h1 class="display-4 fw-bold text-dark mb-4">Ultimate free for institutions</h1>
            <p class="h4 text-primary mb-2 primary_color">Market Data API’s</p>
            <p class="display-1 fw-bold text-primary mb-5 primary_color"><span>₹</span> 0</p>
            <div class="card p-4 p-md-5 mb-5 tran_bg border-0">
                <div class="row text-start">
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">OHLC data</p>
                        <p class="h5 fw-bold text-primary primary_color">25 requests/sec</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">API response latency</p>
                        <p class="h5 fw-bold text-primary primary_color">&lt; 90 ms</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">Tick Data</p>
                        <p class="h5 fw-bold text-primary primary_color">Realtime</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">Instrument subscription</p>
                        <p class="h5 fw-bold text-primary primary_color"> 2000+</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">Options Chain</p>
                        <p class="h5 fw-bold text-primary primary_color">5 requests/sec</p>
                    </div>
                    <div class="col-md-4 mb-4">
                        <p class="text-muted primary_color">Index Straddle Price</p>
                        <p class="h5 fw-bold text-primary primary_color">Realtime</p>
                    </div>
                </div>
            </div>
            <p class="text-muted">Supporting exchange</p>
            <div class="exchange-logos d-flex justify-content-center mt-4">
                <img class="Small Logo" src="/assets/img/NSE_logo.png" alt="NSE logo">
                <img class="Medium Logo"src="/assets/img/mcx_logo.png" alt="MCX logo">
                <img class="Large Logo" src="/assets/img/BSE_logo.png" alt="BSE logo">
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container-fluid">
            <h1 class="main_title text-start p-0 pe-5 mb-5">Key Benefits</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex align-items-start benefit-description">
                        <svg  style="margin-bottom: -15px;" width="56" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.5 3L4.5 21H18L16.5 33L31.5 15H18L19.5 3Z" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div>
                            <h2 class="benefit-title">Faster Insights, Better Decisions</h2>
                            <p class="qxt-decription sub_title text-start">QXT delivers high-speed real-time equity, futures, and options data feeds, enabling you to achieve seamless order fulfillment and optimize pricing effectively.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start benefit-description">
                        <svg style="margin-bottom: -15px;" width="56" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 4.5H10.5C9.70435 4.5 8.94129 4.81607 8.37868 5.37868C7.81607 5.94129 7.5 6.70435 7.5 7.5V15C7.5 15.7956 7.18393 16.5587 6.62132 17.1213C6.05871 17.6839 5.29565 18 4.5 18C5.29565 18 6.05871 18.3161 6.62132 18.8787C7.18393 19.4413 7.5 20.2044 7.5 21V28.5C7.5 30.15 8.85 31.5 10.5 31.5H12" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24 31.5H25.5C26.2956 31.5 27.0587 31.1839 27.6213 30.6213C28.1839 30.0587 28.5 29.2956 28.5 28.5V21C28.5 19.35 29.85 18 31.5 18C30.7044 18 29.9413 17.6839 29.3787 17.1213C28.8161 16.5587 28.5 15.7956 28.5 15V7.5C28.5 6.70435 28.1839 5.94129 27.6213 5.37868C27.0587 4.81607 26.2956 4.5 25.5 4.5H24" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div>
                            <h2 class="benefit-title">Modern Delivery via API</h2>
                            <p class="qxt-decription sub_title text-start">Access real-time options data through QXT's scalable and robust cloud-based APIs, facilitating effortless integration of data from diverse sources.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start benefit-description">
                        <svg style="margin-bottom: -15px;" width="56" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 12C25.4558 12 31.5 9.98528 31.5 7.5C31.5 5.01472 25.4558 3 18 3C10.5442 3 4.5 5.01472 4.5 7.5C4.5 9.98528 10.5442 12 18 12Z" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M31.5 18C31.5 20.49 25.5 22.5 18 22.5C10.5 22.5 4.5 20.49 4.5 18" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.5 7.5V28.5C4.5 30.99 10.5 33 18 33C25.5 33 31.5 30.99 31.5 28.5V7.5" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div>
                            <h2 class="benefit-title">Low Latency Real-Time & Historical Data</h2>
                            <p class="qxt-decription sub_title text-start">Integrate both real-time and historical data seamlessly into your applications. Analyze price patterns and volume trends to make informed predictions about market movements.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start benefit-description">
                        <svg style="margin-bottom: -15px;" width="56" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24 31.5V28.5C24 26.9087 23.3679 25.3826 22.2426 24.2574C21.1174 23.1321 19.5913 22.5 18 22.5H9C7.4087 22.5 5.88258 23.1321 4.75736 24.2574C3.63214 25.3826 3 26.9087 3 28.5V31.5" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M13.5 16.5C16.8137 16.5 19.5 13.8137 19.5 10.5C19.5 7.18629 16.8137 4.5 13.5 4.5C10.1863 4.5 7.5 7.18629 7.5 10.5C7.5 13.8137 10.1863 16.5 13.5 16.5Z" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M24 16.5L27 19.5L33 13.5" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div>
                            <h2 class="benefit-title">Personalized Trading Experience</h2>
                            <p class="qxt-decription sub_title text-start">Tailor your trading applications to suit your needs. Develop your algorithmic trading strategies using any popular programming language to expand your trading opportunities.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start benefit-description">
                        <svg style="margin-bottom: -15px;" width="56" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 7.5H9C7.34315 7.5 6 8.84315 6 10.5V25.5C6 27.1569 7.34315 28.5 9 28.5H12C13.6569 28.5 15 27.1569 15 25.5V10.5C15 8.84315 13.6569 7.5 12 7.5Z" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M27 10.5H24C22.3431 10.5 21 11.8431 21 13.5V22.5C21 24.1569 22.3431 25.5 24 25.5H27C28.6569 25.5 30 24.1569 30 22.5V13.5C30 11.8431 28.6569 10.5 27 10.5Z" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25.5 33V25.5" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M25.5 10.5V3" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.5 33V28.5" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.5 7.5V3" stroke="#202223" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <div>
                            <h2 class="benefit-title">Algorithmic Trading with Real-Time Data</h2>
                            <p class="qxt-decription sub_title text-start">Monitor market conditions, identify trading signals, and execute trades efficiently with our real-time data feeds.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="/assets/img/qxt-be.png" alt="Illustration of a financial chart with various icons representing trading and data analysis" class="img-fluid" style="max-width: 500px;">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-9 mb-3">
                <div class="main_title text-start p-0 pe-5">Market data API’s</div>

                <p class="sub_title text-start p-0">
                Real-Time, Intraday & Historical Market Data API.
                </p>
                    <div class="row py-5">
                        <div class="col-12 col-md-6 col-lg-6 mb-3 d-flex">
                            <div class="card-box p-4 border-1 w-100 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="api_title">API</div>
                                    <h2 class="card_title p-0">Historical Data API</h2>
                                    <p class="sub_title text-start px-0">
                                        Retrieve historical candle data for your selected scripts across segments and exchanges. This data includes timestamp, open, high, low, close, and volume.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-3 d-flex">
                            <div class="card-box p-4 border-1 w-100 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="api_title">API</div>
                                    <h2 class="card_title p-0">Real time Data API</h2>
                                    <p class="sub_title text-start px-0">
                                        Access real-time market data across exchanges and segments via WebSocket, allowing efficient streaming of live data.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-3 d-flex">
                            <div class="card-box p-4 border-1 w-100 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="api_title">API</div>
                                    <h2 class="card_title p-0">TBT Data API</h2>
                                    <p class="sub_title text-start px-0">
                                        Obtain a Time-Based Trading (TBT) stream snapshot suitable for high-frequency trading (HFT) or execution-sensitive strategies.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 mb-3 d-flex">
                            <div class="card-box p-4 border-1 w-100 h-100 d-flex flex-column justify-content-between">
                                <div>
                                    <div class="api_title">API</div>
                                    <h2 class="card_title p-0">Options Chain Data API</h2>
                                    <p class="sub_title text-start px-0">
                                        Access the current options chain for a specified underlying symbol and expiry. Retrieve quotes, greeks, and additional information from the endpoint.
                                    </p>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-0 col-lg-3">
                    <img src="/assets/img/api_development.png" alt="trading_img" class="img-fluid px-5 box-slide">
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid" style=" background: url('assets/img/exchange.png') no-repeat center center/cover;">
            <div class="row py-1 centered-content">
                <div class="col-12 col-md-12 col-lg-12 p-0 pt-5">
                    <div class="main_title text-start p-0 pe-5 ">Build your first application in 4 lines of code</div>
                    <p class="sub_title text-start px-0 pe-5 mb-0">
                        We work with any language through our raw API, which uses a binary protocol over TCP,
                        and our HTTP API we also provide client libraries for python, c++, rust.
                    </p>
                </div>
                <div class="col-12 col-md-3 col-lg-3 ">
                    <h2 class="card_title">Client libraries :</h2>
                    <div class="exchange-logos d-flex justify-content-start ">
                        <img class="Small Logo" src="/assets/img/python.png" alt="python">
                        <img class="Medium Logo"src="/assets/img/c.png" alt="c logo">
                    </div>

                    <h2 class="card_title">API’s :</h2>
                    <div class="exchange-logos d-flex justify-content-start ">
                        <img class="Small Logo" src="/assets/img/api_1.png" alt="api_1">
                        <img class="Medium Logo"src="/assets/img/api_2.png" alt="c api_2">
                        <img class="Large Logo" src="/assets/img/api_3.png" alt="api_3">
                    </div>

                </div>
                <div class="col-12 col-md-9 col-lg-9 ps-5">
                    <img src="/assets/img/full-ex.png" alt="trading_img" class="img-fluid px-5 slide-box">
                </div>
            </div>
        </div>
    </section>

    <!-- <section>
        <div class="container-fluid py-5" style=" background: url('assets/img/api_bg.png') no-repeat center center/cover;">
            <div class="main_title p-0">Developer resources</div>
            <p class="sub_title text-start ps-0">
                Get the help you need to build the FIX enabled applications, tools and connectivity solutions
            </p>

            <div class="row">
                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <div class="card p-3">
                        <h2 class="card_title">Get Started</h2>
                        <p class="sub_title p-0 text-start" style="height:15vh;">
                            Stay tuned for tutorials, step-by-step guides, and troubleshooting tips. In this comprehensive series, you'll build a fully functional FIX Engine connector application.
                        </p><br>


                        <div class="d-flex">
                            <p class="discover">
                                View documentation
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <div class="card p-3">
                        <h2 class="card_title">Download and Install</h2>
                        <p class="sub_title p-0 text-start" style="height:15vh;">
                            This topic describes how to install or update the latest release of the
                            QX.FIX Engine and start the building your trading application and connectivity solutions.
                        </p><br>


                        <div class="d-flex">
                            <p class="discover">
                            View documentation
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4 col-lg-4 mb-5">
                    <div class="card p-3">
                        <h2 class="card_title">Sample application</h2>
                        <p class="sub_title p-0 text-start" style="height:15vh;">
                            This sample app showcases how QX.FIX Engine SDK use to develop applications and tools
                            covering Initiator and Acceptor application development.
                        </p><br>


                        <div class="d-flex">
                            <p class="discover">
                            View documentation
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  -->

    <section>
        <div class="container-fluid py-5" style="background-color: #F4F6FF">

        <div class="main_title text-center">FAQ</div>


        <div class="accordion-faq">
          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-1">
            <label for="faq-1" class="accordion-faq-label">What is QXT Market Data API?</label>
            <div class="accordion-faq-content">
              <p class="p-20">The QXT Market Data API is a technology stack  for realtime and historical market data dissemination and offered to exchange members to built to offer a stock market data solution and make it accessible to both developers and algo trader
              </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-2">
            <label for="faq-2" class="accordion-faq-label">How QXT Market Data API is free and from where we can access the API key?</label>
            <div class="accordion-faq-content">
              <p class="p-20">The QXT API setup is freely available to exchange members/Broker and you can reach your broker for API portal access.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-3">
            <label for="faq-3" class="accordion-faq-label">How many SDKs does QXT market data API support?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                    SDK stands for software development kit. Also known as a devkit, the SDK is a set of software-building tools for a specific platform, including the building blocks, debuggers, and, often, a framework or group of code libraries such as a set of routines specific to an operating system (OS). You can find three SDKs in QXT  API:
              </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-4">
            <label for="faq-4" class="accordion-faq-label">What type of market data API is available via QXT MarketData API?</label>
            <div class="accordion-faq-content py-0">
              <p class="p-20">
                <ul class="list-unstyled mb-5">
                    <li class="p-0 mb-0 sub_title text-start">- Live Level-I, II market data streaming</li>
                    <li class="p-0 mb-0 sub_title text-start">- Historical OHLC data</li>
                    <li class="p-0 mb-0 sub_title text-start">- TBT Data (based on infra support)</li>
                    <li class="p-0 mb-0 sub_title text-start">- Options chain</li>
                    <li class="p-0 mb-0 sub_title text-start">- Instrument Master</li>
                    <li class="p-0 mb-0 sub_title text-start">- Snapshot market data</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
    </section>

    <?php
define('APP_ROOT', dirname(dirname(__FILE__)));
require_once APP_ROOT . '/footer.php';
?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script>
        $('.accordion__header').click(function(e) {
            e.preventDefault();
            var currentIsActive = $(this).hasClass('is-active');
            $(this).parent('.accordion_faq').find('> *').removeClass('is-active');
            if(currentIsActive != 1) {
                $(this).addClass('is-active');
                $(this).next('.accordion__body').addClass('is-active');
            }
        });

        let currentIndex = 0; // Declare currentIndex only once
        const slides = document.querySelectorAll('.slide');
        const img = document.querySelector(".slide-box");
        const next = document.querySelector("#next-button");
        const prev = document.getElementById('prev-button');

        const images = [
            "/assets/img/trading_img.png",
            "/assets/img/bt_home.png"
        ];

        function updateCarousel() {
            slides.forEach((slide, index) => {
                slide.classList.toggle('active', index === currentIndex);
            });
        }

        function autoSlide() {
            currentIndex = (currentIndex + 1) % slides.length;
            updateCarousel();
        }

        setInterval(autoSlide, 4000);

        // Image slider functions
        function incrementIndex() {
            currentIndex = (currentIndex + 1) % images.length;
            img.setAttribute("src", images[currentIndex]);
        }

        function decrementIndex() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            img.setAttribute("src", images[currentIndex]);
        }

        // Event Listeners
        next.onclick = incrementIndex;
        prev.onclick = decrementIndex;

    </script>