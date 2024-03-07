<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=Custom Authentication, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Registration</title>
    <style>
        body {
        margin: 0;
        padding: 0;
        height: 640px;
        display: flex;
        align-items: center;
        background-image: url("https://cdn1.harryanddavid.com/wcsstore/Celebrations/images/brand_backgrounds/18F_large.jpg");
        background-size: 100%;
      }
      #maincontainer {
        width: 60%;
        margin: auto;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center;
      }
      #left {
        background-color: rgb(233, 176, 187);
        height: 500px;
        display: flex;
        /* min-height: 500px;
    max-height: 500px; */
        text-align: center;
        flex-direction: column;
        justify-content: space-between;
        width: 40%;
        padding: 20px;
        /* opacity: 85%; */
        font-size: 16px;
        border-radius: 15px;
      }
      #shortmsg {
        margin-left: 5px;
        margin-right: 20px;
      }
      #right {
        width: 50%;
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        background-color: rgb(255, 230, 235);
        padding: 20px;
        /* min-height: 500px; */
        /* height: 500px; */
        border-radius: 15px;
      }
      #success {
        text-align: center;
        margin-top: 50px;
      }
      #right > form,
      h1,
      h3,
      .termContainer,
      #inst,
      #newone {
        margin-left: 20px;
        margin-right: 20px;
      }
      #inputdetail {
        display: flex;
        width: 100%;
        gap: 10px;
        margin-bottom: 15px;
      }
      #inputdetail > div {
        width: 47%;
      }
      #inputdetail input,
      #email,
      #password {
        width: 95%;
        line-height: 30px;
        border: none;
        margin-top: 10px;
        font-size: 14px;
        border-radius: 5px;
        padding-left: 10px;
        box-shadow: rgba(0, 0, 0, 0.2) 0px 1px 4px;
      }
      #submit {
        width: 93%;
        color: whitesmoke;
        font-size: 16px;
        border: none;
        border-radius: 10px;
        background-color: rgb(255, 97, 129);
      }
      input {
        margin-top: 5px;
        line-height: 20px;
      }
      #submit {
        width: 100%;
        line-height: 30px;
      }
      #image {
        width: 100%;
        display: flex;
      }
      #image > img {
        width: 45%;
        margin: auto;
      }
      #inst {
        margin-top: 5px;
        margin-bottom: 15px;
        text-align: center;
      }
      #newone {
        margin-top: 20px;
        display: flex;
        justify-content: center;
        gap: 8px;
        font-size: 14px;
      }
      #left img {
        width: 100%;
        /* opacity: 100%; */
        border-radius: 15px;
        /* margin-bottom: 70px; */
      }
      #left > div > p {
        /* margin-bottom: 130px; */
        padding-left: 20px;
        /* padding-right: 20px; */
        line-height: 30px;
        font-size: 18px;
      }
      @media screen and (min-width: 700px) and (max-width: 900px) {
        #maincontainer {
          width: 80%;
          /* margin: auto;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center; */
        }
        /* #left{
        background-color:rgb(233, 176, 187);
        height: 500px;
        display: flex;
        text-align: center;
        flex-direction: column;
        /* justify-content: space-between; */
        /* width: 40%; */
        /* padding: 20px; */
        /* opacity: 85%; */
        /* font-size: 16px; */
        /* border-radius: 15px; */
        /* } */
        /* #right{ */
        /* width: 50%; */
        /* display: flex; */
        /* flex-direction: column; */
        /* justify-content: space-around; */
        /* background-color: rgb(255, 230, 235); */
        /* padding: 20px; */
        /* height: 500px; */
        /* border-radius: 15px; */
        /* } */
      }
      @media screen and (min-width: 600px) and (max-width: 699px) {
        #maincontainer {
          width: 90%;
          /* margin: auto;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center; */
        }
        /* #left{
        background-color:rgb(233, 176, 187);
        height: 500px;
        display: flex;
        text-align: center;
        flex-direction: column;
        /* justify-content: space-between; */
        /* width: 40%; */
        /* padding: 20px; */
        /* opacity: 85%; */
        /* font-size: 16px; */
        /* border-radius: 15px; */
        /* } */
        /* #right{ */
        /* width: 50%; */
        /* display: flex; */
        /* flex-direction: column; */
        /* justify-content: space-around; */
        /* background-color: rgb(255, 230, 235); */
        /* padding: 20px; */
        /* height: 500px; */
        /* border-radius: 15px; */
        /* } */
      }
      @media screen and (min-width: 440px) and (max-width: 599px) {
        #maincontainer {
          width: 95%;
          flex-direction: column;
          /* margin: auto;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center; */
        }
        #inputdetail {
          display: flex;
          flex-direction: column;
          width: 100%;
          gap: 10px;
          margin-bottom: 15px;
        }
        #inputdetail > div {
          width: 100%;
        }
        #left {
          /* display: none; */
          /* background-color:rgb(233, 176, 187); */
          height: auto;
          /* display: flex; */
          /* text-align: center; */
          /* flex-direction: column; */
          /* justify-content: space-between; */
          width: 60%;
          padding: 0px;
          margin-top: 20px;
          /* opacity: 85%; */
          /* font-size: 16px; */
          /* border-radius: 15px; */
        }
        #left img {
          width: 100%;
          /* height: 50px; */
          /* opacity: 100%; */
          border-radius: 15px;
          margin: 0px;
        }
        #left > div:nth-child(3),
        #left > div:nth-child(2) {
          display: none;
        }
        #inputdetail {
          display: flex;
          flex-direction: column;
          width: 100%;
          gap: 10px;
          margin-bottom: 15px;
        }
        #inputdetail > div {
          width: 100%;
        }
        #right {
          width: 70%;
          /* display: flex;
        flex-direction: column;
        justify-content: space-around;
        background-color: rgb(255, 230, 235);
        padding: 20px;*/
          margin-top: 20px;
          margin-bottom: 20px;
          height: auto;
          /* border-radius: 15px;  */
        }
      }
      @media screen and (min-width: 100px) and (max-width: 439px) {
        #maincontainer {
          width: 95%;
          flex-direction: column;
          /* margin: auto;
        display: flex;
        gap: 20px;
        align-items: center;
        justify-content: center; */
        }
        #left {
          /* width: 80%; */
          /* display: none; */
          /* background-color:rgb(233, 176, 187); */
          height: auto;
          /* display: flex;
        text-align: center;
        flex-direction: column;
        justify-content: space-between; */
          width: 60%;
          /* height: 70px; */
          padding: 0px;
          margin-top: 20px;
          /* opacity: 85%;
        font-size: 16px;
        border-radius: 15px; */
        }
        #left img {
          width: 100%;
          /* height: 50px; */
          /* opacity: 100%; */
          border-radius: 15px;
          margin: 0px;
        }
        #left > div:nth-child(3),
        #left > div:nth-child(2) {
          display: none;
        }
        #inputdetail {
          display: flex;
          flex-direction: column;
          width: 100%;
          gap: 10px;
          margin-bottom: 15px;
        }
        #inputdetail > div {
          width: 100%;
        }
        #right {
          width: 80%;
          /* display: flex;
        flex-direction: column;
        justify-content: space-around;
        background-color: rgb(255, 230, 235);
        padding: 20px; */
          height: auto;
          margin-top: 20px;
          margin-bottom: 20px;
          /* border-radius: 15px; */
        }
      }
    </style>
