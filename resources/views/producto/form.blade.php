<div class="row">

    <div class="col-md-6 mb-3">
        <label class="form-label">Nombre del producto</label>
        <input type="text" name="nombre" class="form-control" 
               value="{{ old('nombre', $producto->nombre ?? '') }}" required>
    </div>

    <div class="col-md-6 mb-3">
        <label class="form-label">Referencia</label>
        <input type="text" name="referencia" class="form-control" 
               value="{{ old('referencia', $producto->referencia ?? '') }}" required>
    </div>

    <div class="col-md-12 mb-3">
        <label class="form-label">Descripción</label>
        <textarea name="descripcion" class="form-control" rows="3">
            {{ old('descripcion', $producto->descripcion ?? '') }}
        </textarea>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Precio</label>
        <input type="number" step="0.01" name="precio" class="form-control" 
               value="{{ old('precio', $producto->precio ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Cantidad</label>
        <input type="number" name="cantidad" class="form-control" 
               value="{{ old('cantidad', $producto->cantidad ?? '') }}" required>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Categoría</label>
        <select name="categoria" class="form-control" required>
            <option value="Electrónica">Electrónica</option>
            <option value="Hogar">Hogar</option>
            <option value="Ropa">Ropa</option>
            <option value="Otros">Otros</option>
        </select>
    </div>

    <div class="col-md-4 mb-3">
        <label class="form-label">Estado</label>
        <select name="estado" class="form-control" required>
            <option value="1">Activo</option>
            <option value="0">Inactivo</option>
        </select>
    </div>

</div>
