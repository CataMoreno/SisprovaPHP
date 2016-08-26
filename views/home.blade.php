@extends('plantilla')

@section('contenido')

<h1>SISTEMA DE INGRESOS Y SALIDAS DEL SENA</h1>
<div class="body">
                            <div id="carousel-example-generic_2" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic_2" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic_2" data-slide-to="2"></li>
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img src="images/image-gallery/mm.jpg" />
                                        <div class="carousel-caption">
                                            <h1>NO MÁS FILAS!!!</h1>
                                            <h4>Ahora con nuestro nuevo sistema de entra todo sera mas rápido...</h4>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/fila.jpg" />
                                        <div class="carousel-caption">
                                            <h1>¡¡¡TU HUELLA AHORA LO ES TODO!!!</h1>
                                            <h4>No mas papeles, Ni carnets ahora tu hella te identifica ...</h4>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <img src="images/image-gallery/Vehiculos BN.jpg" />
                                        <div class="carousel-caption">
                                            <h1>REPORTA TUS EQUIPOS Y VEHICULO POR MEDIO DE TU HUELLA</h1>
                                            <h4>Ahora todo esta al alcance de tus manos.</h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carousel-example-generic_2" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carousel-example-generic_2" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
@stop()