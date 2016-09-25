<!-- Contact us -->
<section class="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-push-1 col-lg-10">
                <h2>Get in Touch with us</h2>
                <p>Glad to see you anytime ;&#41;</p>
                {if $sent} {include file="$template/includes/alert.tpl" type="success" msg=$LANG.contactsent textcenter=true} {/if} {if $errormessage} {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage} {/if} {if !$sent}
                <!-- Contact Form -->
                <form method="post" action="contact.php" class="login-custom" role="form">
                    <input type="hidden" name="action" value="send">
                    <div class="row">
                        <!-- User -->
                        <div class="col-lg-6">
                            <input type="text" placeholder="Username" class="userlogin" id="inputName" name="name" value="{$name}">
                        </div>
                        <!-- Email -->
                        <div class="col-lg-6">
                            <input type="email" placeholder="Email" class="userlogin" name="email" value="{$email}" id="inputEmail">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Subject -->
                        <div class="col-lg-12">
                            <input placeholder="Subject" class="userlogin" type="subject" name="subject" value="{$subject}" id="inputSubject">
                        </div>
                    </div>
                    <!-- Message -->
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="message" id="inputMessage message-cus" class="userlogin" placeholder="Message">{$message}</textarea>
                        </div>
                    </div>
                    <!-- Captcha -->
                    <br />
                    <div class="panel-body">
                        <p>{lang key="captchaverify"}</p>
                        {if $captcha eq "recaptcha"} {$recaptchahtml} {else}
                        <br />
                        <div class="text-center">
                            <div class="col-md-5 col-sm-5 col-xs-5 captchaimage">
                                <img src="includes/verifyimage.php" align="middle" />
                            </div>
                            <div class="col-md-3 col-sm-3 col-xs-5">
                                <input id="inputCaptcha" type="text" name="code" maxlength="5" class="form-control">
                            </div>
                        </div>
                        {/if}
                    </div>
                    <!-- Send -->
                    <div class="row">
                        <div class="col-lg-12">
                            <input type="submit" value="{$LANG.contactsend}" class="login-but">
                        </div>
                    </div>
                </form>
                {/if}
            </div>
        </div>
    </div>
</section>
<!-- FollowUs -->
<div class="socialmedia">
    <div class="container">
        <h3>Follow us <br/> <b>Now ;&#41;</b></h3>
        <div class="social-icons">
            <a href="#" class="fa fa-facebook social-cus"></a>
            <a href="#" class="fa fa-twitter social-cus"></a>
            <a href="#" class="fa fa-instagram social-cus"></a>
            <a href="#" class="fa fa-linkedin social-cus"></a>
            <a href="#" class="fa fa-google-plus social-cus"></a>
        </div>
    </div>
</div>
<!-- Contact -->
<div class="contact-ways">
    <div class="container">
        <div class="mail-con">
            <span class="fa fa-envelope mail"></span>
            <span>info@WHMCSdes.com</span>
        </div>
        <div class="phone-con">
            <span class="fa fa-mobile mail"></span>
            <span>+201112357755</span>
        </div>
    </div>
</div>
<!-- Map -->
<iframe class="map contact" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3454.802474656164!2d31.20738331457488!3d30.013827626974383!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x145846e4223b0b97%3A0x8404b19596ed198f!2sEgypt+Pyramids+Tours!5e0!3m2!1sen!2seg!4v1466970648907" allowfullscreen></iframe>