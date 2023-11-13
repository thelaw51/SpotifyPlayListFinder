<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Spotify Playlist Search</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="vh-100 bg-success">z`
  <main class="h-100 d-flex justify-content-center align-items-center">
    <div class="login bg-white p-4 rounded shadow">
      <h1 class="text-center mb-4">Search For song</h1>
      <form id="SongSearchForm">
        <input type="text" class="form-control mb-2" name="txtSongSearch" placeholder="Search for song" />
        <button type="button" class="btn btn-primary w-100" id="btnSongSearch">Search</button>
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle w-100 bg-transparent text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select a song
          </button>
          <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item" href="#">placeholder song 1</a></li>
            <li><a class="dropdown-item" href="#">placeholder song 2</a></li>
            <li><a class="dropdown-item" href="#">placeholder song 3</a></li>
          </ul>
        </div>
        <button type="submit" class="btn btn-primary w-100">Find Playlists</button>
      </form>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script>
    $('#btnSongSearch').click(function() {
      $.ajax({
        url: "./php/findSongs.php",
        type: "POST",
        data: $('#SongSearchForm').serialize(),
        success: function(res) {

        }
      })
    })
  </script>
</body>

</html>