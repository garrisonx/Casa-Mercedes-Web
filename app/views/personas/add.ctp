﻿<div class="personas form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
		<legend><?php __('Agregar Persona: Datos de la Persona'); ?></legend>
	<?php
		echo $this->Form->input('primer_nombre', array("label"=>"Nombre"));
		echo $this->Form->input('segundo_nombre', array("label"=>"Segundo nombre"));
		echo $this->Form->input('primer_apellido', array("label"=>"Apellido paterno"));
		echo $this->Form->input('segundo_apellido', array("label"=>"Apellido materno"));
		echo $this->Form->input('sexo');
		echo $this->Form->input('status', array("label"=>"Situación en la que se encuentra"));
		echo $this->Form->input('fecha_ingreso', array("label"=>"Fecha de ingreso"));
		echo $this->Form->input('foto_imagen_id', array("type"=>"text"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Personas', true), array('action' => 'index'));?></li>
	</ul>
</div>