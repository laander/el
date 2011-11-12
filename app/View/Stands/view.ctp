<div class="stands view">
<h2><?php  echo __('Stand');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Power Usage'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['total_power_usage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Power Allowance'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['total_power_allowance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Build Start'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['build_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Build End'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['build_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items Start'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['items_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Items End'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['items_end']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['modified_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate X'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['coordinate_x']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Coordinate Y'); ?></dt>
		<dd>
			<?php echo h($stand['Stand']['coordinate_y']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($stand['Project']['title'], array('controller' => 'projects', 'action' => 'view', $stand['Project']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Stand'), array('action' => 'edit', $stand['Stand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Stand'), array('action' => 'delete', $stand['Stand']['id']), null, __('Are you sure you want to delete # %s?', $stand['Stand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Items');?></h3>
	<?php if (!empty($stand['Item'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Power Usage'); ?></th>
		<th><?php echo __('Template'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($stand['Item'] as $item): ?>
		<tr>
			<td><?php echo $item['id'];?></td>
			<td><?php echo $item['title'];?></td>
			<td><?php echo $item['description'];?></td>
			<td><?php echo $item['power_usage'];?></td>
			<td><?php echo $item['template'];?></td>
			<td><?php echo $item['created'];?></td>
			<td><?php echo $item['modified'];?></td>
			<td><?php echo $item['created_by'];?></td>
			<td><?php echo $item['modified_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'items', 'action' => 'view', $item['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'items', 'action' => 'edit', $item['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'items', 'action' => 'delete', $item['id']), null, __('Are you sure you want to delete # %s?', $item['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
