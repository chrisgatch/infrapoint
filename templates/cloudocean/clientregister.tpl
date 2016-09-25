{if in_array('state', $optionalFields)}
<script>
    var stateNotRequired = true;
</script>
{/if}

<script type="text/javascript" src="{$BASE_PATH_JS}/StatesDropdown.js"></script>

{if $registrationDisabled} {include file="$template/includes/alert.tpl" type="error" msg=$LANG.registerCreateAccount|cat:' <strong><a href="cart.php" class="alert-link">'|cat:$LANG.registerCreateAccountOrder|cat:'</a></strong>'} {/if} {if $errormessage} {include file="$template/includes/alert.tpl" type="error" errorshtml=$errormessage} {/if} {if !$registrationDisabled}

<!-- Register -->
<div class="row">
    <section class="portfolio-page cus2">
        <div class="col-lg-12">
            <h2>Regiser</h2>
            <p>Join our community now ;&#41;</p>
            <!-- Register Form -->
            <form class="login-custom" method="post" class="using-password-strength" action="{$smarty.server.PHP_SELF}" role="form">
                <input type="hidden" name="register" value="true" />

                <div class="row">

                    <div class="col-lg-6">
                        <!-- Firstname -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientareafirstname}" name="firstname" id="firstname" value="{$clientfirstname}" {if !in_array( 'firstname', $optionalFields)}required{/if}>

                        <!-- lastname -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientarealastname}" name="lastname" id="lastname" value="{$clientlastname}" {if !in_array( 'lastname', $optionalFields)}required{/if}>

                        <!-- companyname -->
                        <input class="userlogin" placeholder="{$LANG.clientareacompanyname}" type="text" name="companyname" id="companyname" value="{$clientcompanyname}">

                        <!-- email -->
                        <input class="userlogin" placeholder="{$LANG.clientareaemail}" type="email" name="email" id="email" value="{$clientemail}">

                        <!-- password -->
                        <div id="newPassword1" class="has-feedback">
                            <input class="userlogin" placeholder="{$LANG.clientareapassword}" type="password" id="inputNewPassword1" name="password" autocomplete="off">
                            <span class="form-control-feedback glyphicon glyphicon-password"></span> {include file="$template/includes/pwstrength.tpl"}
                        </div>

                        <!-- Re-password -->
                        <div id="newPassword2" class="has-feedback">
                            <input class="userlogin custom" placeholder="{$LANG.clientareaconfirmpassword}" type="password" id="inputNewPassword2" name="password2" autocomplete="off">
                            <span class="form-control-feedback glyphicon glyphicon-password"></span>
                            <div id="inputNewPassword2Msg">
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">

                        <!-- address1 -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientareaaddress1}" name="address1" id="address1" value="{$clientaddress1}" {if !in_array( 'address1', $optionalFields)}required{/if}>

                        <!-- address2 -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientareaaddress2}" name="address2" id="address2" value="{$clientaddress2}">

                        <!-- city -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientareacity}" name="city" id="city" value="{$clientcity}" {if !in_array( 'city', $optionalFields)}required{/if}>

                        <!-- country -->
                        <select id="country" name="country" class="userlogin">
                            {foreach $clientcountries as $countryCode => $countryName}
                            <option value="{$countryCode}" {if (!$clientcountry && $countryCode eq $defaultCountry) || ($countryCode eq $clientcountry)} selected="selected" {/if}>
                                {$countryName}
                            </option>
                            {/foreach}
                        </select>

                        <!-- State -->
                        <div class="form-group">
                            <input class="userlogin" placeholder="State" type="text" name="state" id="state" value="{$clientstate}" {if !in_array( 'state', $optionalFields)}required{/if}>
                        </div>
                        <!-- Post Code -->
                        <input class="userlogin" type="text" placeholder="{$LANG.clientareapostcode}" name="postcode" id="postcode" value="{$clientpostcode}" {if !in_array( 'postcode', $optionalFields)}required{/if}>


                        <!-- phone -->
                        <input class="userlogin" placeholder="{$LANG.clientareaphonenumber}" type="tel" name="phonenumber" id="phonenumber" value="{$clientphonenumber}" {if !in_array( 'phonenumber', $optionalFields)}required{/if}> {if $customfields} {foreach from=$customfields key=num item=customfield}
                        <div class="form-group">
                            <label class="control-label" for="customfield{$customfield.id}">{$customfield.name}</label>
                            <div class="control">
                                {$customfield.input} {$customfield.description}
                            </div>
                        </div>
                        {/foreach} {/if} {if $currencies}
                        <div class="form-group">
                            <label for="currency" class="control-label">{$LANG.choosecurrency}</label>
                            <select id="currency" name="currency" class="form-control">
                                {foreach from=$currencies item=curr}
                                <option value="{$curr.id}" {if !$smarty.post.currency && $curr.default || $smarty.post.currency eq $curr.id } selected{/if}>{$curr.code}</option>
                                {/foreach}
                            </select>
                        </div>
                        {/if}
                    </div>
                </div>

                {if $securityquestions}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{$LANG.clientareasecurityquestion}:</h3>
                    </div>
                    <div class="panel-body">
                        <div class="form-group col-sm-12">
                            <select name="securityqid" id="securityqid" class="form-control">
                                {foreach key=num item=question from=$securityquestions}
                                <option value={$question.id}>{$question.question}</option>
                                {/foreach}
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="securityqans">{$LANG.clientareasecurityanswer}</label>
                            <div class="col-sm-6">
                                <input type="password" name="securityqans" id="securityqans" class="form-control" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                </div>
                {/if} {include file="$template/includes/captcha.tpl"} {if $accepttos}
                <div class="panel panel-danger tospanel">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-exclamation-triangle tosicon"></span> &nbsp; {$LANG.ordertos}</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-md-12">
                            <label class="checkbox">
                                <input type="checkbox" name="accepttos" class="accepttos"> {$LANG.ordertosagreement} <a href="{$tosurl}" target="_blank">{$LANG.ordertos}</a>
                            </label>
                        </div>
                    </div>
                </div>
                {/if}
                <input type="submit" value="{$LANG.clientregistertitle}" class="login-but">
            </form>
        </div>
    </section>
</div>

{/if}