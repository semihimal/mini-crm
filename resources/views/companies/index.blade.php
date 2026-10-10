<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Firmalar</title>
</head>

<body>

    <h1>Firmalar</h1>

    <a href="/companies/create">Yeni Firma Ekle</a>
    <br><br>

    <table border="1" cellpadding="10">

        <thead>
            <tr>
                <th>ID</th>
                <th>Firma Adı</th>
                <th>E-posta</th>
                <th>Telefon</th>
                <th>Durum</th>
            </tr>
        </thead>

        <tbody>

            @foreach ($companies as $company)

            <tr>
                <td>{{ $company->id }}</td>
                <td>
                    <a href="/companies/{{ $company->id }}">
                        {{ $company->name }}
                    </a>
                </td>
                <td>{{ $company->name }}</td>
                <td>{{ $company->email }}</td>
                <td>{{ $company->phone }}</td>
                <td>{{ $company->status }}</td>
                <td>

                    <a href="/companies/{{ $company->id }}/edit">
                        Düzenle
                    </a>

                    <form
                        action="/companies/{{ $company->id }}"
                        method="POST"
                        style="display:inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Sil
                        </button>
                    </form>

                </td>
            </tr>

            @endforeach

        </tbody>

    </table>

</body>

</html>