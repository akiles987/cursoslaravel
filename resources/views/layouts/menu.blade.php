<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.css" rel="stylesheet"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.1/mdb.min.js"></script>

<style>
    #botones_menu {
        display: flex;
        justify-content: space-between;
    }
</style>

<div id="botones_menu" >
    <div id="menu_izquierda">
        <a class="btn btn-primary" href="{{ url('/') }}">{{__('messages.paginaprinc')}}</a>
    </div>
    <div id="menu_derecha">
        <a class="btn btn-primary" href="{{ url('/contacto') }}">{{__('messages.contacto')}}</a>
    </div>

    <div class="btn-group">
  <button type="button" class="btn btn-outline-secondary btn-rounded dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{__('messages.idioma')}}  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{url('locale/es')}}">{{__('messages.espa')}}</a>
    <a class="dropdown-item" href=" {{url('locale/en')}}">{{__('messages.ing')}}</a>
  </div>
</div>

</div>