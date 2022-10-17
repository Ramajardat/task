<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <style>body {
    /* background-color: #2A3166; */
    background: #f5eec2
	;
}
h2 {
	font-size: 26px;
    text-align: center;
    color: white;
    margin-bottom: 30px;
}


header{
    background-color:#416a59;
    display: flex;
    justify-content: center;
    color: #fff;
}


header #header-menu{
    list-style: none;
    padding: 10%;
    display: flex;
    gap: 30%;
    color: #fff;

}


header #header-menu li > a{
    text-decoration: none;
    color: white;
    transition: all 1s;
}

p {
	margin: 0;
	padding: 0;
    font-size: 20px;
}</style>
</head>
<body>

    <header>
        <nav
          class="navbar navbar-expand-sm navbar-light"
          style="background-color: #416a59;"
        >
          <div class="container">
            <a class="navbar-brand" href="#" style="color:#fff">Books</a>


            <button
              class="navbar-toggler d-lg-none"
              type="button"
              data-bs-toggle="collapse"
              data-bs-target="#collapsibleNavId"
              aria-controls="collapsibleNavId"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav me-auto mt-2 mt-lg-0" >
                <li class="nav-item active">
                  <a class="nav-link" href="./index" style="color:#fff"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index" style="color:#fff"
                      >Update</a
                    >
                  </li> <li class="nav-item">
                    <a class="nav-link" href="./index" style="color:#fff"
                      >View</a
                    >
                  </li>
              </ul>

            </div>
          </div>
        </nav>
      </header>
<body style="background-image:url(https://images2.alphacoders.com/261/26102.jpg)">
    <div class="container w-25 bg-light " style="margin-top: 7%;border-radius:2%">
    <form action="/req" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <h1>Add new book:</h1>
          </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Book title</label>
          <input name="book_title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Book Description</label>
          <input name="book_description" type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book author</label>
            <input name="book_auther" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Book image </label>
            <input name="book_image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text"></div>
          </div>

        <button type="submit" class="btn btn-warning" style="margin-bottom:1% ">Add</button>
      </form>
    </div>
    <footer>


        <p style="background-color:#416a59;bottom:0;height:50px;text-align:center;color:#fff;margin-top:120px;margin-bottom:0%;
        ">©Books</p>
    </footer>
@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

</body>
</html>
