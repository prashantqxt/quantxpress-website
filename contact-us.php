<?php include 'header.php'; ?> 
<style>
    .btn:hover{
        border-radius: 4px;
        background: #ffffff!important;
        color: #171321!important;
        border: 1px solid #171321!important;
        height: 50px;
    }
    .btn:hover > svg > path{
        fill: #171321;
        stroke: #171321;
    }
    .captcha-container {
      background: #fff;
      padding: 10px;
      border-radius: 12px; 
      text-align: center;
    }

    .captcha-box {
      font-size: 24px;
      letter-spacing: 6px;
      font-weight: bold;
      background: linear-gradient(135deg, #305EFF, #7B9FFF);
      color: white;
      padding: 10px 20px;
      margin-bottom: 15px;
      border-radius: 8px;
      user-select: none;
    }

    input[type="text"] {
      padding: 8px;
      width: 100%;
      margin-bottom: 10px;
      border-radius: 6px;
      border: 1px solid #ccc;
    }

    button {
      padding: 8px 16px;
      border: none;
      background: #305EFF;
      color: white;
      border-radius: 6px;
      cursor: pointer;
    }

    button:hover {
      background: #2748c4;
    }

    .result {
      margin-top: 10px;
      font-weight: bold;
    }
</style>
    <div class="container-fluid py-5 page-top" style="background: url('assets/img/contact_us.png') no-repeat center center/cover;">    
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 py-5 mgt-5"> 
                <div class="main_title text-start px-0 py-3 f-64">Talk to an Expert</div>
                <p class="sub_title text-start px-0 m-0 pt-0">  
                    Want to see a custom demo or get help finding the right plan?<br>
                    We'd love to chat.
                </p> 
            </div> 
        </div> 
    </div>

    <section class="py-5">
        <div class="container"> 

            <div class="row ">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="main_title text-start p-0" style="font-weight: 600;">Let’s Connect</div>
                    <p class="sub_title text-start p-0 m-0" style="font-weight: 400;">
                        We deliver innovative trading software and frameworks that helps enterprises solve problems fast and transform for tomorrow.
                    </p>
                    <br>
                    <p class="sub_title text-start p-0 mb-3" style="font-weight: 500;"> Contact Us </p>

                    <p class="mb-1"> +91 1234567890 </p>
                    <p class="mb-1"> +91 1234567890 </p>

                    <p class="sub_title text-start p-0 my-3" style="font-weight: 500;"> Email Address </p>

                    <p class="mb-1"> info@quantxpress.com  </p>
                    <p class="mb-1"> support@quantxpress.com </p>

                    <p class="sub_title text-start p-0 my-3" style="font-weight: 500;">  Registered address </p>
 
                    <p class="mb-1"> 
                        11/16 Kumar City, Kalyani Nagar,<br>
                        Pune-14 India 
                    </p>

                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="bg-white d-flex align-items-center justify-content-center ">
                        <div class="w-100 max-w-md ">
                            <h2 class="text-xl fw-semibold h5 text-color-blue">Submit queries or request support.</h2>
                            <form class="mt-4" action="submit_form.php" method="POST">
                                <div class="mb-3">
                                    <label for="firstName">First Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter first name">
                                </div>
                                <div class="mb-3">
                                    <label for="lastName">Last Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email<span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                                </div>
                                <div class="mb-3">
                                    <label for="phone">Phone<span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter phone number">
                                </div>
                                <div class="mb-3">
                                    <label for="location">Location (City)<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="Enter location">
                                </div>
                                <div class="mb-3">
                                    <label for="interest">I'm interested in</label>
                                    <select class="form-select" id="interest" name="interest">
                                        <option selected disabled> Select interest </option>
                                        <option value="Interested in BlitzTrader">Interested in BlitzTrader</option>
                                        <option value="Interested in Strategy development">Interested in Strategy development</option>
                                        <option value="Interested in Backtesting solutions">Interested in Backtesting solutions</option>
                                        <option value="Interested in HFT solutions">Interested in HFT solutions</option>
                                        <option value="Interested in market connectivity solutions">Interested in market connectivity solutions</option>
                                        <option value="Looking for trading technology partner">Looking for trading technology partner</option>
                                        <option value="General enquiry">General enquiry</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="moreInfo">Tell us more</label>
                                    <textarea class="form-control" id="moreInfo" name="moreInfo" rows="3" placeholder="Enter more about"></textarea>
                                </div>

                                <div class="captcha-container w-50 p-0">
                                    <div class="captcha-box" id="captchaText"></div>
                                    <div class="d-flex gap-2">    
                                        <div>
                                            <input type="text" id="userInput" placeholder="Enter CAPTCHA" />
                                        </div>
                                        <div>
                                            <button onclick="generateCaptcha()">
                                            
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M10.015 1.586a1 1 0 0 1 1.637 1.147L10.415 4.5c2.05-.086 3.959.23 5.594.999c2.061.969 3.632 2.633 4.466 4.966a9 9 0 1 1-15.88-2.088l.062-.081A1 1 0 0 1 6.241 9.51a7 7 0 1 0 12.35 1.625c-.653-1.827-1.85-3.083-3.433-3.828c-1.304-.613-2.908-.894-4.733-.808l1.227 1.753l.055.087a1 1 0 0 1-1.63 1.14l-.062-.08l-2.736-3.907z"/></svg></button>
                                        </div>
                                    </div>  
                                    <div class="result" id="captchaResult"></div>
                                </div>
                                
                                <div class="d-grid">
                                    <button onclick="validateCaptcha()" class="btn p-2" type="submit" style="width: 225px;background: #171321;margin-top: 5%;height: 50px;">
                                        Submit
                                    </button>
                                </div>
                            </form> 
                        </div>
                    </div>
                </div>
                
        </div>

    </section>

    <script>
        let currentCaptcha = '';

        function generateCaptcha() {
            const chars = 'ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnpqrstuvwxyz23456789';
            let captcha = '';
            for (let i = 0; i < 6; i++) {
            captcha += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            currentCaptcha = captcha;
            document.getElementById('captchaText').textContent = captcha;
            document.getElementById('captchaResult').textContent = '';
            document.getElementById('userInput').value = '';
        }

        function validateCaptcha() {
            const input = document.getElementById('userInput').value.trim();
            const resultBox = document.getElementById('captchaResult');
            if (input === currentCaptcha) {
            resultBox.style.color = 'green';
            resultBox.textContent = 'CAPTCHA matched!';
            } else {
            resultBox.style.color = 'red';
            resultBox.textContent = 'Incorrect. Try again.';
            }
        }

        // Initialize on page load
        generateCaptcha();
    </script>
 
<?php include 'footer.php'; ?>