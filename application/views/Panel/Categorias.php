<?php
if ($this->session->flashdata('mensaje')) {
    echo $this->session->flashdata('mensaje');
}
?>
<form action="<?= base_url('Panel/crea_categoria') ?>" method="POST">
	<div class="grid-container">
		<div class="grid-x grid-padding-x">
			<div class="medium-4 cell">
				<label>Nombre
					<input type="text" placeholder="Nombre de la categoria" name="nombre">
				</label>
			</div>
			<div class="medium-4 cell">
				<br>
				<button class="hollow button success" href="#">Guardar</button>
			</div>
		</div>
	</div>
</form>

<div class="grid-container">
	<table class="hover unstriped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Acciones</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($categorias->result() as $key) { ?>
			<tr>
				<td><?= $key->categoria_nombre ?></td>
				<td>
					<button class="hollow button alert" href="#"><i class="fi-trash"></i></button>
					<button class="hollow button success" href="#"><i class="fi-page-edit"></i></button>
				</td>
			</tr> 
			<?php } ?>


		</tbody>
	</table>
</div>
