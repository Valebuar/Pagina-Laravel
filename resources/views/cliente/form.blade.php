<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Nombre completo</label>
        <input type="text" name="nombre_completo" class="form-control" value="{{ old('nombre_completo', $cliente->nombre_completo ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Documento</label>
        <input type="number" name="documento" class="form-control" value="{{ old('documento', $cliente->documento ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Correo electrónico</label>
        <input type="email" name="correo" class="form-control" value="{{ old('correo', $cliente->correo ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Teléfono</label>
        <input type="text" name="telefono" class="form-control" value="{{ old('telefono', $cliente->telefono ?? '') }}">
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Dirección</label>
        <input type="text" name="direccion" class="form-control" value="{{ old('direccion', $cliente->direccion ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Ciudad</label>
        <input type="text" name="ciudad" class="form-control" value="{{ old('ciudad', $cliente->ciudad ?? '') }}">
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Tipo de cliente</label>
        <select name="tipo_cliente" class="form-control">
            <option value="Mayorista">Mayorista</option>
            <option value="Minorista">Minorista</option>
            <option value="Ocasional">Ocasional</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control">
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    </div>

</div>
