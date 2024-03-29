@csrf
<div class="mb-3">
    <label for="" class="form-label">Enter your name</label>
    <input value="{{ isset($empleado->name) ? $empleado->name : old('name') }}" type="text" name="name"
        id="" class="form-control" placeholder="" aria-describedby="nameID">

    @error('name')
        <br>
        <small class="text-danger" id="nameID" class="text-muted">{{ $message }}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Enter your lastname</label>
    <input value="{{ isset($empleado->lastname) ? $empleado->lastname : old('lastname', '') }}" type="text"
        name="lastname" id="" class="form-control" placeholder="" aria-describedby="lastnameId">
    @error('lastname')
        <br>
        <small class="text-danger" id="nameID" class="text-muted">{{ $message }}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    <label for="" class="form-label">Enter your age</label>
    <input value="{{ isset($empleado->age) ? $empleado->age : old('age', '') }}" type="text" name="age"
        id="" class="form-control" placeholder="" aria-describedby="ageId">
    @error('age')
        <br>
        <small class="text-danger" id="nameID" class="text-muted">{{ $message }}</small>
        <br>
    @enderror
</div>
<div class="mb-3">
    @if (isset($empleado->photo))
        <img src="{{ asset('storage') . '/' . $empleado->photo }}" width="100" height="100" alt="">
    @endif
    <input value="{{ old('photo') }}" type="file" name="photo" id="" class="form-control" placeholder=""
        aria-describedby="photopId">
    @error('photo')
        <br>
        <small class="text-danger" id="nameID" class="text-muted">{{ $message }}</small>
        <br>
    @enderror
</div>

<br>
<div class="mb-3">
    <button class="btn btn-success" type="submit">{{ $modo }} información</button>
</div>
