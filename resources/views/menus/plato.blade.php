<?php $nivel = '../../'?>

@extends('layouts.app')

@section('content')
    <!-- <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text">Platos del menu</h1>

             @if (session('status'))
	           <span class="help-block">
	           	 <strong>{{ session('status') }}</strong>
	           </span>
	         @endif


			  <a href="#modal1" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>

			  <div id="modal1" class="modal modal-fixed-footer">
			    <div class="modal-content">
			      <h4>Agregar Plato</h4>

			    <form class="form-horizontal" role="form" method="POST" action="{{ route('store_menu') }}">
	            {{ csrf_field() }}

			     <label for="name" class="col-md-4 control-label">Nombre</label>
	             <input type="text" name="name" autofocus="autofocus" required>

			      <p>
			        <input class="with-gap" name="type" value="vegetariana" type="radio" id="type"  />
			        <label for="type">Vegetariana</label>
			    </p>
			   <p>
			        <input class="with-gap" name="type" value="sin gluten" type="radio" id="type2"  />
			        <label for="type2">Sin Gluten</label>
			    </p>
			    <p>
			        <input class="with-gap" name="type" value="bja caloria" type="radio" id="type3"  />
			        <label for="type3">Baja Caloria</label>
			    </p>
			    <p>
			        <input class="with-gap" name="type" value="picante" type="radio" id="type4"  />
			        <label for="type4">Picante</label>
			    </p>

	             <label for="price" class="col-md-4 control-label">Precio</label>
	             <input type="text" name="price" required>

			    </div>
			    <div class="modal-footer">
			      	<div class="form-group">
		                <div class="col-md-6 col-md-offset-4">
		                    <button type="submit" class="btn btn-primary">
		                        Guardar
		                    </button>
		                </div>
		            </div>
			      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Salir</a>
			    </div>

			    </form>
			  </div>

            <table class="bordered centered">
              <thead>
                <tr>
                    <th data-field="id">Nombre</th>
                    <th data-field="id">Tipo</th>
                    <th data-field="id">Precio</th>
                    <th data-field="name">Detalles</th>
                    <th data-field="price">Eliminar</th>
                </tr>
              </thead>

              <tbody>
	              @foreach($menus as $m)
	                <tr id='{{$m->id}}'>
	                  <td>{{$m->name}}</td>
	                  <td>{{$m->type}}</td>
	                  <td>{{$m->price}}</td>
					  <td><a href="{{ route('show_plate', $m->id) }}"><i class="material-icons">input</i></a></td>
				      <td><a href="#" onclick="delete_session({{ $m->id }})"><i class="material-icons">clear</i></a></td>
	                </tr>
	              @endforeach
              </tbody>
            </table>

        </div>
    </div> -->


<div class="contenedor">
  <div class="principal">
    <div class="titulo">
      <h3>
        Platos del menu
      </h3>
    </div>

    <div class="agregar">
      <center>
        <a href="#platosMenu" class="waves-effect">
          <div class="">
            <span class="text">Agregar <br><strong>Platos<br>Menu</strong></span>
            <span class="icon"><i class="material-icons">add</i></span>
          </div>
        </a>
      </center>
    </div>

    <div class="beacons seccion">
      <div class="container">
        <div class="tabla">
          <table class="bordered centered">
            <thead>
              <tr>
                  <th data-field="id">Nombre</th>
                  <th data-field="id">Tipo</th>
                  <th data-field="id">Precio</th>
                  <th data-field="name">Detalles</th>
                  <th data-field="price">Eliminar</th>
              </tr>
            </thead>

            <tbody>
              @foreach($menus as $m)
                <tr id='{{$m->id}}'>
                  <td>{{$m->name}}</td>
                  <td>{{$m->type}}</td>
                  <td>{{$m->price}}</td>
                  <td><a href="{{ route('show_plate', $m->id) }}"><i class="material-icons">input</i></a></td>
                  <td><a href="#" onclick="delete_session({{ $m->id }})"><i class="material-icons">clear</i></a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

        <div class="agregar regresar">
      <center>
        <a href="{{ URL::previous() }}" class="waves-effect">
          <div class="">
            <span class="text">Regresar</span>
            <span class="icon"><i class="material-icons">reply</i></span>
          </div>
        </a>
      </center>
    </div>

  </div>
</div>
<div id="platosMenu" class="modal modal_">
  <div class="titulo">
    <h3>
      Agregar Plato
    </h3>
  </div>

  <div class="form">
    <form class="form-horizontal" role="form" method="POST" action="{{ route('store_menu') }}">
      {{ csrf_field() }}
      <input type="hidden" name="session_id" value="{{$session_id}}" required>



      <div class="input no_icon {{ $errors->has('name') ? 'error' : '' }}">
        <input type="text" name="name" value="" required="">
        <label for="">
          <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
          <span class="text">Nombre</span>
        </label>
        @if ($errors->has('name'))
          <span class="error_input">
              <strong>{{ $errors->first('name') }}</strong>
          </span>
        @endif
      </div>

      <div class="input select {{ $errors->has('type') ? 'error' : '' }}">
        <!-- <img src="img/icons/idioma.png" alt="" class="icon"> -->
        <select id="type" class="form-control icons" name="type" required>
          <option value="" disabled selected>Seleccione un Tipo</option>

          <option value="vegetariana">vegetariana</option>
          <option value="sin gluten">sin gluten</option>
          <option value="bja caloria">bja caloria</option>
          <option value="picante">picante</option>
        </select>

        @if ($errors->has('type'))
        <span class="error_input">
          <strong>{{ $errors->first('type') }}</strong>
        </span>
        @endif
      </div>

      <div class="input no_icon {{ $errors->has('price') ? 'error' : '' }}">
        <input type="text" name="price" value="" required="">
        <label for="">
          <!-- <span class="icon"><img src="img/icons/correo.png" alt=""></span> -->
          <span class="text">Precio</span>
        </label>
        @if ($errors->has('price'))
          <span class="error_input">
              <strong>{{ $errors->first('price') }}</strong>
          </span>
        @endif
      </div>
      <div class="button">
        <center>
          <button type="submit" name="button">
            <span>Guardar</span>
          </button>
          <a href="#" class="" onclick="$('#platosMenu').modal('close'); return false;">
            <span>Cancelar</span>
          </a>
        </center>
      </div>
    </form>
  </div>
</div>

@endsection
