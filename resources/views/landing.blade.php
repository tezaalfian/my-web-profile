<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="/img/icon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&family=Ubuntu:ital,wght@1,300&display=swap" rel="stylesheet">
    <title>Teza Alfian</title>
    <style>
        .btn.btn-rounded{
            border-radius: 50%;
            height: 40px;
            width: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            border-width: 2px;
        }
    </style>
  </head>
  <body class="bg-dark d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="text-white text-center">
        <img src="{{ env('APP_AVATAR', 'https://avatars.githubusercontent.com/u/44139001') }}" class="border border-3 rounded-circle mb-3" style="width: 170px;">
        <h1 style="font-family: 'Quicksand'">Teza Alfian</h1>
        <div class="d-flex justify-content-center mb-1">
            <a href="https://www.instagram.com/tezaalfian" target="_blank" class="btn btn-outline-secondary me-1 btn-rounded"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/in/teza-alfian/" target="_blank" class="btn btn-outline-secondary me-1 btn-rounded"><i class="fab fa-linkedin"></i></a>
            <a href="https://github.com/tezaalfian" target="_blank" class="btn btn-outline-secondary me-1 btn-rounded"><i class="fab fa-github"></i></a>
            <a href="https://gitlab.com/tezaalfian" target="_blank" class="btn btn-outline-secondary me-1 btn-rounded"><i class="fab fa-gitlab"></i></a>
        </div>
        <small style="font-family: 'Ubuntu'">(some features coming soon)</small>
    </div>
    <script src="https://kit.fontawesome.com/75656c5976.js" crossorigin="anonymous"></script>
  </body>
</html>
