<!-- About -->
<div class="row">
    <div class="col-lg-4">
        <div class="details s-web-dom">
            <h3>Book your</h3>
            <h2>Domain</h2>
            <div class="line-b"></div>
            <p>We appreciate your business and look forward to a great relationship.
            </p>
        </div>
    </div>
    <div class="col-lg-push-1 col-lg-7">
        <img src="{$WEB_ROOT}/templates/{$template}/img/domain.png" width="560" height="402" alt="Domains" class="img-about">
    </div>
</div>

<div class="clearfix"></div>

<!-- Booking Area -->
<div class="domain-book">
    <form method="post" action="domainchecker.php">
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <input class="book-d" type="text" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none">
            </div>
            <div class="col-lg-2 col-sm-2">
                <input class="search-b" value="{$LANG.search}" type="submit">
            </div>
            <div class="col-lg-2 col-sm-2">
                <input class="transfer-b" name="transfer" value="{$LANG.domainstransfer}" type="submit">
            </div>
            <div class="col-lg-2 col-sm-2">
                <input class="renew-b" value="Renew" type="submit">
            </div>
        </div>
        {include file="$template/includes/captcha.tpl"}
    </form>
</div>

<!-- Price Table -->
<div class="row">
    <section class="plans-hp">
        <h2>Domain Pricing</h2>
        <div class="table-responsive">
            <table class="custom table">
                <!-- Variables -->
                <tr class="bg-custom cus">
                    <td>Ext</td>
                    <td>Cost</td>
                    <td>Renewal</td>
                    <td>Transfer</td>
                    <td>Order</td>
                    <td></td>
                </tr>
                <!-- .COM -->
                <tr>
                    <td>.Com</td>
                    <td>$12 per year</td>
                    <td>$8</td>
                    <td>$1</td>
                    <td><a href="cart.php">Book</a></td>
                    <td><span class="fa fa-long-arrow-right"></span></td>
                </tr>
                <!-- .Net -->
                <tr class="bg-custom">
                    <td>.Net</td>
                    <td>$12 per year</td>
                    <td>$8</td>
                    <td>$1</td>
                    <td><a href="cart.php">Book</a></td>
                    <td><span class="fa fa-long-arrow-right"></span></td>
                </tr>
                <!-- .Info -->
                <tr>
                    <td>.Net</td>
                    <td>$12 per year</td>
                    <td>$8</td>
                    <td>$1</td>
                    <td><a href="cart.php">Book</a></td>
                    <td><span class="fa fa-long-arrow-right"></span></td>
                </tr>
                <!-- .Web -->
                <tr class="bg-custom">
                    <td>.Net</td>
                    <td>$12 per year</td>
                    <td>$8</td>
                    <td>$1</td>
                    <td><a href="cart.php">Book</a></td>
                    <td><span class="fa fa-long-arrow-right"></span></td>
                </tr>
                <!-- .Tv -->
                <tr>
                    <td>.Net</td>
                    <td>$12 per year</td>
                    <td>$8</td>
                    <td>$1</td>
                    <td><a href="cart.php">Book</a></td>
                    <td><span class="fa fa-long-arrow-right"></span></td>
                </tr>
            </table>
        </div>
    </section>
</div>

<!-- Faq -->
<div class="row">
    <section class="faq">
        <h2>Domains Faq</h2>
        <div class="col-lg-6">
            <!-- Item #1 -->
            <div class="item-faq">
                <h3>Can I add software to my account ?</h3>
                <p>Yes. You have complete control over all aspects of your account, including the installation of software. If you install software not included in your hosting plan .</p>
            </div>
            <!-- Item #2 -->
            <div class="item-faq">
                <h3>How much does additional bandwidth cost ?</h3>
                <p>If you need additional bandwidth for your account you will need to upgrade to a larger plan. You can upgrade to a larger plan through your control panel at cp.westhost.com. </p>
            </div>
            <!-- Item #3 -->
            <div class="item-faq">
                <h3>Can I upgrade my account if I need to ?</h3>
                <p>Yes. You can upgrade your account at anytime. You will pay the difference between your current account and your new account.</p>
            </div>
        </div>
        <div class="col-lg-6">
            <!-- Item #4 -->
            <div class="item-faq">
                <h3>How do I transfer files to my website ?</h3>
                <p>Files must be transferred to the Web server via File Transport Protocol (FTP) or your account's Web-based File Manager.</p>
            </div>
            <!-- Item #5 -->
            <div class="item-faq">
                <h3>How long does it take to set up a new account ?</h3>
                <p>New accounts are guaranteed to be set up within 24 hours from the time we receive your order. </p>
            </div>
            <!-- Item #6 -->
            <div class="item-faq">
                <h3>Can I subdivide my space and resell it ?</h3>
                <p>Yes, we do allow you to create subdirectories (http://www.yourdomain.com/something/) which you can use to offer friends or clients space as long as it's within our policy guidelines.</p>
            </div>
        </div>
    </section>
</div>