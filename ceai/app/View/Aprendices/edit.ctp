<div class="aprendices form">
<?php echo $this->Form->create('Aprendice');?>
	<fieldset>
		<legend><?php echo __('Edit Aprendice'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('documento');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('barrio_id');
		echo $this->Form->input('sexo_aprendiz');
		echo $this->Form->input('correo_aprendiz');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Aprendice.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Aprendice.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Aprendices'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Barrios'), array('controller' => 'barrios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barrio'), array('controller' => 'barrios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Actas'), array('controller' => 'actas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acta'), array('controller' => 'actas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Acudienteaprendices'), array('controller' => 'acudienteaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Acudienteaprendice'), array('controller' => 'acudienteaprendices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('controller' => 'aprendiceempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('controller' => 'aprendiceempresas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicegrupos'), array('controller' => 'aprendicegrupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicegrupo'), array('controller' => 'aprendicegrupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendicesolicitudes'), array('controller' => 'aprendicesolicitudes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendicesolicitude'), array('controller' => 'aprendicesolicitudes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Calificaciones'), array('controller' => 'calificaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Calificacione'), array('controller' => 'calificaciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Conceptualaprendices'), array('controller' => 'conceptualaprendices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Conceptualaprendice'), array('controller' => 'conceptualaprendices', 'action' => 'add')); ?> </li>
	</ul>
</div>
