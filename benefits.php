<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">  
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css'>

<style type="text/css">
	.testimonials-wrap {
			/* padding: 40px 0; */
		}
		.heading-section {
			text-align: center;
		}
		.sub-heading {
			font-family: 'Lato', sans-serif;
		    font-size: 12px;
		    display: block;
		    font-weight: 600;
		    color: #2e9ca1;
		    text-transform: uppercase;
		    letter-spacing: 2px;
		}
		.heading-section h2 {
			font-size: 28px;
		    font-weight: 600;
		    padding-top: 10px;
		    padding-bottom: 15px;
		}
		.testimonial-box {
		    display: block;
		    position: relative;
		    padding: 30px 60px;
		    background: #fff; 
		    border-radius: 32px; 
		}
		.user-img {
		    width: 80px;
		    height: 80px;
		    border-radius: 50%;
		    position: relative;
			min-width: 80px;
			background-size: 100%;
		}
		.carousel-testimonial .item {
			padding: 30px 15%;
		}
		.quote {
			position: absolute;
		    top: -23px;
		    color: #2e9da1;
		    font-size: 27px;
		}
		.name {
			margin-bottom: 0;
		    line-height: 14px;
		    font-size: 17px;
		    font-weight: 500;
		}
		.position {
			color: #adadad;
			font-size: 14px;
		}
		.carousel-testimonial .owl-nav {
			text-align: center;
		}
		.carousel-testimonial .owl-nav button.owl-next, 
		.carousel-testimonial .owl-nav button.owl-prev {
		    padding: 0 12px !important;
		}
		.carousel-testimonial .owl-nav button {
			outline: none;
			padding: 0;
		}
		.carousel-testimonial .owl-nav button.owl-next span, 
		.carousel-testimonial .owl-nav button.owl-prev span {
			display: block;
		    font-size: 40px;
		    width: 25px;
		    height: 25px;
		    vertical-align: 0px;
		    line-height: 16px;
		}
		.carousel-testimonial .owl-nav button.owl-next.disabled, 
		.carousel-testimonial .owl-nav button.owl-prev.disabled {
			opacity: 0.5;
		}
        .owl-next{
            position: absolute;
            left:18% !important
        }
        .owl-prev{
            position: absolute;
            left: 15% !important;
        }
        .carousel-testimonial .item {
            padding: 30px 5%;
        }
        .testimonial-box{
            height: 55vh;
            background:#F6F3FE;
        }
		.card_title {
			color: #202223;
			padding: 5% 0;
			font-size: 32px;
			font-weight: 800;
			line-height: 1.5;
		}
		@media (max-width: 767px) {
			.testimonial-box {
				height: auto;
				background: #F6F3FE;
			}
			.owl-prev {
				position: absolute;
				left: 3% !important;
			}
		}
</style>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="testimonials-wrap">
		<div class="container-fluid ">
            <div class="main_title text-start p-0 pe-5">Benefits</div>
            <p class="sub_title text-start p-0 py-3">
				Leverage our HFT platform featuring proprietary architecture for low latencies and flexible customization options. Tailored to meet your specific needs, our platform operates across various asset classes, including equities, futures, and options.
            </p>

	        <div class="owl-stage d-flex gap-4">
				<!-- Slide 1 -->
				<div class="owl-item active" style="width: 432px;">
					<div class="item h-100">
					<div class="testimonial-box d-flex flex-column justify-content-between h-100 p-4 shadow-sm">
						<div>
						<h2 class="card_title">Accelerate Delivery Speed</h2>
						<p class="sub_title text-start p-0 py-3">
							Partner with our team to empower your development team, even those new to the HFT vertical. We offer guidance and training on development intricacies, along with providing reusable and proven components to boost productivity.
						</p>
						</div>
					</div>
					</div>
				</div>

				<!-- Slide 2 -->
				<div class="owl-item active" style="width: 432px;">
					<div class="item h-100">
					<div class="testimonial-box d-flex flex-column justify-content-between h-100 p-4 shadow-sm">
						<div>
						<h2 class="card_title">Leverage Our HFT Platform with Source Code</h2>
						<p class="sub_title text-start p-0 py-3">
							Gain access to our high-performance HFT platform source code to expedite time-to-market. With our platform, you can focus on defining targets for new markets and optimizing existing strategies in parallel.
						</p>
						</div>
					</div>
					</div>
				</div>

				<!-- Slide 3 -->
				<div class="owl-item active" style="width: 432px;">
					<div class="item h-100">
					<div class="testimonial-box d-flex flex-column justify-content-between h-100 p-4 shadow-sm">
						<div>
						<h2 class="card_title">Advisory Services</h2>
						<p class="sub_title text-start p-0 py-3">
							Utilize our advisory and consulting services to steer your technology team in architecture, design, and performance aspects of the system. Provides you detailed insight of OMS, RMS and Strategy framework and market connectivity design. Our expertise ensures optimized solutions for your trading operations.
						</p>
						</div>
					</div>
					</div>
				</div>
				</div>

		</div>
	</div> 
<!-- partial -->
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>

<script>
	$('.carousel-testimonial').owlCarousel({
		    loop:true,
		    margin:0,
		    responsiveClass:true,
		    responsive:{
		        0:{
		            items:1,
		            nav:true
		        },
		        600:{
		            items:1,
		            nav:false
		        },
		        1000:{
		            items:3,
		            nav:true,
		            loop:false
		        }
		    }
		})
</script>

</body>
</html>
