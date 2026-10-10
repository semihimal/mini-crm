<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Firma Düzenle</title>
</head>

<body>

    <h1>Firma Düzenle</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="/companies/{{ $company->id }}" method="POST">

        @csrf
        @method('PUT')

        <div>
            <label>Firma Adı</label>
            <input
                type="text"
                name="name"
                value="{{ old('name', $company->name) }}"
            >
        </div>

        <br>

        <div>
            <label>E-posta</label>
            <input
                type="email"
                name="email"
                value="{{ old('email', $company->email) }}"
            >
        </div>

        <br>

        <div>
            <label>Telefon</label>
            <input
                type="text"
                name="phone"
                value="{{ old('phone', $company->phone) }}"
            >
        </div>

        <br>

        <div>
            <label>Web Sitesi</label>
            <input
                type="text"
                name="website"
                value="{{ old('website', $company->website) }}"
            >
        </div>

        <br>

        <div>
            <label>Adres</label>
            <textarea name="address">{{ old('address', $company->address) }}</textarea>
        </div>

        <br>

        <div>
            <label>Durum</label>

            <select name="status">
                <option
                    value="active"
                    @selected(old('status', $company->status) === 'active')
                >
                    Aktif
                </option>

                <option
                    value="inactive"
                    @selected(old('status', $company->status) === 'inactive')
                >
                    Pasif
                </option>
            </select>
        </div>

        <br>

        <div>
            <label>Notlar</label>
            <textarea name="notes">{{ old('notes', $company->notes) }}</textarea>
        </div>

        <br>

        <button type="submit">
            Güncelle
        </button>

    </form>

</body>

</html>