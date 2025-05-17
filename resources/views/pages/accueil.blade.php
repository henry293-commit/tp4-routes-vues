@extends('layout')
@section('title', 'À propos')

@section('content')
<style>
    .about-container {
        animation: fadeInUp 1s ease-out;
        background: #e8f5e9;
        border-radius: 10px;
        padding: 30px;
        margin-top: 20px;
        box-shadow: 0 4px 12px rgba(0, 128, 0, 0.2);
    }

    h1 {
        color: #2e7d32;
        font-weight: bold;
        animation: fadeIn 1.5s ease-in-out;
    }

    p {
        color: #388e3c;
        font-size: 1.1rem;
        line-height: 1.6;
        animation: slideIn 1s ease-in-out;
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: scale(0.95);
        }

        100% {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes slideIn {
        0% {
            opacity: 0;
            transform: translateX(-30px);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12 about-container">
            <h1>The PHP Framework for Web Artisans</h1>
            <hr>
            <p>
                Laravel est un framework d'application web avec une syntaxe expressive et élégante.
                Nous avons déjà posé les bases - vous libérant ainsi de créer sans vous soucier des petits détails.
            </p>
            <p>
                Laravel valorise la beauté. Nous aimons le code propre tout autant que vous.
                Une syntaxe simple et élégante met une fonctionnalité incroyable à votre portée.
                Chaque fonctionnalité a été soigneusement réfléchie pour offrir une expérience développeur exceptionnelle.
            </p>
        </div>
    </div>
</div>
@endsection
