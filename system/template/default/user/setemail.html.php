{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}
{!js::import($jsRoot . 'fingerprint/fingerprint.js')}
<div class="page-user-control">
  <div class="row">
    {include TPL_ROOT . 'user/side.html.php'}
    <div class='col-md-10'>
      <div class='panel'>
        <div class='panel-heading'><strong><i class='icon-edit'></i> {!echo $lang->user->setEmail}</strong></div>
        <div class='panel-body'>
          <form method='post' id='ajaxForm' class='form form-horizontal' data-checkfingerprint='1'>
            <table class='table talbe-form table-borderless'>
              <tr>
                <th class='text-right w-80px'>{!echo $lang->user->password}</th>
                <td class='w-p50'>{!echo html::password('oldPwd', '', "class='form-control' placeholder='{$lang->user->placeholder->password}'")}</td><td></td>
              </tr>
              <tr>
                <th class='text-right'>{!echo $lang->user->newEmail}</th>
                <td>{!echo html::input('email', '', "class='form-control'")}</td><td></td>
              </tr>
              <tr>
                <th class='text-right'>{!echo $lang->user->captcha}</th>
                <td>{!echo html::input('captcha', '', "class='form-control' placeholder='{$lang->user->placeholder->verifyCode}'")}</td>
                <td class='text-middle'>{!echo html::a($control->createLink('mail', 'sendmailcode'), $lang->user->getEmailCode, "id='mailSender' class='btn btn-sm btn-primary'")}</td>
              </tr>
              <tr>
                <th></th>
                <td colspan='2'>{!echo html::submitButton() . html::hidden('token', $token)}</td>
              </tr>
            </table>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
