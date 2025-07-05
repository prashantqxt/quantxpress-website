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
        .height-overflow{
            overflow: auto;
            height: 80vh;
            scrollbar-width: none; /* Firefox */
              -ms-overflow-style: none;  /* IE 10+ */
        }
        .height-overflow::-webkit-scrollbar {
          display: none;         /* Chrome, Safari, Opera */
        }
        .slide:nth-child(1) {
            background: url('assets/img/qx.fix_engine.png') no-repeat center center/cover;
        }
        
</style>
<section class="page-top">
        <div class="carousel" style="height: 75vh;">
            <div class="slide container-fluid active ">
                <div class="row ">
                        <div class="col-12 col-md-6 col-lg-6 py-3 mob-banner">
                            <div class="main_title text-start p-0" style="font-size: 50px;">QX.FIX Engine</div>
                            <p class="sub_title text-start px-0 m-0">.NET based low latency FIX Engine Library</p>
                            <p class="sub_title text-start px-0" style="font-weight: 400;font-size: 18px;"> 
                                QX.FIX Engine is a .NET-based, low-latency FIX Protocol implementation with an SDK 
                                designed for high-performance trading and FIX connectivity solutions. It delivers a simple, 
                                reliable, and cost-effective solution for financial data exchange and STP. 
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
                            <img src="assets/img/fix_Engine.png" alt="CTA" class="img-fluid slide-box w-75"> 
                        </div>
                    </div>  
                </div> 
    </section> 

    <section>
        <div class="container-fluid">
            <div class="main_title text-center">How It Works</div>

            <div class="col-12 col-md-12 col-lg-12 my-5 py-5 desk">
                <img src="assets/img/architecture.png" alt="CTA" class="img-fluid slide-box">
            </div>

            <div class="mob mt-5 mb-5">
                    <img src="assets/img/products_3.png" alt="how-it-works-mob" class="img-fluid">
                </div>
        </div>
    </section>
  
    <section>
        <div class="container-fluid py-5" style="background-color: #F4F6FF">  
            <div class="row  centered-content">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5">Why choose QX.FIX Engine SDK Solution?</div>
                    <p class="sub_title text-start px-0 pe-5"> 
                        It is a C#-based high performance FIX Engine library that provides the SDK to develop FIX-enabled connectivity solutions and trading applications, offering a reliable and efficient foundation for seamless integration with counterparty trading system.
                    </p>
                </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed p-20" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Fast Integration
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
                            Low cost with source code
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
                            Implement Buy or sell side solutions
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
            <div class="main_title text-center p-0 pe-5">QX.FIX Engine Features</div>

            <p class="sub_title">
                QX.FIX Engine is a feature-rich library that provides a powerful framework, 
                ensuring seamless and fast integration with counterparty systems. Packed with 
                advanced tools and innovative functionalities, it simplifies FIX protocol 
                implementation. Here are some of the standout features that make QX.FIX 
                Engine a top choice for FIX connectivity :
            </p>

            <div class="row   height-overflow">
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Comprehensive FIX Session Support</h2>
                        <p class="sub_title text-start px-0">
                            Maintains FIX sessions between counterparties, including logon/logout sequences and heartbeat monitoring.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0">Easy Customization</h2>
                        <p class="sub_title text-start px-0">
                            SDK Library enables the creation of connectivity adapters tailored to counterparty FIX dialects.
                        </p>
                    </div>
                </div> 
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Multiple FIX Sessions</h2>
                        <p class="sub_title text-start px-0">
                            Support both Initiator and Acceptor FIX sessions, allowing for 
                            flexible and effective session management.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Support for FIX Dialects</h2>
                        <p class="sub_title text-start px-0">
                            Accommodate non-standard implementations, including custom messages and fields, ensuring complete adaptability.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Custom GapFill Mechanisms</h2>
                        <p class="sub_title text-start px-0">
                            Tailor message gap filling through XML configuration for enhanced control
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Management of Sequence Number and TimeStamping</h2>
                        <p class="sub_title text-start px-0">
                            Ensures message integrity by handling mandatory fields like sequence number, message time stamp etc.
                        </p>
                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Multiple FIX Sessions</h2>
                        <p class="sub_title text-start px-0">
                            Create both initiators and acceptors for flexible session management.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0">Custom Logon Framing</h2>
                        <p class="sub_title text-start px-0">
                            Design your own logon message structure for improved security.
                        </p>
                    </div>
                </div> 
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Latency Monitoring</h2>
                        <p class="sub_title text-start px-0">
                            Track message latencies and trigger alerts when thresholds are crossed.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Counterparty Backlog Monitoring</h2>
                        <p class="sub_title text-start px-0">
                            Observe processing backlogs on the counterparty side for proactive management.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Flexible Data Persistence</h2>
                        <p class="sub_title text-start px-0">
                            Support for database and file-based persistence mechanisms.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Version Compatibility</h2>
                        <p class="sub_title text-start px-0">
                            Fully supports all standard FIX Protocol versions and non-standard dialects.
                        </p>
                    </div>
                </div>


                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Message Encoding and Validation</h2>
                        <p class="sub_title text-start px-0">
                            Ensure compliance with customizable FIX message encoding and validation levels.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0">Field Masking</h2>
                        <p class="sub_title text-start px-0">
                            Secure sensitive information by masking important fields like passwords.
                        </p>
                    </div>
                </div> 
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class=" card-box p-4"> 
                        <h2 class="card_title p-0">Event-Based Alerts</h2>
                        <p class="sub_title text-start px-0">
                            Receive instant alerts for key events, such as message transactions and session state changes.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Customizable Logging</h2>
                        <p class="sub_title text-start px-0">
                            Log specific event types for detailed tracking and auditing.
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 mb-3">
                    <div class="card-box p-4"> 
                        <h2 class="card_title p-0 ">Automatic Sequence Number Resetting</h2>
                        <p class="sub_title text-start px-0">
                            Automate message sequence number resets according to exchange specifications on a daily or weekly basis.
                        </p>
                    </div>
                </div> 
            </div>
        </div>
    </section>
    
    <section>
        <div class="container-fluid py-5">   
            <div class="row centered-content p-0">
                <div class="col-12 col-md-6 col-lg-6 ">
                    <div class="main_title text-start p-0 pe-5 ">Online FIX Message Decoder</div>
                        <p class="sub_title text-start px-0 pe-5 mb-0">
                            QXT's online FIX message decoder streamlines analysis by decoding FIX messages 
                            in accordance with the FIX protocol schema. It converts your FIX messages into 
                            a human-readable format, enabling traders and analysts to easily understand the content and structure.
                        </p>

                        <button class="lets_talk w-25">Explore FIX Decoder</button>
                        
                    </div>
                <div class="col-12 col-md-6 col-lg-6 ps-5">
                    <img src="assets/img/decoder.png" alt="trading_img" class="img-fluid px-5 slide-box">
                </div>
            </div>  
        </div>
    </section>
   
    <section>
        <div class="container-fluid py-5" style="background: url('assets/img/api_bg.png') no-repeat center center/cover;">
            <div class="main_title p-0">Developer&nbsp;resources</div>
            <p class="sub_title text-start ps-0">
            Get the help you need to build the FIX enabled applications, tools and connectivity solutions
            </p>

            <div class="row">
            <!-- Card 1 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 p-3 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card_title">Get Started</h2>
                    <p class="sub_title p-0 text-start">
                    Stay tuned for tutorials, step-by-step guides, and troubleshooting tips. In this comprehensive series, you'll build a fully functional FIX Engine connector application.
                    </p>
                </div>
                <div class="mt-3">
                    <p class="discover d-flex align-items-center">
                    View documentation
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                    </svg>
                    </p>
                </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 p-3 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card_title">Download and Install</h2>
                    <p class="sub_title p-0 text-start">
                    This topic describes how to install or update the latest release of the QX.FIX Engine and start building your trading application and connectivity solutions.
                    </p>
                </div>
                <div class="mt-3">
                    <p class="discover d-flex align-items-center">
                    View documentation
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                    </svg>
                    </p>
                </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100 p-3 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="card_title">Sample application</h2>
                    <p class="sub_title p-0 text-start">
                    This sample app showcases how QX.FIX Engine SDK can be used to develop applications and tools covering Initiator and Acceptor application development.
                    </p>
                </div>
                <div class="mt-3">
                    <p class="discover d-flex align-items-center">
                    View documentation
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" stroke="#305EFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 12h16m0 0l-6-6m6 6l-6 6"></path>
                    </svg>
                    </p>
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