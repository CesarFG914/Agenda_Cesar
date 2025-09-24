<?php 
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contactos = $crud->show_all();
?>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 text-center mb-4">
            <h1 class="fw-bold text-primary">📒 Lista de Contactos</h1>
            <p class="text-muted">Administra tus contactos fácilmente desde aquí</p>
            <a href="create.php" class="btn btn-success shadow-sm">
                ➕ Crear nuevo contacto
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card shadow-lg rounded-3">
                <div class="card-body">
                    <table class="table table-hover align-middle">
                        <thead class="table-dark">
                            <tr>
                                <th>Apellido paterno</th>
                                <th>Apellido materno</th>
                                <th>Nombre</th>
                                <th>Teléfono</th>
                                <th>Correo</th>
                                <th>Descripción</th>
                                <th class="text-center">Foto</th>
                                <th class="text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($contactos as $contacto): 
                                $id = $contacto["id"]; ?>
                                <tr>
                                    <td><?php echo $contacto["paterno"] ?></td>
                                    <td><?php echo $contacto["materno"] ?></td>
                                    <td><?php echo $contacto["nombre"] ?></td>
                                    <td><?php echo $contacto["telefono"] ?></td>
                                    <td><?php echo $contacto["email"] ?></td>
                                    <td><?php echo $contacto["descripcion"] ?></td>
                                    <td class="text-center">
                                        <img src="<?php echo "public/upload/".$contacto["foto"] ?>" 
                                            alt="Foto" class="img-thumbnail" width="70">
                                    </td>
                                    <td class="text-center">
                                        <a class="btn btn-sm btn-warning" 
                                           href="edit.php?id=<?php echo $id; ?>">
                                            ✏️ Editar
                                        </a>
                                        <a class="btn btn-sm btn-danger" 
                                           href="servidor/destroy.php?id=<?php echo $id; ?>" 
                                           onclick="return confirm('¿Estás seguro de que deseas eliminar este registro?');">
                                            🗑️ Eliminar
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <?php if(empty($contactos)): ?>
                        <p class="text-center text-muted">No hay contactos registrados aún.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include "footer.php"; ?>
