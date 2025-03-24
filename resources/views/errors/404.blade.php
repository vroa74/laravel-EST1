@extends('errors::minimal')

@section('title', 'Página No Encontrada')
@section('code', '404')
@section('message', 'Oops! No pudimos encontrar la página que buscas.')

@section('extra_styles')
    <style>
        /* Posicionar la imagen en la parte inferior izquierda */
        #background {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 700px; /* Ajusta el tamaño */
            height: auto;
            opacity: 0.4; /* Controlar visibilidad */
            z-index: -1; /* Mantener en el fondo */
            user-select: none; /* Evita selección */
            pointer-events: none; /* Evita interacción */
        }

        /* Asegurar que el contenido principal sea legible */
        .content {
            position: relative;
            z-index: 10; /* Trae el texto al frente */
            text-align: center;
            color: #2d3748; /* Ajustar color */
        }

        /* Texto animado */
        .animated-text {
            font-size: 20px;
            color: red;
            animation: blink 1s infinite;
        }

        @keyframes blink {
            0% { opacity: 1; }
            50% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
@endsection

@section('extra_content')
    <!-- Imagen en la esquina inferior izquierda -->
    <img id="background" src="{{ asset('media/img/background.png') }}" alt="Laravel background" />

    <!-- Contenido principal -->
    <div class="content">
        <p class="animated-text">Tal vez escribiste mal la URL. ¡Intenta regresar al inicio!</p>
        <a href="{{ url('/') }}" class="btn btn-red-500">Volver al Inicio</a>
    </div>
@endsection

@section('extra_scripts')
    <script>
        console.log("Error 404 detectado - Página no encontrada.");
    </script>
@endsection
