var Interval;
var slides;
function setUp()
{
    slides = document.querySelectorAll(".slide")
    for(var i=1;i<slides.length;i++)
        slides[i].style.display="none";
    Interval=setInterval(nextSlide,5000)
}
var currentSlide=0;

function nextSlide()
{
    prevSlide=currentSlide;
    currentSlide++;
    if(currentSlide==slides.length)
    {
        currentSlide=0;
    }   
    slides[prevSlide].style.display="none";
    slides[currentSlide].style.display="";   
}
function previousSlide()
{
    prevSlide=currentSlide;
    currentSlide--;
    if(currentSlide==-1)
    {
        currentSlide=slides.length-1;
    }
    slides[prevSlide].style.display="none";
    slides[currentSlide].style.display="";
}
function setUpOnArrowPress()
{
    // Pressing key arrows
    document.addEventListener("keydown",function(event){
        console.log(event.key+ " "+ event.keyCode)
        if(event.keyCode == '37')
        {
            clearInterval(Interval);
            previousSlide();
            Interval = setInterval(nextSlide,5000);
        }
        else if(event.keyCode == '39')
        {
            clearInterval(Interval);
            nextSlide();
            Interval = setInterval(nextSlide,5000);
        }
    });
    //Clicking the arrow buttons
    var left = document.getElementById("prevSlide");
    left.addEventListener("click",function(){
        clearInterval(Interval);
        previousSlide();
        Interval = setInterval(nextSlide,5000);
    });
    var right = document.getElementById("nextSlide");
    right.addEventListener("click",function(){
        clearInterval(Interval);
        nextSlide();
        Interval = setInterval(nextSlide,5000);
    });
}
function setUpStopOnHover()
{
    var bttns = document.querySelectorAll(".slide-bttn");
    for(var i=0;i<bttns.length;i++)
    {
        bttns[i].addEventListener("mouseover",function(){
            clearInterval(Interval);
        })
        bttns[i].addEventListener("mouseleave",function(){
            Interval =  setInterval(nextSlide,5000);
        })
    }
}

window.onload = function()
{
    setUp();
    setUpOnArrowPress();
    setUpStopOnHover();
}