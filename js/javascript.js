//alert("JavaScript is connected!");
//https://www.youtube.com/watch?v=T33NN_pPeNI       //watched this video to get this effect

//function displayMenu(){
  //  document.querySelector("#navMenu").style.display = "block";
//}
function displayMenu() {
    const x = document.querySelector("#navMenu");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
}

function showTitle(){
    document.getElementById("title").scrollIntoView();
}
function showAbout(){
    //alert("show previews");
    document.getElementById("about").scrollIntoView();
}

function showUXUI(){
    document.getElementById("uxui").scrollIntoView();
}

function showWDV(){
    document.getElementById("course").scrollIntoView();
}

function showContact(){
    document.getElementById("contact").scrollIntoView();
}

function bttButton(){
    document.body.scrollTop=0;  //safari
    document.documentElement.scrollTop=0;   //Chrome, Firefox, IE, Opera
}

//on scroll fade in 
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        //console.log(entry);           //show for demo!!!!!!
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');  //goes back to hidden when off screen so we can get the effect every time
        }
    });
});
const hiddenElements = document.querySelectorAll(".hidden");
hiddenElements.forEach((el) => observer.observe(el));

const date = new Date();
const year = date.getFullYear();
document.getElementById("year").innerHTML = year;

function readMore(){
    document.querySelector("#hideMobile").style.display = "block";
    document.querySelector("#readMore").style.display = "none";
    document.querySelector("#readLess").style.display = "block";
}

function readLess() {
    document.querySelector("#hideMobile").style.display = "none";
    document.querySelector("#readMore").style.display = "block";
    document.querySelector("#readLess").style.display = "none";
}




