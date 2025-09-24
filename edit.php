<?php
    include "header.php";
    include "clases/Crud.php";
    $crud = new Crud();
    $contacto = $crud->show($_GET["id"]);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-warning text-dark text-center rounded-top-4">
                    <h3 class="mb-0">✏️ Actualizar Contacto</h3>
                </div>
                <div class="card-body p-4">
                    <form action="servidor/update.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $contacto['id']; ?>">

                        <div class="mb-3">
                            <label for="paterno" class="form-label fw-bold">Apellido paterno</label>
                            <input type="text" name="paterno" id="paterno" 
                                   value="<?php echo $contacto['paterno']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="materno" class="form-label fw-bold">Apellido materno</label>
                            <input type="text" name="materno" id="materno"
                                   value="<?php echo $contacto['materno']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" name="nombre" id="nombre"
                                   value="<?php echo $contacto['nombre']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-bold">Teléfono</label>
                            <input type="text" name="telefono" id="telefono"
                                   value="<?php echo $contacto['telefono']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label fw-bold">Correo</label>
                            <input type="email" name="correo" id="correo"
                                   value="<?php echo $contacto['email']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <input type="text" name="descripcion" id="descripcion"
                                   value="<?php echo $contacto['descripcion']; ?>" 
                                   class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">📷 Agregar una foto</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-warning px-4">✅ Actualizar</button>
                            <a href="index.php" class="btn btn-secondary px-4">❌ Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    include "footer.php";
?>
