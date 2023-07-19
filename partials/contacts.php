<section class="page-section" id="contact">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">ارتباط با ما</h2>
            <h3 class="section-subheading text-muted">.برای شرکت در دوره ها لطفا اطلاعات خود را وارد کنید</h3>
        </div>
        <!-- * * * * * * * * * * * * * * *-->
        <!-- * * SB Forms Contact Form * *-->
        <!-- * * * * * * * * * * * * * * *-->
        <!-- This form is pre-integrated with SB Forms.-->
        <!-- To make this form functional, sign up at-->
        <!-- https://startbootstrap.com/solution/contact-forms-->
        <!-- to get an API token!-->
        <form id="contactForm" method="post" action="administrator/admin/contacts/insert.php"
              data-sb-form-api-token="API_TOKEN">
            <div class="row align-items-stretch mb-5">
                <div class="col-md-6">
                    <div class="form-group">
                        <!-- Name input-->
                        <input class="form-control frm1" name="name" id="name" type="text" placeholder="*نام نام خانوادگی "
                               data-sb-validations="required" required/>
                        <div class="invalid-feedback" data-sb-feedback="name:required">وارد کردن نام الزامی است</div>
                    </div>
                    <div class="form-group">
                        <!-- Email address input-->
                        <input class="form-control" name="email" id="email" type="email" placeholder="*ایمیل"
                               data-sb-validations="required,email"/ required>
                        <div class="invalid-feedback" data-sb-feedback="email:required">وارد کردن ایمیل الزامی است</div>
                        <div class="invalid-feedback" data-sb-feedback="email:email">ایمیل وارد شده صحیح نیست</div>
                    </div>
                    <div class="form-group mb-md-0">
                        <!-- Phone number input-->
                        <input class="form-control" name="phone" id="phone" type="number" placeholder="*تلفن همراه "
                               data-sb-validations="required" required/>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">وارد کردن شماره تماس الزامی
                            است
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-group-textarea mb-md-0">
                        <!-- Message input-->
                        <textarea class="form-control" name="message" id="message" placeholder="*پیام "
                                  data-sb-validations="required" required></textarea>
                        <div class="invalid-feedback" data-sb-feedback="message:required">وارد کردن پیام الزامی است
                        </div>
                    </div>
                </div>
            </div>
            <!-- Submit success message-->
            <!---->
            <!-- This is what your users will see when the form-->
            <!-- has successfully submitted-->

            <!--<div class="d-none" id="submitSuccessMessage">
                <div class="text-center text-white mb-3">
                    <div class="fw-bolder">Form submission successful!</div>
                    To activate this form, sign up at
                    <br/>
                    <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                </div>
            </div>-->

            <!-- Submit error message-->
            <!---->
            <!-- This is what your users will see when there is-->
            <!-- an error submitting the form-->
            <!--
            <div class="d-none" id="submitErrorMessage">
                <div class="text-center text-danger mb-3">Error sending message!</div>
            </div>-->

            <!-- Submit Button-->
            <div class="text-center">
                <input class="btn btn-primary btn-xl text-uppercase activate" id="submitButton" type="submit" value="ارسال">
                </input>
            </div>
        </form>
    </div>
</section>
