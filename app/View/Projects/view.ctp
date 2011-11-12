<div class="projects view">
<h2><?php  echo __('Project');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($project['Project']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($project['Project']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($project['Project']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($project['Group']['title'], array('controller' => 'groups', 'action' => 'view', $project['Group']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Project'), array('action' => 'edit', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Project'), array('action' => 'delete', $project['Project']['id']), null, __('Are you sure you want to delete # %s?', $project['Project']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Stands'), array('controller' => 'items_stands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Stand'), array('controller' => 'items_stands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stands'), array('controller' => 'stands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stand'), array('controller' => 'stands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items Stands');?></h3>
	<?php if (!empty($project['ItemsStand'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Item Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Quantity'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['ItemsStand'] as $itemsStand): ?>
		<tr>
			<td><?php echo $itemsStand['id'];?></td>
			<td><?php echo $itemsStand['item_id'];?></td>
			<td><?php echo $itemsStand['project_id'];?></td>
			<td><?php echo $itemsStand['quantity'];?></td>
			<td><?php echo $itemsStand['created'];?></td>
			<td><?php echo $itemsStand['modified'];?></td>
			<td><?php echo $itemsStand['created_by'];?></td>
			<td><?php echo $itemsStand['modified_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items_stands', 'action' => 'view', $itemsStand['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items_stands', 'action' => 'edit', $itemsStand['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items_stands', 'action' => 'delete', $itemsStand['id']), null, __('Are you sure you want to delete # %s?', $itemsStand['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Items Stand'), array('controller' => 'items_stands', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Stands');?></h3>
	<?php if (!empty($project['Stand'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Total Power Usage'); ?></th>
		<th><?php echo __('Total Power Allowance'); ?></th>
		<th><?php echo __('Build Start'); ?></th>
		<th><?php echo __('Build End'); ?></th>
		<th><?php echo __('Items Start'); ?></th>
		<th><?php echo __('Items End'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th><?php echo __('Coordinate X'); ?></th>
		<th><?php echo __('Coordinate Y'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['Stand'] as $stand): ?>
		<tr>
			<td><?php echo $stand['id'];?></td>
			<td><?php echo $stand['title'];?></td>
			<td><?php echo $stand['description'];?></td>
			<td><?php echo $stand['total_power_usage'];?></td>
			<td><?php echo $stand['total_power_allowance'];?></td>
			<td><?php echo $stand['build_start'];?></td>
			<td><?php echo $stand['build_end'];?></td>
			<td><?php echo $stand['items_start'];?></td>
			<td><?php echo $stand['items_end'];?></td>
			<td><?php echo $stand['status'];?></td>
			<td><?php echo $stand['created'];?></td>
			<td><?php echo $stand['modified'];?></td>
			<td><?php echo $stand['created_by'];?></td>
			<td><?php echo $stand['modified_by'];?></td>
			<td><?php echo $stand['coordinate_x'];?></td>
			<td><?php echo $stand['coordinate_y'];?></td>
			<td><?php echo $stand['project_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'stands', 'action' => 'view', $stand['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'stands', 'action' => 'edit', $stand['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'stands', 'action' => 'delete', $stand['id']), null, __('Are you sure you want to delete # %s?', $stand['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Stand'), array('controller' => 'stands', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users');?></h3>
	<?php if (!empty($project['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($project['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['role_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
