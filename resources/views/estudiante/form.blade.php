<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Nombres</label>
        <input type="text" name="nombres" class="form-control" value="{{ old('nombres', $estudiante->nombres ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Apellidos</label>
        <input type="text" name="apellidos" class="form-control" value="{{ old('apellidos', $estudiante->apellidos ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Documento</label>
        <input type="number" name="documento" class="form-control" value="{{ old('documento', $estudiante->documento ?? '') }}" required>
    </div>

    <div class="col-md-8 mb-3">
        <label class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control" value="{{ old('correo', $estudiante->correo ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $estudiante->telefono ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Programa</label>
        <input type="text" name="programa" class="form-control" value="{{ old('programa', $estudiante->programa ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Semestre</label>
        <input type="number" name="semestre" class="form-control" value="{{ old('semestre', $estudiante->semestre ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Fecha de ingreso</label>
        <input type="date" name="fecha_ingreso" class="form-control" value="{{ old('fecha_ingreso', $estudiante->fecha_ingreso ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    </div>

</div>
