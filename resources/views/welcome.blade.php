<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Imprima&family=Libre+Franklin:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
<link rel="icon" type="image/svg+xml" href="{{ asset('favicon1.svg') }}">

<!--1--->
<title>Branch out</title>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  .svg-icon path{
    fill: #f05a28;
    stroke: #f05a28;
  }

  @font-face {
    font-family: 'Link Sans';
    src: url('./fonts/LinikSans-Black.woff') format('woff');
    font-weight: bold;
    font-style: normal;
}

  body {
   font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
    background-color: #fceeea; /* Soft background */
  }

  /* Full width Navbar container */
  .navbar-wrapper {
    background-color: transparent;
    width: 100%;
    position: fixed;
    top: 0;
    z-index: 1000;
  }

  /* Centered container with max width */
  .navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 50px;
    max-width: 1900px; /* Maximum width */
    margin: 0 auto; /* Centering the container */
    background-color: transparent; /* Transparent navbar */
  }

  /* Left side (combined logo and menu button) */
  .navbar-left {
    display: flex;
    align-items: center;
    font-size: 2rem;
  }

  /* Combined Swag + Menu Button Styling */
  .logo-menu {
    background-color: #f05a28; /* Orange background */
    color: #421a1a; /* Dark text */
    padding: 12px 12px; /* Reduced padding to make it more compact */
    border-radius: 50px;
    font-weight: bold;

    display: flex;
    align-items: center;
    cursor: pointer;
  }

  /* Swag Text inside logo-menu */
  .logo-menu .logo-text {
    margin-right: 8px; /* Reduced margin */
  }
  .logo-text{
    font-family: "Lobster", sans-serif;
    font-weight: 400;
    font-style: normal;
  }

  /* Menu Button Inside logo-menu */
  .logo-menu .menu-text {
    background-color: #421a1a; /* Dark background for the menu */
    color: #fef2e6; /* Light text */
    padding: 6px 14px; /* Reduced padding for menu button */
    border-radius: 50px;
    font-weight: bold;

    margin-left: 8px; /* Reduced margin */
    transition: background-color 0.3s;
  }

  .logo-menu:hover .menu-text {
    background-color: #7e2929; /* Slight hover effect */
  }

  /* Right side (login and signup buttons) */
  .navbar-right {
    display: flex;
    gap: 15px;
    font-size: 2rem;
  }

  /* Login Button */
  .login-button {
    background-color: #f05a28; /* Orange background */
    color: #421a1a; /* Dark text */
    padding: 8px 20px; /* Reduced padding */
    border-radius: 50px;
    font-weight: bold;

    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .login-button:hover {
    background-color: #d04d22; /* Darker orange on hover */
  }

  /* Sign-Up Button */
  .signup-button {
    background-color: #421a1a; /* Dark background */
    color: #fef2e6; /* Light text */
    padding: 8px 20px; /* Reduced padding */
    border-radius: 50px;
    font-weight: bold;

    cursor: pointer;
    text-decoration: none;
    transition: background-color 0.3s;
  }

  .signup-button:hover {
    background-color: #7e2929; /* Slight hover effect */
  }
.logo path{
fill: #421a1a;
}
.container {
    display: flex;
    width: 50%;
    margin: 50px auto;
    justify-content: space-between;
    align-items: center;
  padding: 200;
}
.d4{
  display: flex;
  width: 70%;
  margin: 200px auto;
  justify-content: center;
 flex-direction: row;
  align-items: center;

}
.d9{
  display: flex;
  width: 50%;
  margin: 50px auto;
  justify-content: center;
 flex-direction: row;
  align-items: center;
}
.c1{
    margin-top: 10px;
    background-color: #421a1a;
    border-radius: 50px;
    height: 1000px;
    margin: 20px;
}
.c2{
  padding-top: 100px;

}
.c3{
  margin-top: 100px;
  margin-bottom:300px;
}

.d1,.d7{
    flex: 1;
  margin-right: 5px;
}
.d6{
  flex: 1;

}
.d1 h1{
    font-size: 4.5rem;
    color:#fef2e6;
    margin-bottom: 10px;
}
.d2,.d5,.d8{
    flex: 1;
    text-align: right;

}

.d2 img{
    width: 600px;
    height: auto;
    border-radius: 8px;
}
.d8 img{
  width: 400px;
  height: auto;

  border-radius: 8px;
}
.d5 img{
  width: 400px;
  height: auto;
  margin-right: 200px;
  border-radius: 8px;
}
.d6 h1{
  font-size: 4.5rem;

  color: #421a1a;

}
.d7 h1{
  font-size: 4.5rem;

  color: #421a1a;
}



.button {
margin-top: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 16px 32px;
  background-color: #f05a28;
  border: 8px solid #c0dfff;
  color: white;
  gap: 8px;
  border-radius: 50px;
  cursor: pointer;
  transition: all 0.3s;
}
.text {
  font-size: 1.7em;
  font-weight: 700;
  letter-spacing: 1px;
}
.svg {
  padding-top: 5px;
  height: 100%;
  width: fit-content;
}
.svg svg {
  width: 50px;
  height: 30px;
}
.button:hover {
  border: 8px solid #b1d8ff;
  background-color: #5e8ed1;
}
.button:active {
  border: 5px solid #c0dfff;
}
.button:hover .svg svg {
  animation: jello-vertical 0.9s both;
  transform-origin: left;
}

@keyframes jello-vertical {
  0% {
    transform: scale3d(1, 1, 1);
  }
  30% {
    transform: scale3d(0.75, 1.25, 1);
  }
  40% {
    transform: scale3d(1.25, 0.75, 1);
  }
  50% {
    transform: scale3d(0.85, 1.15, 1);
  }
  65% {
    transform: scale3d(1.05, 0.95, 1);
  }
  75% {
    transform: scale3d(0.95, 1.05, 1);
  }
  100% {
    transform: scale3d(1, 1, 1);
  }
}
.d3{
  margin-top: 50px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-direction: column;

}
.d3 h1{
  font-size: 3rem;
  color: #421a1a;
}

.wrapper {

  font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
  font-optical-sizing: auto;
  font-weight: 700;
  font-style: italic;

  width: 80%;
  max-width: 1536px;
  margin-inline: auto;
  position: relative;
  height: 100px;
  margin-top: 4rem;
  margin-bottom: 4rem;
  overflow: hidden;
  mask-image: linear-gradient(
    to right,
    rgba(0, 0, 0, 0),
    rgba(0, 0, 0, 1) 20%,
    rgba(0, 0, 0, 1) 80%,
    rgba(0, 0, 0, 0)
  );
}

@keyframes scrollLeft {
  to {
    left: -200px;
  }
}

.item {
  width: 200px;
  height: 100px;

 /* Light background to showcase brand names or images */
  border-radius: 6px;
  position: absolute;
  left: max(calc(200px * 5), 100%);
  animation-name: scrollLeft;
  animation-duration: 30s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  color: #333; /* Brand name text color */
}
.brand-header {
  display: flex;
  justify-content: center;
  margin-bottom: 20px;
  text-align: center;
}

/* Adjust animation delay for 5 items */
.item1 {
  animation-delay: calc(30s / 5 * (5 - 1) * -1);
  font-size: 2rem;
  color: #421a1a;
}

.item2 {
  animation-delay: calc(30s / 5 * (5 - 2) * -1);
  font-size: 2rem;
  color: #421a1a;

}
.item3 {
  animation-delay: calc(30s / 5 * (5 - 3) * -1);
  font-size: 1.9rem;
  color: #421a1a;
}
.item4 {
  animation-delay: calc(30s / 5 * (5 - 4) * -1);
  font-size: 2rem;
  color: #421a1a;
}
.item5 {
  animation-delay: calc(30s / 5 * (5 - 5) * -1);
  font-size: 2rem;
  color: #421a1a;
}

.d10{
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  margin-top: 100px;
  background-color: #f05a28;
  margin: 20px;
  border-radius: 50px;

}
.d10h1{
  margin-top: 100px;
}
.d10 h1{
  color: #421a1a;
  font-size: 4.5rem;
}

.d11 {
  display: grid;
  align-content: center;
  justify-items: center; /* Ensure items are centered */
  gap: var(--gap);
  width: 100%;
  min-height: 70vh; /* Full viewport height */
  overflow: hidden;
  font-family: system-ui, sans-serif;
  font-size: 1rem;
  line-height: 1.5;
  color: var(--color-text);
  box-sizing: border-box;


}

:root {
  --color-text: navy;
  --color-bg: papayawhip;
  --color-bg-accent: #ecdcc0;
  --size: clamp(10rem, 1rem + 40vmin, 30rem);
  --gap: calc(var(--size) / 14);
  --duration: 60s;
  --scroll-start: 0;
  --scroll-end: calc(-100% - var(--gap));
}

@media (prefers-color-scheme: dark) {
  :root {
    --color-text: papayawhip;

  }
}




.marquee {
  display: flex;
  overflow: hidden;

  user-select: none;
  gap: var(--gap);
  mask-image: linear-gradient(
    var(--mask-direction, to right),
    hsl(0 0% 0% / 0),
    hsl(0 0% 0% / 1) 20%,
    hsl(0 0% 0% / 1) 80%,
    hsl(0 0% 0% / 0)
  );

}

.marquee__group {
  flex-shrink: 0;
  display: flex;
  align-items: center;
  justify-content: space-around;
  gap: var(--gap);

  min-width: 100%;
  animation: scroll-x var(--duration) linear infinite;
}

@media (prefers-reduced-motion: reduce) {
  .marquee__group {
    animation-play-state: paused;
  }
}

.marquee--vertical {
  --mask-direction: to bottom;
}

.marquee--vertical,
.marquee--vertical .marquee__group {
  flex-direction: column;
}

.marquee--vertical .marquee__group {
  animation-name: scroll-y;
}

.marquee--reverse .marquee__group {
  animation-direction: reverse;
  animation-delay: -3s;
}

@keyframes scroll-x {
  from {
    transform: translateX(var(--scroll-start));
  }
  to {
    transform: translateX(var(--scroll-end));
  }
}

@keyframes scroll-y {
  from {
    transform: translateY(var(--scroll-start));
  }
  to {
    transform: translateY(var(--scroll-end));
  }
}
.marquee svg path {
  fill: #f05a28; /* You can set any color here */
}
/* Element styles */
.marquee svg {
  display: grid;
  place-items: center;
  width: var(--size);
  fill: var(--color-text);
  background: #421a1a;
  aspect-ratio: 16/9;
  padding: calc(var(--size) / 10);
  border-radius: 4rem;

}

.marquee--vertical svg {
  aspect-ratio: 1;
  width: calc(var(--size) / 1.5);
  padding: calc(var(--size) / 6);
}

/* Parent wrapper */
.wrapper02 {
  display: flex;
  flex-direction: column;
  gap: var(--gap);
  margin: auto;
  max-width: 100vw;
  height: auto;
}

.wrapper02--vertical {
  flex-direction: row;
  height: 100vh;
}



@keyframes fade {
  to {
    opacity: 0;
    visibility: hidden;
  }
}
.c5{
  margin-top: 200px;
  margin-bottom: 350px;
}

.d12h1{
  margin-top: 200px;
  text-align: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  color: #421a1a;
  font-size: 2.5rem;

}
.d12{
  margin-bottom: 350px;
  margin-top: 100px;
  text-align: center;
  display: flex;
  flex-direction: row;
  justify-content: center;
  align-items: center;
}
.d13{

  border-radius: 20px;
  background-color: #ffd7bb;
  height: 300px;
  width: 400px;
  margin: 20px;
}
.d13-img img{

  width: 40%;
  height: auto;
  border-radius: 8px;

}
.d13-p{
  font-size: 1.3rem;
  color: #421a1a;
}


.shape path{
  fill: #d04d22;
}
.shape2 path{
  fill: #421a1a;
}
.c15{
  margin-top: 150px;
  margin-bottom: 300px;
}
.d15{
  display: flex;
  flex-direction: row;
  justify-content: center;
  text-align: center;
  align-items: center;
  background-color: #ffd7bb;
  background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23421a1a' fill-opacity='0.32'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
  margin:50px;
  height: 950px;
  border-radius: 50px;
}

.d15-p{
  font-size: 3rem;
width:30%;
  color: #421a1a;
}

.button1 {
  margin-top: 30px;
  width: 200px;
  padding: 0;
  border: none;
  transform: rotate(5deg);
  transform-origin: center;
  font-family: "Gochi Hand", cursive;
  text-decoration: none;
  font-size: 1.3rem;
  color: #421a1a;
  cursor: pointer;
  padding-bottom: 3px;
  border-radius: 5px;
  box-shadow: 0 2px 0 #494a4b;
  transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  background-color: #f05a28;
}

.button1 span {
  background: #fceeea;
  display: block;
  padding: 0.5rem 1rem;
  border-radius: 5px;
  border: 2px solid #421a1a;
}

.button1:active {
  transform: translateY(5px);
  padding-bottom: 0px;
  outline: 0;
}
.d17{
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 200px;

}
.d17 h1{
  text-align: center;
  font-size: 3rem;
  color: #f05a28;
  margin-bottom: 20px;
}


.d17 {
  direction: ltr;
  color: #421a1a;
  display: grid;
  place-items: center;
  margin-bottom: 300px;

}


.accordion-item {
  display: flex;
  justify-content: center;
  flex-direction: column;
  padding: 40px;
  border-radius: 20px;
  border: 1px solid #ddd;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.09);
  cursor: pointer;
  background: #fff;
  margin-bottom: 0.5em;
}
.item-header {
  display: flex;
  justify-content: space-between;
  column-gap: 0.2em;
}

.item-icon {
  margin-top: 1rem;
  flex: 0 0 25px;
  display: grid;
  place-items: center;
  font-size: 3rem;

  border-radius: 50px;
  background: #f05a28;
  cursor: pointer;
  box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.09);
}
.item-icon i {
  transition: all 0.25s cubic-bezier(0.5, 0, 0.1, 1);
  height:40px;
  width: 40px;
  margin: 5px;
  display: flex;
  justify-content: center;
  color: #421a1a;
}
.item-question {
  font-size: 2rem;
  line-height: 1;
  font-weight: 500;
}

.active .item-icon i {
  transform: rotate(180deg);
}

.active .item-question {
  font-weight: 500;
}

.item-content {
  max-height: 0;
  overflow: hidden;
  transition: all 300ms ease;
}

.item-answer {
  line-height: 150%;
  opacity: 0.8;
  margin: 20px;
  font-size: 1.5rem;
}
.svg-background path{
  stroke: #f05a28;
}

