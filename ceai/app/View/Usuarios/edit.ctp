<div class="usuarios form">
<?php echo $this->Form->create('Usuario');?>
	<fieldset>
		<legend><?php echo __('Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('documento');
		echo $this->Form->input('pass');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('controller' => 'aplicativousuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativousuario'), array('controller' => 'aplicativousuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
