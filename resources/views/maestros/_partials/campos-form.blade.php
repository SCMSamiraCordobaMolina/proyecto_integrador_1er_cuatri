<label>
    Nombre <br>
    <input name="name" type="text" value="{{ old('name', $maestro->name) }}"> <br>
    @error('name')
        <small style="color: red">{{ $message }}</small>
        <br>
    @enderror
</label>
<label>
    DNI <br>
    <input name="dni" type="text" value="{{ old('dni', $maestro->dni) }}"> <br>
    @error('dni')
        <small style="color: red">{{ $message }}</small>
        <br>
    @enderror
</label>
<button type="submit">Grabar</button> <br>