.c14{
  margin-top: 250px;
}
.footer-div {
  position: relative;
  padding: 20px;
  text-align: center;

}

.svg-background {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: auto;
  z-index: -1;
}
.footer {
  width: 60%;
  height: auto;
  display: flex;
  justify-content: space-between; /* Space between elements */
  flex-direction: column;
  margin: 5px auto;
  border-radius: 50px;
  background-color: #fff;
  box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
  /* Ensure there's enough space */
  padding: 120px; /* Add padding to the footer */
}
.footer svg path{
  fill: #f05a28;
}

.footer h1 {
  font-size: 10rem;
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #421a1a;
  margin-top: 50px;
}

.footer p {
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #421a1a;
  margin-top: auto; /* Pushes the p tag to the bottom */
}
.c17{
  margin-top: 200px;
}
a{
    text-decoration: none;
}




</style>
</head>
<body>
    <div class="nav">


    <nav class="navbar">
        <!-- Left side -->
        <div class="navbar-left">
          <div class="logo-menu">
            <span class="logo-text">Branch Out <svg class="logo" fill="#000000" style="margin-bottom: -8px;" height="auto" width="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>branch</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M44,9a7,7,0,1,0-9,6.7V16a6,6,0,0,1-6,6H21a10.3,10.3,0,0,0-6,2V15.7a7,7,0,1,0-4,0V32.3a7,7,0,1,0,4,0V32a6,6,0,0,1,6-6h8A10,10,0,0,0,39,16v-.3A7,7,0,0,0,44,9ZM10,9a3,3,0,0,1,6,0,3,3,0,0,1-6,0Zm6,30a3,3,0,1,1-3-3A2.9,2.9,0,0,1,16,39ZM37,12a2.9,2.9,0,0,1-3-3,3,3,0,0,1,6,0A2.9,2.9,0,0,1,37,12Z"></path> </g> </g> </g></svg></span>
<a href="/">
            <span class="menu-text">Home</span>
</a>
          </div>
        </div>
        <!-- Right side -->
        <div class="navbar-right">
          <a href="/Select-Template" class="login-button">Get Started</a>
          <a href="#" class="signup-button">Github</a>
        </div>
      </nav>
    </div>
    <div class="c1">
   <div class="c2">
      <div class="container">
        <div class="d1">
<h1>Branch Out. Share More. Simplify Your Links.</h1>
<a href="/Select-Template">
<button class="button">
  <span class="text">Discover</span>
  <span class="svg">
    <svg
      xmlns="http://www.w3.org/2000/svg"
      width="50"
      height="20"
      viewBox="0 0 38 15"
      fill="none"
    >
      <path
        fill="white"
        d="M10 7.519l-.939-.344h0l.939.344zm14.386-1.205l-.981-.192.981.192zm1.276 5.509l.537.843.148-.094.107-.139-.792-.611zm4.819-4.304l-.385-.923h0l.385.923zm7.227.707a1 1 0 0 0 0-1.414L31.343.448a1 1 0 0 0-1.414 0 1 1 0 0 0 0 1.414l5.657 5.657-5.657 5.657a1 1 0 0 0 1.414 1.414l6.364-6.364zM1 7.519l.554.833.029-.019.094-.061.361-.23 1.277-.77c1.054-.609 2.397-1.32 3.629-1.787.617-.234 1.17-.392 1.623-.455.477-.066.707-.008.788.034.025.013.031.021.039.034a.56.56 0 0 1 .058.235c.029.327-.047.906-.39 1.842l1.878.689c.383-1.044.571-1.949.505-2.705-.072-.815-.45-1.493-1.16-1.865-.627-.329-1.358-.332-1.993-.244-.659.092-1.367.305-2.056.566-1.381.523-2.833 1.297-3.921 1.925l-1.341.808-.385.245-.104.068-.028.018c-.011.007-.011.007.543.84zm8.061-.344c-.198.54-.328 1.038-.36 1.484-.032.441.024.94.325 1.364.319.45.786.64 1.21.697.403.054.824-.001 1.21-.09.775-.179 1.694-.566 2.633-1.014l3.023-1.554c2.115-1.122 4.107-2.168 5.476-2.524.329-.086.573-.117.742-.115s.195.038.161.014c-.15-.105.085-.139-.076.685l1.963.384c.192-.98.152-2.083-.74-2.707-.405-.283-.868-.37-1.28-.376s-.849.069-1.274.179c-1.65.43-3.888 1.621-5.909 2.693l-2.948 1.517c-.92.439-1.673.743-2.221.87-.276.064-.429.065-.492.057-.043-.006.066.003.155.127.07.099.024.131.038-.063.014-.187.078-.49.243-.94l-1.878-.689zm14.343-1.053c-.361 1.844-.474 3.185-.413 4.161.059.95.294 1.72.811 2.215.567.544 1.242.546 1.664.459a2.34 2.34 0 0 0 .502-.167l.15-.076.049-.028.018-.011c.013-.008.013-.008-.524-.852l-.536-.844.019-.012c-.038.018-.064.027-.084.032-.037.008.053-.013.125.056.021.02-.151-.135-.198-.895-.046-.734.034-1.887.38-3.652l-1.963-.384zm2.257 5.701l.791.611.024-.031.08-.101.311-.377 1.093-1.213c.922-.954 2.005-1.894 2.904-2.27l-.771-1.846c-1.31.547-2.637 1.758-3.572 2.725l-1.184 1.314-.341.414-.093.117-.025.032c-.01.013-.01.013.781.624zm5.204-3.381c.989-.413 1.791-.42 2.697-.307.871.108 2.083.385 3.437.385v-2c-1.197 0-2.041-.226-3.19-.369-1.114-.139-2.297-.146-3.715.447l.771 1.846z"
      ></path>
    </svg>
  </span>
