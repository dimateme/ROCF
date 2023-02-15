const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");
MenuOuvert = false;

hamburger.addEventListener('click', ()=>
{
   // Animation des liens
    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    // Animation du menu hamburger
    hamburger.classList.toggle("toggle");

    if (MenuOuvert == false)
    {
        document.querySelector(".titreMobileDiv").style.display = "none";
        MenuOuvert = true;
    }
    else
    {
        setTimeout(function()
        {
            document.querySelector(".titreMobileDiv").style.display = "block";
            MenuOuvert = false;
        }, 300);
    }

});