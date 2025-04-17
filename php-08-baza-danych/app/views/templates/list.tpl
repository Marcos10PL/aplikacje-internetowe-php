{if $history|@count > 0}
<h3 style="text-align: center; text-transform: uppercase; margin-top: 20px;">Historia obliczeń</h3>
<table style="width:100%; border-collapse:collapse; margin-top:20px;">
  <tr>
    <th style="border:1px solid #ccc; padding:8px;">Kwota</th>
    <th style="border:1px solid #ccc; padding:8px;">Lata</th>
    <th style="border:1px solid #ccc; padding:8px;">Oprocentowanie</th>
    <th style="border:1px solid #ccc; padding:8px;">Rata</th>
    <th style="border:1px solid #ccc; padding:8px;">Usuń</th>
  </tr>
  {foreach $history as $item}
  <tr>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;">{$item->sum}</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;">{$item->years}</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;">{$item->interest_rate}%</td>
    <td style="border:1px solid #ccc; padding:8px; text-align:center;">{$item->result} zł</td>
    <td style="border:1px solid #ccc; text-align:center;">
      <form method="post" action="{$conf->action_root}deleteCalculation#main" style="margin:0; padding: 0;">
        <input type="hidden" name="id" value="{$item->id}">
        <button type="submit" style="background-color: transparent; color: red;">Usuń</button>
      </form>
    </td>
  </tr>
  {/foreach}
</table>
{/if}

{if $history|@count == 0}
<p style="text-align:center; margin-top:20px;">Brak historii obliczeń.</p>
{/if}