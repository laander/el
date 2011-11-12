<div class="items view">
<h2><?php  echo __('Item');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($item['Item']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($item['Item']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($item['Item']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Power Usage'); ?></dt>
		<dd>
			<?php echo h($item['Item']['power_usage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Template'); ?></dt>
		<dd>
			<?php echo h($item['Item']['template']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($item['Item']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($item['Item']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Item'), array('action' => 'edit', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Item'), array('action' => 'delete', $item['Item']['id']), null, __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stands'), array('controller' => 'stands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Stand'), array('controller' => 'stands', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Stands');?></h3>
	<?php if (!empty($item['Stand'])):?>
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
		foreach ($item['Stand'] as $stand): ?>
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
