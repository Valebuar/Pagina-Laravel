<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Nombre</label>
        <input type="text" name="nombre" class="form-control"
               value="{{ old('nombre', $empleado->nombre ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Documento</label>
        <input type="number" name="documento" class="form-control"
               value="{{ old('documento', $empleado->documento ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Cargo</label>
        <input type="text" name="cargo" class="form-control"
               value="{{ old('cargo', $empleado->cargo ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Salario</label>
        <input type="number" name="salario" class="form-control"
               value="{{ old('salario', $empleado->salario ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Fecha de ingreso</label>
        <input type="date" name="fecha_ingreso" class="form-control"
               value="{{ old('fecha_ingreso', $empleado->fecha_ingreso ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Correo</label>
        <input type="email" name="correo" class="form-control"
               value="{{ old('correo', $empleado->correo ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control"
               value="{{ old('telefono', $empleado->telefono ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control">
            <option value="1" {{ old('estado', $empleado->estado ?? '') == 1 ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ old('estado', $empleado->estado ?? '') == 0 ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

</div>
