<div class="aplicativousuarios form">
<?php echo $this->Form->create('Aplicativousuario');?>
	<fieldset>
		<legend><?php echo __('Add Aplicativousuario'); ?></legend>
	<?php
		echo $this->Form->input('usuario_id');
		echo $this->Form->input('aplicativo_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Aplicativousuarios'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aplicativos'), array('controller' => 'aplicativos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aplicativo'), array('controller' => 'aplicativos', 'action' => 'add')); ?> </li>
	</ul>
</div>
