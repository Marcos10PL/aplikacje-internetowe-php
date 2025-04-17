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

{include file='messages.tpl'}

{if !empty($result)}
  <div style="color: forestgreen; font-size: 1.2rem; text-transform: uppercase; text-align: center; margin-top: 10px;">
    Miesięczna rata: {$result}
  </div>
{/if}

{include file='list.tpl'}

{/block}