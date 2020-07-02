<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Daftar Pertanyaan</title>
  </head>
  <body style="background-color:whitesmoke;">

    <div class="container mt-3">
        <a href="/pertanyaan/create" class="btn btn-success mb-3">Buat Pertanyaan</a> <h2 style="text-align: center;">Daftar Pertanyaan</h2>
        <hr>
        @if(session('pesan'))
            <div class="alert alert-success" style="text-align: center;" role="alert">
                {{ session('pesan') }}
            </div>
        @elseif(session('jawab'))
            <div class="alert alert-info" style="text-align: center;" role="alert">
                {{ session('jawab') }}
            </div>
        @endif

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">judul</th>
                <th scope="col">isi</th>
                <th scope="col"></th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($pertanyaan as $p)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $p->judul }}</td>
                    <td>{{ $p->isi }}</td>
                    <td><a href="/lihat-jawaban/{{ $p->id }}" class="btn btn-outline-info">Lihat Jawaban</a></td>
                    <td><a href="/jawaban/{{ $p->id }}" class="btn btn-outline-warning">Jawab</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
