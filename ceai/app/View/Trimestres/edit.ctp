<div class="trimestres form">
<?php echo $this->Form->create('Trimestre');?>
	<fieldset>
		<legend><?php echo __('Edit Trimestre'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Trimestre.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Trimestre.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Trimestres'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
	</ul>
</div>
