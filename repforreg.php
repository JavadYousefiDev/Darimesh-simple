<div class="container-fluid">
    <div class="row px-3">
        <div class="col-lg-10 col-xl-9 card flex-row mx-auto px-0">


            <div class="card-body">
                <h4 class="title text-center mt-4">عضویت در سایت</h4>

                <form class="form-box px-3" id="register" action="user-panel.php" method="post">
                    <div class="form-input">
                        <span ><i class="fa-solid fa-user-plus"></i></span>
                        <input type="text" placeholder="نام و نام خانوادگی *" name="name-family" id="name-family" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['name-family'])) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن نام و نام خانوادگی الزامی است *</span>
                    <?php } ?>

                    <div class="form-input">
                        <span ><i class="fa-solid fa-phone"></i></span>
                        <input type="text" placeholder="شماره تلفن *" name="ph-number" id="ph-number" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['ph-number']) ) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن شماره تلفن الزامی است *</span>
                    <?php } ?>

                    <div class="form-input">
                        <span ><i class="fa-solid fa-envelope"></i></span>
                        <input type="email" style="text-align: right;" placeholder="* ایمیل" name="email" id="email" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['email']) || filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن ایمیل الزامی است * لطفا یک ایمیل معتبر وارد کنید</span>
                    <?php } ?>

                    <div class="form-input">
                        <span ><i class="fa-solid fa-user-pen"></i></span>
                        <input type="username" placeholder="نام کاربری *"  name="username" id="username" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['username'])) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن نام کاربری الزامی است *</span>
                    <?php } ?>

                    <div class="form-input">
                        <span ><i class="fa-solid fa-key"></i></span>
                        <input type="password" placeholder="رمز عبور *" name="password" id="password" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['password'])) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن رمز عبور الزامی است *</span>
                    <?php } ?>

                    <div class="form-input">
                        <span ><i class="fa-solid fa-lock"></i></span>
                        <input type="password" placeholder="تکرار رمز عبور *" name="re-password" id="re-password" tabindex="10" />
                    </div>

                    <?php if(isset($_POST['re-password'])) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">رمز عبور و تکرار آن یکسان نیست * وارد کردن تکرار رمز عبور الزامی است </span>
                    <?php } ?>

                    <div class="form-input">
                        <textarea name="user-address" id="user-address" style="resize: none;" class="user-address" placeholder="آدرس دقیق منزل *" cols="30" rows="3" tabindex="10"></textarea>
                    </div>

                    <?php if(isset($_POST['user-address'])) { ?>
                        <span id="name-error" class="err" style="font-size: 10px; color: red;margin: 10px 0">وارد کردن آدرس منزل الزامی است *</span>
                    <?php } ?>

                    <div class="mb-3 remember-me">
                        <div class="custom-control custom-check">
                            <input type="checkbox" class="custom-control-input" name="checkBox-reg" id="checkBox-reg" />
                            <label class="custom-control-label" for="checkBox-reg">مرا به خاطر بسپار !</label>
                        </div>
                    </div>

                    <div class="mb-3 submit-box">
                        <button class="btn btn-block btn-outline-primary" id="submit" type="submit">ارسال اطلاعات</button>
                    </div>

                    <hr class="my-4">

                    <div class="mb-2 text-center have-acc">
                        <span>حساب دارید ؟ </span><a href="login.php" target="_blank">وارد شوید !</a>
                    </div>

                </form>

            </div>

            <div class="img-left reg-img d-none d-md-flex "></div>
        </div>
    </div>
</div>
