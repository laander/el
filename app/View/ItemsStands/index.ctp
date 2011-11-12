<div class="itemsStands index">
	<h2><?php echo __('Items Stands');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('item_id');?></th>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('quantity');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($itemsStands as $itemsStand): ?>
	<tr>
		<td><?php echo h($itemsStand['ItemsStand']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($itemsStand['Item']['title'], array('controller' => 'items', 'action' => 'view', $itemsStand['Item']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($itemsStand['Project']['title'], array('controller' => 'projects', 'action' => 'view', $itemsStand['Project']['id'])); ?>
		</td>
		<td><?php echo h($itemsStand['ItemsStand']['quantity']); ?>&nbsp;</td>
		<td><?php echo h($itemsStand['ItemsStand']['created']); ?>&nbsp;</td>
		<td><?php echo h($itemsStand['ItemsStand']['modified']); ?>&nbsp;</td>
		<td><?php echo h($itemsStand['ItemsStand']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($itemsStand['ItemsStand']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $itemsStand['ItemsStand']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $itemsStand['ItemsStand']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $itemsStand['ItemsStand']['id']), null, __('Are you sure you want to delete # %s?', $itemsStand['ItemsStand']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Items Stand'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
