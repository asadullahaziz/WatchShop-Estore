"use restric";

// Responsive Navbar
function navbar()
{
    let element = document.getElementById("hamburger");
    if(!element.classList.contains("toggle"))
    {
        element.classList.add("toggle");
        document.getElementById("nav-bar").style.top = "5.2rem";
    }
    else
    {
        element.classList.remove("toggle");
        document.getElementById("nav-bar").style.top = "-12rem";
    }
}

// delete row
function delete_row(id, img)
{
    if(confirm("Are you sure you want to delete"))
    {
        window.location.href = `./backend/delete.php?id=${id}&img=${img}`;
    }
}