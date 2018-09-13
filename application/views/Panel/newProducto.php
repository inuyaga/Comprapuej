<?php
if ($this->session->flashdata('mensaje')) {
    echo $this->session->flashdata('mensaje');
}
?>

<form action="<?= base_url('Panel/nuevo_producto_save') ?>" method="POST" enctype="multipart/form-data">
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="medium-4 cell">
                <label>Nombre
                    <input type="text" placeholder="Nombre" name="nombre_prod" required>
                </label>
            </div>
            <div class="medium-4 cell">
                <label>Descripcion del producto
                    <input type="text" placeholder="Descripcion del producto" name="descripcion" required>
                </label>
            </div>
            <div class="medium-4 cell">
                <label>Cantidad
                    <input type="number" placeholder="Cantidad" name="cantidad" required>
                </label>
            </div>
            <div class="medium-4 cell">
                <label>Precio reposicion
                    <input type="number" placeholder="Precio reposicion" name="precio_reposicion" required>
                </label>
            </div>
            <div class="medium-4 cell">
                <br>
                    <label for="exampleFileUpload" class="button">Imagen</label>
                    <input type="file" id="exampleFileUpload" class="show-for-sr" name="imagen_prod" required>
            </div>
            <div class="medium-4 cell">
                <br>
                <button class="hollow button success" href="#">Guardar</button>
            </div>
        </div>
    </div>
</form>