</head> 
<body>
<div id="maincontainer">
      <div id="left">
        <div>
          <a href="../index.html"
            ><img src="http://127.0.0.1:8000/logo.jpg" alt="gulmohar Flower Shop"
          /></a>
        </div>
        <div>
          <p id="shortmsg" style="font-family: 'Trebuchet MS'">
            Create an account for faster checkout and order tracking.
          </p>
        </div>
        <div>
          <img
            style="margin-top: 0px; border-radius: 0px"
            src="https://cdn1.harryanddavid.com/wcsstore/HarryAndDavid/images/Auth0/celebrations_family_of_brands.png"
            alt=""
          />
        </div>
      </div>
      <div id="right">
        <h1>Create Account</h1>
        <br />
        <form action="{{route('register-user')}}" method="post">
        @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif 
          @csrf

          <div class="form-group">
            <label for="name">enter your name: </label>
            <input
              id="email"
              type="text"
              name="name"
              placeholder="enter your name"
              class="form-control"
              value="{{old('name')}}"
            />
            <span class="text-danger"
              >@error('name') {{$message}} @enderror</span
            >
          </div>
          <div class="form-group">
            <label for="id">enter your email: </label>
            <input
              id="email"
              type="text"
              name="email"
              placeholder="enter your email"
              class="form-control"
              value="{{old('email')}}"
            />
            <span class="text-danger"
              >@error('email') {{$message}} @enderror</span
            >
          </div>
          <div class="form-group">
            <label for="id">enter your password: </label>
            <input
              id="password"
              type="password"
              name="password"
              placeholder="enter your password"
              class="form-control"
              value="{{old('password')}}"
            />
            <span class="text-danger"
              >@error('password') {{$message}} @enderror</span
            >
          </div>
          <br>
          <div class="form-group">
            <button id="submit" class="btn btn-block btn-primary" type="submit">
              Register
            </button>
            <br />
            <span>
              already have an account? <a href="http://127.0.0.1:8000/login">login here</a></span>
          </div>
        </form>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</html>