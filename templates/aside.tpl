<div class="wrapper">

  <ul class="nav nav-tabs">
    {foreach $gpl as $gpl_item}
    <li class="nav-item">
      {if $gpl_item.active == 1}
        <a class="nav-link active" data-bs-toggle="tab" href="#group{$gpl_item.id}">{$gpl_item.name}</a>
      {else}
        <a class="nav-link" data-bs-toggle="tab" href="#group{$gpl_item.id}">{$gpl_item.name}</a>
      {/if}
    </li>
    {/foreach}
  </ul>
  <div class="tab-content">
    {foreach $gpl as $gpl_item}
      {if $gpl_item.active == 1}
        <div class="tab-pane container active" id="group{$gpl_item.id}">
      {else}
        <div class="tab-pane container fade" id="group{$gpl_item.id}">
      {/if}
      {if $gpl_item.sub}
       <ul class="nav flex-column">
            {foreach $gpl_item.sub as $sub_item}
            <li class="nav-item">
              {if $sub_item.active == 1}
                <a class="navbar-brand" id="btnNewGroup" href="#editGroupmodal" data-bs-toggle="navbar-brand">{#journal_plus_ico#} </a>
                <a class="nav-link active group_color_text subgroup" href="?page=shop&group={$sub_item.id}">{$sub_item.name}</a>
              {else}
                <a class="nav-link group_color_text subgroup" href="?page=shop&group={$sub_item.id}">{$sub_item.name}</a>
              {/if}
            </li>
            {/foreach}
        </ul>
      {/if}
      </div>
    {/foreach}
  </div>
  </div>
  
