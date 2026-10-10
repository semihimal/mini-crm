<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Yeni Firma Ekle</title>
</head>

<body>

    <h1>Yeni Firma Ekle</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/companies" method="POST">

        @csrf

        <div>
            <label>Firma Adı</label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label>E-posta</label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
            >
        </div>

        <br>

        <div>
            <label>Telefon</label>
            <input
                type="text"
                name="phone"
                value="{{ old('phone') }}"
            >
        </div>

        <br>

        <div>
            <label>Web Sitesi</label>
            <input
                type="text"
                name="website"
                value="{{ old('website') }}"
            >
        </div>

        <br>

        <div>
            <label>Adres</label>
            <textarea name="address">{{ old('address') }}</textarea>
        </div>

        <br>

        <div>
            <label>Durum</label>

            <select name="status">
                <option value="active">Aktif</option>
                <option value="inactive">Pasif</option>
            </select>
        </div>

        <br>

        <div>
            <label>Notlar</label>
            <textarea name="notes">{{ old('notes') }}</textarea>
        </div>

        <br>

        <button type="submit">
            Kaydet
        </button>

    </form>

</body>

</html>