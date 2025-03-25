@extends('plantilla')

@section('contenido')
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <!-- Encabezado -->
        <header class="text-center py-4 bg-success text-white">
            <h1 class="fw-bold">Selección Mexicana</h1>
            <p class="fs-5">Noticias, análisis y todo sobre el Tri</p>
        </header>

        <!-- Contenido principal -->
        <main class="flex-grow-1" style="background: url('{{ asset('img/mexico.jpg') }}') no-repeat center center/cover;">

            <div class="container py-5">
                <!-- Sección de Noticias -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4" style="color: black;">Últimas Noticias</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/mb.jpeg') }}" class="card-img-top" alt="Noticia 1">
                                <div class="card-body">
                                    <h5 class="card-title">México vence a Brasil en amistoso</h5>
                                    <p class="card-text">La selección mexicana derrotó a Brasil con un gol de último minuto...</p>
                                    <a href="#" class="btn btn-success">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/a.jpeg') }}" class="card-img-top" alt="Noticia 2">
                                <div class="card-body">
                                    <h5 class="card-title">Convocados para la Copa América</h5>
                                    <p class="card-text">Lista oficial de jugadores que representarán a México en el torneo...</p>
                                    <a href="#" class="btn btn-success">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/entre.jpeg') }}" class="card-img-top" alt="Noticia 3">
                                <div class="card-body">
                                    <h5 class="card-title">Cambio de entrenador en el Tri</h5>
                                    <p class="card-text">La FMF anunció la llegada de un nuevo director técnico para el equipo...</p>
                                    <a href="#" class="btn btn-success">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sección de Galería -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4" style="color: black;">Galería</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('img/1.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/2.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/3.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/4.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </section>

                <!-- Sección de Estadísticas -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4" style="color: black;">Estadísticas Recientes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" style="background-color: white;">
                            <thead class="bg-success text-white">
                                <tr>
                                    <th>Partido</th>
                                    <th>Resultado</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>México vs Argentina</td>
                                    <td>2 - 1</td>
                                    <td>10 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>México vs Brasil</td>
                                    <td>1 - 0</td>
                                    <td>15 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>México vs USA</td>
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
