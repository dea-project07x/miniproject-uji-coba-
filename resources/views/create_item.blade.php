<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang Inventory</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background: #f4f6f9; }
        .container { background: white; padding: 20px; border-radius: 8px; max-width: 500px; margin: auto; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; font-weight: bold; }
        input { width: 100%; padding: 8px; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
        .error { color: red; font-size: 14px; margin-top: 5px; }
        .btn { padding: 10px 15px; background: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
        .btn-secondary { background: #6c757d; color: white; text-decoration: none; display: inline-block; padding: 10px 15px; border-radius: 4px; margin-left: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tambah Barang Baru</h2>

        <form action="{{ route('items.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Nama Barang:</label>
                <input type="text" name="name" value="{{ old('name') }}">
                @error('name') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Jumlah:</label>
                <input type="number" name="quantity" value="{{ old('quantity') }}">
                @error('quantity') <div class="error">{{ $message }}</div> @enderror
            </div>

            <div class="form-group">
                <label>Harga (Rp):</label>
                <input type="number" name="price" value="{{ old('price') }}">
                @error('price') <div class="error">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn">Simpan Barang</button>
            <a href="{{ route('items.index') }}" class="btn-secondary">Batal</a>
        </form>
    </div>
</body>
</html>
