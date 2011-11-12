<div class="stands index">
	<h2><?php echo __('Stands');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('total_power_usage');?></th>
			<th><?php echo $this->Paginator->sort('total_power_allowance');?></th>
			<th><?php echo $this->Paginator->sort('build_start');?></th>
			<th><?php echo $this->Paginator->sort('build_end');?></th>
			<th><?php echo $this->Paginator->sort('items_start');?></th>
			<th><?php echo $this->Paginator->sort('items_end');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_x');?></th>
			<th><?php echo $this->Paginator->sort('coordinate_y');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($stands as $stand): ?>
	<tr>
		<td><?php echo h($stand['Stand']['id']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['title']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['description']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['total_power_usage']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['total_power_allowance']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['build_start']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['build_end']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['items_start']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['items_end']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['status']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['created']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['modified']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['modified_by']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['coordinate_x']); ?>&nbsp;</td>
		<td><?php echo h($stand['Stand']['coordinate_y']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($stand['Project']['title'], array('controller' => 'projects', 'action' => 'view', $stand['Project']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $stand['Stand']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $stand['Stand']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $stand['Stand']['id']), null, __('Are you sure you want to delete # %s?', $stand['Stand']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Stand'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
