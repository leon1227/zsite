{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}
<div class='row'>
  <div class='col-md-6'>
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <strong>{!echo $lang->user->oauth->lblProfile}</strong>
      </div>
      <div class='panel-body'>
        <form method='post' id='registerForm' class='form-horizontal' action='{!echo $control->createLink('user', 'oauthRegister')}' role='form'>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='username'>{!echo $lang->user->account}</label>
            <div class='col-sm-9 required'>{!html::input('account', '', "class='form-control' placeholder='{{$lang->user->register->lblAccount}}'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='realname'>{!echo $lang->user->realname}</label>
            <div class='col-sm-9 required'>{!html::input('realname', $realname, "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='email'>{!echo $lang->user->email}</label>
            <div class='col-sm-9 required'>{!html::input('email', '', "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='password'>{!echo $lang->user->password}</label>
            <div class='col-sm-9 required'>{!html::password('password1', '', "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='password'>{!echo $lang->user->password2}</label>
            <div class='col-sm-9 required'>{!html::password('password2', '', "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label'></label>
            <div class='col-sm-9'>
              {!html::submitButton('', 'btn btn-success') . html::a(inlink('ignoreBind'), $lang->user->oauth->ignore, "class='btn btn-primary'"). html::hidden('referer', $referer)}
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class='col-md-6'>
    <div class='panel panel-default'>
      <div class='panel-heading'>
        <strong>{!echo $lang->user->oauth->lblBind}</strong>
      </div>
      <div class='panel-body'>
        <form method='post' id='bindForm' class='form-horizontal' action='{!echo $control->createLink('user', 'oauthBind')}' role='form'>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='useraccount'>{!echo $lang->user->account}</label>
            <div class='col-sm-9'>{!html::input('account', '', "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label' for='password'>{!echo $lang->user->password}</label>
            <div class='col-sm-9'>{!html::password('password', '', "class='form-control'")}</div>
          </div>
          <div class='form-group'>
            <label class='col-sm-2 control-label'></label>
            <div class='col-sm-9'>{!html::submitButton($lang->login, 'btn btn-success') . html::hidden('referer', $referer)}</div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
