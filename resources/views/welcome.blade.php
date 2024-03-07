<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>flower shop</title>
    <style>
     
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
      }

      header {
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
      .container {
        width: 100vw;
        height: calc(100vh - 4.2em);
        background-image: url(http://127.0.0.1:8000/homepagebackground.jpg);
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }

      section {
        margin-left: 8em;
        padding-top: 8em;
        display: flex;
        flex-direction: column;
        width: 20vw;
      }

      h1 {
        font-size: 50px;
        font-family: serif;
      }

      .lt-text {
        margin-top: 2em;
        margin-bottom: 2em;
        font-family: "Times New Roman", Times, serif;
        font-size: 25px;
      }

      @media all and (min-width: 100px) and (max-width: 1024px) {
  .container{
    background-size:300% 300%;
  }
  header{
    display:flex;
    flex-direction:row;
    justify-content:center;
    align-items:center;
  }

}
    </style>
  </head>
  <body>
    <header>
      <div class="logo">Flower Shop</div>
      <div class="links">
        <ul>
          <li><a href="http://127.0.0.1:8000/welcome">Home</a></li>
          <li><a href="">Blog</a></li>
          <li><a href="http://127.0.0.1:8000/login">Log in</a></li>
        </ul>
      </div>
    </header>
    <div class="container">
      <main>
        <section>
          <h1>
            FLOWER
            <br />
            SHOP
          </h1>
          <p class="lt-text">a bouquet of love</p>

          <p>
            "Petals & Blooms" is your destination for exquisite floral
            creations. Step into our enchanting world of vibrant colors and
            captivating fragrances. Let us craft the perfect bouquet to elevate
            your special moments.
          </p>
        </section>
      </main>
    </div>
  </body>
</html>
