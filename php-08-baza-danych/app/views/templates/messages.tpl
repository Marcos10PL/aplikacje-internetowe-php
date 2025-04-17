<div style="text-align: center;">
  {if $messages->isError()}
  <div style="color: firebrick; font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none; padding: 0; margin: 0;">
      {foreach $messages->getErrors() as $err}
      {strip}
      <li>{$err}</li>
      {/strip}
      {/foreach}
    </ol>
  </div>
  {/if}
  
  {if $messages->isInfo()}
  <div style="color: rgb(175, 219, 52); font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none; padding: 0; margin: 0;">
      {foreach $messages->getInfos() as $inf}
      {strip}
        <li>{$inf}</li>
      {/strip}
      {/foreach}
    </ol>
  </div>
  {/if}
</div>
