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
            .slide:nth-child(1) {
                background: url('assets/img/qx.finlib.png') no-repeat center center/cover;
            }
    </style>
    <section class="page-top">
            <div class="carousel" style="height: 75vh;">
                <div class="slide container-fluid active ">
                    <div class="row">
                            <div class="col-12 col-md-6 col-lg-6 py-3">
                                <div class="main_title text-start p-0"  style="font-size: 50px;">QX.FinLib</div>
                                <p class="sub_title text-start px-0 m-0">.NET Suite for your Trading Applications</p>
                                <p class="sub_title text-start px-0" style="font-weight: 400;font-size: 18px;">
                                    QX.FinLib is a powerful .NET library for rapid development of advanced mechanical
                                    trading systems to uncover strategies and pin point opportunities.
                                    It simplifies strategy creation, indicator design, and backtesting—including options—with
                                    seamless efficiency. Build feature-rich trading applications faster and smarter.
                                </p>

                                <a href="http://192.168.1.6:3003/docs/FinLib/QXFinLib">
                                    <div class="d-flex " style="z-index: 1;">
                                        <button  class="btn">
                                            Get Started
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 20V4m0 0l6 6m-6-6l-6 6"></path></svg>
                                        </button>
                                    </div>
                                </a>
                            </div>

                            <div class="col-12 col-md-6 col-lg-6 py-3">
                                <img src="/assets/img/lib_img.png" alt="CTA" class="img-fluid slide-box w-75">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid pt-5">
                <div class="main_title text-center">How It Works</div>

                <div class="col-12 col-md-12 col-lg-12  py-5 desk">
                    <img src="/assets/img/lib_work_img.png" alt="CTA" class="img-fluid slide-box">
                </div>

                <div class="mob mt-5 mb-5">
                    <img src="/assets/img/products_2.png" alt="how-it-works-mob" class="img-fluid">
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid py-5" style="background-color: #F4F6FF">
                <div class="row centered-content">
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <div class="main_title text-start p-0 pe-5">Why choose QX.FinLib .NET Trading Library?</div>
                        <p class="sub_title text-start px-0 pe-5"> QX.FinLib is a powerful C# library designed for backtesting, analyzing, and optimizing trading strategies. It offers a robust framework to rapidly develop mechanical trading strategies, evaluate performance with precision, and optimize results. Packed with an extensive feature set, QX.FinLib empowers you to build advanced, customized trading system for research and signal generation with ease and efficiency.
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 ps-5">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                            <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                Designed for Developers
                            </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body p-20">
                                    Our API is crafted by engineers who understand the needs of developers building next-generation trading applications. We deliver a simple, intuitive set of APIs and comprehensive documentation, empowering you to create robust, high-performance trading systems quickly and effortlessly.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                            <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                Strategy and Indicator Development Framework
                            </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body p-20">
                                QX.FinLib provides a seamless framework to design trading strategies, develop custom technical indicators, and backtest your models. With 100+ built-in standard indicators and a rich suite of technical analysis tools, the library equips you to innovate and refine your trading systems with ease.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                            <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                Backtesting and Optimization
                            </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body p-20">
                                Built for traders of all skill levels, QX.FinLib simplifies the creation, backtesting, and optimization of trading strategies. Its user-friendly interface, extensive documentation, and support for historical data connectors enable you to test and refine strategies across diverse market conditions, ensuring confidence in your trading models.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingfour">
                            <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">
                                Advanced Options Backtesting
                            </button>
                            </h2>
                            <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body p-20">
                            QX.FinLib empowers options trading research desks to build and backtest complex options strategies with precision. Whether it’s multi-leg strategies, Greeks-based models, or indicator-driven approaches, the framework provides the tools to simulate, analyze, and optimize your options trading strategies for real-world performance.
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid pt-5" style=" background: url('assets/img/new-qx-bg.png') no-repeat center center/cover;        ">
                <div class="row centered-content p-0">
                    <div class="col-12 col-md-6 col-lg-6 ">
                        <div class="main_title text-start p-0 pe-5 ">New to QX.FinLib? </div>
                            <p class="sub_title text-start px-0 pe-5 mb-0">
                            We’re here to guide you every step of the way on your mechanical trading system backtesting journey. From tutorials and practical examples to comprehensive resources, we provide everything you need to accelerate your trading system development process and achieve success faster.
                            </p>
                            <p class="sub_title text-start px-0 pe-5 mb-0" style="color:#3D23A7; font-weight: 600;">
                                Read the Strategy Development Guide
                            </p>

                        </div>
                    <div class="col-12 col-md-6 col-lg-6 ps-5">
                        <img src="/assets/img/finLib_new.png" alt="trading_img" class="img-fluid px-5 slide-box">
                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container-fluid py-5" >
                <div class="p-5 mob-h-100" style=" background: url('assets/img/cta-bg.png') no-repeat center center/cover; border-radius: 12px;">
                <div class="row p-0">
                    <div class="col-12 col-md-6 col-lg-6 py-3">
                        <div class="main_title text-start p-0 pe-5  ">Research and Trading System Development Consulting</div>
                        <p class="sub_title text-start px-0 pe-5  ">
                                At QuantXpress, we specialize to transform your trading ideas into market-ready strategies.
                                Whether you're looking to validate a new strategy, optimize parameters, or set up a fully
                                automated trading desk, our skilled quantitative researchers, consultant and programmers are
                                ready to assist.
                        </p>
                        <p class="sub_title text-start px-0 pe-5 mb-0" style="color:#3D23A7;">
                                Contact us today to bring your vision to life!
                        </p>
                    </div>
                    <div class="col-lg-2"></div>
                    <div class="col-12 col-md-6 col-lg-4 py-3">
                        <center><img src="/assets/img/cta_img_2.svg" alt="CTA" class="img-fluid  slide-box w-100"></center>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid py-5" style=" background: url('assets/img/api_bg.png') no-repeat center center/cover;">
                <div class="main_title p-0">QXFinLib.NET Guides</div>
                <p class="sub_title text-start ps-0">
                    We’re here to guide you every step of the way on your mechanical trading system backtesting journey. From tutorials and practical examples to comprehensive resources, we provide everything you need to accelerate your trading system development process and achieve success faster.
                </p>

                <div class="row">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                        <div class="card p-3 w-100 d-flex flex-column justify-content-between h-100">
                        <div>
                            <h2 class="card_title mb-3">Developer Guide</h2>
                            <p class="sub_title p-0 text-start">
                            Our comprehensive documentation is packed with robust examples and detailed guides to help you quickly kickstart your trading research, development, and beyond.
                            </p>
                        </div>
                        <div class="mt-3">
                            <p class="discover d-flex align-items-center gap-2">
                            View documentation
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                            </svg>
                            </p>
                        </div>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="col-12 col-md-6 col-lg-4 mb-4 d-flex">
                        <div class="card p-3 w-100 d-flex flex-column justify-content-between h-100">
                        <div>
                            <h2 class="card_title mb-3">Sample Strategies</h2>
                            <p class="sub_title p-0 text-start">
                            Whether you're building strategies, backtesting models, or optimizing systems, our open source GitHub resources are designed to accelerate your workflow and bring your ideas to life.
                            </p>
                        </div>
                        <div class="mt-3">
                            <p class="discover d-flex align-items-center gap-2">
                            View documentation
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                            </svg>
                            </p>
                        </div>
                        </div>
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
            <label for="faq-1" class="accordion-faq-label">How are BlitzTrader and QX.FinLib different?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
               BlitzTrader is a comprehensive, end-to-end automated trading platform designed for strategy development,
               execution management, and seamless market deployment. It provides a robust framework for building,
               testing, and executing trading strategies in real-time. On the other hand, QX.FinLib is a powerful
               library that complements BlitzTrader by offering advanced tools for backtesting, optimizing, and
               refining trading strategies. It specializes in technical indicator-based strategies and supports
               complex options strategy backtesting. Additionally, QX.FinLib can be used independently to build
               mechanical trading systems and custom trading tools, making it a versatile solution for quantitative
               researchers and traders alike. Together, BlitzTrader and QX.FinLib provide a complete ecosystem for strategy
               development, optimization, and execution.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-2">
            <label for="faq-2" class="accordion-faq-label">What is the cost of QX.FinLib?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                The single-user license for QX.FinLib is priced at $1,200 USD.
                For organizations or teams interested in a site license, we offer
                customized pricing based on your specific requirements. Please contact
                us for more details and to discuss the best licensing option for your needs.
              </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-3">
            <label for="faq-3" class="accordion-faq-label">Do you offer a source code option for QX.FinLib?</label>
            <div class="accordion-faq-content">
              <p class="p-20">Yes, we do. We understand that larger institutions often seek independence and require a foundational framework to build their own customized trading systems. To support this, we offer the option to purchase the source code for QX.FinLib at an additional cost. This provides institutions with a starting point to develop, modify, and scale their proprietary trading solutions while leveraging the robust capabilities of QX.FinLib. If you’re interested in this option, please contact us to discuss your requirements and pricing details.</p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-4">
            <label for="faq-4" class="accordion-faq-label">Do you provide consulting to train our developers to become well-versed with QX.FinLib?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                Absolutely! We understand that trading is a highly specialized domain, and we are committed to helping your team seamlessly onboard and master QX.FinLib. As your technology partner, we provide comprehensive consulting services to train your developers, establish robust backtesting and optimization processes, and manage historical data while integrating real-time data for up-to-date strategy evaluation. Our goal is to act as an extended team, ensuring your team is comfortable and confident using our solutions to achieve your trading objectives. Let us help you unlock the full potential of QX.FinLib—contact us to get started!
              </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-5">
            <label for="faq-5" class="accordion-faq-label">How to start with QX.FinLib?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
                Getting started with QX.FinLib is simple and hassle-free. We provide extensive guides, step-by-step tutorials, sample codes, and insightful blogs to ensure a smooth onboarding experience for quants and developers. Whether you're new to algorithmic trading or an experienced professional, our resources are designed to help you quickly understand and leverage the full potential of QX.FinLib. Visit our documentation portal or reach out to our support team for personalized assistance to kickstart your journey with QX.FinLib today!
              </p>
            </div>
          </div>

          <div class="accordion-faq-item">
            <input type="radio" name="accordion" id="faq-6">
            <label for="faq-6" class="accordion-faq-label">What programming language is used in QX.FinLib?</label>
            <div class="accordion-faq-content">
              <p class="p-20">
              QX.FinLib is developed in C#, making it ideal for users familiar with the C# programming language. The framework is designed for seamless integration, and users do not need advanced knowledge of C# to get started. Most key functions are wrapped and abstracted, ensuring a user-friendly experience while integrating and utilizing the library. Whether you're a beginner or an experienced developer, QX.FinLib simplifies the process of building, backtesting, and optimizing trading strategies.
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