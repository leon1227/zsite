<?php
/**
 * The reset password mail view file of user module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Tingting Dai <daitingting@xirangit.com>
 * @package     User
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
?>
<?php
$resetUrlTip = sprintf($this->lang->user->resetMail->resetUrl, $this->config->site->name, $this->server->http_host);
$mailContent = <<<EOT
<html>
<head>
<style type='text/css'>
body{margin:0; padding:0;}
div{padding-left:30px;} 
</style>
</head>
<body>
<div style='margin-top:20px;'>
  <p> {$this->lang->user->resetMail->account} {$account}{$this->lang->colon} </p>
  <p>{$resetUrlTip}</p>
  <a href='{$resetURL}' target='_blank'>{$resetURL}</a>
</div>
<div style='margin:20px 0 0 0 ;'>{$this->lang->user->resetMail->notice}</div>
<p> <a href='http://www.chanzhi.org' style='font-size:12px;color:grey;text-decoration:none;' target='_blank'>powered by {$this->lang->chanzhiEPSx}</a> </p>
</body>
</html>
EOT;
