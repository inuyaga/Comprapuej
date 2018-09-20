<?php
if ($this->session->flashdata('mensaje')) {
    echo $this->session->flashdata('mensaje');
}
?>



<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Principal</a></li>
            <li class="breadcrumb-item active" aria-current="page">Nuevo producto</li>
        </ol>
    </nav>
    <form action="<?= base_url('Panel/nuevo_producto_save') ?>" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        <input class="form-control" placeholder="Nombre" type="text" name="nombre_prod" required>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        <input class="form-control" placeholder="Precio reposicion" type="text" name="precio_reposicion"
                            required>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        <input class="form-control" placeholder="Search" type="file" name="imagen_prod" required>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="form-group">
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                        </div>
                        <input class="form-control" placeholder="Descripcion del producto" type="text" name="descripcion"
                            required>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <button type="submit" class="btn btn-outline-primary">Guardar</button>
            </div>
        </div>
    </form>