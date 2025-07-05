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
            font-weight: 600;
            font-style: normal;
            font-size: 16px;
            color: #202223;
            text-decoration: none;
        }
        .primary_color {
            color: #3D23A7!important;
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
        .slide:nth-child(1) {
            background: url('assets/img/hft.png') no-repeat center center/cover;
        }
        
        .slide{
            justify-content: start !important;
        }
        .carousel {
            position: relative;
            width: 100%;
            max-height: 50vh;
            overflow: hidden;
        }
        .f-64 {
            font-size: 3rem !important;
            font-weight: 700;
        }
</style>
<section class="page-top">
        <div class="carousel" style="min-height:60vh!important;">
            <div class="slide container-fluid active py-5">
                <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 py-5">
                            <div class="text-start">
                                <img src="assets/img/hft.svg" alt="CTA" class="img-fluid slide-box"> 
                            </div>
                            <div class="main_title text-start px-0 py-3 f-32 f-64">HFT Consulting and Tailored Development Solutions</div>
                             
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 py-3 mgt-5">
                            <img src="assets/img/hft_consulting.png" alt="CTA" class="img-fluid slide-box w-75"> 
                        </div>
                    </div>  
                </div> 
    </section> 
   
    <section>
        <div class="container-fluid">  
            <div class="row py-5 px-0 centered-content">
                <div class="col-12 col-md-3 col-lg-3 ">
                    <div class="main_title text-start p-0  ">
                        What is HFT ?
                        <img src="assets/img/hft_img.svg" alt="CTA" class="img-fluid slide-box">
                    </div> 
                </div>
                <div class="col-12 col-md-9 col-lg-9 ps-5"> 
                    <p class="sub_title text-start p-0 m-0" style="font-weight: 500;">
                        High-frequency trading (HFT) is an advanced form of algorithmic trading focused on generating profits through rapid execution. 
                    </p>  
                    <p class="sub_title text-start px-0" style="font-weight: 400;"> 
                        It is utilized in arbitrage trading, signal-based trading, and scalping strategies. HFT strategies, predominantly employed by proprietary traders, hedge fund managers, and market makers, contribute significantly to the trading volume on major exchanges.
                    </p>
            </div>  
        </div>
    </section>
    
    <section>
        <div class="container-fluid">
            <div class="main_title text-start p-0 pe-5">What we do</div>

            <p class="sub_title text-start p-0 py-3">
                From Trading Concept to launch and Beyond, we work closely with our partners to develop 
                cutting-edge proprietary software systems for systematic, discretionary, and hybrid strategies, 
                while also providing comprehensive research and operations support. We have successfully implemented 
                and live complex trading strategies in just a few days- an achievement that has eluded some of our clients for months.
            </p>
            <div class="my-5"> 
            <div class="row">
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Manage Complex trades</p>
                        <p class="mb-0 fs-18">With Blitz, you can efficiently manage intricate execution models across multiple markets while concurrently handling multiple orders. This capability ensures that program traders can achieve swift and accurate executions, overcoming the significant challenges they face in the trading environment.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">

                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Customized Algorithmic Solutions with Blitz</p>
                        <p class="mb-0 fs-18">We support large proprietary traders desks and professional traders in designing, developing, optimizing and implementing various trading strategies. The Comprehensive Back-test report offers unparalleled insights into a trading strategyYou can develop a wide range of strategy models, including execution models, quantitative model, market making, scalping, jobbing, statistical arbitrage, complex options strategies, and mechanical trading systems based on technical indicators in matter of hours.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Trading Research and Backtesting</p>
                        <p class="mb-0 fs-18">We support large proprietary traders desks and traders in designing, developing, optimizing and implementing various trading strategies. The Comprehensive Back-test report offers unparalleled insights into a trading strategy.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;"  alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Confidentiality and Professional Integrity</p>
                        <p class="mb-0 fs-18">We engage in projects where we can truly make a significant difference, focusing our efforts where they matter most to our clients’ bottom line. Our clients are always protected by NDAs and non-compete agreements.</p>
                    </div>
                </div> 
            </div> 
        </div>
        </div>
    </section>


    <?php include 'benefits.php'; ?>
    
    <section>
        <div class="container-fluid ">
            <div class="container my-5">
            <h1 class="main_title  p-0 mb-5 text-center ">Low Latency NSE TBT Market Data Solutions</h1>
            <div class="row my-5">
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;" alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Seamless Integration</p>
                        <p class="mb-0 fs-18">Effortlessly integrate Level III data into your trading 
                        systems infrastructure.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;" alt="CTA" class="img-fluid slide-box">

                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Real-Time Data Dissemination</p>
                        <p class="mb-0 fs-18">Stream Level III data (over 5 levels of book depth) to your retail clients 
                        using our advanced streaming API model.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;" alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Enhanced Execution Speed</p>
                        <p class="mb-0 fs-18">Utilize high-frequency data within our Blitz algorithmic trading platform for superior trade execution speed.</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex mb-5">
                    <img src="assets/img/check.svg" style="width: 24px;height: 32px;" alt="CTA" class="img-fluid slide-box">
                    <div class="ms-2">
                        <p class="fw-semibold mb-1 fs-20">Complete Support and Sustainability</p>
                        <p class="mb-0 fs-18">We offer licensing options for source code to institutions developing their proprietary trading platforms.</p>
                    </div>
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