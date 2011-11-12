<div class="groupsUsers view">
<h2><?php  echo __('Groups User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($groupsUser['GroupsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsUser['Group']['title'], array('controller' => 'groups', 'action' => 'view', $groupsUser['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($groupsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $groupsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Groups User'), array('action' => 'edit', $groupsUser['GroupsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Groups User'), array('action' => 'delete', $groupsUser['GroupsUser']['id']), null, __('Are you sure you want to delete # %s?', $groupsUser['GroupsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Groups User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
