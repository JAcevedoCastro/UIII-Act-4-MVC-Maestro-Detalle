<h1 class="page-header">
    <?php echo $pvd->nit != null ? $pvd->nombre_empresa : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=proveedor">Proveedores</a></li>
  <li class="active"><?php echo $pvd->nit != null ? $pvd->nombre_empresa : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-proveedor" action="?c=proveedor&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="nit" value="<?php echo $pvd->nit; ?>" />

    <div class="form-group">
        <label>Nombre de empresa</label>
        <input type="text" name="nombre_empresa" value="<?php echo $pvd->nombre_empresa; ?>" class="form-control" placeholder="Ingrese Razón Social" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Telefono</label>
        <input type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Ubicacion</label>
        <input type="text" name="ubicacion" value="<?php echo $pvd->ubicacion; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Nombre de Empleado</label>
        <input type="text" name="nombre_empleado" value="<?php echo $pvd->nombre_empleado; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Calidad</label>
        <input type="text" name="calidad" value="<?php echo $pvd->calidad; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Naiconalidad</label>
        <input type="text" name="nacion" value="<?php echo $pvd->nacion; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>
    <div class="form-group">
        <label>Transporte</label>
        <input type="text" name="transporte" value="<?php echo $pvd->transporte; ?>" class="form-control" placeholder="Ingrese dirección proveedor" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Cantidad</label>
        <input type="text" name="cantidad" value="<?php echo $pvd->cantidad; ?>" class="form-control" placeholder="Ingrese cantidadéfono proveedor" data-validacion-tipo="requerido|min:10" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-proveedor").submit(function(){
            return $(this).validate();
        });
    })
</script>
