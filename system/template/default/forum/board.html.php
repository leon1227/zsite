{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}
<div class='row blocks' data-grid='4' data-region='forum_board-top'>{$control->block->printRegion($layouts, 'forum_board', 'top', true)}</div>
{$common->printPositionBar($board)}
<ul class='nav nav-pills'>
  <li class='active'>{!echo html::a(inlink('index', "mode=board"), $lang->forum->indexModeOptions['board'])}</li>
  <li>{!echo html::a(inlink('index', "mode=latest"), $lang->forum->indexModeOptions['latest'])}</li>
  <li>{!echo html::a(inlink('index', "mode=stick"), $lang->forum->indexModeOptions['stick'])}</li>
</ul>
<div class='panel'>
  <div class='panel-heading'>
    <strong>{!echo $board->name}</strong>
    {if($board->moderators)} {!printf(" &nbsp;<span class='moderators hidden-xxs'>" . $lang->forum->lblOwner . '</span>', trim($board->moderators, ','))} {/if}
    <div class='panel-actions'>
      {if($control->forum->canPost($board))} {!echo html::a($control->createLink('thread', 'post', "boardID=$board->id"), '<i class="icon-pencil icon-large"></i>&nbsp;&nbsp;' . $lang->forum->post, "class='btn btn-primary'")} {/if}
    </div>
  </div>
  <table class='table table-hover table-striped'>
    <thead>
      <tr class='text-center hidden-xxxs'>
        <th colspan='2'>{!echo $lang->thread->title}</th>
        <th class='w-150px hidden-xxs'>{!echo $lang->thread->author}</th>
        <th class='w-100px hidden-xs'>{!echo $lang->thread->postedDate}</th>
        <th class='w-50px hidden-xs'>{!echo $lang->thread->views}</th>
        <th class='w-50px'>{!echo $lang->thread->replies}</th>
        <th class='w-200px hidden-sm hidden-xs'>{!echo $lang->thread->lastReply}</th>
      </tr>  
    </thead>
    <tbody>
      {foreach($sticks as $thread)}
      {$style = $thread->color ? "style='color:{{$thread->color}}'" : ''}
      <tr class='text-center'>
        <td class='w-10px'><span class='sticky-thread text-danger'><i class="icon-comment-alt icon-large"></i></span></td>
        <td class='text-left'>
          <div data-ve='thread' id='thread{!echo $thread->id}'>{!echo html::a($control->createLink('thread', 'view', "id=$thread->id"), $thread->title, $style)} <span class='label label-danger'>{$lang->thread->stick}</span></div>
        </td>
        <td class='hidden-xxs'><strong>{!echo $thread->authorRealname}</strong></td>
        <td class='hidden-xs'>{!echo substr($thread->addedDate, 5, -3)}</td>
        <td class='hidden-xs'>{!echo $thread->views}</td>
        <td class='hidden-xxxs'>{!echo $thread->replies}</td>
        <td class='hidden-sm hidden-xs'>
          {if($thread->replies)}
            {!echo substr($thread->repliedDate, 5, -3) . ' '}
            {!echo html::a($control->createLink('thread', 'locate', "threadID={{$thread->id}}&replyID={{$thread->replyID}}"), $thread->repliedByRealname)}
          {/if}
        </td>  
      </tr>
      {@unset($threads[$thread->id])}
      {/foreach}

      {foreach($threads as $thread)}
      {$style = $thread->color ? "style='color:{{$thread->color}}'" : ''}
      <tr class='text-center'>
        <td class='w-10px'>{!echo $thread->isNew ? "<span class='text-success'><i class='icon-comment-alt icon-large'></i></span>" : "<span class='text-muted'><i class='icon-comment-alt icon-large'></i></span>"}</td>
        <td class='text-left'>
          <div data-ve='thread' id='thread{!echo $thread->id}'>{!echo html::a($control->createLink('thread', 'view', "id=$thread->id"), $thread->title, $style)}</td></div>
        <td class='hidden-xxs'><strong>{!echo $thread->authorRealname}</strong></td>
        <td class='hidden-xs'>{!echo substr($thread->addedDate, 5, -3)}</td>
        <td class='hidden-xs'>{!echo $thread->views}</td>
        <td class='hidden-xxxs'>{!echo $thread->replies}</td>
        <td class='hidden-sm hidden-xs'>
          {if($thread->replies)}
              {!echo substr($thread->repliedDate, 5, -3) . ' '}
              {!echo html::a($control->createLink('thread', 'locate', "threadID={{$thread->id}}&replyID={{$thread->replyID}}"), $thread->repliedByRealname)}
          {/if}
        </td>  
      </tr>  
      {/foreach}
    </tbody>
    <tfoot><tr><td colspan='7'>{$pager->show('right', 'short')}</td></tr></tfoot>
  </table>
</div>
<div class='blocks' data-region='forum_board-bottom'>{$control->block->printRegion($layouts, 'forum_board', 'bottom')}</div>
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
