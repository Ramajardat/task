<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
  />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@500&display=swap" rel="stylesheet">
<style>body {
	font-family: "Caveat";
    /* background-color: #2A3166; */
    background: #000033
	;
}
h2 {
	font-size: 26px;
    text-align: center;
    color: white;
    margin-bottom: 30px;
}


header{
    background-color:#F4ABAA;
    display: flex;
    justify-content: center;
    color: #2A3166;
}


header #header-menu{
    list-style: none;
    padding: 10%;
    display: flex;
    gap: 30%;
}


header #header-menu li > a{
    text-decoration: none;
    color: white;
    transition: all 1s;
}




footer{
    background-color:#F4ABAA;
    display: flex;
    justify-content: center;
}

footer #social{
    list-style: none;
    padding: 1.5%;
    display: flex;
    gap: 10%;

}

footer #social li > a{
    text-decoration: none;
    color: #2A3166;
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
          style="background-color: #F4ABAA"
        >
          <div class="container">
            <a class="navbar-brand" href="#">Books</a>


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
              <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="./index.html"
                    >Home</a
                  >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./index.html"
                      >Home</a
                    >
                  </li> <li class="nav-item">
                    <a class="nav-link" href="./index.html"
                      >Home</a
                    >
                  </li>
              </ul>

            </div>
          </div>
        </nav>
      </header>

<div class=" d-flex">
@foreach ($books as $book)
<div id="cardsDiv" class="card m-5" style="width: 15rem;">
    <img src="{{$book['book_image']}}" class="card-img-left" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book['book_title']}}</h5>
      <p class="card-text">{{$book['book_auther']}}</p>
      <p class="card-text">{{$book['book_description']}}</p>
      <a href="delete/{{$book['id']}}"  class="btn btn-primary">Delete</a>
      <a href="update/{{$book['id']}}" class="btn btn-primary">Update</a>
    </div>
  </div>

  @endforeach
</div>
  <footer>
    <ul id="social">


      <li><p style="font-size: 15px">©RJ</p></li>
    </ul>
  </footer>
</body>
</html>
