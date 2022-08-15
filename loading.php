<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrando...</title>
<style>
body {
  display: flex;
  height: 90vh;
  justify-content: center;
  align-items: center;
  background: rgb(0, 0, 0);
}
.loading {
  display: flex;
  position: absolute;
  float: center;
  margin-bottom: 50px;
}
.loading .dot {
  position: relative;
  width: 2em;
  height: 2em;
  margin: 0.8em;
  border-radius: 50%;
}
.loading .dot::before {
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  background: inherit;
  border-radius: inherit;
  animation: wave 2s ease-out infinite;
}
.loading .dot:nth-child(1) {
  background: #ff0000;
}
.loading .dot:nth-child(1)::before {
  animation-delay: 0.2s;
}
.loading .dot:nth-child(2) {
  background: #ffffff;
}
.loading .dot:nth-child(2)::before {
  animation-delay: 0.4s;
}
.loading .dot:nth-child(3) {
  background: #ff0000;
}
.loading .dot:nth-child(3)::before {
  animation-delay: 0.6s;
}
.loading .dot:nth-child(4) {
  background: #ffffff;
}
.loading .dot:nth-child(4)::before {
  animation-delay: 0.8s;
}
.loading .dot:nth-child(5) {
  background: #ff0000;
}
.loading .dot:nth-child(5)::before {
  animation-delay: 1s;
}
@keyframes wave {
  50%, 75% {
    transform: scale(2.5);
  }
  80%, 100% {
    opacity: 0;
  }
}
h1{
    font-size: 25px;
   font-family: serif;
   color:#ffffff;
   text-align: center;
   animation: animate 1.5s linear infinite;
 } 
  
 @keyframes animate{
   0%{
     opacity: 0;
   }
   50%{
     opacity: 0.7;
   }
   100%{
     opacity: 0;
   }
 }
.nadadiv{
    float: center;
    color: white;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    margin-top: 20%;
}
</style>
<script>
setTimeout(
        function(){
            window.location = "logar.php" 
        },
    9000);
</script>
</head>
<body>
    
    <div class="loading">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      <div class="nadadiv">
        <h1 class="nadaver">Em alguns instantes a sua Conta será Cadastrada...</h1>
      </div>
</body>
</html>
