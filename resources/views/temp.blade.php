<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon1.svg') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon1.svg') }}">

   <link rel="stylesheet" href="style.css">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">

<title>Select Template</title>
    <style>
      /* Base styles */
body {
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  background-color: #fceeea;
  font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
  flex-direction: column;
  min-height: 100vh;
}

.d1 {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  width: 100%;
  padding: 20px;
  box-sizing: border-box;
}

.d1 h1 {
  font-size: 4rem;
margin-bottom: 50px;
  color: #421a1a;
}

.d2 {
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  flex-direction: row;
  flex-wrap: wrap;
  gap: 20px;
  margin-top: 100px;
  padding: 0 20px;
}

.add-button {
  position: fixed;
  top: 20px;
  right: 20px;
  border: 2px solid #421a1a;
  border-radius: 7px;
  z-index: 10;
}

.add-button button {
  padding: 10px 20px;
  font-size: 16px;
  background-color: #f05a28;
  color: #421a1a;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
}

.add-button button:hover {
  opacity: 0.8;
}

.article-wrapper {
  width: 280px;
  transition: 0.15s all ease-in-out;
  border-radius: 10px;
  padding: 5px;
  box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
  border: 4px solid transparent;
  cursor: pointer;
  background-color: #fff;
  margin-bottom: 20px;
}
@font-face {
  font-family: 'Link Sans';
  src: url('./fonts/LinikSans-Black.woff') format('woff');
  font-weight: bold;
  font-style: normal;
}

.article-wrapper:hover {
  box-shadow: 10px 10px 0 #4e84ff, 20px 20px 0 #4444bd;
  border-color: #0578c5;
  transform: translate(-20px, -20px);
}

.article-wrapper:active {
  box-shadow: none;
  transform: translate(0, 0);
}

.container-project {
  width: 100%;
  height: 170px;
  background: gray;
  overflow: hidden;
  border-radius: 10px;
}

.container-project img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 10px;
}

.project-info {
  padding: 10px;
  display: flex;
  flex-direction: column;
  gap: 20px;
  align-items: flex-start; /* Add this line to align items to the left */
}

.project-title {
  font-size: 2em;
  margin: 0;
  font-weight: 600;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #421a1a;
}

.flex-pr {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.project-type {
  background: #b2b2fd;
  color: #1a41cd;
  font-weight: bold;
  padding: 0.3em 0.7em;
  border-radius: 15px;
  font-size: 12px;
  letter-spacing: -0.6px;
}

.project-hover {
  border-radius: 50%;
  width: 50px;
  height: 50px;
  padding: 9px;
  transition: all 0.3s ease;
}

.article-wrapper:hover .project-hover {
  transform: rotate(-45deg);
  background-color: #a6c2f0;
}

.logo-container {
  text-align: center;
  padding: 30px 0;
  width: 100%;
  margin-top: auto;
}

.logo-text {
  display: inline-flex;
  align-items: center;
  font-size: 2rem;
  font-weight: bold;
  font-family: "Lobster", sans-serif;
  font-weight: 400;
  font-style: normal;
  color: #421a1a;
}

.logo-text svg {
  margin-left: 8px;
  margin-bottom: -8px;

}
.logo-text svg path{
  fill: #421a1a;
}

.dialog1 {
  border: 0px;
    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
    border-radius: 30px;
    padding: 25px;
   /* From https://css.glass */
background: rgba(255, 255, 255, 0.31);
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(15px);
-webkit-backdrop-filter: blur(15px);
border: 1px solid rgba(255, 255, 255, 0.3);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
}
input[type="text"]{
    border-radius: 20px;
    padding: 20px;
    width: 300px;
    font-size: 1.1rem;
    border: 0px;
    font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;

}
.add, #closeEditDialogBtn {
  border: 0;
  background: #f05a28;
  color: #421a1a;
  padding: 1em;
  border-radius: 14px;
  font-weight: bold;
  width: 100px;
  font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
  margin: 5px;
}

.cancel {
  border: 2px solid #111;
  background: transparent;
  padding: 0.8em;
  border-radius: 14px;
  font-weight: bold;
  width: 100px;
  font-family: 'Link Sans', 'Arial Black', 'Arial', sans-serif;
  margin: 5px;
}

.add:hover, .cancel:hover, #closeEditDialogBtn:hover {
  opacity: 0.8;
}

h2 {
  font-size: 2rem;
  color: #421a1a;
}

.svg path {
  stroke: #f05a28;
}

