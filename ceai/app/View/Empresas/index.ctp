<div class="empresas index">
	<h2><?php echo __('Empresas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('nombre_empresa');?></th>
			<th><?php echo $this->Paginator->sort('nit');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('correo_empresa');?></th>
			<th><?php echo $this->Paginator->sort('contacto');?></th>
			<th><?php echo $this->Paginator->sort('numero_contacto');?></th>
			<th><?php echo $this->Paginator->sort('extension_contacto');?></th>
			<th><?php echo $this->Paginator->sort('correo_contacto');?></th>
			<th><?php echo $this->Paginator->sort('sectore_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('updated');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($empresas as $empresa): ?>
	<tr>
		<td><?php echo h($empresa['Empresa']['id']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['nombre_empresa']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['nit']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['correo_empresa']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['contacto']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['numero_contacto']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['extension_contacto']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['correo_contacto']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($empresa['Sectore']['id'], array('controller' => 'sectores', 'action' => 'view', $empresa['Sectore']['id'])); ?>
		</td>
		<td><?php echo h($empresa['Empresa']['created']); ?>&nbsp;</td>
		<td><?php echo h($empresa['Empresa']['updated']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $empresa['Empresa']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $empresa['Empresa']['id']), null, __('Are you sure you want to delete # %s?', $empresa['Empresa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Empresa'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Sectores'), array('controller' => 'sectores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sectore'), array('controller' => 'sectores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Aprendiceempresas'), array('controller' => 'aprendiceempresas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Aprendiceempresa'), array('controller' => 'aprendiceempresas', 'action' => 'add')); ?> </li>
	</ul>
</div>
