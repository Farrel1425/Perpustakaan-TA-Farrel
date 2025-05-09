<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Edit Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: auto;
      background: white;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
      color: #555;
    }

    input, textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 16px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }

    .btn-submit {
      background-color: #2196F3;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn-submit:hover {
      opacity: 0.9;
    }

    .back-link {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      color: #2196F3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Edit Buku</h2>
    <form action="/buku/{{ $book->id_buku }}" method="POST">
      @csrf
      @method('PUT')

      <label for="judul">Judul</label>
      <input type="text" name="judul" id="judul" value="{{ $book->judul }}" required>

      <label for="pengarang">Pengarang</label>
      <input type="text" name="pengarang" id="pengarang" value="{{ $book->pengarang }}" required>

      <label for="penerbit">Penerbit</label>
      <input type="text" name="penerbit" id="penerbit" value="{{ $book->penerbit }}" required>

      <label for="tahun_terbit">Tahun Terbit</label>
      <input type="number" name="tahun_terbit" id="tahun_terbit" value="{{ $book->tahun_terbit }}" required>

      <label for="kategori">Kategori</label>
      <input type="text" name="kategori" id="kategori" value="{{ $book->kategori }}" required>

      <label for="jumlah_stok">Jumlah Stok</label>
      <input type="number" name="jumlah_stok" id="jumlah_stok" value="{{ $book->jumlah_stok }}" required>

      <label for="deskripsi">Deskripsi</label>
      <textarea name="deskripsi" id="deskripsi" rows="4" required>{{ $book->deskripsi }}</textarea>

      <label for="cover">Link Cover (opsional)</label>
      <input type="text" name="cover" id="cover" value="{{ $book->cover }}">

      <button type="submit" class="btn-submit">Simpan Perubahan</button>
    </form>

    <a href="/buku" class="back-link">← Kembali ke Daftar Buku</a>
  </div>
</body>
</html>
