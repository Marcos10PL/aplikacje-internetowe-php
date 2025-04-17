{extends file="main.tpl"}

{block name=content}

<form action="{$conf->action_url}login#main" method="post" class="pure-form pure-form-aligned bottom-margin">
  <div class="row gtr-50 aln-center">
    <div class="col-7 col-12-small">
      <input type="text" name="login" placeholder="Login" />
    </div>
    <div class="col-7 col-12-small">
      <input type="password" name="pass" placeholder="Hasło"  />
    </div>
    <div class="col-7 col-12-small">
      <input type="submit" class="style1" value="Zaloguj" />
    </div>
  </div>
</form>

{include file='messages.tpl'}

{/block}