</button>
</a>
</div>
        <div class="d2">
        <img src="./wired-outline-1325-code-fork-hover-pinch(1).gif">
        </div>
      </div>
    </div>
    </div>
    <div class="d3">
      <div class="bh">
        <h1>Trusted By <svg style="margin-bottom: -7px;" height="auto" width="50" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="#ef5a28"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M8.069 0c.262 0 .52.017.76.057a4.1 4.1 0 0 1 .697.154c.228.069.451.155.674.263.217.103.44.229.663.366.377.24.748.434 1.126.589a7.537 7.537 0 0 0 2.331.525c.406.029.823.046 1.257.046v4c0 .76-.097 1.48-.291 2.166a8.996 8.996 0 0 1-.789 1.943 10.312 10.312 0 0 1-1.188 1.725 15.091 15.091 0 0 1-1.492 1.532 17.57 17.57 0 0 1-1.703 1.325c-.594.412-1.194.795-1.794 1.143l-.24.143-.24-.143a27.093 27.093 0 0 1-1.806-1.143 15.58 15.58 0 0 1-1.703-1.325 15.082 15.082 0 0 1-1.491-1.532 10.947 10.947 0 0 1-1.194-1.725 9.753 9.753 0 0 1-.789-1.943A7.897 7.897 0 0 1 .571 6V2c.435 0 .852-.017 1.258-.046a8.16 8.16 0 0 0 1.188-.171c.383-.086.766-.2 1.143-.354A6.563 6.563 0 0 0 5.28.846C5.72.56 6.166.349 6.606.21A4.79 4.79 0 0 1 8.069 0zm6.502 2.983a9.566 9.566 0 0 1-2.234-.377 7.96 7.96 0 0 1-2.046-.943A4.263 4.263 0 0 0 9.23 1.16 3.885 3.885 0 0 0 8.074.994a3.99 3.99 0 0 0-1.165.166 3.946 3.946 0 0 0-1.058.503A7.926 7.926 0 0 1 3.8 2.61c-.709.206-1.451.332-2.229.378v3.017c0 .663.086 1.297.258 1.908a8.58 8.58 0 0 0 .72 1.743 9.604 9.604 0 0 0 1.08 1.572c.417.491.862.948 1.342 1.382.48.435.983.835 1.509 1.206.531.372 1.063.709 1.594 1.017a22.397 22.397 0 0 0 1.589-1.017 15.389 15.389 0 0 0 1.514-1.206c.48-.434.926-.891 1.343-1.382a9.596 9.596 0 0 0 1.08-1.572 8.258 8.258 0 0 0 .709-1.743 6.814 6.814 0 0 0 .262-1.908V2.983z"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M11.797 4.709l-.44-.378-.406.035-4.36 5.148-1.485-2.12-.4-.068-.463.331-.069.4 1.909 2.726.217.12.457.028.234-.102 4.835-5.715-.029-.405z"></path></g></svg></h1>
      </div>


      <div class="wrapper">
        <div class="item item1">
          MindSpace
          <svg style="margin-left: 8px; transform: scale(2.5); " width="90px" height="90px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-left: -15px; margin-bottom:-5px">

            <g id="SVGRepo_bgCarrier" stroke-width="0"/>

            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

            <g id="SVGRepo_iconCarrier"> <path d="M7.45284 2.71266C7.8276 1.76244 9.1724 1.76245 9.54716 2.71267L10.7085 5.65732C10.8229 5.94743 11.0526 6.17707 11.3427 6.29148L14.2873 7.45284C15.2376 7.8276 15.2376 9.1724 14.2873 9.54716L11.3427 10.7085C11.0526 10.8229 10.8229 11.0526 10.7085 11.3427L9.54716 14.2873C9.1724 15.2376 7.8276 15.2376 7.45284 14.2873L6.29148 11.3427C6.17707 11.0526 5.94743 10.8229 5.65732 10.7085L2.71266 9.54716C1.76244 9.1724 1.76245 7.8276 2.71267 7.45284L5.65732 6.29148C5.94743 6.17707 6.17707 5.94743 6.29148 5.65732L7.45284 2.71266Z" fill="#8a2be2"/> <path opacity="0.5" d="M16.9245 13.3916C17.1305 12.8695 17.8695 12.8695 18.0755 13.3916L18.9761 15.6753C19.039 15.8348 19.1652 15.961 19.3247 16.0239L21.6084 16.9245C22.1305 17.1305 22.1305 17.8695 21.6084 18.0755L19.3247 18.9761C19.1652 19.039 19.039 19.1652 18.9761 19.3247L18.0755 21.6084C17.8695 22.1305 17.1305 22.1305 16.9245 21.6084L16.0239 19.3247C15.961 19.1652 15.8348 19.039 15.6753 18.9761L13.3916 18.0755C12.8695 17.8695 12.8695 17.1305 13.3916 16.9245L15.6753 16.0239C15.8348 15.961 15.961 15.8348 16.0239 15.6753L16.9245 13.3916Z" fill="#8a2be2"/> </g>

            </svg>
        </div>

        <div class="item item2"> <svg width="40px" height="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M8.42229 20.6181C10.1779 21.5395 11.0557 22.0001 12 22.0001V12.0001L2.63802 7.07275C2.62423 7.09491 2.6107 7.11727 2.5974 7.13986C2 8.15436 2 9.41678 2 11.9416V12.0586C2 14.5834 2 15.8459 2.5974 16.8604C3.19479 17.8749 4.27063 18.4395 6.42229 19.5686L8.42229 20.6181Z" fill="#1C274C"/>
                  <path opacity="0.7" d="M17.5774 4.43152L15.5774 3.38197C13.8218 2.46066 12.944 2 11.9997 2C11.0554 2 10.1776 2.46066 8.42197 3.38197L6.42197 4.43152C4.31821 5.53552 3.24291 6.09982 2.6377 7.07264L11.9997 12L21.3617 7.07264C20.7564 6.09982 19.6811 5.53552 17.5774 4.43152Z" fill="#1C274C"/>
                  <path opacity="0.5" d="M21.4026 7.13986C21.3893 7.11727 21.3758 7.09491 21.362 7.07275L12 12.0001V22.0001C12.9443 22.0001 13.8221 21.5395 15.5777 20.6181L17.5777 19.5686C19.7294 18.4395 20.8052 17.8749 21.4026 16.8604C22 15.8459 22 14.5834 22 12.0586V11.9416C22 9.41678 22 8.15436 21.4026 7.13986Z" fill="#1C274C"/>
                  <path d="M6.32334 4.48382C6.35617 4.46658 6.38926 4.44922 6.42261 4.43172L7.91614 3.64795L17.0169 8.65338L21.0406 6.64152C21.1783 6.79745 21.298 6.96175 21.4029 7.13994C21.5525 7.39396 21.6646 7.66352 21.7487 7.96455L17.7503 9.96373V13.0002C17.7503 13.4144 17.4145 13.7502 17.0003 13.7502C16.5861 13.7502 16.2503 13.4144 16.2503 13.0002V10.7137L12.7503 12.4637V21.9042C12.4934 21.9682 12.2492 22.0002 12.0003 22.0002C11.7515 22.0002 11.5072 21.9682 11.2503 21.9042V12.4637L2.25195 7.96455C2.33601 7.66352 2.44813 7.39396 2.59771 7.13994C2.70264 6.96175 2.82232 6.79745 2.96001 6.64152L12.0003 11.1617L15.3865 9.46857L6.32334 4.48382Z" fill="#1C274C"/>
                  </svg> Vaultify</div>
        <div class="item item3">KeyForge 🔐</div>
        <div class="item item4">QR2Y <svg viewBox="0 0 24 24"  width="30px" style="margin-left:5px;" height="30px"  fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path fill-rule="evenodd" clip-rule="evenodd" d="M16.5249 2H16.5932C17.477 1.99999 18.1897 1.99999 18.7635 2.05454C19.3552 2.1108 19.8707 2.22996 20.3343 2.51405C20.8037 2.80168 21.1983 3.19632 21.486 3.6657C21.77 4.12929 21.8892 4.64482 21.9455 5.23653C22 5.8103 22 6.52304 22 7.40683V7.47517C22 8.05587 22 8.54048 21.9626 8.9341C21.9235 9.34559 21.8386 9.72907 21.623 10.0808C21.4121 10.425 21.1227 10.7144 20.7785 10.9254C20.4267 11.1409 20.0433 11.2258 19.6318 11.2649C19.2382 11.3024 18.7535 11.3023 18.1728 11.3023L17.0679 11.3023C16.2321 11.3024 15.5352 11.3024 14.9819 11.228C14.3979 11.1495 13.8706 10.9768 13.4469 10.5531C13.0232 10.1294 12.8505 9.60212 12.772 9.01812C12.6976 8.46484 12.6976 7.76789 12.6977 6.93209L12.6977 5.82725C12.6977 5.24654 12.6976 4.76185 12.7351 4.36823C12.7742 3.95674 12.8591 3.57325 13.0746 3.22152C13.2856 2.87731 13.575 2.5879 13.9192 2.37697C14.2709 2.16142 14.6544 2.07653 15.0659 2.0374C15.4595 1.99998 15.9442 1.99999 16.5249 2ZM17.3488 7.81395C16.8694 7.81395 16.6297 7.81395 16.4604 7.69385C16.4007 7.65148 16.3485 7.59933 16.3061 7.5396C16.186 7.37034 16.186 7.13061 16.186 6.65117C16.186 6.17173 16.186 5.93199 16.3061 5.76273C16.3485 5.703 16.4007 5.65085 16.4604 5.60847C16.6297 5.48837 16.8694 5.48837 17.3488 5.48837C17.8283 5.48837 18.068 5.48837 18.2373 5.60847C18.297 5.65085 18.3491 5.703 18.3915 5.76273C18.5116 5.93199 18.5116 6.17171 18.5116 6.65116C18.5116 7.13061 18.5116 7.37034 18.3915 7.5396C18.3491 7.59933 18.297 7.65148 18.2373 7.69385C18.068 7.81395 17.8283 7.81395 17.3488 7.81395Z" fill="#66024a"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0808 2.37697C9.72907 2.16142 9.34559 2.07653 8.9341 2.0374C8.54047 1.99998 8.05583 1.99999 7.4751 2H7.40684C6.52307 1.99999 5.81029 1.99999 5.23653 2.05454C4.64482 2.1108 4.12929 2.22996 3.6657 2.51405C3.19632 2.80168 2.80168 3.19632 2.51405 3.6657C2.22996 4.12929 2.1108 4.64482 2.05454 5.23653C1.99999 5.81029 1.99999 6.52302 2 7.40679V7.47506C1.99999 8.05579 1.99998 8.54047 2.0374 8.9341C2.07653 9.34559 2.16142 9.72907 2.37697 10.0808C2.5879 10.425 2.87731 10.7144 3.22152 10.9254C3.57325 11.1409 3.95674 11.2258 4.36823 11.2649C4.76183 11.3024 5.24643 11.3023 5.82711 11.3023L6.93209 11.3023C7.76787 11.3024 8.46484 11.3024 9.01812 11.228C9.60212 11.1495 10.1294 10.9768 10.5531 10.5531C10.9768 10.1294 11.1495 9.60212 11.228 9.01812C11.3024 8.46484 11.3024 7.7679 11.3023 6.93212L11.3023 5.82726C11.3023 5.24658 11.3024 4.76183 11.2649 4.36823C11.2258 3.95674 11.1409 3.57325 10.9254 3.22152C10.7144 2.87731 10.425 2.5879 10.0808 2.37697ZM5.76273 7.69385C5.93199 7.81395 6.17171 7.81395 6.65116 7.81395C7.13061 7.81395 7.37034 7.81395 7.5396 7.69385C7.59933 7.65148 7.65148 7.59933 7.69385 7.5396C7.81395 7.37034 7.81395 7.13061 7.81395 6.65116C7.81395 6.17171 7.81395 5.93199 7.69385 5.76273C7.65148 5.703 7.59933 5.65085 7.5396 5.60847C7.37034 5.48837 7.13061 5.48837 6.65116 5.48837C6.17171 5.48837 5.93199 5.48837 5.76273 5.60847C5.703 5.65085 5.65085 5.703 5.60847 5.76273C5.48837 5.93199 5.48837 6.17171 5.48837 6.65116C5.48837 7.13061 5.48837 7.37034 5.60847 7.5396C5.65085 7.59933 5.703 7.65148 5.76273 7.69385Z" fill="#66024a"></path> <path fill-rule="evenodd" clip-rule="evenodd" d="M9.01812 12.772C9.60212 12.8505 10.1294 13.0232 10.5531 13.4469C10.9768 13.8706 11.1495 14.3979 11.228 14.9819C11.3024 15.5352 11.3024 16.2321 11.3023 17.0679L11.3023 18.1728C11.3023 18.7535 11.3024 19.2382 11.2649 19.6318C11.2258 20.0433 11.1409 20.4267 10.9254 20.7785C10.7144 21.1227 10.425 21.4121 10.0808 21.623C9.72907 21.8386 9.34559 21.9235 8.9341 21.9626C8.54048 22 8.05577 22 7.47507 22H7.40683C6.52304 22 5.8103 22 5.23653 21.9455C4.64482 21.8892 4.12929 21.77 3.6657 21.486C3.19632 21.1983 2.80168 20.8037 2.51405 20.3343C2.22996 19.8707 2.1108 19.3552 2.05454 18.7635C1.99999 18.1897 1.99999 17.477 2 16.5932V16.5249C1.99999 15.9442 1.99998 15.4595 2.0374 15.0659C2.07653 14.6544 2.16142 14.2709 2.37697 13.9192C2.5879 13.575 2.87731 13.2856 3.22152 13.0746C3.57325 12.8591 3.95674 12.7742 4.36823 12.7351C4.76184 12.6976 5.24648 12.6977 5.82717 12.6977L6.93209 12.6977C7.76789 12.6976 8.46484 12.6976 9.01812 12.772ZM6.65116 18.5116C6.17171 18.5116 5.93199 18.5116 5.76273 18.3915C5.703 18.3491 5.65085 18.297 5.60847 18.2373C5.48837 18.068 5.48837 17.8283 5.48837 17.3488C5.48837 16.8694 5.48837 16.6297 5.60847 16.4604C5.65085 16.4007 5.703 16.3485 5.76273 16.3061C5.93199 16.186 6.17171 16.186 6.65115 16.186C7.13059 16.186 7.37034 16.186 7.5396 16.3061C7.59933 16.3485 7.65148 16.4007 7.69385 16.4604C7.81395 16.6297 7.81395 16.8694 7.81395 17.3488C7.81395 17.8283 7.81395 18.068 7.69385 18.2373C7.65148 18.297 7.59933 18.3491 7.5396 18.3915C7.37034 18.5116 7.13061 18.5116 6.65116 18.5116Z" fill="#66024a"></path> <path d="M12.6977 16.6155V16.6512H14.093C14.093 15.9834 14.0939 15.5351 14.1286 15.1933C14.1622 14.8632 14.2216 14.7107 14.289 14.6098C14.3738 14.4828 14.4828 14.3738 14.6098 14.289C14.7107 14.2216 14.8632 14.1622 15.1933 14.1286C15.5351 14.0939 15.9834 14.093 16.6512 14.093H18.5116V12.6977H16.6155C15.9926 12.6977 15.4729 12.6976 15.0521 12.7404C14.6117 12.7853 14.203 12.8827 13.8346 13.1288C13.5553 13.3154 13.3154 13.5553 13.1288 13.8346C12.8827 14.203 12.7853 14.6117 12.7404 15.0521C12.6976 15.4729 12.6977 15.9926 12.6977 16.6155Z" fill="#66024a"></path> <path d="M22 18.5351V18.5116H20.6046C20.6046 18.9546 20.6043 19.2519 20.5886 19.4821C20.5733 19.706 20.5459 19.8151 20.5161 19.8868C20.3981 20.1718 20.1718 20.3981 19.8868 20.5161C19.8151 20.5459 19.706 20.5733 19.4821 20.5886C19.2519 20.6043 18.9546 20.6046 18.5116 20.6046H16.6512V22H18.5351C18.9486 22 19.2937 22 19.5771 21.9807C19.8721 21.9606 20.1507 21.9172 20.4208 21.8053C21.0476 21.5456 21.5456 21.0476 21.8053 20.4208C21.9172 20.1507 21.9606 19.8721 21.9807 19.5771C22 19.2937 22 18.9486 22 18.5351Z" fill="#66024a"></path> <path d="M14.093 21.3023C14.093 21.6876 13.7807 22 13.3953 22C13.01 22 12.6977 21.6876 12.6977 21.3023V18.5116H14.093V21.3023Z" fill="#66024a"></path> <path d="M21.3023 12.6977C20.917 12.6977 20.6046 13.01 20.6046 13.3953V16.6512H22V13.3953C22 13.01 21.6876 12.6977 21.3023 12.6977Z" fill="#66024a"></path> <path d="M16.0761 16.6173C16 16.8011 16 17.0341 16 17.5C16 17.9659 16 18.1989 16.0761 18.3827C16.1776 18.6277 16.3723 18.8224 16.6173 18.9239C16.8011 19 17.0341 19 17.5 19C17.9659 19 18.1989 19 18.3827 18.9239C18.6277 18.8224 18.8224 18.6277 18.9239 18.3827C19 18.1989 19 17.9659 19 17.5C19 17.0341 19 16.8011 18.9239 16.6173C18.8224 16.3723 18.6277 16.1776 18.3827 16.0761C18.1989 16 17.9659 16 17.5 16C17.0341 16 16.8011 16 16.6173 16.0761C16.3723 16.1776 16.1776 16.3723 16.0761 16.6173Z" fill="#66024a"></path> </g></svg></div>
        <div class="item item5">Shortify <svg  width="30px" style="margin-left:5px;" height="30px"  viewBox="0 0 24 24" id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><defs><style>.cls-1{fill:none;stroke:#020202;stroke-miterlimit:10;stroke-width:1.92px;}</style></defs><path class="cls-1" d="M10.56,5.77l2.72-2.72a5.43,5.43,0,0,1,3.84-1.59,5.43,5.43,0,0,1,5.42,5.42A5.43,5.43,0,0,1,21,10.72l-2.72,2.72"></path><path class="cls-1" d="M5.77,10.56,3.05,13.28A5.42,5.42,0,1,0,10.72,21l2.72-2.72"></path><line class="cls-1" x1="16.79" y1="7.21" x2="7.21" y2="16.79"></line><line class="cls-1" x1="20.63" y1="15.83" x2="23.5" y2="15.83"></line><line class="cls-1" x1="15.83" y1="20.63" x2="15.83" y2="23.5"></line><line class="cls-1" x1="19.19" y1="19.19" x2="21.1" y2="21.1"></line><line class="cls-1" x1="3.38" y1="8.17" x2="0.5" y2="8.17"></line><line class="cls-1" x1="8.17" y1="3.38" x2="8.17" y2="0.5"></line><line class="cls-1" x1="4.81" y1="4.81" x2="2.9" y2="2.9"></line></g></svg></div>

      </div>
    </div>
    <div class="c3">


    <div class="d4">
      <div class="d5">
<img src="./wired-lineal-1419-polyline-hover-pinch.gif">
      </div>
      <div class="d6">
        <h1>Create and customize<br> your Branch Out<br> links in no time.</h1>
      </div>
    </div>
  </div>
  <div class="c3">
  <div class="d9">

    <div class="d7">
      <h1>Share Your Links Instantly with the World.</h1>
    </div>
    <div class="d8">
      <img src="./wired-lineal-11-link-unlink-hover-bounce.gif">
          </div>
  </div>
</div>
</div>
<div class="c5">

<div class="d10">
  <svg style="z-index: 2; margin-top:-50px;" height="auto" width="100" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M12 3L14.0357 8.16153C14.2236 8.63799 14.3175 8.87622 14.4614 9.0771C14.5889 9.25516 14.7448 9.41106 14.9229 9.53859C15.1238 9.68245 15.362 9.77641 15.8385 9.96432L21 12L15.8385 14.0357C15.362 14.2236 15.1238 14.3175 14.9229 14.4614C14.7448 14.5889 14.5889 14.7448 14.4614 14.9229C14.3175 15.1238 14.2236 15.362 14.0357 15.8385L12 21L9.96432 15.8385C9.77641 15.362 9.68245 15.1238 9.53859 14.9229C9.41106 14.7448 9.25516 14.5889 9.0771 14.4614C8.87622 14.3175 8.63799 14.2236 8.16153 14.0357L3 12L8.16153 9.96432C8.63799 9.77641 8.87622 9.68245 9.0771 9.53859C9.25516 9.41106 9.41106 9.25516 9.53859 9.0771C9.68245 8.87622 9.77641 8.63799 9.96432 8.16153L12 3Z" stroke="#421a1a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
  <div class="d10h1">
  <h1>Integrate Your Favorite Social Media Apps in One Place <svg style="margin-bottom: -10px;" height="auto" width="100" viewBox="0 0 1024 1024" class="icon" xmlns="http://www.w3.org/2000/svg" fill="#fceeea" stroke="#fceeea"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#fceeea" d="M512 512a192 192 0 100-384 192 192 0 000 384zm0 64a256 256 0 110-512 256 256 0 010 512z"></path><path fill="#fceeea" d="M512 512a32 32 0 0132 32v256a32 32 0 11-64 0V544a32 32 0 0132-32z"></path><path fill="#fceeea" d="M384 649.088v64.96C269.76 732.352 192 771.904 192 800c0 37.696 139.904 96 320 96s320-58.304 320-96c0-28.16-77.76-67.648-192-85.952v-64.96C789.12 671.04 896 730.368 896 800c0 88.32-171.904 160-384 160s-384-71.68-384-160c0-69.696 106.88-128.96 256-150.912z"></path></g></svg></h1>
</div>
  <div class="d11">



  <article class="wrapper02">
    <div class="marquee">
        <div class="marquee__group">
            <svg><use xlink:href="#apple" /></svg>
            <svg><use xlink:href="#google" /></svg>
            <svg><use xlink:href="#facebook" /></svg>
            <svg><use xlink:href="#twitter" /></svg>
            <svg><use xlink:href="#linkedin" /></svg>
            <svg><use xlink:href="#instagram" /></svg>
            <svg><use xlink:href="#github" /></svg>
            <svg><use xlink:href="#pinterest" /></svg>
        </div>
        <div aria-hidden="true" class="marquee__group">
            <svg><use xlink:href="#apple" /></svg>
            <svg><use xlink:href="#google" /></svg>
            <svg><use xlink:href="#facebook" /></svg>
            <svg><use xlink:href="#twitter" /></svg>
            <svg><use xlink:href="#linkedin" /></svg>
            <svg><use xlink:href="#instagram" /></svg>
            <svg><use xlink:href="#github" /></svg>
            <svg><use xlink:href="#pinterest" /></svg>
        </div>
    </div>
    <div class="marquee marquee--reverse">
        <div class="marquee__group">
            <svg><use xlink:href="#pinterest" /></svg>
            <svg><use xlink:href="#github" /></svg>
            <svg><use xlink:href="#instagram" /></svg>
            <svg><use xlink:href="#linkedin" /></svg>
            <svg><use xlink:href="#twitter" /></svg>
            <svg><use xlink:href="#facebook" /></svg>
            <svg><use xlink:href="#google" /></svg>
            <svg><use xlink:href="#apple" /></svg>
        </div>
        <div aria-hidden="true" class="marquee__group">
            <svg><use xlink:href="#pinterest" /></svg>
            <svg><use xlink:href="#github" /></svg>
            <svg><use xlink:href="#instagram" /></svg>
            <svg><use xlink:href="#linkedin" /></svg>
            <svg><use xlink:href="#twitter" /></svg>
            <svg><use xlink:href="#facebook" /></svg>
            <svg><use xlink:href="#google" /></svg>
            <svg><use xlink:href="#apple" /></svg>
        </div>
    </div>
</article>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
<symbol id="apple" viewBox="0 0 24 24">
<path fill="#fceeea" d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z"/>
</symbol>

<symbol id="google" viewBox="0 0 24 24">
<path fill="#fceeea" d="M12.24 10.285V14.4h6.806c-.275 1.765-2.056 5.174-6.806 5.174-4.095 0-7.439-3.389-7.439-7.574s3.345-7.574 7.439-7.574c2.33 0 3.891.989 4.785 1.849l3.254-3.138C18.189 1.186 15.479 0 12.24 0c-6.635 0-12 5.365-12 12s5.365 12 12 12c6.926 0 11.52-4.869 11.52-11.726 0-.788-.085-1.39-.189-1.989H12.24z"/>
</symbol>

<symbol id="facebook" viewBox="0 0 24 24">
<path fill="#fceeea" d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
</symbol>

<symbol id="twitter" viewBox="0 0 24 24">
<path fill="#fceeea" d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
</symbol>

<symbol id="linkedin" viewBox="0 0 24 24">
<path fill="#fceeea" d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
</symbol>

<symbol id="instagram" viewBox="0 0 24 24">
<path fill="#fceeea" d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
</symbol>

<symbol id="github" viewBox="0 0 24 24">
<path fill="#fceeea" d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/>
</symbol>

<symbol id="pinterest" viewBox="0 0 24 24">
<path fill="#fceeea" d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.401.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.354-.629-2.758-1.379l-.749 2.848c-.269 1.045-1.004 2.352-1.498 3.146 1.123.345 2.306.535 3.55.535 6.607 0 11.985-5.365 11.985-11.987C23.97 5.39 18.592.026 11.985.026L12.017 0z"/>
</symbol>
</svg>
</div>
</div>

</div>
<div class="d12h1">
  <h1>The ultimate tool for Fast.<br>Easy. Effective bio links.</h1>
</div>
<div class="d12">
  <svg class="shape2"  style="z-index: 2; margin-bottom:200px; margin-right:-100px " height="auto" width="200"  class="w-10 h-10" viewBox="0 0 147 148" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M77.0546 0.147949H69.9463V147.148H77.0546V0.147949Z" fill="currentColor"/>
    <path d="M77.0546 0.147949H69.9463V147.148H77.0546V0.147949Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M147 70.0938H0V77.2021H147V70.0938Z" fill="currentColor"/>
    <path d="M147 70.0938H0V77.2021H147V70.0938Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M24.0282 19.1578L19.002 24.1841L122.946 128.128L127.972 123.101L24.0282 19.1578Z" fill="currentColor"/>
    <path d="M24.0282 19.1578L19.002 24.1841L122.946 128.128L127.972 123.101L24.0282 19.1578Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M122.946 19.1564L19.002 123.1L24.0282 128.126L127.972 24.1827L122.946 19.1564Z" fill="currentColor"/>
    <path d="M122.946 19.1564L19.002 123.1L24.0282 128.126L127.972 24.1827L122.946 19.1564Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M6.7933 42.6484L4.11133 49.2314L140.248 104.695L142.93 98.1115L6.7933 42.6484Z" fill="currentColor"/>
    <path d="M6.7933 42.6484L4.11133 49.2314L140.248 104.695L142.93 98.1115L6.7933 42.6484Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M97.9631 4.26955L42.5 140.406L49.083 143.088L104.546 6.95152L97.9631 4.26955Z" fill="currentColor"/>
    <path d="M97.9631 4.26955L42.5 140.406L49.083 143.088L104.546 6.95152L97.9631 4.26955Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M140.41 42.8958L4.03809 97.7856L6.69233 104.38L143.064 49.4902L140.41 42.8958Z" fill="currentColor"/>
    <path d="M140.41 42.8958L4.03809 97.7856L6.69233 104.38L143.064 49.4902L140.41 42.8958Z" fill="currentColor" fill-opacity="0.2"/>
    <path d="M49.3122 4.18875L42.7178 6.84229L97.5928 143.214L104.187 140.561L49.3122 4.18875Z" fill="currentColor"/>
    <path d="M49.3122 4.18875L42.7178 6.84229L97.5928 143.214L104.187 140.561L49.3122 4.18875Z" fill="currentColor" fill-opacity="0.2"/>
  </svg>



  <div class="d13">

<div class="d13-img" style="padding: 42px;">

<img src="./wired-lineal-186-puzzle-hover-detach.gif">
</div>

<div class="d13-p">
  <p>Effortlessly manage all your important links in one place.</p>
</div>
  </div>
  <div class="d13">
<div class="d13-img"  style="padding: 42px;">
<img src="./wired-lineal-2803-engagement-alt-hover-pinch.gif">
</div>
<div class="d13-p">
  <p>Update and edit your links anytime, anywhere.</p>
</div>
  </div>
  <svg class="shape" style="z-index: 2; margin-bottom:-200px; margin-left:-120px" height="auto" width="240" class="w-10 h-10" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
    <g clip-path="url(#clip0_103_6476)">
      <path d="M35.5727 94.6709C36.1748 95.3712 36.8111 96.0503 37.473 96.7164C38.1349 97.3826 38.8225 97.9976 39.5228 98.621L3.94588 134.194C3.2683 133.562 2.59784 132.915 1.9345 132.255C1.27116 131.594 0.626329 130.925 0 130.248L35.5727 94.6709Z" fill="currentColor"/>
      <path d="M35.5727 94.6709C36.1748 95.3712 36.8111 96.0503 37.473 96.7164C38.1349 97.3826 38.8225 97.9976 39.5228 98.621L3.94588 134.194C3.2683 133.562 2.59784 132.915 1.9345 132.255C1.27116 131.594 0.626329 130.925 0 130.248L35.5727 94.6709Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M132.255 1.9345C132.915 2.59784 133.562 3.2683 134.194 3.94587L98.621 39.5228C98.0146 38.8224 97.3783 38.1392 96.7122 37.473C96.046 36.8068 95.3656 36.1734 94.6709 35.5727L130.248 0C130.928 0.637717 131.597 1.28255 132.255 1.9345Z" fill="currentColor"/>
      <path d="M132.255 1.9345C132.915 2.59784 133.562 3.2683 134.194 3.94587L98.621 39.5228C98.0146 38.8224 97.3783 38.1392 96.7122 37.473C96.046 36.8068 95.3656 36.1734 94.6709 35.5727L130.248 0C130.928 0.637717 131.597 1.28255 132.255 1.9345Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M43.9896 102.046C45.6003 103.115 47.2842 104.07 49.0287 104.903L12.5508 141.381C11.0419 140.276 9.56857 139.119 8.13086 137.909L43.9896 102.046Z" fill="currentColor"/>
      <path d="M43.9896 102.046C45.6003 103.115 47.2842 104.07 49.0287 104.903L12.5508 141.381C11.0419 140.276 9.56857 139.119 8.13086 137.909L43.9896 102.046Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M137.909 8.13086C139.119 9.57426 140.276 11.049 141.381 12.555L104.903 49.033C104.069 47.2888 103.114 45.605 102.046 43.9939L137.909 8.13086Z" fill="currentColor"/>
      <path d="M137.909 8.13086C139.119 9.57426 140.276 11.049 141.381 12.555L104.903 49.033C104.069 47.2888 103.114 45.605 102.046 43.9939L137.909 8.13086Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M54.7081 107.12C56.8172 107.774 58.9748 108.259 61.1607 108.572L22.1546 147.573C20.4835 146.637 18.8408 145.64 17.2266 144.584L54.7081 107.12Z" fill="currentColor"/>
      <path d="M54.7081 107.12C56.8172 107.774 58.9748 108.259 61.1607 108.572L22.1546 147.573C20.4835 146.637 18.8408 145.64 17.2266 144.584L54.7081 107.12Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M144.601 17.2271C145.651 18.8413 146.641 20.484 147.569 22.1551L108.563 61.1697C108.251 58.983 107.769 56.824 107.119 54.7129L144.601 17.2271Z" fill="currentColor"/>
      <path d="M144.601 17.2271C145.651 18.8413 146.641 20.484 147.569 22.1551L108.563 61.1697C108.251 58.983 107.769 56.824 107.119 54.7129L144.601 17.2271Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M68.6894 108.947C71.8293 108.83 74.9462 108.361 77.9819 107.551L32.8605 152.668C31.0029 151.938 29.1794 151.13 27.373 150.264L68.6894 108.947Z" fill="currentColor"/>
      <path d="M68.6894 108.947C71.8293 108.83 74.9462 108.361 77.9819 107.551L32.8605 152.668C31.0029 151.938 29.1794 151.13 27.373 150.264L68.6894 108.947Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M150.264 27.3735C151.118 29.1799 151.933 31.0034 152.668 32.8653L107.551 77.9824C108.362 74.9467 108.83 71.8298 108.947 68.6899L150.264 27.3735Z" fill="currentColor"/>
      <path d="M150.264 27.3735C151.118 29.1799 151.933 31.0034 152.668 32.8653L107.551 77.9824C108.362 74.9467 108.83 71.8298 108.947 68.6899L150.264 27.3735Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M154.769 38.6602C155.426 40.6886 156.011 42.7427 156.524 44.801L44.801 156.524C42.7427 156.011 40.6886 155.426 38.6602 154.769L154.769 38.6602Z" fill="currentColor"/>
      <path d="M154.769 38.6602C155.426 40.6886 156.011 42.7427 156.524 44.801L44.801 156.524C42.7427 156.011 40.6886 155.426 38.6602 154.769L154.769 38.6602Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M157.895 51.3477C158.296 53.6594 158.608 55.9796 158.83 58.3085L58.3085 158.83C55.9825 158.614 53.6622 158.302 51.3477 157.895L157.895 51.3477Z" fill="currentColor"/>
      <path d="M157.895 51.3477C158.296 53.6594 158.608 55.9796 158.83 58.3085L58.3085 158.83C55.9825 158.614 53.6622 158.302 51.3477 157.895L157.895 51.3477Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M159.232 65.79C159.274 68.4975 159.198 71.2135 158.997 73.9038L73.9214 159.001C71.214 159.197 68.498 159.274 65.8076 159.236L159.232 65.79Z" fill="currentColor"/>
      <path d="M159.232 65.79C159.274 68.4975 159.198 71.2135 158.997 73.9038L73.9214 159.001C71.214 159.197 68.498 159.274 65.8076 159.236L159.232 65.79Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M157.882 82.9487C157.281 86.4206 156.483 89.8554 155.49 93.2362L93.2191 155.499C89.8379 156.489 86.4032 157.286 82.9316 157.886L157.882 82.9487Z" fill="currentColor"/>
      <path d="M157.882 82.9487C157.281 86.4206 156.483 89.8554 155.49 93.2362L93.2191 155.499C89.8379 156.489 86.4032 157.286 82.9316 157.886L157.882 82.9487Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M150.708 105.902C141.509 125.645 125.644 141.511 105.902 150.712L150.708 105.902Z" fill="currentColor"/>
      <path d="M150.708 105.902C141.509 125.645 125.644 141.511 105.902 150.712L150.708 105.902Z" fill="currentColor" fill-opacity="0.2"/>
    </g>
    <defs>
      <clipPath id="clip0_103_6476">
        <rect width="159.244" height="159.244" fill="white"/>
      </clipPath>
    </defs>
  </svg>
</div>

<div class="c15">

<div class="d15">
  <div class="d15-p">
    <h1>Streamline Your Bio Links for Maximum Impact.</h1>
<a href="/Select-Template">
    <button class="button1">
      <span>Get Started</span>
    </button>
</a>
  </div>
  <div class="d15-card">

    <div  class="card" data-tilt data-tilt-scale="0.95" data-tilt-startY="40">

      <div class="year">
       <svg  width="600" height="auto" viewBox="0 0 960 960" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M274.25 392.304C276.586 390.159 276.473 386.476 275.957 383.331C274.328 373.427 270.521 364.072 265.872 355.146C264.233 352.002 262.503 348.913 260.718 345.87C240.257 310.9 190.609 248.562 173.438 255.435L172.562 255.735C166.229 261.148 166.846 275.399 180.378 305.372C186.447 318.8 195.86 330.416 205.152 341.883C205.643 342.489 206.133 343.094 206.623 343.7C216.157 355.5 226.399 367.177 238.123 376.7C245.857 383.143 254.495 388.416 263.761 392.349C267.186 393.764 271.521 394.809 274.25 392.304ZM189.645 268.044C188.999 267.374 187.933 267.354 187.263 268C186.593 268.645 186.573 269.712 187.219 270.382C218.257 302.599 244.478 339.132 265.068 378.849C265.496 379.675 266.513 379.998 267.339 379.569C268.165 379.141 268.487 378.125 268.059 377.299C247.32 337.294 220.909 300.495 189.645 268.044Z" fill="url(#paint0_linear_248_1705)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M294.454 250.941C275.003 236.41 252.779 226.067 230.387 216.667L229.477 217.285C229.949 217.97 230.409 218.644 230.858 219.318C248.452 245.484 261.089 275.917 265.952 307.394L267.367 307.17C283.051 314.743 298.743 322.319 314.443 329.899C320.844 332.988 328.537 336.061 334.724 332.561C342.787 327.994 341.99 316.109 338.846 307.394C330.592 284.553 313.905 265.472 294.454 250.941ZM261.896 237.61C261.042 237.24 260.05 237.631 259.68 238.484C259.309 239.338 259.7 240.33 260.554 240.7C276.808 247.76 291.328 258.276 303.105 271.518C314.882 284.759 323.633 300.408 328.748 317.374C329.016 318.265 329.956 318.77 330.847 318.501C331.738 318.233 332.242 317.293 331.973 316.402C326.717 298.967 317.725 282.886 305.623 269.279C293.52 255.672 278.599 244.865 261.896 237.61Z" fill="url(#paint1_linear_248_1705)"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M140 127.805L141.153 126.3C121.714 111.218 103.465 100.055 90.2991 96.2201C80.5621 93.3741 69.2201 94.4851 61.3811 100.92C47.1531 112.61 50.4881 134.988 56.2271 152.488C61.0954 167.338 66.7637 181.913 73.2071 196.15L73.6001 195.971C88.6025 189.527 102.188 180.19 113.581 168.494C124.974 156.797 133.952 142.971 140 127.805ZM79.1399 102.821C78.2128 102.744 77.3986 103.433 77.3213 104.36C77.2441 105.287 77.933 106.101 78.8601 106.179C86.5625 106.821 106.064 111.837 121.324 126.706C121.991 127.356 123.057 127.342 123.706 126.676C124.356 126.009 124.342 124.943 123.676 124.294C107.736 108.763 87.4375 103.513 79.1399 102.821Z" fill="url(#paint2_linear_248_1705)"/>
    <path d="M676.101 388.1C677.151 388.242 678.108 388.778 678.778 389.6C679.448 390.421 679.78 391.466 679.709 392.523C679.638 393.58 679.168 394.571 678.394 395.295C677.62 396.019 676.6 396.421 675.54 396.422C675.356 396.421 675.172 396.41 674.989 396.388L634.82 390.988C633.768 390.849 632.808 390.315 632.134 389.495C631.46 388.675 631.124 387.629 631.192 386.57C631.261 385.51 631.729 384.517 632.503 383.79C633.277 383.063 634.298 382.658 635.359 382.656C635.551 382.659 635.742 382.674 635.932 382.701L676.101 388.1Z" fill="#171717"/>
    <path d="M609.308 374.943C610.747 375.138 612.096 375.756 613.184 376.718C614.272 377.68 615.05 378.943 615.42 380.348C615.79 381.752 615.736 383.235 615.263 384.608C614.791 385.981 613.921 387.184 612.766 388.063C611.61 388.942 610.219 389.459 608.77 389.548C607.32 389.637 605.877 389.294 604.622 388.563C603.367 387.832 602.358 386.745 601.721 385.44C601.084 384.135 600.848 382.67 601.043 381.231C601.172 380.275 601.488 379.353 601.973 378.519C602.458 377.685 603.103 376.955 603.871 376.371C604.638 375.787 605.514 375.36 606.447 375.115C607.38 374.87 608.353 374.811 609.308 374.943V374.943Z" fill="#171717"/>
    <path d="M621.829 778.1C666.221 684.374 743.247 515.6 779.284 424.872C781.317 419.764 783.211 414.909 784.967 410.307C786.73 405.707 791.817 396.135 788.527 389.407C790.817 393.427 800.093 409.834 801.827 415.258C803.814 421.458 800.344 431.62 800.344 431.62C800.344 431.62 610.524 841.211 596.464 864.783C582.876 887.569 557.788 878.371 553.948 877.483C487.574 862.121 330.86 827.6 311.769 822.9C292.936 818.24 292.813 810.221 292.813 810.008L288.748 788.233C290.309 792.833 294.599 797.015 303.594 799.969C330.86 808.896 543.039 857.477 543.039 857.477C543.039 857.477 575.269 867.887 589.644 843.597C593.383 837.281 605.354 812.844 621.829 778.1Z" fill="#171717"/>
    <path d="M226.422 426.354C227.467 433.9 227.882 443.054 221.722 447.522C214.322 452.867 204.17 447.005 197.387 440.896C152.646 400.659 125.447 341.556 123.987 281.386C146.5 311.129 172.716 337.878 202 360.984C207.207 365.184 212.855 368.806 218.845 371.784L218.699 372.076C218.946 373.862 219.193 375.636 219.452 377.399C221.762 393.91 224.087 409.677 226.422 426.354Z" fill="url(#paint3_linear_248_1705)"/>
    <path d="M476.143 407.42C473.437 412.552 470.921 417.32 467.766 423.378" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M788.011 388.508C785.731 384.87 780.611 382.253 770.593 382.04L549.98 355.268C541.623 353.626 533.022 353.664 524.68 355.38" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M788.505 389.362C788.367 389.087 788.213 388.82 788.045 388.562" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M323.023 709.18L322.888 709.45C321.642 711.942 320.418 714.394 319.216 716.806C310.67 733.886 303.033 749.148 296.716 761.793C293.729 767.767 285.587 778.874 288.754 788.228C290.315 792.828 294.605 797.01 303.6 799.964C330.866 808.891 543.045 857.472 543.045 857.472C543.045 857.472 575.275 867.882 589.65 843.592C593.389 837.281 605.36 812.844 621.835 778.099C666.227 684.373 743.253 515.599 779.29 424.871C781.323 419.762 783.217 414.907 784.973 410.306C786.736 405.706 791.823 396.134 788.533 389.406" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M288.748 788.228L292.813 810C292.813 810.213 292.936 818.232 311.769 822.892C330.86 827.597 487.574 862.118 553.944 877.481C557.784 878.368 582.872 887.566 596.46 864.781C610.52 841.209 800.34 431.618 800.34 431.618C800.34 431.618 803.81 421.455 801.823 415.256C800.093 409.832 790.817 393.425 788.523 389.405C788.511 389.382 788.5 389.371 788.5 389.36C788.264 388.96 788.107 388.675 788.04 388.56C788.027 388.542 788.016 388.523 788.006 388.503" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M319.217 716.806L340.172 721.05L621.82 778.099" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M727.031 418.111L779.284 424.871" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M670.646 411.361L687.256 412.866" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M583.738 400.603L628.736 406.196L628.95 406.218" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M469.394 795.808C464.694 809.341 450.528 816.708 437.77 812.272C425.012 807.836 418.47 793.272 423.17 779.75C427.87 766.228 442.027 758.862 454.8 763.3C467.573 767.738 474.088 782.288 469.394 795.808Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M615.599 383.2C615.406 384.64 614.789 385.99 613.828 387.079C612.867 388.169 611.605 388.949 610.2 389.32C608.796 389.692 607.313 389.639 605.939 389.168C604.565 388.696 603.361 387.828 602.481 386.672C601.6 385.517 601.082 384.126 600.993 382.676C600.903 381.226 601.245 379.782 601.976 378.526C602.707 377.271 603.794 376.261 605.1 375.623C606.405 374.986 607.871 374.75 609.31 374.946C611.238 375.207 612.984 376.223 614.163 377.771C615.342 379.319 615.859 381.271 615.599 383.2Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M674.993 396.392L634.824 390.992C633.772 390.853 632.811 390.32 632.138 389.499C631.464 388.679 631.128 387.633 631.196 386.574C631.265 385.515 631.733 384.521 632.507 383.795C633.281 383.068 634.302 382.662 635.363 382.66C635.555 382.664 635.746 382.679 635.936 382.705L676.105 388.105C677.155 388.248 678.112 388.784 678.782 389.605C679.451 390.426 679.784 391.471 679.713 392.528C679.642 393.586 679.172 394.576 678.398 395.3C677.624 396.024 676.604 396.427 675.544 396.427C675.36 396.426 675.176 396.414 674.993 396.392Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M265.884 355.133C267.252 350.637 267.992 345.973 268.084 341.275C268.196 337.648 268.196 334.021 268.084 330.393C267.855 322.689 267.142 315.007 265.95 307.393C261.087 275.916 248.45 245.483 230.856 219.317C230.407 218.643 229.947 217.969 229.475 217.284C208.306 186.525 173.112 151.117 141.151 126.299C121.712 111.217 103.463 100.054 90.2913 96.2138C80.5543 93.3728 69.2123 94.4838 61.3733 100.914C47.1453 112.604 50.4803 134.986 56.2193 152.482C61.0877 167.333 66.7564 181.911 73.2003 196.15C86.8882 226.371 103.922 254.961 123.982 281.386C146.496 311.129 172.714 337.878 202 360.984C207.207 365.184 212.855 368.806 218.845 371.784C224.795 374.817 231.322 376.547 237.992 376.86" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M123.971 281.184C123.969 281.251 123.973 281.318 123.983 281.384C125.442 341.554 152.641 400.657 197.383 440.894C204.166 447.003 214.317 452.865 221.718 447.52C227.883 443.05 227.468 433.898 226.418 426.352C224.083 409.675 221.758 393.908 219.445 377.4C219.186 375.637 218.939 373.863 218.692 372.077" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M230.387 216.667C252.779 226.067 275.003 236.41 294.454 250.941C313.905 265.472 330.592 284.553 338.846 307.394C341.99 316.109 342.787 327.994 334.724 332.561C328.537 336.061 320.844 332.988 314.443 329.899C298.743 322.319 283.051 314.743 267.367 307.17" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M172.563 255.725C166.23 261.138 166.847 275.389 180.379 305.362C186.769 319.5 196.865 331.629 206.624 343.69C216.158 355.49 226.4 367.172 238.124 376.69C245.857 383.135 254.496 388.41 263.762 392.344C267.187 393.759 271.522 394.804 274.251 392.299C276.587 390.154 276.474 386.471 275.958 383.326C274.329 373.426 270.522 364.067 265.873 355.126C264.234 351.982 262.504 348.893 260.719 345.85C240.258 310.88 190.61 248.542 173.439 255.415" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M120.557 208.818C122.388 216.342 126.992 223.394 133.798 227.089C140.604 230.784 149.665 230.559 155.64 225.618C161.682 220.632 163.579 211.839 161.951 204.18C159.896 194.533 152.686 186.829 143.803 182.921C135.156 179.103 128.138 182.809 122.994 190.344C119.311 195.735 119.053 202.641 120.557 208.818Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M73.5938 195.971C88.5972 189.527 102.184 180.191 113.578 168.495C124.972 156.798 133.951 142.972 140 127.805" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M340.284 720.511C333.811 718.006 327.898 714.247 322.884 709.45C310.868 698.164 303.384 681.55 303.714 665.238C304.175 642.038 320.38 619.958 342.379 612.569C327.308 603.057 320.604 582.569 326.242 565.669C331.88 548.769 348.836 536.583 366.625 535.651C383.225 534.797 396.249 538.032 408.962 550.284C409.871 551.159 410.792 552.092 411.702 553.069" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M221.155 377.166C279.17 427.2 346.314 489.062 409.2 550.04C446.933 586.64 483.139 622.912 514.908 656.119" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M269.4 330.348C309.821 396.513 354.274 460.127 402.508 520.831C439.298 567.155 478.222 611.682 519.278 654.412C519.57 654.726 519.878 655.041 520.178 655.355" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M402.946 520.472C397.432 508.029 392.761 494.901 392.424 481.302C392.087 467.703 396.635 453.429 407 444.602C417.365 435.775 434 433.956 444.565 442.536C445.704 438.807 447.624 435.363 450.197 432.434C452.77 429.504 455.938 427.156 459.489 425.545C462.115 424.388 464.909 423.656 467.766 423.378C472.678 422.887 477.631 423.729 482.106 425.814C479.534 419.889 477.541 413.729 476.155 407.42C473.819 396.347 474.01 385.038 479.411 375.302C484.274 366.52 492.988 360.186 502.579 357.211C509.74 355.081 517.265 354.461 524.679 355.391C527.255 355.677 529.813 356.116 532.338 356.705C549.047 360.628 563.873 370.235 574.282 383.882C584.595 397.6 589.826 414.473 589.082 431.62" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M616.508 429.621C617.744 420.632 622.067 412.352 628.737 406.2C629.701 405.344 630.718 404.549 631.781 403.819C640.248 397.979 651.961 396.643 661.023 401.519C665.134 403.777 668.483 407.205 670.647 411.367C673.374 416.311 674.051 422.128 672.534 427.567C676.21 421.587 681.316 416.616 687.391 413.1C691.353 410.818 695.726 409.341 700.261 408.754C705.044 408.164 709.898 408.707 714.432 410.34C718.966 411.973 723.053 414.65 726.361 418.154C727.658 419.575 728.785 421.143 729.719 422.825C733.93 430.439 734.043 439.783 731.898 448.216C729.753 456.649 725.53 464.387 721.353 472.016C728.72 472.206 733.29 480.382 734.234 487.693C736.034 501.674 729.921 516.228 719.208 525.38C708.495 534.532 693.581 538.28 679.656 536.161C689.286 540.337 696.925 548.079 700.973 557.764C705.021 567.449 705.162 578.325 701.368 588.111C697.574 597.898 690.138 605.837 680.62 610.262C671.102 614.688 660.24 615.257 650.312 611.851" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M512.663 488.882C511.417 480.201 517.663 471.408 525.982 468.612C534.301 465.816 543.871 468.512 550.441 474.312C557.011 480.112 560.761 488.664 561.974 497.344C563.007 487.395 570.958 478.815 580.582 476.052C590.206 473.289 600.953 476.007 608.825 482.195C616.697 488.383 621.762 497.704 623.773 507.508C625.784 517.312 624.918 527.542 622.391 537.222C623.009 536.593 623.615 535.964 624.233 535.335" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M475.659 605.674C468.371 593.995 463.61 580.361 464.385 566.616C465.16 552.871 472.032 539.125 483.824 532.028C495.616 524.931 512.28 525.828 521.961 535.61" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M502.858 635.3C501.143 623.466 503.938 611.42 510.687 601.55C517.437 591.679 527.649 584.706 539.299 582.012" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M501.242 707.8C497.491 693.111 499.187 676.547 508.194 664.363C510.35 661.466 512.915 658.897 515.808 656.737C516.924 655.903 518.082 655.127 519.278 654.413C528.071 649.18 538.863 647.413 548.378 651.044" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M525.318 651.245C521.141 647.966 519.76 641.969 520.927 636.781C522.094 631.593 525.408 627.134 529.181 623.395C532.204 620.25 535.802 617.715 539.781 615.927C543.795 614.152 548.291 613.788 552.538 614.894" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M446.462 699.388C444.242 695.577 442.825 691.352 442.3 686.973C441.775 682.594 442.152 678.153 443.409 673.926C444.666 669.698 446.776 665.772 449.608 662.391C452.44 659.01 455.935 656.245 459.877 654.267C463.818 652.288 468.124 651.138 472.527 650.887C476.931 650.636 481.339 651.29 485.48 652.809C489.621 654.327 493.407 656.677 496.604 659.715C499.802 662.752 502.344 666.413 504.072 670.471" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M465.845 607.953C454.413 602.406 439.399 605.606 431.223 615.343C423.047 625.08 422.509 640.431 429.966 650.728" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M249.28 686.909C259.712 686.909 268.169 678.452 268.169 668.02C268.169 657.588 259.712 649.131 249.28 649.131C238.848 649.131 230.391 657.588 230.391 668.02C230.391 678.452 238.848 686.909 249.28 686.909Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M377.231 442.992C384.849 442.992 391.026 436.816 391.026 429.197C391.026 421.578 384.849 415.402 377.231 415.402C369.612 415.402 363.436 421.578 363.436 429.197C363.436 436.816 369.612 442.992 377.231 442.992Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M394.342 377.166C400.466 377.166 405.43 372.201 405.43 366.078C405.43 359.954 400.466 354.99 394.342 354.99C388.218 354.99 383.254 359.954 383.254 366.078C383.254 372.201 388.218 377.166 394.342 377.166Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M448.351 371.838C457.16 371.838 464.3 364.697 464.3 355.889C464.3 347.081 457.16 339.94 448.351 339.94C439.543 339.94 432.402 347.081 432.402 355.889C432.402 364.697 439.543 371.838 448.351 371.838Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M601.593 346.316C611.453 346.316 619.446 338.323 619.446 328.463C619.446 318.603 611.453 310.61 601.593 310.61C591.733 310.61 583.74 318.603 583.74 328.463C583.74 338.323 591.733 346.316 601.593 346.316Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M212.823 570.617L190.627 527.379L175.503 570.617H212.823Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M499.377 298.72L533.075 281.188L490.783 241.645L499.377 298.72Z" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M276.631 821.65C277.369 831.812 286.177 840.779 296.324 841.698" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M574.824 895.089C583.706 895.319 592.483 893.135 600.221 888.769C607.959 884.404 614.367 878.02 618.763 870.3" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M810.6 363.772L826.987 339.027" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M834.154 409.094C863.58 401.874 892.307 392.06 920 379.768" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M825.934 456.755L856.458 477.93" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M405.653 239.172C403.71 236.999 405.846 233.072 408.753 232.826C411.66 232.58 414.246 235.065 415.053 237.866C415.86 240.667 415.28 243.666 414.53 246.485C413.78 249.304 412.849 252.136 412.958 255.049C418.257 252.017 424.028 249.897 430.03 248.779" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M422.051 333.589L426.073 313.624" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M433.199 324.866L417.359 323.147" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M281.942 556.016C279.839 555.047 277.439 554.946 275.262 555.736C273.086 556.526 271.309 558.143 270.318 560.236C269.327 562.329 269.202 564.728 269.97 566.913C270.738 569.097 272.337 570.89 274.42 571.902C276.503 572.915 278.901 573.064 281.093 572.318C283.285 571.572 285.094 569.991 286.127 567.919C287.16 565.847 287.334 563.451 286.611 561.251C285.887 559.052 284.325 557.226 282.263 556.172" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M322.513 538.526C305.066 551.096 293.079 569.854 289 590.967C287.878 596.923 287.616 603.719 291.516 608.358C295.416 612.997 304.734 612.564 306.073 606.658C307.232 601.539 301.056 597.004 295.951 598.223C290.846 599.442 287.451 604.456 286.135 609.537C283.679 619.018 286.743 628.925 289.061 638.437C291.379 647.949 292.782 658.678 287.568 666.969L289.714 663.369" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M820.831 580.866C801.508 591.723 793.031 614.666 786.589 635.875C784.289 643.462 782.031 651.2 782.04 659.129C782.049 667.058 784.626 675.335 790.595 680.553C796.564 685.771 806.295 686.965 812.421 681.929C818.547 676.893 818.421 665.547 811.435 661.806C809.306 660.731 806.884 660.38 804.537 660.808C802.191 661.235 800.048 662.417 798.435 664.174C793.435 669.879 795.776 678.596 797.582 685.96C800.999 699.935 801.436 714.473 798.867 728.628C797.267 737.388 794.3 746.307 787.927 752.528C781.554 758.749 771.064 761.414 763.5 756.715" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M751.967 715.021L763.033 706.261" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M760.481 717.312L754.918 704.635" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M842.036 633.354L834.947 621.438" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M832.039 634.966L844.681 624.611" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M381.062 247.821L398.416 267.4L388.436 222.749C399.301 220.815 409.673 216.738 418.945 210.755" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M115.229 535.73C115.749 529.814 117.698 524.113 120.909 519.117" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M123.346 531.6L108.826 523.321" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M186.046 456.252C192.062 461.096 199.55 463.745 207.274 463.761" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M360.9 325.564C363.428 321.756 364.662 317.236 364.422 312.673C364.181 308.109 362.478 303.744 359.564 300.223" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M57.453 268.59C51.2041 267.954 45.209 265.785 40 262.275" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M49.1601 256.627L45.2061 274.861" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M184.285 685.569C177.47 685.689 170.711 684.33 164.473 681.584" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M172.956 670.492L172.256 697.446" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M224.08 80.34L234.261 87.813C234.568 88.0386 234.799 88.3529 234.922 88.7137C235.045 89.0744 235.054 89.4642 234.949 89.8306C234.844 90.1969 234.629 90.5223 234.334 90.7629C234.038 91.0034 233.676 91.1476 233.296 91.176L220.702 92.117C220.334 92.1446 219.983 92.2804 219.692 92.5073C219.402 92.7342 219.185 93.042 219.07 93.392L215.109 105.384C214.99 105.747 214.763 106.066 214.457 106.296C214.152 106.525 213.783 106.656 213.401 106.669C213.019 106.683 212.642 106.578 212.322 106.37C212.001 106.162 211.752 105.86 211.609 105.506L206.822 93.819C206.682 93.478 206.444 93.186 206.139 92.9799C205.833 92.7738 205.473 92.6629 205.105 92.661L192.48 92.6C192.098 92.5988 191.726 92.4807 191.414 92.2616C191.102 92.0424 190.864 91.7328 190.733 91.3744C190.602 91.016 190.585 90.6261 190.682 90.2573C190.78 89.8885 190.989 89.5586 191.28 89.312L200.916 81.148C201.197 80.9095 201.401 80.5932 201.503 80.2389C201.604 79.8846 201.599 79.5081 201.487 79.157L197.643 67.127C197.527 66.7639 197.525 66.374 197.637 66.0098C197.749 65.6456 197.971 65.3245 198.271 65.0898C198.571 64.8552 198.936 64.7182 199.317 64.6973C199.698 64.6764 200.075 64.7726 200.4 64.973L211.142 71.614C211.455 71.8079 211.819 71.9046 212.187 71.8918C212.555 71.879 212.912 71.7573 213.211 71.542L223.465 64.169C223.774 63.9461 224.144 63.8235 224.525 63.8176C224.907 63.8117 225.28 63.9229 225.596 64.136C225.913 64.3492 226.156 64.6542 226.293 65.0098C226.43 65.3655 226.455 65.7547 226.365 66.125L223.365 78.394C223.278 78.7527 223.299 79.1291 223.427 79.4755C223.554 79.822 223.781 80.1228 224.08 80.34V80.34Z" fill="#171717"/>
    <path d="M786.218 332.276L783.527 316.435" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M776.123 327.9L792.539 322.723" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M591.1 245.787C588.268 254.218 584.399 262.265 579.582 269.742C586.359 270.818 592.67 273.865 597.726 278.504C598.7 279.404 600.08 280.418 601.197 279.704C601.606 279.389 601.923 278.97 602.118 278.492L613.5 256.256" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M611.913 255.964C623.932 249.701 636.813 242.549 642.228 230.127C643.863 226.378 644.714 222.334 644.726 218.244C644.738 214.153 643.912 210.104 642.298 206.345C640.685 202.587 638.318 199.199 635.345 196.39C632.371 193.582 628.854 191.412 625.009 190.016C621.165 188.62 617.075 188.026 612.992 188.271C608.909 188.517 604.92 189.596 601.27 191.443C597.621 193.29 594.389 195.866 591.773 199.01C589.157 202.155 587.214 205.802 586.063 209.727C582.493 221.895 586.905 234.878 592.007 246.486" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M591.529 245.321C598.315 247.764 604.752 251.084 610.677 255.196" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M589.822 256.512L603.891 262.303" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M607.76 249.966L626.681 226.247C624.101 227.347 621.295 228.48 618.566 227.825C615.837 227.17 613.644 223.831 615.193 221.49C614.365 222.455 613.236 223.113 611.989 223.358C610.742 223.603 609.448 223.42 608.317 222.839C607.186 222.259 606.284 221.314 605.756 220.158C605.228 219.001 605.105 217.701 605.407 216.466L600.518 237.026" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M577.908 192.96L571.861 186.297" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M604.752 170.394L599.301 144.285" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M643.301 185.977L649.217 178.516" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M656.4 212.907L677.192 207.166" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M645.92 241.816L652.388 247.287" stroke="#171717" stroke-width="3.369" stroke-linecap="round" stroke-linejoin="round"/>
    <path fill-rule="evenodd" clip-rule="evenodd" d="M155.64 225.618C161.682 220.632 163.579 211.839 161.951 204.18C159.9 194.533 152.686 186.829 143.803 182.921C135.156 179.103 128.138 182.809 122.994 190.344C119.311 195.735 119.057 202.641 120.557 208.818C122.388 216.342 126.993 223.406 133.798 227.089C140.603 230.772 149.665 230.559 155.64 225.618ZM136.015 185.323C135.086 185.29 134.305 186.017 134.272 186.947C134.238 187.876 134.965 188.657 135.895 188.69C138.615 188.788 141.289 189.425 143.761 190.566C146.232 191.707 148.452 193.328 150.291 195.336C152.129 197.343 153.55 199.696 154.47 202.258C155.39 204.82 155.791 207.54 155.65 210.258C155.602 211.187 156.316 211.98 157.245 212.028C158.174 212.076 158.966 211.362 159.014 210.433C159.179 207.268 158.712 204.102 157.641 201.12C156.57 198.137 154.916 195.397 152.775 193.06C150.634 190.723 148.05 188.836 145.173 187.507C142.295 186.179 139.182 185.437 136.015 185.323Z" fill="#171717"/>
    <path d="M112.531 202.426C112.631 211.426 116.431 220.046 121.902 226.626C129.813 236.134 142.277 241.752 153.329 237.806C163.516 234.169 170.768 222.573 171.105 210.594C171.442 198.615 165.262 186.901 156.124 180.678C147.672 174.922 135.24 173.005 125.829 177.047C117.593 180.586 112.424 193.178 112.531 202.426Z" stroke="#171717" stroke-width="2.809" stroke-linecap="round" stroke-linejoin="round"/>
    <g opacity="0.1">
    <path d="M61.2999 101.849C47.9309 120.53 52.3199 146.296 59.7489 166.383C67.414 186.831 76.6711 206.646 87.4349 225.646C108.387 263.151 134.624 297.448 165.34 327.484C182.782 344.328 201.212 360.119 220.532 374.772C226.969 379.686 233.432 368.672 226.92 363.844C194.459 339.799 165.948 310.18 141.575 278.011C116.944 245.719 96.2596 210.6 79.9619 173.4C75.2319 162.5 70.7389 151.22 68.1959 139.585C65.5509 127.485 64.6419 116.601 67.2959 104.374C67.4773 103.614 67.383 102.814 67.0298 102.117C66.6766 101.42 66.0875 100.87 65.3673 100.567C64.6472 100.264 63.8427 100.226 63.0971 100.46C62.3515 100.694 61.7133 101.185 61.2959 101.846L61.2999 101.849Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M172.329 260.116C170.262 267.006 171.501 273.2 173.047 280.048C174.55 286.917 176.595 293.657 179.162 300.204C184.397 313.192 191.182 325.501 199.369 336.863C207.457 348.296 216.743 358.834 227.069 368.296C237.334 377.633 249.063 387.196 261.648 393.226C264.476 394.581 268.598 394.726 270.839 392.04C271.706 391.065 272.369 389.927 272.789 388.693C273.912 385.412 272.004 381.9 269.304 380.128C258.373 372.953 247.624 366.323 237.871 357.495C228.052 348.653 219.241 338.751 211.6 327.971C204.15 317.204 197.699 305.779 192.326 293.839C189.658 288.046 186.966 282.012 184.821 276.02C182.6 269.82 180.707 264.227 176.562 258.999C175.319 257.432 172.827 258.464 172.331 260.116H172.329Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M265.585 304.3C267.791 309.079 273.631 311.41 278.01 313.894C283.028 316.74 288.135 319.407 293.329 321.894C303.404 326.846 313.795 331.126 324.435 334.706C331.546 337.026 336.692 325.43 329.617 322.413C319.593 318.138 309.535 313.923 299.761 309.093C295.139 306.809 290.551 304.454 285.997 302.029C281.288 299.529 276.083 295.278 270.564 295.621C265.952 295.907 263.713 300.238 265.585 304.296V304.3Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M126.029 294.824C125.689 302.67 126.231 310.53 127.646 318.255C129.11 325.442 131.066 332.521 133.498 339.441C138.441 353.957 144.83 367.94 152.566 381.18C160.349 394.409 169.399 406.85 179.588 418.329C184.454 423.815 189.598 429.048 195 434.007C200.674 439.216 207.2 446.562 215.032 447.568C219.303 448.117 223.377 442.591 221.812 438.668C219.112 431.913 211.481 427.649 206.203 422.804C200.803 417.847 195.651 412.616 190.754 407.164C181.407 396.728 173.096 385.408 165.938 373.364C158.718 361.337 152.634 348.665 147.763 335.51C145.239 328.623 143.087 321.603 140.996 314.576C138.896 307.532 136.373 300.693 134.131 293.729C132.715 289.329 126.147 290.083 126.031 294.829L126.029 294.824Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M380.573 541.209C373.926 533.699 361.425 532.23 352.303 535.263C347.177 536.997 342.451 539.74 338.402 543.329C334.354 546.919 331.065 551.282 328.73 556.163C318.559 578.236 327.758 603.886 345.72 618.913L347.41 605.798C327.91 614.17 311.884 632.039 308.358 653.298C306.615 663.81 308.325 675.098 312.33 684.921C316.21 694.439 322.438 706.259 332.512 710.203C337.137 712.015 340.812 706.023 338.652 702.216C336.566 698.543 333.303 695.841 330.834 692.449C328.183 688.887 326.08 684.95 324.593 680.767C321.835 672.728 321.253 664.103 322.907 655.767C326.033 639.602 337.725 625.346 353.845 621.067C359.792 619.488 362.123 611.421 357.53 607.109C346.03 596.315 337.457 581.241 342.458 565.136C344.674 558 348.742 552.082 355.803 549.036C362.895 545.978 369.609 546.084 377.015 547.325C380.592 547.925 383.115 544.08 380.573 541.214V541.209Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M453.143 607.594C445.473 603.803 435.726 612.378 431.425 618.11C425.833 625.56 422.452 640.98 430.034 648.22C434.269 652.263 439.928 648.97 440.597 643.844C441.058 640.312 439.404 636.914 439.485 633.32C439.575 629.905 440.437 626.555 442.006 623.52C443.346 620.912 445.246 618.631 447.57 616.842C450.093 615.048 452.455 614.147 454.135 611.373C454.499 610.738 454.598 609.986 454.413 609.278C454.227 608.57 453.771 607.964 453.143 607.589V607.594Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M474.121 651.806C468.537 651.771 464.559 652.679 459.785 655.835C455.387 658.691 451.643 662.446 448.8 666.853C442.909 676.191 441.071 690.078 446.228 700.101C449.128 705.744 456.954 701.601 455.909 696.02C454.262 687.212 453.524 679.72 458.509 671.692C462.425 665.392 469.209 660.905 475.685 657.571C478.485 656.129 477.08 651.824 474.123 651.806H474.121Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M527.886 653.533C516.347 654.499 505.975 664.264 500.842 674.159C497.705 680.038 495.992 686.571 495.842 693.232C495.737 699.494 496.706 707.666 500.311 712.925C504.792 719.462 515.811 715.625 513.54 707.348C512.287 702.771 510.096 698.925 509.776 694.064C509.374 689.164 510.067 684.237 511.805 679.64C515.455 670.724 522.505 666.519 529.967 661.219C532.967 659.09 532.354 653.159 527.886 653.533Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M531.822 648.987C533.576 646.212 533.186 642.893 534.461 639.943C535.835 637.099 538.076 634.765 540.861 633.276C548.62 628.66 541.828 617.62 533.887 621.346C528.187 624.023 524.312 629.663 523.06 635.711C521.918 641.23 522.26 648.054 528.17 650.473C528.857 650.659 529.587 650.615 530.247 650.346C530.906 650.078 531.46 649.6 531.822 648.987V648.987Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M527.608 555.778C535.744 539.963 514.666 519.799 498.9 527.724C495.99 529.187 493.4 532.965 494.765 536.337C496.201 539.884 500.5 540.483 503.792 540.537C513.292 540.696 516.085 546.57 519.04 554.657C520.321 558.157 525.622 559.637 527.608 555.777V555.778Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M682.985 605.438C695.133 599.876 700.811 586.307 701.147 573.438C701.379 566.854 700.051 560.309 697.273 554.335C694.494 548.362 690.344 543.13 685.159 539.065C683.971 537.994 682.484 537.311 680.898 537.107C679.312 536.902 677.701 537.185 676.279 537.919L675.668 538.185C673.768 539.01 672.649 541.5 672.65 543.447C672.65 549.72 678.979 551.878 682.666 556.041C686.42 560.123 689.095 565.077 690.45 570.454C693.242 582.145 686.7 593.396 679.971 602.423C678.505 604.388 681.234 606.239 682.985 605.437V605.438Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M695.337 535.111C698.947 536.673 701.099 537.296 705.075 535.879C708.954 534.494 712.592 532.51 715.859 530C722.306 525.195 727.408 518.811 730.673 511.462C734.01 503.726 735.526 494.9 733.648 486.579C731.881 478.75 724.596 467.445 715.273 469.947C714.346 470.218 713.493 470.695 712.777 471.342C712.06 471.989 711.499 472.789 711.136 473.684C710.772 474.578 710.615 475.543 710.677 476.506C710.738 477.469 711.016 478.406 711.491 479.247C713.079 482.247 715.786 482.876 717.844 485.281C719.721 487.474 720.367 490.581 720.537 493.366C720.724 498.86 719.422 504.303 716.77 509.119C714.323 513.911 710.858 518.109 706.617 521.419C704.289 523.079 701.868 524.603 699.366 525.985C696.787 527.527 696.06 528.91 694.311 531.202C693.928 531.857 693.821 532.637 694.014 533.37C694.206 534.104 694.682 534.731 695.337 535.114V535.111Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M725.379 458.919C736.918 451.07 736.032 432.698 729.91 421.614C726.871 416.097 722.248 411.618 716.637 408.755C710.891 405.941 702.907 403.516 697.724 408.467C695.543 410.549 695.209 415.005 697.724 417.027C701.261 419.872 704.948 419.345 708.936 420.959C712.678 422.495 715.854 425.149 718.031 428.559C723.497 437.198 719.642 446.824 720.583 456.168C720.804 458.368 723.189 460.409 725.383 458.92L725.379 458.919Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M666.206 431.046C673.379 424.824 674.944 415.601 669.465 407.594C663.784 399.294 652.665 394.4 643.187 399.333C636.121 403.011 639.765 413.544 647.087 413.746C651.078 413.855 655.194 413.031 658.315 416.194C660.933 418.847 662.687 425.039 662.05 428.629C661.923 429.153 661.969 429.705 662.181 430.201C662.393 430.697 662.759 431.112 663.225 431.384C663.692 431.655 664.233 431.769 664.77 431.708C665.306 431.647 665.808 431.415 666.202 431.046H666.206Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M583.84 436.074C592.861 420.122 585.948 396.851 575.788 382.931C570.276 375.428 563.333 369.09 555.359 364.284C547.159 359.317 537.17 357.353 527.666 356.784C526.741 356.767 525.828 357.001 525.025 357.462C524.223 357.922 523.56 358.592 523.107 359.399C522.91 359.788 522.67 360.153 522.392 360.489C522.228 360.589 522.089 360.725 521.984 360.886C521.879 361.048 521.812 361.231 521.788 361.421C521.763 361.612 521.782 361.806 521.842 361.988C521.902 362.171 522.003 362.337 522.136 362.476C522.295 362.583 522.421 362.733 522.498 362.909C522.576 363.084 522.602 363.278 522.574 363.468C522.806 364.355 523.27 365.164 523.918 365.812C524.566 366.46 525.375 366.924 526.262 367.156C530.494 368.234 534.076 369.045 537.77 371.375C540.808 373.291 544.162 374.744 547.276 376.567C553.874 380.378 559.665 385.442 564.321 391.473C569.235 397.786 572.901 404.979 575.121 412.665C577.192 420.172 577.832 427.949 579.644 435.521C579.773 435.949 580.023 436.331 580.365 436.621C580.706 436.911 581.123 437.095 581.567 437.153C582.011 437.211 582.462 437.14 582.866 436.947C583.27 436.755 583.609 436.45 583.844 436.069L583.84 436.074Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M484.626 436.568C485.486 433.712 486.701 431.599 484.882 428.698C483.55 426.848 481.841 425.302 479.868 424.16C475.679 421.467 470.055 420.305 465.468 422.418C460.237 424.827 462.287 432.34 466.968 433.87C469.228 434.609 471.132 434.218 472.977 434.69C474.877 435.175 475.935 436.063 477.725 436.85L475.759 434.885C476.051 435.45 476.435 435.979 476.675 436.568C478.148 440.178 483.366 440.768 484.631 436.568H484.626Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M444.153 449.352C442.799 445.457 442.072 442.872 438.333 440.502C434.623 438.315 430.476 436.975 426.188 436.578C418.044 435.578 408.745 440.811 408.388 449.595C408.281 452.224 410.888 453.704 413.194 453.256C417.747 452.37 421.747 449.777 426.27 448.773C428.544 448.268 430.923 448.572 432.997 449.632C435.116 450.593 437.954 451.432 439.884 452.632C441.955 453.92 444.992 451.763 444.153 449.35V449.352Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M607.806 343.721C616.432 341.884 620.07 331.005 617.906 323.202C615.861 315.835 602.919 306.302 597.655 316.113C596.468 318.325 597.379 321.813 600.182 322.326C604.117 323.043 608.535 322.166 609.782 327.143C610.937 331.753 607.852 335.608 604.89 338.707C604.442 339.182 604.16 339.788 604.085 340.437C604.011 341.085 604.148 341.74 604.476 342.304C604.805 342.868 605.307 343.311 605.907 343.566C606.508 343.822 607.175 343.876 607.809 343.721H607.806Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M456.79 366.039C462.218 363.69 463.071 355.353 461.258 350.439C459.038 344.419 453.265 340.906 447.042 340.511C446.02 340.522 445.029 340.863 444.216 341.482C443.403 342.101 442.812 342.965 442.529 343.947C442.345 344.547 442.292 345.179 442.373 345.801C442.454 346.424 442.668 347.021 443.001 347.554C443.41 348.262 444 348.849 444.709 349.256C445.419 349.663 446.223 349.876 447.042 349.872C449.951 349.879 452.742 351.264 453.742 354.164C454.813 357.273 452.921 359.664 452.28 362.571C451.66 365.382 454.358 367.094 456.794 366.041L456.79 366.039Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M399.808 371.535C400.308 371.385 400.363 371.301 399.971 371.284C400.489 371.284 400.996 371.146 401.442 370.884C401.924 370.622 402.37 370.298 402.766 369.92C403.778 368.922 404.441 367.624 404.656 366.22C404.954 364.715 404.898 363.162 404.493 361.683C404.088 360.203 403.344 358.839 402.321 357.696C398.087 352.972 389.745 352.61 386.063 358.131C383.863 361.431 387.546 366.399 391.363 365.031C391.89 364.842 392.401 364.54 392.937 364.393C392.437 364.53 392.782 364.519 393.098 364.444L394.318 363.93C393.913 364.111 393.88 364.144 394.218 364.03C394.974 363.767 393.518 364.108 394.308 363.972C394.393 363.957 395.34 363.96 394.857 363.922C394.398 363.886 395.271 364.022 395.381 364.055C396.081 364.271 394.929 363.749 395.555 364.129C396.083 364.45 395.18 363.529 395.925 364.422C395.625 364.065 395.96 364.486 396.054 364.64C396.218 364.909 396.361 365.19 396.481 365.482C396.255 364.921 396.725 366.529 396.635 366.077C396.8 366.909 396.835 367.763 397.035 368.589C397.103 368.894 397.19 369.195 397.296 369.489C397.635 370.381 397.455 368.412 397.041 369.413C396.361 371.059 398.501 372.184 399.796 371.531L399.808 371.535Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M389.377 430.626C390.448 428.21 391.247 426.743 390.499 423.967C389.68 421.324 388.034 419.015 385.804 417.378C381.17 413.878 373.127 413.978 369.64 418.922C367.446 422.033 371.059 425.213 374.087 424.706C376.897 424.235 378.868 422.633 381.742 424.153C382.774 424.735 383.628 425.587 384.213 426.617C385.073 427.734 385.799 428.948 386.378 430.234C386.737 431.472 388.778 431.98 389.378 430.626H389.377Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M274.094 556.37C272.981 556.929 272.012 557.736 271.261 558.729C270.51 559.722 269.997 560.875 269.762 562.098C269.217 564.365 269.215 567.798 271.162 569.436C272.473 570.543 274.967 570.336 275.349 568.331C275.649 566.771 275.149 565.231 275.344 563.631C275.632 562.097 276.209 560.633 277.044 559.315C277.269 558.902 277.354 558.428 277.288 557.963C277.221 557.498 277.005 557.068 276.673 556.735C276.341 556.403 275.91 556.188 275.445 556.121C274.98 556.054 274.506 556.139 274.094 556.365V556.37Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M245.5 651.591C235.952 647.856 228.91 661.835 229.653 669.57C230.113 674.448 232.436 678.962 236.139 682.17C239.753 685.27 245.283 688.27 249.784 685.504C251.913 684.195 252.618 680.899 250.609 679.104C248.395 677.12 246.115 677.234 243.599 675.886C242.155 675.14 240.905 674.067 239.95 672.751C238.995 671.435 238.361 669.914 238.099 668.31C237.311 661.695 243.239 658.91 246.62 654.349C247.413 653.28 246.502 651.987 245.5 651.595V651.591Z" fill="#171717"/>
    </g>
    <g opacity="0.1">
    <path d="M227.773 380.557C230.939 385.611 234.722 390.251 239.036 394.37C244.054 399.221 249.184 403.961 254.236 408.776C263.436 417.541 272.808 426.103 282.167 434.7C301.355 452.326 320.302 470.212 339.407 487.928C358.512 505.644 377.828 523.162 396.646 541.216C405.818 550.016 414.995 558.816 423.971 567.816C433.362 577.235 442.371 587.262 452.291 596.116C463.224 605.872 473.504 616.196 484.027 626.384C494.55 636.572 504.874 646.83 514.519 657.884C516.255 659.873 519.335 656.856 517.436 654.967C507.944 645.526 499.024 635.675 490.173 625.632C481.759 616.086 472.834 606.987 464.602 597.287C447.761 577.442 428.66 559.487 410.393 540.954C373.777 503.8 336.87 467.171 298.251 432.084C287.426 422.249 276.633 412.374 265.44 402.958C260.079 398.447 254.706 393.95 249.321 389.468C246.545 387.157 243.726 384.936 240.866 382.731C237.812 380.544 234.516 378.717 231.044 377.286C229.034 376.351 226.388 378.367 227.773 380.557Z" fill="#171717"/>
    </g>
    <defs>
    <linearGradient id="paint0_linear_248_1705" x1="222.471" y1="254.91" x2="222.471" y2="393.819" gradientUnits="userSpaceOnUse">
    <stop stop-color="#FF9A34"/>
    <stop offset="1" stop-color="#EB6421"/>
    </linearGradient>
    <linearGradient id="paint1_linear_248_1705" x1="285.28" y1="216.667" x2="285.28" y2="334.117" gradientUnits="userSpaceOnUse">
    <stop stop-color="#FF9A34"/>
    <stop offset="1" stop-color="#EB6421"/>
    </linearGradient>
    <linearGradient id="paint2_linear_248_1705" x1="96.227" y1="94.7432" x2="96.227" y2="196.15" gradientUnits="userSpaceOnUse">
    <stop stop-color="#FF9A34"/>
    <stop offset="1" stop-color="#EB6421"/>
    </linearGradient>
    <linearGradient id="paint3_linear_248_1705" x1="175.512" y1="281.386" x2="175.512" y2="449.617" gradientUnits="userSpaceOnUse">
    <stop stop-color="#FF9A34"/>
    <stop offset="1" stop-color="#EB6421"/>
    </linearGradient>
    </defs>
    </svg>

      </div>
    </div>
  </div>

</div>

</div><div class="c17">

</div>
<div class="d17">
  <h1>Popular Questions <svg style="margin-bottom: -10px;" height="auto" width="60" fill="#421a1a" viewBox="0 0 256 256" id="Flat" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M222.97559,105.584c-4.02832-4.20019-8.19434-8.54394-9.95606-12.80273-1.64648-3.97852-1.73047-9.53027-1.81933-15.4082-.13575-8.999-.29-19.19727-6.833-25.74024S187.626,44.93555,178.627,44.7998c-5.87793-.08886-11.42968-.17285-15.4082-1.81933-4.25879-1.76172-8.60254-5.92774-12.80273-9.95508C143.73926,26.62109,136.835,20,128,20c-8.834,0-15.73828,6.62109-22.416,13.02441-4.20019,4.02832-8.54394,8.19434-12.80273,9.95606C88.80273,44.627,83.251,44.71094,77.37305,44.7998c-8.999.13575-19.19727.29-25.74024,6.833S44.93555,68.374,44.7998,77.37305c-.08886,5.87793-.17285,11.42968-1.81933,15.4082-1.76172,4.25879-5.92774,8.60254-9.95508,12.80273C26.62109,112.26074,20,119.165,20,128c0,8.834,6.62109,15.73828,13.02441,22.416,4.02832,4.20019,8.19434,8.54394,9.95606,12.80273,1.64648,3.97852,1.73047,9.53027,1.81933,15.4082.13575,8.999.29,19.19727,6.833,25.74024s16.74121,6.69726,25.74024,6.833c5.87793.08886,11.42968.17285,15.4082,1.81933,4.25879,1.76172,8.60254,5.92774,12.80273,9.95508C112.26074,229.37891,119.165,236,128,236c8.834,0,15.73828-6.62109,22.416-13.02441,4.20019-4.02832,8.54394-8.19434,12.80273-9.95606,3.97852-1.64648,9.53027-1.73047,15.4082-1.81933,8.999-.13575,19.19727-.29,25.74024-6.833s6.69726-16.74121,6.833-25.74024c.08886-5.87793.17285-11.42968,1.81933-15.4082,1.76172-4.25879,5.92774-8.60254,9.95508-12.80273C229.37891,143.73926,236,136.835,236,128,236,119.166,229.37891,112.26172,222.97559,105.584Zm-5.77442,39.29493c-4.541,4.73437-9.23633,9.63086-11.57422,15.28125-2.22949,5.38964-2.3291,11.97656-2.42578,18.3457-.124,8.20508-.24121,15.95508-4.49023,20.20508-4.25,4.249-12,4.36621-20.20508,4.49023-6.36914.09668-12.95606.19629-18.3457,2.42578-5.65039,2.33789-10.54688,7.03321-15.28125,11.57422C139.08789,222.75488,133.61816,228,128,228c-5.61914,0-11.08789-5.24512-16.87891-10.79883-4.73437-4.541-9.63086-9.23633-15.28125-11.57422-5.38964-2.22949-11.97656-2.3291-18.3457-2.42578-8.20508-.124-15.95508-.24121-20.20508-4.49023-4.249-4.25-4.36621-12-4.49023-20.20508-.09668-6.36914-.19629-12.95606-2.42578-18.3457-2.33789-5.65039-7.03321-10.54688-11.57422-15.28125C33.24512,139.08789,28,133.61816,28,128c0-5.61914,5.24512-11.08789,10.79883-16.87891,4.541-4.73437,9.23633-9.63086,11.57422-15.28125,2.22949-5.38964,2.3291-11.97656,2.42578-18.3457.124-8.20508.24121-15.95508,4.49023-20.20508,4.25-4.249,12-4.36621,20.20508-4.49023,6.36914-.09668,12.95606-.19629,18.3457-2.42578,5.65039-2.33789,10.54688-7.03321,15.28125-11.57422C116.91211,33.24512,122.38184,28,128,28c5.61914,0,11.08789,5.24512,16.87891,10.79883,4.73437,4.541,9.63086,9.23633,15.28125,11.57422,5.38964,2.22949,11.97656,2.3291,18.3457,2.42578,8.20508.124,15.95508.24121,20.20508,4.49023,4.249,4.25,4.36621,12,4.49023,20.20508.09668,6.36914.19629,12.95606,2.42578,18.3457,2.33789,5.65039,7.03321,10.54688,11.57422,15.28125C222.75488,116.91211,228,122.38184,228,128,228,133.61914,222.75488,139.08789,217.20117,144.87891ZM135.99951,180a8,8,0,1,1-8-8A8.00009,8.00009,0,0,1,135.99951,180ZM159.999,108.00488a32.04847,32.04847,0,0,1-28,31.751v4.249a4,4,0,0,1-8,0v-8a4.0002,4.0002,0,0,1,4-4,24,24,0,1,0-24-24,4,4,0,0,1-8,0,32,32,0,1,1,64,0Z"></path> </g></svg></h1>

<div class="accordion-content">


  <div class="accordion-item">
    <header class="item-header">
      <h4 class="item-question">
     What is BranchOut tool used for?
      </h4>
      <div class="item-icon">
        <i class='bx bx-chevron-down'></i>
      </div>
    </header>
    <div class="item-content">
      <p class="item-answer">
      This tool helps you create a customizable bio link where you can easily share all your important links in one place.
      </p>

    </div>
  </div>
  <div class="accordion-item">
    <header class="item-header">
      <h4 class="item-question">
       Can I update my links anytime?
      </h4>
      <div class="item-icon">
        <i class='bx bx-chevron-down'></i>
      </div>
    </header>
    <div class="item-content">

      <p class="item-answer">
Yes! You can update and edit your bio links at any time, keeping your content fresh and relevant.
      </p>
    </div>
  </div>
  <div class="accordion-item">
    <header class="item-header">
      <h4 class="item-question">
Is it easy to use?
      </h4>
      <div class="item-icon">
        <i class='bx bx-chevron-down'></i>
      </div>
    </header>
    <div class="item-content">
      <p class="item-answer">
 Absolutely! Our tool is designed to be user-friendly, with simple templates and customization options for anyone to use.
      </p>
    </div>
  </div>
  <div class="accordion-item">
    <header class="item-header">
      <h4 class="item-question">
   Do I need any technical skills to set it up?
      </h4>
      <div class="item-icon">
        <i class='bx bx-chevron-down'></i>
      </div>
    </header>
    <div class="item-content">
      <p class="item-answer">
      No, you don’t need any technical skills. Setting up and managing your bio links is quick and easy, with no coding required.
      </p>

    </div>
  </div>
</div>
</div>
<div class="c14">
<div class="footer-div">
  <svg class="svg-background" class="w-10 h-10" viewBox="0 0 436 92" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M3 11.6683C27.5507 31.3629 46.9422 39.6998 78.4385 38.3C106.882 37.0359 137.821 23.5277 164.275 13.6843C197.028 1.49724 261.319 -8.02763 280.351 30.7667C295.128 60.8895 272.979 96.9103 238.122 87.1069C224.684 83.3275 217.74 65.3879 223.692 52.9421C230.121 39.4995 249.34 33.0192 262.632 29.9179C298.328 21.5889 322.109 55.0269 354.41 60.8997C384.588 66.3865 406.997 52.8685 429.849 34.5864C431.806 33.0205 430.804 43.4396 430.804 46.0455C430.804 55.5985 432.714 51.3586 432.714 44.1356C432.714 39.4902 435.161 29.6135 428.894 32.2521C424.373 34.1558 414.869 34.5865 409.795 34.5865" stroke="currentColor" stroke-width="5" stroke-linecap="round"/>
  </svg>
  <div class="footer">
    <h1>Branch Out <svg class="logo" fill="#000000" style="margin-bottom: -20px;" height="auto" width="180" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>branch</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M44,9a7,7,0,1,0-9,6.7V16a6,6,0,0,1-6,6H21a10.3,10.3,0,0,0-6,2V15.7a7,7,0,1,0-4,0V32.3a7,7,0,1,0,4,0V32a6,6,0,0,1,6-6h8A10,10,0,0,0,39,16v-.3A7,7,0,0,0,44,9ZM10,9a3,3,0,0,1,6,0,3,3,0,0,1-6,0Zm6,30a3,3,0,1,1-3-3A2.9,2.9,0,0,1,16,39ZM37,12a2.9,2.9,0,0,1-3-3,3,3,0,0,1,6,0A2.9,2.9,0,0,1,37,12Z"></path> </g> </g> </g></svg></h1>
    <svg height="auto" width="100" class="w-10 h-10" viewBox="0 0 76 77" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M38.6984 49.1231C38.6984 59.6898 38.3751 76.9196 37.9764 76.9196C37.5776 76.9196 37.2544 59.6898 37.2544 49.1231C37.2544 38.5564 37.5776 38.6543 37.9764 38.6543C38.3751 38.6543 38.6984 38.5564 38.6984 49.1231Z" fill="currentColor"/>
      <path d="M38.6984 49.1231C38.6984 59.6898 38.3751 76.9196 37.9764 76.9196C37.5776 76.9196 37.2544 59.6898 37.2544 49.1231C37.2544 38.5564 37.5776 38.6543 37.9764 38.6543C38.3751 38.6543 38.6984 38.5564 38.6984 49.1231Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M38.6984 28.1855C38.6984 17.6188 38.3751 0.389023 37.9764 0.389023C37.5776 0.389023 37.2544 17.6188 37.2544 28.1855C37.2544 38.7522 37.5776 38.6543 37.9764 38.6543C38.3751 38.6543 38.6984 38.7522 38.6984 28.1855Z" fill="currentColor"/>
      <path d="M38.6984 28.1855C38.6984 17.6188 38.3751 0.389023 37.9764 0.389023C37.5776 0.389023 37.2544 17.6188 37.2544 28.1855C37.2544 38.7522 37.5776 38.6543 37.9764 38.6543C38.3751 38.6543 38.6984 38.7522 38.6984 28.1855Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M48.1563 37.9325C58.723 37.9325 75.9528 38.2557 75.9528 38.6545C75.9528 39.0532 58.723 39.3765 48.1563 39.3765C37.5896 39.3765 37.6875 39.0532 37.6875 38.6545C37.6875 38.2557 37.5896 37.9325 48.1563 37.9325Z" fill="currentColor"/>
      <path d="M48.1563 37.9325C58.723 37.9325 75.9528 38.2557 75.9528 38.6545C75.9528 39.0532 58.723 39.3765 48.1563 39.3765C37.5896 39.3765 37.6875 39.0532 37.6875 38.6545C37.6875 38.2557 37.5896 37.9325 48.1563 37.9325Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M27.7963 37.9325C17.2297 37.9325 -0.000136852 38.2557 -0.000136852 38.6545C-0.000136852 39.0532 17.2297 39.3765 27.7963 39.3765C38.363 39.3765 38.2651 39.0532 38.2651 38.6545C38.2651 38.2557 38.363 37.9325 27.7963 37.9325Z" fill="currentColor"/>
      <path d="M27.7963 37.9325C17.2297 37.9325 -0.000136852 38.2557 -0.000136852 38.6545C-0.000136852 39.0532 17.2297 39.3765 27.7963 39.3765C38.363 39.3765 38.2651 39.0532 38.2651 38.6545C38.2651 38.2557 38.363 37.9325 27.7963 37.9325Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M30.9281 30.5852C23.4563 23.1134 11.0444 11.1587 10.7625 11.4406C10.4805 11.7226 22.4353 24.1345 29.907 31.6062C37.3788 39.078 37.5381 38.7802 37.8201 38.4983C38.102 38.2163 38.3998 38.0569 30.9281 30.5852Z" fill="currentColor"/>
      <path d="M30.9281 30.5852C23.4563 23.1134 11.0444 11.1587 10.7625 11.4406C10.4805 11.7226 22.4353 24.1345 29.907 31.6062C37.3788 39.078 37.5381 38.7802 37.8201 38.4983C38.102 38.2163 38.3998 38.0569 30.9281 30.5852Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M46.1111 31.6063C53.5829 24.1345 65.5376 11.7226 65.2557 11.4407C64.9737 11.1587 52.5618 23.1135 45.0901 30.5852C37.6183 38.057 37.9161 38.2164 38.198 38.4983C38.48 38.7803 38.6393 39.078 46.1111 31.6063Z" fill="currentColor"/>
      <path d="M46.1111 31.6063C53.5829 24.1345 65.5376 11.7226 65.2557 11.4407C64.9737 11.1587 52.5618 23.1135 45.0901 30.5852C37.6183 38.057 37.9161 38.2164 38.198 38.4983C38.48 38.7803 38.6393 39.078 46.1111 31.6063Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M45.678 45.0466C53.1498 52.5183 65.1045 64.9302 64.8225 65.2122C64.5406 65.4941 52.1287 53.5394 44.657 46.0676C37.1852 38.5958 37.483 38.4365 37.7649 38.1545C38.0469 37.8726 38.2062 37.5748 45.678 45.0466Z" fill="currentColor"/>
      <path d="M45.678 45.0466C53.1498 52.5183 65.1045 64.9302 64.8225 65.2122C64.5406 65.4941 52.1287 53.5394 44.657 46.0676C37.1852 38.5958 37.483 38.4365 37.7649 38.1545C38.0469 37.8726 38.2062 37.5748 45.678 45.0466Z" fill="currentColor" fill-opacity="0.2"/>
      <path d="M30.3406 45.0466C22.8688 52.5183 10.9141 64.9302 11.196 65.2122C11.478 65.4941 23.8898 53.5394 31.3616 46.0676C38.8334 38.5958 38.5356 38.4365 38.2536 38.1545C37.9717 37.8726 37.8123 37.5748 30.3406 45.0466Z" fill="currentColor"/>
      <path d="M30.3406 45.0466C22.8688 52.5183 10.9141 64.9302 11.196 65.2122C11.478 65.4941 23.8898 53.5394 31.3616 46.0676C38.8334 38.5958 38.5356 38.4365 38.2536 38.1545C37.9717 37.8726 37.8123 37.5748 30.3406 45.0466Z" fill="currentColor" fill-opacity="0.2"/>
    </svg>
  </div>

</div>

</div>
<script>
  const accordionBtns = document.querySelectorAll(".item-header");

accordionBtns.forEach((accordion) => {
  accordion.onclick = function () {
    this.classList.toggle("active");

    let content = this.nextElementSibling;
    console.log(content);

    if (content.style.maxHeight) {
      //this is if the accordion is open
      content.style.maxHeight = null;
    } else {
      //if the accordion is currently closed
      content.style.maxHeight = content.scrollHeight + "px";
      console.log(content.style.maxHeight);
    }
  };
});

</script>
</body>
</html>
