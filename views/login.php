<?php
return "
<div class='title'><h1>Login</h1></div>
<div class='center'>
  <form method='post'>
    <div class='table'>
      <div class='tbl-row'>
        <label class='tbl-cell'>Email</label>
        <input class='tbl-cell textbox' type='email' size='70' name='email' />
      </div>
      <br />
      <div class='tbl-row'>
        <label class='tbl-cell'>Password</label>
        <input
          class='tbl-cell textbox'
          type='password'
          size='70'
          name='password'
        />
      </div>
      <br />
    </div>
    <input class='submit-btn btn-primary' type='submit' value='Login' />
  </form>
</div>
";
?>