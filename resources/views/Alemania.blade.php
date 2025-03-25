@extends('plantilla')

@section('contenido')
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <!-- Encabezado -->
        <header class="text-center py-4 bg-dark text-white">
            <h1 class="fw-bold">Selección Alemana de Fútbol</h1>
            <p class="fs-5">Noticias, análisis y todo sobre la selección de Alemania</p>
        </header>

        <!-- Contenido principal -->
        <main class="flex-grow-1" style="background: url('{{ asset('img/fondo.jpg') }}') no-repeat center center/cover;">

            <div class="container py-5">
                <!-- Sección de Noticias -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Últimas Noticias</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/11.jpeg') }}" class="card-img-top" alt="Noticia 1">
                                <div class="card-body">
                                    <h5 class="card-title">Alemania vence a Francia en la Euro</h5>
                                    <p class="card-text">Un gol de Havertz en el último minuto le da la victoria a Alemania...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/22.jpeg') }}" class="card-img-top" alt="Noticia 2">
                                <div class="card-body">
                                    <h5 class="card-title">Convocados para el Mundial</h5>
                                    <p class="card-text">Julian Nagelsmann presenta la lista de jugadores para el torneo...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/33.jpeg') }}" class="card-img-top" alt="Noticia 3">
                                <div class="card-body">
                                    <h5 class="card-title">El regreso de Thomas Müller</h5>
                                    <p class="card-text">El veterano jugador vuelve a la selección para liderar el equipo...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sección de Galería -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Galería</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('img/paja.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/ale.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/mania.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/blanco.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </section>

                <!-- Sección de Estadísticas -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-black">Estadísticas Recientes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" style="background-color: white;">
                            <thead class="bg-dark text-white">
                                <tr>
                                    <th>Partido</th>
                                    <th>Resultado</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Alemania vs Francia</td>
                                    <td>2 - 1</td>
                                    <td>10 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Alemania vs España</td>
                                    <td>1 - 0</td>
                                    <td>15 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Alemania vs Italia</td>
                                    <td>1 - 1</td>
                                    <td>20 de Marzo, 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>

        <!-- Pie de página -->
        <footer class="text-center py-3 bg-dark text-white">
            <p class="mb-1">© 2025 - Todos los derechos reservados</p>
            <p class="mb-1">Cesar Fernandez Guerrero - Estudiante de Ingeniería en Sistemas</p>
            <img src="{{ asset('img/tec.png') }}" alt="TecNM" style="height: 50px;">
        </footer>

    </div>
@endsection
