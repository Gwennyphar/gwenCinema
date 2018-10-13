{extends file="parent:frontend/index/index.tpl"}
 
{block name="frontend_index_content"}
    <div style="margin-left: 16.25rem;">
        <h3>{$gwen_title}</h3>
        <iframe width="424" height="238" src="{$gwen_ytp_url}" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
    </div>
{/block}