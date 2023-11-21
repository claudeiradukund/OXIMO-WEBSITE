<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Animated log in form</title>
  <!-- Your CSS stylesheets or other meta tags/scripts can go here -->
  <style>
     @import url('https://fonts.googleapis.com/css2? family=Poppins:wght@300%;400;500;600;700;800;900& display=swap');
     *{
       margin: 0;
       padding: 0;
       box-sizing: border-box;
       font-family: 'Poppins', sans-serif;
      }
      body{
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background:#23242a;
      }
      .box{
          position:relative;
          width:380px;
          height:420px;
          background:#1c1c1c;
          border-radius:8px;
          overflow:hidden;
      }
      .box::before{
          content:'';
          position:absolute;
          top:-50%;
          left:-50%;
          width:380px;
          height:420px;
          background:linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
          z-index:1;
          transform-origin:bottom right;
          animation:animate 6s linear infinite;
      }
      .box::after{
          content:'';
          position:absolute;
          top:-50%;
          left:-50%;
          width:380px;
          height:420px;
          background:linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
          z-index:1;
          transform-origin:bottom right;
          animation:animate 6s linear infinite;
          animation-delay:-3s;
      }
      .borderline{
         position:absolute;
         top:0;
         inset:0;
      }
      .borderline::before{
          content:'';
          position:absolute;
          top:-50%;
          left:-50%;
          width:380px;
          height:420px;
          background:linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
          z-index:1;
          transform-origin:bottom right;
          animation:animate 6s linear infinite;
          animation-delay:-1.5s;
      }
      .borderline::after{
          content:'';
          position:absolute;
          top:-50%;
          left:-50%;
          width:380px;
          height:420px;
          background:linear-gradient(0deg,transparent,transparent,#ff2770,#ff2770,#ff2770);
          z-index:1;
          transform-origin:bottom right;
          animation:animate 6s linear infinite;
          animation-delay:-4.5s;
      }
      @keyframes animate{
        0%{
            transform: rotate(0deg);
        }
        100%{
            transform: rotate(360deg);
        }
      }
      .box form{
          position:absolute;
          inset:6px;
          background:#222;
          padding:50px 40px;
          border-radius:8px;
          z-index:2;
          display:flex;
          flex-direction:column;
      }
      .box form h2{
         color:white;
         font-weight:500;
         text-align:center;
         letter-spacing:0.1em;
      }
      .box form .inputbox{
         position:relative;
         width:300px;
         margin-top:35px;
      }
      .box form .inputbox input{
         position:relative;
         width:100%;
         padding:20px 10px 10px;
         background:transparent;
         outline:none;
         border:none;
         box-shadow:none;
         color:#23242a;
         font-size:1em;
         letter-spacing:0.05em;
         transition:0.5s;
         z-index:10;
      }
      .box form .inputbox span{
         position:absolute;
         left:0;
         padding:20px 10px 10px;
         pointer-events:none;
         color:#8f8f8f;
         font-size:1em;
         letter-spacing:0.05em;
         transition:0.5s;
      }
      .box form .inputbox input:valid~span
      .box form .inputbox input:focus~span{
         color:white;
         font-size:0.75em;
         transform:translateY(-34PX);     
      }
      .box form .inputbox i{
        position:absolute;
        left:0;
        bottom:0;
        width:100%;
        height:2px;
        background:white;
        border-radius:4px;
        overflow:hidden;
        transition:0.5s;
        pointer-events:none;
      }
      .box form .inputbox input:valid~i
      .box form .inputbox input:focus~i{
         height: 44px;
      }
      .box form .links{
         display:flex;
         justify-content:space-between;
      }
      .box form .links a{
          margin:10px 0;
          font-size:0.75em;
          color:#8f8f8f;
          text-decoration:none;
      }
      .box form .links a:hover
      .box form .links a:nth-child(2){
         color:white;         
      }
      .box form input[type="submit"]{
          border:none;
          outline:none;
          padding:9px 25px;
          background:#fff;
          cursor:pointer;
          font-size:0.9em;
          border-radius:4px;
          font-weight:600;
          width:100px;
          margin-top:10px;
      }.box form input[type="submit"]:active{
          opacity:0.9;
      }
  </style>
</head>
<body>
  <!-- Your content goes here -->
  <div class="box">
     <span class="borderline"></span>
     <form>
        <h2>sign in</h2>
        <div class="inputbox">
           <input type="text" required="required"> 
           <span>User name</span>
           <i></i>
        </div>
        <div class="inputbox">
           <input type="password" required="required"> 
           <span>User password</span>
           <i></i>
        </div>
        <div class="links">
           <a href="#">forget password</a>
           <a href="#">sign up</a>
        </div>
        <input type="submit" value="login">
     </form>
  </div>
  <!-- Your JavaScript scripts or other HTML content can go here -->
</body>
</html>