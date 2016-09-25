<div class="breadcrumb">
    <div class="container">
        <span class="fa fa-home bread"></span> {foreach $breadcrumb as $item}
        <li{if $item@last} class="active" {/if}>
            {if !$item@last}<a href="{$item.link}">{/if}
            {$item.label}
            {if !$item@last}</a>{/if}
            </li>
            {/foreach}
    </div>
</div>