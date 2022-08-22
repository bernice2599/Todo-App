<!DOCTYPE html>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TODO APP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-primary shadow" style="margin-bottom: 20px;">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">TODO APP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="/">All Tasks</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/tasks/create">New Task</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="container">
        @yield('content')
    </div>
</body>

</html>