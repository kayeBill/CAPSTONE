<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Amarah's Corner - BF Resort Las Piñas</title>
     <style>
        body {
            background: url(./assets/images/background.png) no-repeat;
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
</head>
<body>
<?php include './includes/navbar.php'; ?>
<div class="container">
    <div class="card">
        <div class="watchBackground">
            <div class="gradients">
                <div class="gradient second" color="blue"></div>
                <div class="gradient" color="red"></div>
                <div class="gradient" color="green"></div>
                <div class="gradient" color="orange"></div>
            </div>
            <h1 class="nike">SMT</h1> <img src="https://i.imgur.com/pVNHUJN.png" alt="" class="logo"> <a href="#" class="share"><i class="fas fa-share-alt"></i></a> <img src="https://i.imgur.com/A0ku3OK.png" alt="" class="watch show" color="blue"> <img src="https://i.imgur.com/Zh3kasA.png" alt="" class="watch" color="red"> <img src="https://i.imgur.com/PCgOteM.png" alt="" class="watch" color="green"> <img src="https://i.imgur.com/V0fqJzA.png" alt="" class="watch" color="orange">
        </div>
        <div class="info">
            <div class="watchName">
                <div>
                    <h1 class="big">Noise Colorfit Pro 3</h1> <span class="new">new</span>
                </div>
                <h3 class="small">Smart Watch</h3>
            </div>
            <div class="description">
                <p class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
            <div class="color-container">
                <h3 class="title">Color</h3>
                <div class="colors"> <span class="color active" primary="#db6777" color="blue" w-name="Rose Red"></span> <span class="color" primary="#484f69" color="red" w-name="Jet Black"></span> <span class="color" primary="#7a9c89" color="green" w-name="Smoke Green"></span> <span class="color" primary="#caaea7" color="orange" w-name="Rose Pink"></span> </div>
            </div>
            <div class="ratings-container">
                <h3 class="title">Rattings</h3>
                <div class="rating" style="color:#db6777;"> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i> </div>
            </div>
            <div class="watch-name"> <span>Rose Red</span> </div>
            <div class="buy-price"> <a href="#" class="buy"><i class="fas fa-shopping-cart"></i>Add to card</a>
                <div class="price"> <i class="fas fa-dollar-sign"></i>
                    <h1>299.99</h1>
                </div>
            </div>
        </div>
    </div>
</div>


<script>

const ratings = document.querySelectorAll('.rating');
const colors = document.querySelectorAll('.color');
const watchs = document.querySelectorAll('.watch');
const gradients = document.querySelectorAll('.gradient');
const watchBg = document.querySelector('.watchBackground');

let prevColor = "blue";
let animationEnd = true;

function changeColor(){
if(!animationEnd) return;
let primary = this.getAttribute('primary');
let color = this.getAttribute('color');
let watch_name = this.getAttribute('w-name');
let watch = document.querySelector(`.watch[color="${color}"]`);
let gradient = document.querySelector(`.gradient[color="${color}"]`);
let prevGradient = document.querySelector(`.gradient[color="${prevColor}"]`);

document.querySelector('.rating').style.color = primary;

document.querySelector('.watch-name span').innerHTML = watch_name;

if(color == prevColor) return;

colors.forEach(c => c.classList.remove('active'));
this.classList.add('active');

document.documentElement.style.setProperty('--primary', primary);

watchs.forEach(s => s.classList.remove('show'));
watch.classList.add('show');

gradients.forEach(g => g.classList.remove('first', 'second'));
gradient.classList.add('first');
prevGradient.classList.add('second');

prevColor = color;
animationEnd = false;

gradient.addEventListener('animationend', () => {
animationEnd = true;
})
}
colors.forEach(c => c.addEventListener('click', changeColor));

let x = window.matchMedia("(max-width: 1000px)");

function changeHeight(){
if(x.matches){
let watchHeight = watchs[0].offsetHeight;
watchBg.style.height = `${watchHeight * 0.9}px`;
}
else{
watchBg.style.height = "453px";
}
}

changeHeight();

window.addEventListener('resize', changeHeight);

</script>
</body>
</html>