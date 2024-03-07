<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}

body {
  font-family: "Lato", sans-serif;
}

header {
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: space-between;
  background-color: rgb(234, 186, 202);
}

h1 {
  padding: 0.5em 5em;
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

main {
  display: flex;
  flex-direction: row;
  justify-content: space-around;
  align-items: flex-start;
  padding-top: 5em;
}

form {
  background-color: rgb(234, 186, 202);
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 300px;
  height: auto;
  display: flex;
  flex-direction: column;
  gap: 1em;
}

label {
  display: block;
  margin-bottom: 8px;
}

input,
textarea {
  width: 100%;
  padding: 8px;
  margin-bottom: 16px;
  box-sizing: border-box;
  border: 0px;
  border-radius: 4px;
}

button {
  background-color: #111;
  color: #fff;
  padding: 10px 15px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  background-color: #017592;
}
.welcome {
  display: flex;
  justify-content: center;
  align-items: center;
}

.flower-name {
  border-bottom: 1px solid #111;
}
footer {
  margin-left: 2em;
  margin-top: 5em;
}

    </style>
  </head>
  <body>
    <header>
    <div id="mySidenav" class="sidenav">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"
          >&times;</a
        >
        <a href="http://127.0.0.1:8000/dashboard">Dashboard</a>
        <a href="http://127.0.0.1:8000/login">Log out</a>
      </div>

      <span style="font-size: 30px; cursor: pointer" onclick="openNav()"
        >&#9776;
      </span>

      <h1>FLOWER SHOP</h1>
    </header>

    <main>
      <img src="http://127.0.0.1:8000/img/bluelilly.jpg" alt="roseicon" height="400" width="400" />

      <div class="welcome">
      <form method = "post" action="{{route('blog.store')}}" >
        @csrf
        @method('post')
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="price">Price:</label>
            <input type="text" name="price">
        </div>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description">
        </div>
        <div>
            <label for="photo">Photo:</label>
            <input type="file" name="photo">
        </div>
        <div>
            <input type="submit" value = "Save">
            <input type="reset" value = "Reset">

        </div>
    </form>
      </div>
    </main>
    <footer>
      <div class="description">
        <h2>Description:</h2>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae earum
          illo reiciendis ratione exercitationem nihil quibusdam, autem fugiat
          commodi magni dolorem perferendis inventore odio dignissimos cum quas?
          Quisquam, inventore temporibus!
        </p>
        <p>
          Dolore deleniti expedita quisquam reprehenderit quia, dolorem
          consequatur placeat, voluptates quod consequuntur fugiat unde quae eum
          accusantium. Omnis nisi sit atque iusto repellat possimus asperiores
          consequuntur, fuga, autem dolorum nobis?
        </p>
        <p>
          Natus architecto velit suscipit debitis deserunt aliquid commodi
          nostrum sit fuga, quasi sequi dolor deleniti qui, maxime ut soluta
          adipisci quis animi eligendi. Nemo laudantium ad labore soluta,
          accusantium veritatis!
        </p>
        <p>
          Cupiditate odit reiciendis sint placeat officiis nobis quam mollitia
          saepe nesciunt magnam libero, corrupti nihil cumque nisi vitae aliquam
          eum labore voluptate iure, pariatur error, sed in veritatis. Nostrum,
          sunt.
        </p>
        <p>
          Expedita facilis vitae optio dicta? Nesciunt, quos veniam! Quibusdam
          enim officiis similique voluptates expedita. Numquam praesentium
          laboriosam est optio libero sequi magnam, impedit porro sed quibusdam
          dignissimos, et officiis cupiditate!
        </p>
      </div>
    </footer>
    <script>
        function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

const $ = function (id) {
  return document.getElementById(id);
};


    </script>
  </body>
</html>
