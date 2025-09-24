<?php
    include "header.php";
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h3 class="mb-0">➕ Crear Nuevo Contacto</h3>
                </div>
                <div class="card-body p-4">
                    <form action="servidor/store.php" method="post" enctype="multipart/form-data">
                        
                        <div class="mb-3">
                            <label for="paterno" class="form-label fw-bold">Apellido paterno</label>
                            <input type="text" name="paterno" id="paterno" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="materno" class="form-label fw-bold">Apellido materno</label>
                            <input type="text" name="materno" id="materno" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="telefono" class="form-label fw-bold">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="correo" class="form-label fw-bold">Correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="descripcion" class="form-label fw-bold">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="foto" class="form-label fw-bold">📷 Agregar foto</label>
                            <input type="file" name="foto" id="foto" class="form-control" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button class="btn btn-success px-4">✅ Guardar</button>
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
