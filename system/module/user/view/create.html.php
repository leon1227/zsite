<?php include '../../common/view/header.modal.html.php';?>
<?php if($pass):?>
<form method='post' action='<?php echo inlink('create')?>' id='ajaxForm' class='form form-inline'>
  <table class='table table-form'>
    <tr>
      <th><?php echo $lang->user->account;?></th>
      <td><?php echo html::input('account', '', "class='form-control'")?></td><td></td>
    </tr>  
    <tr>
      <th class='w-100px'><?php echo $lang->user->realname;?></th>
      <td class='w-p60'><?php echo html::input("realname", '', "class='form-control'")?></td>
      <td></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->admin;?></th>
      <td><?php echo html::select('admin', $lang->user->adminList, '', "class='form-control'")?></td><td></td>
    </tr>  
    <tr class="groups">
      <th><?php echo $lang->user->privilege;?></th>
      <td><?php echo html::checkbox('groups', $groups, '');?></td>
    </tr>
    <tr>
      <th><?php echo $lang->user->email;?></th>
      <td><?php echo html::input('email', '', "class='form-control'");?></td><td></td>
    </tr>  
    <tr>
      <th><?php echo $lang->user->password;?></th>
      <td><?php echo html::password('password1', '', "class='form-control' autocomplete='off'")?></td>
    </tr>  
    <tr>
      <th><?php echo $lang->user->password2;?></th>
      <td><?php echo html::password('password2', '', "class='form-control'");?></td><td></td>
    </tr>  
    <tr>
      <th></th>
      <td colspan="2"><?php echo html::submitButton();?></td>
    </tr>
  </table>
</form>        
<?php else:?>
<?php
$url = helper::safe64Encode($this->createLink('user', 'create'));
include '../../guarder/view/validate.html.php';
?>
<?php endif;?>

<?php include '../../common/view/footer.modal.html.php';?>