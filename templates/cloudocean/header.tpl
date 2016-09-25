<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"} {$headoutput}

</head>

<body>

    {$headeroutput}
    <!-- Header -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Logo -->
                        <a href="{$WEB_ROOT}/index.php"><img class="logo" src="{$WEB_ROOT}/templates/{$template}/img/logo.png" alt="{$companyname}" width="134" height="49"></a>
                    </div>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="col-lg-9 col-lg-push-1">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <!-- Menu -->
                        <ul class="menu-header">
                            <!-- Products -->
                            <li>
                                    <a id="dLabel-c" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Product</a>
                            </li>
                            <!-- Technology -->
                            <li>
                                    <a id="dLabel-cu" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">About</a>
                            </li>
                            <!-- Partners -->
                            <li>
                                    <a href="partners.php">Partners</a>
                            </li>
                            <!-- Contact Us -->
                            <li>
                                    <a href="contact.php">Contact</a>
                            </li>
                            <li>
                                <!-- Language -->
                                {if $languagechangeenabled && count($locales) > 1}
                                <a class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-language"></i></a>
                                <div id="languageChooserContent" class="hidden">
                                    <ul>
                                        {foreach from=$locales item=locale}
                                        <li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
                                        {/foreach}
                                    </ul>
                                </div>
                                {/if}
                                <!-- Shopping Cart -->
                                {if $cartitemcount || $loggedin}
                                <a href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"> </span><span class="cart-item" id="cartItemCount">{$cartitemcount}</span><span class="hidden-xs"> </span></a>
                                {/if}
                                <!-- Notifications -->
                                {if $loggedin}
                                <a class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="{lang key=" notifications "}"><i class="fa fa-bell"></i> <span class="count-alert">{$clientAlerts|count}</span></a>
                                <div id="accountNotificationsContent" class="hidden">
                                    {foreach $clientAlerts as $alert}
                                    <div class="clientalert text-{$alert->getSeverity()}">{$alert->getMessage()}{if $alert->getLinkText()} <a href="{$alert->getLink()}" class="btn btn-xs btn-{$alert->getSeverity()}">{$alert->getLinkText()}</a>{/if}</div>
                                    {foreachelse}
                                    <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> {$LANG.notificationsnone}</div>
                                    {/foreach}
                                </div>
                                {/if}
                            </li>
                            <!-- Client Area -->
                            <li>
                                <div class="dropdown">
                                    <a id="dLabel" data-target="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="clientarea" href="#"><span class="glyphicon glyphicon-user"></span></a>
                                    <div class="custom dropdown-menu" aria-labelledby="dLabel">
                                        {if $loggedin}
                                        <div class="client-links">
                                            <a href="clientarea.php">Account</a>
                                            <a href="submitticket.php">New Ticket</a>
                                            <a href="cart.php">Cart</a>
                                            <a href="knowledgebase.php">Knowledgebase</a>
                                            <a href="logout.php">Logout</a>
                                        </div>
                                        {else}
                                        <form class="login-area-custom" method="post" action="{$systemsslurl}dologin.php">
                                            <!-- Email -->
                                            <input type="email" name="username" class="c-inp" id="inputEmail" placeholder="{$LANG.enteremail}" autofocus>
                                            <!-- Password -->
                                            <input type="password" name="password" class="c-inp" id="inputPassword" placeholder="{$LANG.clientareapassword}" autocomplete="off">
                                            <!-- Login -->
                                            <input id="login" type="submit" class="c-sub" value="{$LANG.loginbutton}" />
                                            <!-- Remember -->
                                            <div class="c-cont">
                                                <input name="rememberme" class="c-check" type="checkbox"><span>{$LANG.loginrememberme}</span>
                                            </div>
                                            <!-- Forget password -->
                                            <div class="c-cont">
                                                <span class="fa fa-question"></span><a href="pwreset.php">{$LANG.forgotpw}</a>
                                            </div>
                                            <!-- NewClient -->
                                            <div class="c-cont-c">
                                                <span class="fa fa-user-plus"></span><a href="register.php">New Client</a>
                                            </div>
                                        </form>
                                        {/if}
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {if $templatefile == 'homepage'}
        <!-- Carousel -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-push-1">
                    <div class="carousel-p-old">
                        <!-- Dedicated Item -->
                        <div class="item">
                            <h1>Headline Goes Here</h1>
                            <p>Subtext Goes Here</p>
                            <img class="server-d" src="{$WEB_ROOT}/templates/{$template}/img/server.png" height="189" width="613" alt="Deicated Servers">
                            <!-- Features -->
                            <!--
							<div class="features">
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>4 x 3.3 GHz CPU</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>1TB (Mirrored) Storage</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>16GB Available RAM</span>
                                </div>
                                <div class="c-feature">
                                    <span class="fa fa-check-circle"></span>
                                    <span>15TB Bandwidth</span>
                                </div>
								-->
								
                                <!-- Price & Order -->
								<!--
                                <div class="buttons-item hidden-xs">
                                    <div class="price carousel">60.95 $</div>
                                    <a class="order" href="cart.php">Order</a>
                                </div>
								-->
                        </div>
                    </div>
                    <!-- Spport -->
					<!--
                    <div class="item">
                        <h1>Support Resources</h1>
                        <p>We maintain a vast knowledge base full with articles, guides, how-tos, instructions</p>
                        <!-- Resourses -->
						<!--
                        <div class="row">
                            <div class="resources">
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Faq ->
                                    <i class="fa fa-question custom"></i>
                                    <a href="#">Faq</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Tickets ->
                                    <i class="fa fa-comments custom"></i>
                                    <a href="submitticket.php">Tickets</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- LiveChat ->
                                    <i class="fa fa-headphones custom"></i>
                                    <a href="#">Live Chat</a>
                                </div>
                                <div class="col-lg-3 col-sm-3">
                                    <!-- Knowledge Base ->
                                    <i class="fa fa-file-text custom"></i>
                                    <a href="knowledgebase.php">Knowledge Base</a>
                                </div>
                            </div>
                        </div>
                        <!-- Search ->
                        <form method="post" action="{$WEB_ROOT}/knowledgebase.php?action=search" class="search-custom">
                            <input type="text" name="search" placeholder="Have a question ?" class="item-search">
                        </form>
                        <!-- Contact us ->
                        <a class="contact" href="contact.php">Contact us</a>
                    </div>
				-->
                </div>
            </div>
        </div>
        <!-- Bg -->
        <img class="bg-h" src="{$WEB_ROOT}/templates/{$template}/img/h-bg.png" alt="Cloud Ocean" width="1299" height="368"> {else}

        <!-- BreadCrumb -->
        {include file="$template/includes/breadcrumb.tpl"} {/if}
    </header>
    {include file="$template/includes/verifyemail.tpl"}

    <section id="main-body" class="container">
        <h2 class="validation">validation</h2>
        <div class="row">
            {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
				{if $primarySidebar->hasChildren()}
				<div class="col-md-9 pull-md-right">
				    {include file="$template/includes/pageheader.tpl"}
				</div>
				{/if}
				<div class="col-md-3 pull-md-left sidebar">
				    {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
				</div>
            {/if}
            <!-- Container for main page display content -->
            <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
                {if !$primarySidebar->hasChildren() && !$showingLoginPage && !$inShoppingCart && $templatefile != 'homepage'}
					{include file="$template/includes/pageheader.tpl"}
				{/if}
