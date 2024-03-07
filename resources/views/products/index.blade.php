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

        .sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.3s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {
    padding-top: 15px;
  }
  .sidenav a {
    font-size: 18px;
  }
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
    <title>Document</title>
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
     <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <a href="http://127.0.0.1:8000/dashboard">Dashboard</a>
        <a href="#">Blog</a>
        <a href="http://127.0.0.1:8000/login">Log out</a>
      </div>

    <h1>Products table</h1>
    <div>
        @if(Session()->has('success'))
        <div>
            {{session('success')}}
        </div>
        @endif
    </div>
    <div>
        <table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Description</th>
                <th>Photo</th>
                <th>Edit</th>
                <th>Delete</th>
                @foreach($products as $product)
                    <tr>
                        <td>{{($product->id)}}</td>
                        <td>{{($product->name)}}</td>
                        <td>{{($product->price)}}</td>
                        <td>{{($product->quantity)}}</td>
                        <td>{{($product->description)}}</td>
                        <td>{{($product->photo)}}</td>
                        <td><a href="{{route('product.edit',['product' => $product])}}">Edit</a></td>
                        <td>
                            <form action="{{route('product.destroy',['product' => $product])}}" method = "post">
                                @csrf
                                @method('delete')
                                <input type="submit" value = "delete">
                            </form>
                        </td>
                    </tr>
                </tr>
                @endforeach
        </table>
        <a href="http://127.0.0.1:8000/product/create">create a product</a>
    </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>