@csrf
<div class="mb-3">
    <label for="name" class="form-label">Nombre:</label>
    <input type="text" class="form-control" id="name" placeholder="Nombre" name="name">
    @error('name')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="lastName" class="form-label">Apellido:</label>
    <input type="text" class="form-control" id="lastName" placeholder="Apellido" name="lastName">
    @error('lastName')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="email" class="form-label">Correo Eletrónico:</label>
    <input type="text" class="form-control" id="email" placeholder="Correo Eletrónico">
    @error('email')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="phone" class="form-label">Celular:</label>
    <input type="tel" class="form-control" id="phone" placeholder="Celular" name="phone">
    @error('phone')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="area" class="form-label">Aréa de Contacto:</label>
    <select class="form-select" aria-label="Default select example" name="areaId">
        <option selected>Selecciona un area</option>
        @forelse ($areas as $area)
            <option value="{{ $area->id}}">{{ $area->name }}</option>
        @empty
            
        @endforelse
    </select>
    @error('area')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="mb-3">
    <label for="message" class="form-label">Mensaje:</label>
    <textarea name="message" rows="5" class="form-control" id="message" name="message"></textarea>
    @error('message')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<button type="submit" class="btn btn-primary btn-sm">Guardar</button>

<div class="float-sm-end mb-2">
    <a href="#" class="btn btn-danger btn-sm">Cancelar</a>
</div>
