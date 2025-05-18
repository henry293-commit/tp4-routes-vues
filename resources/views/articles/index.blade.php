<h1>Liste des articles</h1>

<table border="1" cellpadding="10" cellspacing="0">
    <thead>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Poids</th>
            <th>Couleur</th>
            <th>Prix</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->id }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->poids }}</td>
            <td>{{ $article->couleur }}</td>
            <td>{{ $article->prix_achat }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Bouton Valider -->
<br>
<form action="{{ route('articles.valider') }}" method="POST">
    @csrf
    <button type="submit" style="background-color: #007bff; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
        Valider
    </button>
</form>
