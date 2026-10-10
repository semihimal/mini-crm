<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>{{ $company->name }}</title>
</head>

<body>

    <h1>{{ $company->name }}</h1>

    <p><strong>E-posta:</strong> {{ $company->email }}</p>
    <p><strong>Telefon:</strong> {{ $company->phone }}</p>
    <p><strong>Web Sitesi:</strong> {{ $company->website }}</p>
    <p><strong>Adres:</strong> {{ $company->address }}</p>
    <p><strong>Durum:</strong> {{ $company->status }}</p>
    <p><strong>Notlar:</strong> {{ $company->notes }}</p>

    <a href="/companies">Firmalara Dön</a>

</body>

</html>