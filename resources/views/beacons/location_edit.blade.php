<?php $nivel = '../../../' ?>
@extends('layouts.app')

@section('content')
<div class="contenedor">
  <div class="principal">
    <div class="titulo">
      <h3>
        Editar ubicaci&oacute;n
      </h3>
    </div>

    <div class="form">
      @if (session('status'))
         <span class="help-block">
           <strong>{{ session('status') }}</strong>
         </span>
       @endif
       <form class="form-horizontal" role="form" method="POST" action="{{ route('location_update', $location->location_id) }}">
        {{ csrf_field() }}


        <div class="input no_icon {{ $errors->has('name') ? 'error' : '' }}">
          <input type="text" name="name" value="{{$location->name}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Name</span>
          </label>
          @if ($errors->has('name'))
            <span class="error_input">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
          @endif
        </div>
        <div class="input no_icon {{ $errors->has('city') ? 'error' : '' }}">
          <input type="text" name="city" value="{{$location->city}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">City</span>
          </label>
          @if ($errors->has('city'))
            <span class="error_input">
                <strong>{{ $errors->first('city') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('street') ? 'error' : '' }}">
          <input type="text" name="street" value="{{$location->street}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Street</span>
          </label>
          @if ($errors->has('street'))
            <span class="error_input">
                <strong>{{ $errors->first('street') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('street_number') ? 'error' : '' }}">
          <input type="text" name="street_number" value="" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Street Number</span>
          </label>
          @if ($errors->has('street_number'))
            <span class="error_input">
                <strong>{{ $errors->first('street_number') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('minor') ? 'error' : '' }}">
          <input type="text" name="minor" value="{{$location->street_number}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Minor</span>
          </label>
          @if ($errors->has('minor'))
            <span class="error_input">
                <strong>{{ $errors->first('minor') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('zip') ? 'error' : '' }}">
          <input type="text" name="zip" value="{{$location->zip}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Zip</span>
          </label>
          @if ($errors->has('zip'))
            <span class="error_input">
                <strong>{{ $errors->first('zip') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('lat') ? 'error' : '' }}">
          <input type="text" name="lat" value="{{$location->lat}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Lat</span>
          </label>
          @if ($errors->has('lat'))
            <span class="error_input">
                <strong>{{ $errors->first('lat') }}</strong>
            </span>
          @endif
        </div>

        <div class="input no_icon {{ $errors->has('lng') ? 'error' : '' }}">
          <input type="text" name="lng" value="{{$location->lng}}" required="">
          <label for="">
            <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
            <span class="text">Lng</span>
          </label>
          @if ($errors->has('lng'))
            <span class="error_input">
                <strong>{{ $errors->first('lng') }}</strong>
            </span>
          @endif
        </div>


        <div class="button">
          <center>
            <button type="submit" name="button">
              <span>Guardar</span>
            </button>
            <a href="{{ route('location_beacons') }}" class="">
              <span>Cancelar</span>
            </a>
          </center>
        </div>
      </form>

    </div>
  </div>
</div>

@endsection
