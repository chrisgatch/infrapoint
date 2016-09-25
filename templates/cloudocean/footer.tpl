</div>
<!-- /.main-content -->
{if !$inShoppingCart && $secondarySidebar->hasChildren()}
<div class="col-md-3 pull-md-left sidebar">
    {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
</div>
{/if}
</div>
<div class="clearfix"></div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="contact-b">
                <!-- Contact -->
                <div class="col-lg-4 col-xs-12 col-sm-6">
                    <!-- Get In Touch -->
                    <div class="getin-t">
                        <h1>Get in Touch ;&#41;</h1>
                        <div class="methods">
                            <div class="method">
                                <span class="fa fa-home"></span>
                                <span>42 Nicholson Street Buffalo New York US 19865</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-phone"></span>
                                <span>+201112357755</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-envelope"></span>
                                <span>info@WHMCSdes.com</span>
                            </div>
                            <div class="method">
                                <span class="fa fa-calendar"></span>
                                <span>Monday - Saturday : 8:00 Am - 18:00 Pm <br /> Friday : Closed</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Products -->
            <div class="col-lg-2 col-xs-12 col-sm-3">
                <div class="products-footer">
                    <h1>Products</h1>
                    <ul>
                        <li><a href="shared-hosting.php">Shared Hosting</a></li>
                        <li><a href="cloud-hosting.php">Cloud Hosting</a></li>
                        <li><a href="dedicated-hosting.php">Dedicated Hosting</a></li>
                        <li><a href="domains.php">Domains</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="seo.php">Seo</a></li>
                        <li><a href="web-design.php">Web Design</a></li>
                        <li><a href="web-development.php">Web Development</a></li>
                    </ul>
                </div>
            </div>

            <!-- Company -->
            <div class="col-lg-2 col-xs-12 col-sm-3">
                <div class="company-footer">
                    <h1>Company</h1>
                    <ul>
                        <li><a href="about.php">About us</a></li>
                        <li><a href="#">Client Area</a></li>
                        <li><a href="contact.php">Careers</a></li>
                        <li><a href="#">Knowledge Base</a></li>
                        <li><a href="blog1.php">Blog</a></li>
                        <li><a href="portfolio.php">Portfolio</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="register.php">Register</a></li>
                    </ul>
                </div>
            </div>
            <div class="contact-b">
                <div class="col-lg-4 col-xs-12 col-sm-6">
                    <!-- Follow us -->
                    <div class="followus">
                        <h1>Follow us</h1>
                        <ul>
                            <li>
                                <a class="fa fa-facebook" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-instagram" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-google-plus" href="#"></a>
                            </li>
                            <li>
                                <a class="fa fa-pinterest" href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <!-- Payment  -->
                    <div class="payment">
                        <h1>Payment</h1>
                        <span class="fa fa-cc-visa"></span>
                        <span class="fa fa-cc-mastercard"></span>
                        <span class="fa fa-cc-paypal"></span>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <p class="copyr">Copyright &copy; {$date_year} {$companyname}. All Rights Reserved.</p>
            <!-- Important Links -->
            <ul class="impo-l">
                <li><a href="terms.php">Terms of Services</a></li>
                <li><a href="privacy.php">Privacy Policy</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </div>
</footer>

<!-- Carousel -->
<script src="{$WEB_ROOT}/templates/{$template}/js/owl.carousel.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- CountDown -->
<script type="text/javascript" src="{$WEB_ROOT}/templates/{$template}/js/jquery.plugin.js"></script>
<script type="text/javascript" src="{$WEB_ROOT}/templates/{$template}/js/jquery.countdown.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/bootstrap.js"></script>
<script src="{$BASE_PATH_JS}/jquery-ui.min.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/whmcs.js"></script>
<script src="{$BASE_PATH_JS}/AjaxModal.js"></script>
<script src="{$WEB_ROOT}/templates/{$template}/js/plugins.js"></script>
{$footeroutput}
</body>

</html>