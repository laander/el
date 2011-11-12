<div class="stands form">
<?php echo $this->Form->create('Stand');?>
	<fieldset>
		<legend><?php echo __('Add Stand'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('description');
		echo $this->Form->input('total_power_usage');
		echo $this->Form->input('total_power_allowance');
		echo $this->Form->input('build_start');
		echo $this->Form->input('build_end');
		echo $this->Form->input('items_start');
		echo $this->Form->input('items_end');
		echo $this->Form->input('status');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
		echo $this->Form->input('coordinate_x');
		echo $this->Form->input('coordinate_y');
		echo $this->Form->input('project_id');
		echo $this->Form->input('Item');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Stands'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items'), array('controller' => 'items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Item'), array('controller' => 'items', 'action' => 'add')); ?> </li>
	</ul>
</div>
