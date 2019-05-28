<table>
    <tr><td>ID</td><td>Prix</td><td>Titre</td></tr>
@foreach ($lesmangas as $mangas)
    <tr>
        <td>{{ $mangas->getIdManga() }}<td/>
        <td>{{ $mangas->getPrix() }}</td>
        <td>{{ $mangas->getTitre() }}</td>
    </tr>
@endforeach
</table>
