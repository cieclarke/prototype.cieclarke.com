<dt>
	{if isset($U_START_FILTER)}
	<a href="{$U_START_FILTER}" class="pwg-state-default pwg-button menubarFilter" title="{'display only recently posted photos'|@translate}" rel="nofollow"><span class="pwg-icon pwg-icon-filter"> </span></a>
	{/if}
	{if isset($U_STOP_FILTER)}
	<a href="{$U_STOP_FILTER}" class="pwg-state-default pwg-button menubarFilter" title="{'return to the display of all photos'|@translate}"><span class="pwg-icon pwg-icon-filter-del"> </span></a>
	{/if}
	<a href="{$block->data.U_CATEGORIES}">{'Albums'|@translate}</a>
</dt>
<dd>
{assign var='ref_level' value=0}
{foreach from=$block->data.MENU_CATEGORIES item=cat}
  {if $cat.LEVEL > $ref_level}
  <ul>
  {else}
    </li>
    {'</ul></li>'|@str_repeat:($ref_level-$cat.LEVEL)}
  {/if}
    <li {if $cat.SELECTED}class="selected"{/if}>
      <a href="{$cat.URL}" {if $cat.IS_UPPERCAT}rel="up"{/if} title="{$cat.TITLE}">{$cat.NAME}</a>
      {if $cat.count_images > 0}
      <span class="{if $cat.nb_images > 0}menuInfoCat{else}menuInfoCatByChild{/if}" title="{$cat.TITLE}">[{$cat.count_images}]</span>
      {/if}     
  {assign var='ref_level' value=$cat.LEVEL}
{/foreach}
{'</li></ul>'|@str_repeat:$ref_level}

    <p class="totalImages hide">{$block->data.NB_PICTURE|@translate_dec:'%d photo':'%d photos'}</p>
</dd>