/* Responsive adjustments */
@media screen and (max-width: 768px) {
  .d1 h1 {
      font-size: 3rem;
      margin-top: 40px;
  }

  .d2 {
      flex-direction: column;
      align-items: center;
      margin-top: 80px;
  }

  .article-wrapper {
      width: 90%;
      max-width: 280px;
  }

  .article-wrapper:hover {
      transform: translate(-10px, -10px);
  }

  .add-button {
      top: 10px;
      right: 10px;
  }

  .add-button button {
      padding: 8px 16px;
      font-size: 14px;
  }

  .logo-text {
      font-size: 1.5rem;
  }

  .dialog1 {
      width: 90%;
      max-width: 400px;
  }
}

@media screen and (max-width: 480px) {
  .d1 h1 {
      font-size: 2rem;
      margin-top: 30px;
  }

  .d2 {
      margin-top: 60px;
  }

  .article-wrapper {
      width: 95%;
  }

  .project-title {
      font-size: 1.5em;
  }

  .add-button button {
      padding: 6px 12px;
      font-size: 12px;
  }



  .add, #closeEditDialogBtn, .cancel {
      padding: 0.8em;
      width: 90px;
      font-size: 0.9rem;
  }

  .logo-text {
      font-size: 1.2rem;
  }
}

.svg3{
  margin-bottom: -20px;
}
.svg3 path{
  stroke: #f05a28;
}
.content{

    margin: 70px;
    display: flex;
    align-items: center;
    flex-direction: column;

}
    </style>
</head>
<body>


  <div class="content">


    <div class="d1">
        <h1>Select any of these templates
          <svg class="svg3"  height="auto" width="100" class="w-10 h-10" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.7725 38.1035C57.9016 38.0973 74.1008 37.833 74.1008 37.5079C74.1008 37.1878 58.3991 36.9267 38.7043 36.9128C48.417 27.1776 55.9586 19.3752 55.7994 19.2161C55.6377 19.0544 47.5927 26.8355 37.6459 36.7671C37.6396 16.6467 37.3754 0.45752 37.0504 0.45752C36.7253 0.45752 36.461 16.657 36.4548 36.7863C26.4992 26.8456 18.4439 19.0543 18.2822 19.2161C18.123 19.3753 25.6646 27.1777 35.3773 36.9128C15.6914 36.9269 0 37.188 0 37.5079C0 37.8329 16.1889 38.0971 36.309 38.1035C26.1513 48.2685 18.118 56.569 18.2822 56.7333C18.444 56.895 26.4995 49.1036 36.4553 39.1627C36.4692 58.8571 36.7303 74.5583 37.0504 74.5583C37.3703 74.5583 37.6314 58.8673 37.6455 39.1819C47.5924 49.1136 55.6377 56.895 55.7994 56.7333C55.9636 56.5691 47.9302 48.2685 37.7725 38.1035Z" fill="currentColor"/>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M37.7725 38.1035C57.9016 38.0973 74.1008 37.833 74.1008 37.5079C74.1008 37.1878 58.3991 36.9267 38.7043 36.9128C48.417 27.1776 55.9586 19.3752 55.7994 19.2161C55.6377 19.0544 47.5927 26.8355 37.6459 36.7671C37.6396 16.6467 37.3754 0.45752 37.0504 0.45752C36.7253 0.45752 36.461 16.657 36.4548 36.7863C26.4992 26.8456 18.4439 19.0543 18.2822 19.2161C18.123 19.3753 25.6646 27.1777 35.3773 36.9128C15.6914 36.9269 0 37.188 0 37.5079C0 37.8329 16.1889 38.0971 36.309 38.1035C26.1513 48.2685 18.118 56.569 18.2822 56.7333C18.444 56.895 26.4995 49.1036 36.4553 39.1627C36.4692 58.8571 36.7303 74.5583 37.0504 74.5583C37.3703 74.5583 37.6314 58.8673 37.6455 39.1819C47.5924 49.1136 55.6377 56.895 55.7994 56.7333C55.9636 56.5691 47.9302 48.2685 37.7725 38.1035Z" fill="currentColor" fill-opacity="0.2"/>
          </svg></h1>
    </div>
    <svg class="svg" height="auto" width="400" class="w-10 h-10" viewBox="0 0 309 174" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M3 171.381C39.069 135.312 87.8396 103.98 139 95.2925C152.912 92.9301 220.6 81.1457 220.6 107.381C220.6 119.947 206.517 117.714 199.089 113.781C184.466 106.04 173.569 98.5994 163.356 84.9814C147.59 63.9613 130.259 30.0361 153.4 8.18139C163.387 -1.25068 182.496 4.11436 191.8 11.0258C200.922 17.802 206.992 26.4982 213.844 35.3814C219.414 42.6013 217.919 41.8686 222.2 33.7814C232.946 13.4831 267.144 -0.776123 273.044 30.9369C276.355 48.7301 270.497 64.1783 265.044 80.5369C262.996 86.6817 259.821 97.3634 255.444 102.226C250.68 107.52 248.099 99.0778 249.755 94.5814C253.874 83.4025 259.436 78.5814 271.444 78.5814C282.305 78.5814 296.714 87.0265 297.4 99.3814C297.781 106.236 299.515 104.559 301.844 99.3814C303.652 95.3646 306.289 82.5322 306.289 86.937C306.289 88.4888 306.203 101.335 304.689 102.226C299.299 105.396 291.979 105.455 286.2 107.381" stroke="currentColor" stroke-width="5" stroke-linecap="round"/>
      </svg>
    <div class="d2">

        <article class="article-wrapper">
          <div class="rounded-lg container-project">
            <img src="./dark-purple-3840x2160-17330.png">
            </div>
            <div class="project-info">
              <div class="flex-pr">
                <div class="project-title text-nowrap">LuxeDark</div>
                <a href="{{ route('links.index', ['template' => 'template1']) }}">
                <div class="project-hover">
                    <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                    </div>
                  </a>
                  </div>
                  <div class="types">
                    <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Luxury</span>
                     <span class="project-type">• Dark</span>
                </div>
            </div>
        </article>
        <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="./solar-system-3840x2400-10297.jpg">
              </div>
              <div class="project-info">
                <div class="flex-pr">
                  <div class="project-title text-nowrap">Treats</div>
                  <a  href="{{ route('links.index', ['template' => 'template2']) }}">
                  <div class="project-hover">
                      <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                  </a>
                    </div>
                    <div class="types">
                      <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Foodies</span>
                       <span class="project-type">• Light</span>
                  </div>
              </div>
          </article>
          <article class="article-wrapper">
            <div class="rounded-lg container-project">
                <img src="./4024286.jpg">
              </div>
              <div class="project-info">
                <div class="flex-pr">
                  <div class="project-title text-nowrap">SableLine</div>
                  <a href="{{route('links.index', ['template'=>'template3'])}}">
                  <div class="project-hover">
                      <svg style="color: black;" xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" color="black" stroke-linejoin="round" stroke-linecap="round" viewBox="0 0 24 24" stroke-width="2" fill="none" stroke="currentColor"><line y2="12" x2="19" y1="12" x1="5"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                      </div>
                  </a>
                    </div>
                    <div class="types">
                      <span style="background-color: rgba(165, 96, 247, 0.43); color: rgb(85, 27, 177);" class="project-type">• Topography</span>
                       <span class="project-type">• Violet</span>
                  </div>
              </div>
          </article>

    </div>
