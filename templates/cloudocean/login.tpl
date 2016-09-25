{if $incorrect}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.loginincorrect textcenter=true}
{elseif $verificationId && empty($transientDataName)}
    {include file="$template/includes/alert.tpl" type="error" msg=$LANG.verificationKeyExpired textcenter=true}
{elseif $ssoredirect}
    {include file="$template/includes/alert.tpl" type="info" msg=$LANG.sso.redirectafterlogin textcenter=true}
{/if}
<!-- Login -->
<div class="row">
    <section class="portfolio-page">
        <div class="col-lg-push-1 col-lg-10">
            <h2>Login</h2>
            <p>Login to your account now ;&#41;</p>
            <!-- Login Form -->
            <form method="post" action="{$systemsslurl}dologin.php" role="form" class="login-custom">
                <div class="row">
                    <!-- Mail -->
                    <div class="col-lg-6">
                        <input class="userlogin" type="email" name="username" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                    </div>
                    <!-- Password -->
                    <div class="col-lg-6">
                        <input class="userlogin" type="password" name="password" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off">
                    </div>
                </div>
                <!-- Login -->
                <div class="row">
                    <div class="col-lg-12">
                        <input id="login" value="{$LANG.loginbutton}" type="submit" class="login-but">
                    </div>
                </div>
                <!-- Check -->
                <div class="check-box-c">
                    <input type="checkbox"><span>{$LANG.loginrememberme}</span>
                </div>
                <!-- Forget -->
                <div class="forget-cus">
                    <span class="fa fa-question custom-c"></span>
                    <a href="pwreset.php">{$LANG.forgotpw}</a>
                </div>
                <!-- New Client -->
                <div class="newclient-cus">
                    <span class="fa fa-user-plus custom-c"></span>
                    <a href="register.php">New Account ?</a>
                </div>
            </form>
        </div>
    </section>
</div>