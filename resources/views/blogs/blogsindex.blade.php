<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        main{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        th,td{
            padding:1em 2em ;
            text-align:center;
        }
        th,td{
            border-bottom:1px solid black;
        }

        header {
  background-image: url(http://127.0.0.1:8000/homepagebackground.jpg);
  background-repeat: no-repeat;
  background-size: 200% 100%;
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  padding-top: 1em;
  padding-bottom: 1em;
}

.logo {
  margin-left: 5em;
  font-size: 25px;
}

.links ul,
.links li {
  display: flex;
  flex-direction: row;
  align-items: center;
  gap: 3em;
  justify-content: space-evenly;
}

.links ul {
  padding-right: 5em;
}

.links li a {
  padding: 0.5em 0.9em;
  color: black;
  text-decoration: none;
}

.links li a::after {
  columns: black;
  text-decoration: none;
}

.links li :hover {
  border-radius: 20px;
  background-color: rgb(18, 18, 18);
  color: aliceblue;
  transition: all 0.3s ease-in-out;
}

    </style>
    <title>Blog table</title>
</head>
<body>
<header>
      <div class="logo">Flower Shop</div>
      <div class="links">
        <ul>
        <li><a href="http://127.0.0.1:8000/dashboard">dashboard</a></li>
          <li><a href="logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <main>
    <h1>Blog table</h1>
    <div>
        @if(Session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Photo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach($blogs as $blog)
            <tr>
                <td>{{$blog->id}}</td>
                <td>{{$blog->name}}</td>
                <td>{{$blog->price}}</td>
                <td>{{$blog->description}}</td>
                <td>{{$blog->photo}}</td>
                <td> <a href="{{route('blog.blogedit', ['blog' => $blog])}}">Edit</a></td>
                <td>
                    <form action="{{route('blog.destroy', ['blog' => $blog])}}" method = "post">
                        @csrf
                        @method('delete')
                        <input type="submit" value = "Delete">
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    </main>
    <a href="http://127.0.0.1:8000/blog/create">create a new blog</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>