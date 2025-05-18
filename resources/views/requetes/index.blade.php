<!DOCTYPE html>
<html>

<head>
    <title>Requêtes Laravel</title>
</head>

<body>
    <h1>Résultats des requêtes</h1>

    <h2>1. Tous les fournisseurs</h2>
    <ul>
        @foreach($fournisseurs as $f)
        <li>{{ $f->nom }} - {{ $f->ville }}</li>
        @endforeach
    </ul>

    <h2>2. Fournisseurs d’Agadir</h2>
    <ul>
        @foreach($fournisseursAgadir as $f)
        <li>{{ $f->nom }}</li>
        @endforeach
    </ul>

    <h2>3. Noms et villes des fournisseurs</h2>
    <ul>
        @foreach($nomsVilles as $f)
        <li>{{ $f->nom }} - {{ $f->ville }}</li>
        @endforeach
    </ul>

    <h2>4. Villes différentes</h2>
    <ul>
        @foreach($villes as $v)
        <li>{{ $v }}</li>
        @endforeach
    </ul>

    <h2>5. Tous les articles</h2>
    <ul>
        @foreach($articles as $a)
        <li>{{ $a->description }} - {{ $a->couleur }} - {{ $a->prix_achat }} DH</li>
        @endforeach
    </ul>


    <h2>6. Désignation & Poids</h2>
    <ul>
        @foreach($descPoids as $a)
        <li>{{ $a->description }} - {{ $a->poids }}g</li>
        @endforeach
    </ul>

    <h2>7. Article ID 1</h2>
    @if($article1)
    <p>{{ $article1->description }}</p>
    @else
    <p>Aucun article trouvé</p>
    @endif

    <h2>8. Articles verts</h2>
    <ul>
        @foreach($articlesVerts as $a)
        <li>{{ $a->id }} - {{ $a->description }}</li>
        @endforeach
    </ul>

    <h2>9. Articles verts > 500 DH</h2>
    <ul>
        @foreach($articlesVertsPrix as $a)
        <li>{{ $a->description }} - {{ $a->prix_achat }} DH</li>
        @endforeach
    </ul>

    <h2>10. Articles avec poids entre 200 et 300</h2>
    <ul>
        @foreach($articlesPoids as $a)
        <li>{{ $a->description }} - {{ $a->poids }}g</li>
        @endforeach
    </ul>

    <h2>11. Nombre total d’articles : {{ $nbArticles }}</h2>

    <h2>12. Moyenne prix d’achat : {{ number_format($moyPrix, 2) }} DH</h2>
</body>

</html>
