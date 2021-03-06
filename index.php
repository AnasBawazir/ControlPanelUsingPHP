<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title> Control Panel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<style>
    body{
        background-color: #455a64;
        text-align: center;

    }
    .container{
        border: 2px solid white;
    }
    img{
        margin: auto;
    }
    h3{
        font-family: 'Lato', sans-serif;
        width: 100%;
        margin: 45px auto;
        color: white;
        font-size: 3em;
        font-weight: 300;
        letter-spacing: 0.1em;
    }

    .middle{
        padding: 5%;
        display: block;
        text-align: center;
    }

    .button{
        border-radius: 100%;
        background-color: #03a9f4;
        color: white;
        border: none;
        outline: 2px;
        padding: 7%;
        margin: 1%;
        font-size: 150%;
        transition-duration: 0.5s;
        cursor: pointer;
        display: inline;
        box-shadow: 3px 3px 7px #333;
    }

    .footer{
        margin:5%;
        color:white;
    }
    .button:hover {
        background-color: #0082e6;
        color: white;
        transform: scale(1.1);
    }
    .button1 svg{
        transform: rotate(-90deg);
    }
    .button2 svg{
        transform: rotate(-180deg);

    }
    .button3{
        background-color: #ff1538;
    }
    .button3:hover {
        background-color: red;
    }
    .button4 svg{
        transform: rotate(0deg);
    }
    .button5 svg{
        transform: rotate(90deg);
    }
    .move {
        color: white;
        font-family: 'Lato', sans-serif;
        border: 1px solid white ;
        margin-top: 20px;
        letter-spacing: 0.1em;
    }
</style>

  <body>
    <div class="container pt-3">
  <section>
      <img src="https://s-m.com.sa/images/logo.png" alt="no image">
      <h3>Control Panel</h3>
  </section>

    <div class="middle">
      <section>
      <button class="button button1"  name="move" value="forward"  onclick="sendMove(this.value)" ><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/></svg></button>
      </section>
      <section>
        <button class="button button2"  name="move" value="left"  onclick="sendMove(this.value)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/></svg></button>
        <button class="button button3"  name="move" value="stop"  onclick="sendMove(this.value)"><svg id="Layer_1" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
	 viewBox="0 0 22.1 22.1" xml:space="preserve">
<path d="M11.1,22.1C11.1,22.1,11.1,22.1,11.1,22.1c-2.7,0-5.2-1-7.1-2.9C0.1,15.2,0.1,8.9,4,5c0.4-0.4,1-0.4,1.4,0
	c0.4,0.4,0.4,1,0,1.4c-3.1,3.1-3.1,8.2,0,11.3c1.5,1.5,3.5,2.3,5.7,2.3c0,0,0,0,0,0c2.1,0,4.1-0.8,5.7-2.3c3.1-3.1,3.1-8.2,0-11.3
	c-0.4-0.4-0.4-1,0-1.4c0.4-0.4,1-0.4,1.4,0c3.9,3.9,3.9,10.2,0,14.1C16.2,21,13.7,22.1,11.1,22.1z"/>
<path d="M11.1,12.1c-0.6,0-1-0.4-1-1v-10c0-0.6,0.4-1,1-1s1,0.4,1,1v10C12.1,11.6,11.6,12.1,11.1,12.1z"/>
</svg> </button>
        <button class="button button4" name="move" value="right"  onclick="sendMove(this.value)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"  viewBox="0 0 24 24"><path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/></svg></button>
      </section>
      <section>
      <button class="button button5"  name="move" value="backward"  onclick="sendMove(this.value)"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M8.122 24l-4.122-4 8-8-8-8 4.122-4 11.878 12z"/></svg></button>
      </section>
        <div class="move" id="txtMove"> </div>
    </div>
        <script>
            function sendMove(move){
                var xhr=new XMLHttpRequest();
                xhr.open("POST" , "assets/doMove.php" ,true);
                xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhr.send("move="+move);
                xhr.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtMove").innerHTML = this.responseText;
                    }
                };
            }
        </script>
      <div class="footer">
        <p>By Anas Bawazir © </p>
      </div>
  </div>

  </body>
</html>
