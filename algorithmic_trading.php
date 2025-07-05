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
            background: url('assets/img/algorithmic_trading.png') no-repeat center center/cover;
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
        <div class="carousel" style="max-height: 80vh;">
            <div class="slide container-fluid active ">
                <div class="row">
                        <div class="col-12 col-md-6 col-lg-6 py-5">
                            <div class="text-start">
                                <img src="assets/img/market_data.svg" alt="CTA" class="img-fluid slide-box"> 
                            </div>
                            <div class="main_title text-start px-0 py-3 f-32 f-64">Algorithmic Trading Solutions</div>
                            <p class="sub_title text-start px-0 m-0" style="font-weight: 400;">
                                We develop and automate systems that manage complex trading algorithms in a dynamic environment. 
                                Our expert team leverages cutting-edge technology to provide complete trading system solutions, 
                                allowing you to focus on your core business—trading and research—while we handle connectivity and 
                                automation of your trading strategies.
                            </p>
                             
                        </div>

                        <div class="col-12 col-md-6 col-lg-6 py-3 mgt-5">
                            <img src="assets/img/algorithmic_trading_solutions.png" alt="CTA" class="img-fluid slide-box w-75"> 
                        </div>
                    </div>  
                </div> 
    </section> 
   
    <section>
        <div class="container-fluid">  
            <div class="row px-0 centered-content">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5">Who We Serve</div>
                    <p class="sub_title text-start px-0 pe-5"> 
                        We develop and automate systems that manage complex trading algorithms in a dynamic environment. 
                        Our expert team leverages cutting-edge technology to provide complete trading system solutions, 
                        allowing you to focus on your core business—trading and research—while we handle connectivity and 
                        automation of your trading strategies.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Prop desk
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
                            Buy and sell side firms
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
                            hedge fund
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
        <div class="container-fluid">
            <div class="main_title text-start p-0 pe-5">What we do</div>

            <p class="sub_title text-start p-0 py-3">
                From Trading Concept to launch and Beyond, we work closely with our partners to develop 
                cutting-edge proprietary software systems for systematic, discretionary, and hybrid strategies, 
                while also providing comprehensive research and operations support. We have successfully implemented 
                and live complex trading strategies in just a few days- an achievement that has eluded some of our clients for months.
            </p>
            <div class="my-5"> 
            <div class="row my-5">
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


    <section>
        <div class="container-fluid" style=" background: url('assets/img/algo_trading.png') no-repeat center center/cover;">
            <div class="main_title text-start p-0 pe-5">Your Algo Trading Consultant</div>

            <p class="sub_title text-start p-0 py-3">
                QuantXpress is a premier provider of algorithmic trading consulting services, delivering comprehensive solutions for individuals, brokers, and firms looking to establish their own algo trading operations. Our expertise spans various asset classes, including stocks, futures, options, forex, and commodities, guiding clients through the complexities of setting up an algo trading desk. Partner with QuantXpress to leverage our extensive experience whether you're launching a new trading desk or refining existing strategies, we’re here to support your success.
            </p>

            <div class="py-4">
                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">Research and strategy development</h5>
                                <p class="card-text sub_title text-start p-0 fs-18">
                                    Our consulting services focus on research and strategy development, offering robust backtesting, strategy optimization, and statistical analysis. These services provide the foundation for stable and efficient trading operations. Our team is proficient in C++, C#, and Python, with extensive experience in low-latency, high-frequency trading. We excel at building scalable, enterprise-grade algorithms that align with your trading objectives. By harnessing advanced research methods and technology, we help you develop and refine trading strategies that perform under real-world conditions.    
                                </p>  
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">Comprehensive algo trading consulting</h5>
                                <p class="card-text sub_title text-start p-0 fs-18">
                                    QuantXpress is your go-to partner for comprehensive algorithmic trading consulting services. We cater to individuals, brokers, and firms aiming to establish algo trading operations. With expertise spanning stocks, futures, options, forex, and commodities, we guide clients through the complexities of setting up an algo trading desk. Our mission is to ensure you have the tools and knowledge to succeed, whether you're starting from scratch or refining existing strategies. Partner with QuantXpress to access our extensive experience and achieve your trading goals.    
                                </p> 
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-12 col-md-4">
                        <div class="card h-100 py-2">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card_title">Technology and tailored solutions</h5>
                                <p class="card-text sub_title text-start p-0 fs-18">
                                QuantXpress has a proven track record of helping businesses thrive in the algo trading sector. We stay at the forefront of technology to offer cutting-edge solutions, whether it's in business strategy, operations, or software development. Our tailored solutions meet the unique needs of both retail and institutional clients, with a special focus on automating trading strategies. Contact us today to learn more about our innovative trading solutions and how we can help you reach.     
                                </p> 
                            </div>
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