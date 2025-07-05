<?php include 'header.php'; ?>
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
        .mgt-5{
            margin-top: 5%;
        }
        .list-unstyled {
            padding-left: 15px;
            list-style: disc;
        }
        .exchange_connectivity li{
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 400;
            font-style: normal;
            font-size: 18px;
            color: #202223;
            text-decoration: none;
        }
        .primary_color {
            color: #202223!important;
            margin-top:5%;
        }
        .tran_bg{
            background: #3d23a714!important;
        }
        .fs-20{
            font-size: 20px;
        }
        .fs-18{
            font-size: 18px;
        }
        @media screen and (max-width: 768px) {
            .sidebar { 
                right: 90px;
            }
        }
        .slide:nth-child(1) {
            background: url('assets/img/market_data_solutions.png') no-repeat center center/cover;
        }
        .slide{
            justify-content: start !important;
        }
         .f-64 {
            font-size: 3rem !important;
            font-weight: 700;
        }
</style>
<section class="page-top">
        <div class="carousel" style="max-height: 80vh">
            <div class="slide container-fluid active py-5">
                <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 py-5  ">
                            <div class="text-start">
                                <img src="assets/img/market_data.svg" alt="CTA" class="img-fluid slide-box"> 
                            </div>
                            <div class="main_title text-start px-0 py-3 f-32 f-64">Market Data and Connectivity Solutions</div>
                        <p class="sub_title text-start px-0 m-0" style="font-weight: 400;">Market data feed handlers are mandatory components of any real time trading system. QXT has invested years of hard work and attention to create technologies to get you data faster and with broader reach and provides a market data solution tailored to your trading business needs.</p>
                             
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 py-3">
                            <img src="assets/img/market_data.png" alt="CTA" class="img-fluid slide-box w-75"> 
                        </div>
                    </div>  
                </div> 
    </section> 
   
    <section>
        <div class="container-fluid pt-5">  
            <div class="row px-0 centered-content">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5">Our Market Data Solutions</div>
                    <p class="sub_title text-start px-0 pe-5"> 
                        Gain a competitive edge in the financial markets with access to our comprehensive 
                        suite of services. Since our inception, we have been building and supporting software 
                        systems designed to manage financial markets, specializing in the integration of 
                        exchange market data with trading systems.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Exchange connectivity
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
                            Market data dissemination platform and APIs
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
                                QXT engineering services
                        </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body p-20">
                             Efficiently manage the entire order lifecycle with rapid quoting sequences through a single API command, eliminating concerns about looping in the generation of new order cycles.
                        </div>
                        </div>
                    </div> 
                </div>   
            </div>  
        </div>
    </section>
    

    <section>
        <div class="container-fluid py-5" style=" background: url('assets/img/reason-bg.png') no-repeat center center/cover;">
            <div class="main_title text-start p-0 pe-5">Exchange Connectivity Solutions</div>

            <p class="sub_title text-start p-0 py-3">
                QX.FIX Engine is a feature-rich library that provides a powerful framework, 
                ensuring seamless and fast integration with counterparty systems. Packed with 
                advanced tools and innovative functionalities, it simplifies FIX protocol 
                implementation. Here are some of the standout features that make QX.FIX 
                Engine a top choice for FIX connectivity :
            </p>

            <div class="py-0">
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">NSE (TBT, NNF Specialization)</h5>
                                <p class="card-text sub_title text-start p-0" style="font-size: 18px;">
                                    The National Stock Exchange (NSE) is global leading exchange based in Mumbai, India and is most diverse equity and derivative marketplace. NSE connectivity is our core specialization for both market data and trading interface. We have delivered many connectivity solutions across NSE TBT, NNF market and trading interface. Institution and prop desk’s can leverage our experience to build and integrate the low latency NSE exchange connectivity in their trading infrastructure.
                                </p>
                                <ul class="list-unstyled exchange_connectivity">
                                    <li>Technology solution to provides TBT level-III data to retail</li>
                                    <li>Technology to disseminate Level-I, Level-II market data over API model</li>
                                    <li>Technology to integrate TBT data order book to HFT platform</li>
                                </ul>
                                <div class="mt-auto py-3">
                                    <a href="#" class="text-primary primary_color fw-semibold d-flex align-items-center">
                                        View documentation 
                                        <svg style="margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#3D23A7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">BSE (TBT, ETI Specialization)</h5>
                                <p class="card-text sub_title text-start p-0" style="font-size: 18px;">
                                    The Bombay Stock Exchange (BSE) is India's oldest stock exchange, established in 1875, and is one of the largest exchanges in the world by market capitalization. QXT is specialized in BSE exchange technologies for both market data and Trading interface. We help Institutions to provide an adapters of BSE EOBI, MDI and ETI interfaces.
                                </p>
                                <div class="mt-auto py-3">
                                    <a href="#" class="text-primary primary_color fw-semibold d-flex align-items-center">
                                        View documentation 
                                        <svg style="margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#3D23A7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">MCX (TBT, ETI Specialization)</h5>
                                <p class="card-text sub_title text-start p-0" style="font-size: 18px;">
                                    The Multi Commodity Exchange of India (MCX) is the leading commodities exchange in India, established in 2003, specializing in the trading of various commodity derivatives. QXT is specialized in MCX exchange technologies for both market data and Trading interface. We help Institutions to provide an adapters of MCX EOBI, MDI and ETI interfaces.
                                </p>
                                <div class="mt-auto py-3">
                                    <a href="#" class="text-primary primary_color fw-semibold d-flex align-items-center">
                                        View documentation 
                                        <svg style="margin-left: 5px;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" stroke="#3D23A7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path></svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    
    <section style=" background: url('assets/img/market_choose.png') no-repeat center center/cover;">
        <div class="container-fluid">
            <div class="container my-5">
            <h1 class="main_title text-start p-0 mb-4">Why the market choose QuantXpress</h1>
            <div class="row mt-5">
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20  ">Over 15 Years of Extensive Expertise</p>
                        <p class="mb-0 fs-18">across the entire trading lifecycle.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">

                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Accelerated Speed to Market</p>
                        <p class="mb-0 fs-18">with Pre-built trading modules streamline implementation.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Customization Expertise</p>
                        <p class="mb-0 fs-18">with Proven ability to create complex integrations tailored to client needs.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Complete Support and Sustainability</p>
                        <p class="mb-0 fs-18">Our solutions are fully supportable and designed for long-term viability.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Leading in Trade Engineering</p>
                        <p class="mb-0 fs-18">We are the experts in trade engineering, dedicated to delivering robust solutions.</p>
                    </div>
                </div>
            </div>
            <hr class="border-secondary mb-5">
            <h2 class="main_title text-start p-0 mb-4">End-to-End Market Data Solutions For Brokers</h2>
            <div class="d-flex">
                <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                <div class="ms-2">
                    <p class="fw-semibold mb-1 fs-20">Leading in Trade Engineering</p>
                    <p class="mb-0 fs-18">QX.MD facilitates real-time streaming of market data into a broker's client trading or monitoring applications, while market surveillance feeds provide essential data and content to improve the performance of automated trading algorithms.</p>
                </div>
            </div>
        </div>
        </div>
    </section>
 

<?php include 'footer.php'; ?>
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
            "assets/img/trading_img.png",
            "assets/img/bt_home.png" 
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