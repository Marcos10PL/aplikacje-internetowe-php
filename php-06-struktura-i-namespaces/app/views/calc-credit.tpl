{extends file="main.tpl"}

{block name=content}

<form method="post" action="{$conf->action_root}calcCreditCompute#main">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="number" name="sum" step="any" value="{$form->sum}" placeholder="Kwota" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="years" step="any" value="{$form->years}" placeholder="Lata" />
    </div>
    <div class="col-7 col-12-small">
      <input type="number" name="interest-rate" step="any" value="{$form->interestRate}" placeholder="Oprocentowanie" />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Oblicz" />
    </div>
  </div>
</form>

<div style="text-align: center;">
  {if $messages->isError()}
  <div style="color: firebrick; font-size: 1.2rem; text-transform: uppercase;">
    <ol style="list-style-type: none;">
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
    <ol style="list-style-type: none;">
      {foreach $messages->getInfos() as $inf}
      {strip}
        <li>{$inf}</li>
      {/strip}
      {/foreach}
    </ol>
  </div>
  {/if}

  {if !empty($result)}
  <div style="color: forestgreen; font-size: 1.2rem; text-transform: uppercase;">
    Miesięczna rata: {$result}
  </div>
  {/if}
</div>
</div>

{/block}