</div>
    <div class="logo-container">

        <span class="logo-text">Branch Out <svg class="logo" fill="#000000" style="margin-bottom: -8px;" height="auto" width="40" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>branch</title> <g id="Layer_2" data-name="Layer 2"> <g id="invisible_box" data-name="invisible box"> <rect width="48" height="48" fill="none"></rect> </g> <g id="icons_Q2" data-name="icons Q2"> <path d="M44,9a7,7,0,1,0-9,6.7V16a6,6,0,0,1-6,6H21a10.3,10.3,0,0,0-6,2V15.7a7,7,0,1,0-4,0V32.3a7,7,0,1,0,4,0V32a6,6,0,0,1,6-6h8A10,10,0,0,0,39,16v-.3A7,7,0,0,0,44,9ZM10,9a3,3,0,0,1,6,0,3,3,0,0,1-6,0Zm6,30a3,3,0,1,1-3-3A2.9,2.9,0,0,1,16,39ZM37,12a2.9,2.9,0,0,1-3-3,3,3,0,0,1,6,0A2.9,2.9,0,0,1,37,12Z"></path> </g> </g> </g></svg></span>

        </div>
        <script>
            const dialogTriggerBtn = document.getElementById('openDialogBtn'); // Corrected ID
            const dialogCloseBtn = document.getElementById('closeDialogBtn'); // Corrected ID
            const dialogBox = document.getElementById('myDialog');

            // Open the dialog when the button is clicked
            dialogTriggerBtn.addEventListener('click', () => {
                dialogBox.showModal();
            });

            // Close the dialog when the close button is clicked
            dialogCloseBtn.addEventListener('click', () => {
                dialogBox.close();
            });
        </script>
</body>
</html>
