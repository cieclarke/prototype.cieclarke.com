{strip}{html_style}
.thumbnailCategory .illustration{ldelim}
	width: {$derivative_params->max_width()+5}px;
}

.content .thumbnailCategory .description{ldelim}
	height: {$derivative_params->max_height()+5}px;
}
{/html_style}{/strip}
{footer_script}
  var error_icon = "{$ROOT_URL}{$themeconf.icon_dir}/errors_small.png", max_requests = {$maxRequests};
{/footer_script}
<ul class="thumbnailCategories">
{foreach from=$category_thumbnails item=cat name=cat_loop}
{assign var=derivative value=$pwg->derivative($derivative_params, $cat.representative.src_image)}
{if !$derivative->is_cached()}
{combine_script id='jquery.ajaxmanager' path='themes/default/js/plugins/jquery.ajaxmanager.js' load='footer'}
{combine_script id='thumbnails.loader' path='themes/default/js/thumbnails.loader.js' require='jquery.ajaxmanager' load='footer'}
{/if}
<li class="{if $smarty.foreach.cat_loop.index is odd}odd{else}even{/if}">
	<article>
		
		<h3>
			<a href="{$cat.URL}">{$cat.NAME}</a>			
		</h3>
		
		<a href="{$cat.URL}">
			<img {if $derivative->is_cached()}src="{$derivative->get_url()}"{else}src="{$ROOT_URL}{$themeconf.icon_dir}/img_small.png" data-src="{$derivative->get_url()}"{/if} alt="{$cat.TN_ALT}" title="{$cat.NAME|@replace:'"':' '|@strip_tags:false} - {'display this album'|@translate}">
		</a>
		
		
				{if isset($cat.INFO_DATES) }
				<p class="dates">{$cat.INFO_DATES}</p>
				{/if}
				<p class="Nb_images">{$cat.CAPTION_NB_IMAGES}</p>
				{if not empty($cat.DESCRIPTION)}
				<p>{$cat.DESCRIPTION}</p>
				{/if}
		
		</article>
	</li>
{/foreach}
</ul>
