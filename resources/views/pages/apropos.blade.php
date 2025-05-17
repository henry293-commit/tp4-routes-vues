@extends("layout")

@section('title', 'À propos')

@section('content')
<style>
    .title-animate {
        color: red;
        font-weight: bold;
        text-shadow: 2px 2px 5px rgba(255, 0, 0, 0.5);
    }

    .fade-in-text {
        color: #900;
        font-size: 18px;
        animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center animate__animated animate__zoomIn">
            <h1 class="title-animate">Le cadre PHP pour les artisans du web</h1>
            <hr>
            <p class="lead fade-in-text">Laravel est un framework d'application web avec une syntaxe expressive et élégante, selon l'idée du développeur Henry Dyna Kalota</p>
            <p class="fade-in-text">Laravel valorise la beauté. Nous aimons le code propre tout autant que vous. Une syntaxe simple et élégante met des fonctionnalités extraordinaires à votre portée..</p>
        </div>
    </div>
</div>
@endsection
