<!-- Created by Angel🫡 -->

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Get Website Code for free</title>
</head>

<body>
<div id="Container">
  <center><p></p>
<input type="text" name="websiteName" id="websiteName" ><br><p></p><button id="GetCode">Get the website Code</button><br><p></p>
</center>
<textarea id="content" disabled></textarea><p>
<center>
<button id="copyBtn">Copy Code!</button>
</center>
</div>
<script>
var imgLoader = document.querySelector("img")
var content = document.getElementById("content")
var websiteName = document.getElementById('websiteName');
var GetCode = document.getElementById('GetCode')
GetCode.addEventListener('click', function(){

setTimeout(function(){
    
    content.style.fontSize = "40px";
    content.style.textAlign = "center";
    
    
}, 100)
    
setTimeout(function(){
    
    content.value = "Loading."
    
}, 250)
    
setTimeout(function(){
    
    content.value = "Loading.."
    
}, 500)

setTimeout(function(){
    
    
content.value = "Loading..."
    
}, 1000)

setTimeout(function(){
    
    content.value = "Loading."
    
}, 1500)
    
setTimeout(function(){
    
    content.value = "Loading.."
    
}, 2000)

setTimeout(function(){
    
    
content.value = "Loading..."
    
}, 2500)

setTimeout(function(){
    
    content.value = "Loading."
    
}, 3000)
    
setTimeout(function(){
    
    content.value = "Loading.."
    
}, 3500)

setTimeout(function(){
    
    
content.value = "Loading..."
    
}, 4000)

setTimeout(function(){
    
    content.value = "Loading."
    
}, 4500)
    
setTimeout(function(){
    
    content.value = "Loading.."
    
}, 5000)

setTimeout(function(){
    
    
content.style.fontSize = "12px";
    content.style.textAlign = "left";
    
}, 5500)


    

setTimeout(function(){

fetch('https://api.codetabs.com/v1/proxy?quest='+ websiteName.value).then((response) => response.text()).then((text) => content.value = text);
}, 6000)
});

copyBtn.addEventListener('click', function(){
  
  var r = document.createRange();
r.selectNode(document.getElementById("content"));
window.getSelection().removeAllRanges();
window.getSelection().addRange(r);
document.execCommand('copy');
window.getSelection().removeAllRanges();
alert("Copied!");
});


var PayingCounter = document.getElementById('PayingCounter');



</script>
<style>
    
    input{
      
      background-color: black;
      color: white;
      outline: 0;
      border: 2px solid #fff;
      height: 5vh;
      transition: 1s ease-in-out;
      
    }
    
    input:hover{
      
      border-radius: 5vw;
      
    }
    #content{
        
        margin-left: 3.5vw;
        height: 70vh;
        font-size: 12px;
        width: 90vw;
        background-color: black;
        color: #00ff59;
        border: 2px solid #fff;
        transition: 1s ease-in-out;
    }
    
    html {
      
      background-color: black;
      outline: 0;
      
    }
    
    
    button{
      
      border: 2px solid #fff;
      color: white;
      background-color: black;
      height: 5vh;
      transition: 1s ease-in-out;
 
      
    }
    
    button:hover{
      
      border-radius: 5vw;
      transition: 1s ease-in-out;
      
    }
   
    
</style>


</body>

</html>
