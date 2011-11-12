<div class="itemsStands view">
<h2><?php  echo __('Items Stand');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Item'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsStand['Item']['title'], array('controller' => 'items', 'action' => 'view', $itemsStand['Item']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($itemsStand['Project']['title'], array('controller' => 'projects', 'action' => 'view', $itemsStand['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Quantity'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['quantity']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($itemsStand['ItemsStand']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Items Stand'), array('action' => 'edit', $itemsStand['ItemsStand']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Items Stand'), array('action' => 'delete', $itemsStand['ItemsStand']['id']), null, __('Are you sure you want to delete # %s?', $itemsStand['ItemsStand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Stands'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Stand'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
	</ul>
</div>
