<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Daftar Buku</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
      padding: 20px;
    }

    .container {
      max-width: 1000px;
      margin: auto;
      background: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 12px;
      text-align: center;
    }

    th {
      background-color: #3c4e52;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .cover-img {
      width: 60px;
      height: auto;
      border-radius: 4px;
    }

    .btn {
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: white;
      font-size: 14px;
    }

    .btn-edit {
      background-color: #2196F3;
    }

    .btn-delete {
      background-color: #f44336;
    }

    .btn:hover {
      opacity: 0.9;
    }

    .btn-create {
      background-color: #4CAF50;
      color: white;
      padding: 8px 16px;
      border-radius: 4px;
      text-decoration: none;
      font-weight: bold;
    }

    .btn-create:hover {
     opacity: 0.9;
    }

  </style>
</head>
<body>
  <div class="container">
    <h1>Daftar Buku Perpustakaan</h1>
    
    <div style="text-align: right; margin-bottom: 10px;">
      <a href="/buku/create" class="btn btn-create">+ Tambah Buku</a>
    </div>

    <table>
      <thead>
        <tr>
          <th>ID Buku</th>
          <th>Judul</th>
          <th>Pengarang</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Kategori</th>
          <th>Jumlah Stok</th>
          <th>Deskripsi</th>
          <th>Cover</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          @foreach ($books as $b)
              <td> {{ $b->id_buku }} </td>
              <td> {{ $b->judul }} </td>
              <td> {{ $b->pengarang }} </td>
              <td> {{ $b->penerbit }} </td>
              <td> {{ $b->tahun_terbit }} </td>
              <td> {{ $b->kategori }} </td>
              <td> {{ $b->jumlah_stok }} </td>
              <td> {{ $b->deskripsi }} </td>
              <td> {{ $b->cover }} </td>
              <td>
                <a href="/buku/{{ $b->id_buku }}/edit" class="btn btn-edit">Edit</a>
                <button class="btn btn-delete">Delete</button>
              </td>
              
                
          @endforeach
        </tr>
        <!-- Tambahkan baris lain di sini -->
      </tbody>
    </table>
  </div>
</body>
</html>
