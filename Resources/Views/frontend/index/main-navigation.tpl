{extends file="parent:frontend/index/main-navigation.tpl"}
{block name='frontend_index_navigation_categories'}
  {$smarty.block.parent}
  {block name='frontend_index_navigation_categories_top_home'}
    <li class="navigation--entry{if $sCategoryCurrent == $sCategoryStart && $Controller == 'video'} is--active{/if} is--home" role="menuitem">
      {block name='frontend_index_navigation_categories_top_link_home'}
        <a class="navigation--link is--first{if $sCategoryCurrent == $sCategoryStart && $Controller == 'video'} active{/if}" href="{url controller='video'}" title="video" itemprop="url">
          <span itemprop="name">{$gwen_controller_page}</span>
        </a>
      {/block}
    </li>
  {/block}
{/block}
