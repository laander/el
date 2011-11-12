<div class="projectsUsers view">
<h2><?php  echo __('Projects User');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($projectsUser['ProjectsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectsUser['Project']['title'], array('controller' => 'projects', 'action' => 'view', $projectsUser['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($projectsUser['User']['name'], array('controller' => 'users', 'action' => 'view', $projectsUser['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Projects User'), array('action' => 'edit', $projectsUser['ProjectsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Projects User'), array('action' => 'delete', $projectsUser['ProjectsUser']['id']), null, __('Are you sure you want to delete # %s?', $projectsUser['ProjectsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Projects User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
