@extends('plantilla')

@section('contenido')
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <!-- Encabezado -->
        <header class="text-center py-4 bg-primary text-white">
            <h1 class="fw-bold">Selección Francesa de Fútbol</h1>
            <p class="fs-5">Noticias, análisis y todo sobre la selección de Francia</p>
        </header>

        <!-- Contenido principal -->
        <main class="flex-grow-1" style="background: url('{{ asset('img/francia.jpg') }}') no-repeat center center/cover;">

            <div class="container py-5">
                <!-- Sección de Noticias -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Últimas Noticias</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/euro.jpeg') }}" class="card-img-top" alt="Noticia 1">
                                <div class="card-body">
                                    <h5 class="card-title">Francia golea en la Euro</h5>
                                    <p class="card-text">Mbappé brilla con un hat-trick en la victoria contra Italia...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/convo.jpeg') }}" class="card-img-top" alt="Noticia 2">
                                <div class="card-body">
                                    <h5 class="card-title">Lista de convocados</h5>
                                    <p class="card-text">Didier Deschamps revela a los jugadores que irán al Mundial...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/gris.jpeg') }}" class="card-img-top" alt="Noticia 3">
                                <div class="card-body">
                                    <h5 class="card-title">Griezmann y su legado</h5>
                                    <p class="card-text">El mediocampista se convierte en el jugador con más asistencias...</p>
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
                            <img src="{{ asset('img/map.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/pla.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/cam.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/goles.jpg') }}" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </section>

                <!-- Sección de Estadísticas -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Estadísticas Recientes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center bg-white">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Partido</th>
                                    <th>Resultado</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Francia vs Italia</td>
                                    <td>3 - 0</td>
                                    <td>12 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Francia vs España</td>
                                    <td>2 - 2</td>
                                    <td>17 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Francia vs Alemania</td>
                                    <td>1 - 0</td>
                                    <td>22 de Marzo, 2025</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </main>

        <!-- Pie de página -->
        <footer class="text-center py-3 bg-primary text-white">
            <p class="mb-1">© 2025 - Todos los derechos reservados</p>
            <p class="mb-1">Cesar Fernandez Guerrero - Estudiante de Ingeniería en Sistemas</p>
            <img src="{{ asset('img/tec.png') }}" alt="TecNM" style="height: 50px;">
        </footer>

    </div>
@endsection
