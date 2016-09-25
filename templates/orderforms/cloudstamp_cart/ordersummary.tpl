<h3><span class="product-group">{$producttotals.productinfo.groupname}</span></h3>

{if $product.bid}<br />Bundle: <span>{$LANG.bundledeal}</span>{/if}

<hr />
<div class="clearfix">
    <span class="pull-left">{$producttotals.productinfo.name}</span>
    <span class="pull-right">{$producttotals.pricing.baseprice}</span>
</div>

{if $producttotals.configoptions}
<hr />
<h4>Configurable Options</h4>
{foreach $producttotals.configoptions as $configoption}
    {if $configoption}
        <div class="clearfix">
            <span class="pull-left">&nbsp;&raquo; {$configoption.name}: {$configoption.optionname}</span>
            <span class="pull-right">{$configoption.recurring}{if $configoption.setup} + {$configoption.setup} {$LANG.ordersetupfee}{/if}</span>
        </div>
    {/if}
{/foreach}
{/if}

{if $producttotals.addons}
<hr />
<h4>Optional Products</h4>
{foreach $producttotals.addons as $addon}
    <div class="clearfix">
        <span class="pull-left">+ {$addon.name}</span>
        <span class="pull-right">{$addon.recurring}</span>
    </div>
{/foreach}
{/if}


{if $producttotals.pricing.setup || $producttotals.pricing.recurring || $producttotals.pricing.addons}
		<hr />
		<h4>Setup Fees</h4>
		<div class="summary-totals">
        {if $producttotals.pricing.setup}
            <div class="clearfix">
                <span class="pull-left">{$LANG.cartsetupfees}:</span>
                <span class="pull-right">{$producttotals.pricing.setup}</span>
            </div>
        {/if}
        {foreach from=$producttotals.pricing.recurringexcltax key=cycle item=recurring}
            <div class="clearfix">
                <span class="pull-left">{$cycle}:</span>
                <span class="pull-right">{$recurring}</span>
            </div>
        {/foreach}
        {if $producttotals.pricing.tax1}
            <div class="clearfix">
                <span class="pull-left">{$carttotals.taxname} @ {$carttotals.taxrate}%:</span>
                <span class="pull-right">{$producttotals.pricing.tax1}</span>
            </div>
        {/if}
        {if $producttotals.pricing.tax2}
            <div class="clearfix">
                <span class="pull-left">{$carttotals.taxname2} @ {$carttotals.taxrate2}%:</span>
                <span class="pull-right">{$producttotals.pricing.tax2}</span>
            </div>
        {/if}
    </div>
{/if}

<hr />
<h4>{$LANG.ordertotalduetoday}</h4>
<div class="total-due-today">
    <span class="amt">{$producttotals.pricing.totaltoday}</span>
    <!--<span>{$LANG.ordertotalduetoday}</span>-->
</div>
