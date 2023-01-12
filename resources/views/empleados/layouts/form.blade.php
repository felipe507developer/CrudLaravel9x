@csrf
<div class="mb-3">
    <label for="" class="form-label">Enter your name</label>
    <input value="{{ isset($empleado->name)?$empleado->name : old('name', '') }}" type="text" name="name" id="" class="form-control" placeholder="" aria-describedby="nameID">
    <small id="nameID" class="text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Enter your lastname</label>
    <input value="{{isset($empleado->lastname) ? $empleado->lastname : old('lastname','') }}" type="text" name="lastname" id="" class="form-control" placeholder=""
        aria-describedby="lastnameId">
    <small id="lastnameId" class="text-muted"></small>
</div>
<div class="mb-3">
    <label for="" class="form-label">Enter your age</label>
    <input value="{{ isset($empleado->age) ? $empleado->age : old('age', '')  }}" type="text" name="age" id="" class="form-control" placeholder=""
        aria-describedby="ageId">
    <small id="ageId" class="text-muted"></small>
</div>
<div class="mb-3">
    

    @if (isset($empleado->photo))
     <img src="{{ asset('storage').'/'.$empleado->photo }}" width="100" height="100" alt="">
    @endif
    <input value="{{old('photo')}}" type="file" name="photo" id="" class="form-control" placeholder=""
        aria-describedby="photopId">
    <small id="photoId" class="text-muted"></small>
</div>

<br>
<div class="mb-3">
    <button type="submit">{{$modo}} información</button>
</div>