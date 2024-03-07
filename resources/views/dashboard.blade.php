<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Custom Authentication, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>login</title>
    <style>
        * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
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

main {
  padding-top: 5em;
  display: flex;
  flex-direction: row;
  gap: 5em;
  flex-wrap: wrap;
  justify-content: space-evenly;
  align-items: center;
}

.rose {
  height: 300px;
  width: 270px;
}

.rose {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 1em;
}

h5 {
  font-size: 20px;
}

img {
  border-radius: 5px;
}

.edit-rose {
  width: 100%;
  padding-top: 10px;
  padding-bottom: 10px;
  background-color: rgb(234, 186, 202);
  border: 0px;
  text-align: center;
  color: #111;
  text-decoration: none;
}

.edit-rose::after {
  color: #111;
  text-decoration: none;
}

.edit-rose:hover {
  color: #111;
  text-decoration: none;
}

.box{
  width:100%;
  padding-top:3em;
  display:flex;
  flex-direction:row;
  flex-wrap:wrap;
  gap:2em;
  justify-content:space-evenly;
  align-items:center;
}

.create, .check{
  padding-top:1em;
  display:flex;
  flex-direction:column;
  justify-content:space-between;
  align-items:center;
  background-color: rgb(234, 186, 202);
  height:500px;
  width:500px;
  transition: transform 0.3s ease;
}
.create:hover, .check:hover{
  transform: translateY(-20px);
}

a, a::after{
  text-decoration:none;
  color:black;
}

.little-description{
  font-size:30px;
  text-align:center;
}


.button {
  --main-focus: #2d8cf0;
  --font-color: #323232;
  --bg-color-sub: #dedede;
  --bg-color: #eee;
  --main-color: #323232;
  position: relative;
  width: 150px;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  border: 2px solid var(--main-color);
  box-shadow: 4px 4px var(--main-color);
  background-color: var(--bg-color);
  border-radius: 10px;
  overflow: hidden;
}

.button, .button__icon, .button__text {
  transition: all 0.3s;
}

.button .button__text {
  transform: translateX(22px);
  color: var(--font-color);
  font-weight: 600;
}

.button .button__icon {
  position: absolute;
  transform: translateX(109px);
  height: 100%;
  width: 39px;
  background-color: var(--bg-color-sub);
  display: flex;
  align-items: center;
  justify-content: center;
}

.button .svg {
  width: 20px;
  fill: var(--main-color);
}

.button:hover {
  background: var(--bg-color);
}

.button:hover .button__text {
  color: transparent;
}

.button:hover .button__icon {
  width: 148px;
  transform: translateX(0);
}

.button:active {
  transform: translate(3px, 3px);
  box-shadow: 0px 0px var(--main-color);
}
    </style>
</head>
<body>
<header>
      <div class="logo">Flower Shop</div>
      <div class="links">
        <ul>
          <li><a href="logout">Logout</a></li>
        </ul>
      </div>
    </header>
    <main>
      <div class="box">
        <div class="create">
          <h2>Create a new product</h2>
          <a href="http://127.0.0.1:8000/product/create">
            <button class="button" type="button">
              <span class="button__text">Add Item</span>
               <span class="button__icon"><svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
            </button>
          </a>
          <p class = "little-description">in this field you can create a new product, add its name, price, quantity, and a description below</p>
      </div>

        <div class="check">
          <h2>Check product's table</h2>
          <a href="http://127.0.0.1:8000/product">
            <button class="button" type="button">
              <span class="button__text">Check Item</span>
               <span class="button__icon"><svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
            </button>
          </a>
          <p class = "little-description">in this field you can check the product informations</p>
      </div>

     
        <div class="create">
          <h2>Create a new blog</h2>
          <a href="http://127.0.0.1:8000/blog/create">
            <button class="button" type="button">
              <span class="button__text">Create Blog</span>
               <span class="button__icon"><svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
            </button>
          </a>
          <p class = "little-description">in this field you can create a new blog, add its name, price, quantity, and a description below</p>
      </div>

        <div class="create">
          <h2>Check blog's tabless</h2>
          <a href="http://127.0.0.1:8000/blog">
            <button class="button" type="button">
              <span class="button__text">Check Blogs</span>
               <span class="button__icon"><svg class="svg" fill="none" height="24" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><line x1="12" x2="12" y1="5" y2="19"></line><line x1="5" x2="19" y1="12" y2="12"></line></svg></span>
            </button>
          </a>
          <p class = "little-description">in this field you can check the blog informations</p>
      </div>
     
        
      </div>
    </main>
      
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>

