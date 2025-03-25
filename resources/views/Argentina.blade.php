@extends('plantilla')

@section('contenido')
    <div class="container-fluid min-vh-100 d-flex flex-column">
        <!-- Encabezado -->
        <header class="text-center py-4 bg-primary text-white">
            <h1 class="fw-bold">Selección Argentina de Fútbol</h1>
            <p class="fs-5">Noticias, análisis y todo sobre la selección de Argentina</p>
        </header>

        <!-- Contenido principal -->
        <main class="flex-grow-1" style="background: url('{{ asset('img/argentina.jpg') }}') no-repeat center center/cover;">

            <div class="container py-5">
                <!-- Sección de Noticias -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Últimas Noticias</h2>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/ganaron.jpg') }}" class="card-img-top" alt="Noticia 1">
                                <div class="card-body">
                                    <h5 class="card-title">Argentina gana la Copa América</h5>
                                    <p class="card-text">Con un gol de Messi, Argentina se consagra campeón una vez más...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/mundial.jpg') }}" class="card-img-top" alt="Noticia 2">
                                <div class="card-body">
                                    <h5 class="card-title">Convocados para el Mundial</h5>
                                    <p class="card-text">Lionel Scaloni anuncia la lista de jugadores para la próxima Copa del Mundo...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow">
                                <img src="{{ asset('img/di.jpg') }}" class="card-img-top" alt="Noticia 3">
                                <div class="card-body">
                                    <h5 class="card-title">Di María se retira de la selección</h5>
                                    <p class="card-text">El "Fideo" anuncia su despedida tras años de éxitos con Argentina...</p>
                                    <a href="#" class="btn btn-warning text-dark">Leer más</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Sección de Galería -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-blue">Galería</h2>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('img/mara.jpg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/amigos.jpg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/mes.jpg') }}" class="img-fluid rounded shadow">
                        </div>
                        <div class="col-md-3">
                            <img src="{{ asset('img/cancha.jpeg') }}" class="img-fluid rounded shadow">
                        </div>
                    </div>
                </section>

                <!-- Sección de Estadísticas -->
                <section class="mb-5">
                    <h2 class="fw-bold text-center mb-4 text-white">Estadísticas Recientes</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped text-center" style="background-color: white;">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>Partido</th>
                                    <th>Resultado</th>
                                    <th>Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Argentina vs Brasil</td>
                                    <td>2 - 1</td>
                                    <td>10 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Argentina vs Uruguay</td>
                                    <td>3 - 0</td>
                                    <td>15 de Marzo, 2025</td>
                                </tr>
                                <tr>
                                    <td>Argentina vs Chile</td>
                                    <td>2 - 2</td>
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
