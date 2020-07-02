<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Buat Jawaban</title>
  </head>
  <body style="background-color:whitesmoke;">

    <div class="container mt-3">
        <a href="/pertanyaan" class="btn btn-danger mb-3">Kembali</a> <h2 style="text-align: center;">Buat Jawaban</h2>
        <hr>
        <form method="post" action="/jawaban/{{ $pertanyaan->id }}">
        @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input value="{{ $pertanyaan->judul }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" readonly>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail2">Isi</label>
                <textarea type="text" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" rows="3" readonly>{{ $pertanyaan->isi }}</textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Jawaban</label>
                <textarea name="jawaban" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>
