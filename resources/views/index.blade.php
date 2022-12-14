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
          <div class="searchBooh">
            <form action="/findBook" method="POST">
              @csrf
              <div class="mb-3">
                <input name="search" type="text" style="width:300px; margin-top: 8px;
                " placeholder="Search for a book" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text"></div>
              </div>
            </form>
          </div>
        </nav>
      </header>
      <a href="/add"  class="btn btn-success p-2" style="margin-left: 4%;margin-top:2%">Add New Book</a>
      <a href="/trash"  class="btn btn-danger p-2" style="margin-left: 1%;margin-top:2%">view trash</a>

      <a href="/sortUp" class="btn btn-light" style="margin-left: 1%;margin-top:2%">sort desc</a>
    <a href="/sortDown" class="btn btn-dark" style="margin-left: 1%;margin-top:2%">sort Asc</a>




<div class=" d-flex h-100">
@foreach ($books as $book)
<div  class="card m-5" style="width: 25rem;height:32rem">
    <img  src="data:image/jpg;charset=utf8;base64,
    {{$book['book_image']}}" class="card-img-top" style="height:320px" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book['book_title']}}</h5>
      <p class="card-text">{{$book['book_auther']}}</p>
      <p class="card-text">{{$book['book_description']}}</p>
   <a  href="delete/{{$book['id']}}" onclick="return confirm('Are you sure to delete')"
      class="btn btn-danger p-1">Delete</a>
      <a href="update/{{$book['id']}}" class="btn btn-warning p-1">Update</a>
    </div>
  </div>

  @endforeach
</div>
  <footer>


      <p style="background-color:#416a59;bottom:0;height:50px;text-align:center;color:#fff;margin-top:0;
      ">??Books</p>
  </footer>
</body>
</html>
