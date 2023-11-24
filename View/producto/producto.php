<h1 class="page-header">Productos </h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=proveedor&a=Nuevo">Nuevo Proveedor</a>
    <a class="btn btn-primary" href="?c=producto&a=Nuevo">Nuevo Producto</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">ID Producto</th>
            <th style="width:120px;">NIT Proveedor</th>
            <th style="width:120px;">Nombre Producto</th>
            <th style="width:120px;">Marca</th>
            <th style="width:120px;">Modelo</th>
            <th style="width:120px;">Color</th>
            <th style="width:120px;">Almacenamiento</th>
            <th style="width:120px;">Memoria</th>
            <th style="width:120px;">Precio</th>
            <th style="width:120px;">Gama</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->idProducto; ?></td>
            <td><?php echo $r->nit; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->marca; ?></td>
            <td><?php echo $r->modelo; ?></td>
            <td><?php echo $r->color; ?></td>
            <td><?php echo $r->almacenamiento; ?></td>
            <td><?php echo $r->memoria; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td><?php echo $r->gama; ?></td>
            <td>
                <a href="?c=producto&a=Crud&idProducto=<?php echo $r->idProducto; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=producto&a=Eliminar&idProducto=<?php echo $r->idProducto; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
