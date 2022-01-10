
<style>
    #botones_menu {
        display: flex;
        justify-content: space-between;
    }
</style>


<div id="botones_menu">
    <div id="menu_izquierda">
        <a class="btn btn-primary" href="{{ url('/') }}">Página principal</a>
    </div>
    <div id="menu_derecha">
        <a class="btn btn-primary" href="{{ url('/contacto') }}">Contacto</a>
    </div>

</div>