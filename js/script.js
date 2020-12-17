
// When the user scrolls the page, execute myFunction 
window.onscroll = function () { myFunction() };

// Get the header
var header = document.querySelector(".navbar");


// Get the offset position of the navbar
var sticky = header.offsetTop;

// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
    if (window.pageYOffset > sticky) {
        header.classList.add("sticky");
    }
    else {
        header.classList.remove("sticky");
    }

}

// add event to login 
if (document.querySelector('#login')) {
    document.querySelector('#login').addEventListener("click", () => {
        document.querySelector(".userform-holder").classList.toggle('hidden');
    });
}

// search function
const searchfield = document.querySelector('#searchfield');
const searchresult = document.querySelector('.searchResult ul');

searchfield.addEventListener('keyup', (e) => {
    if (searchfield.value == "") {
        searchresult.innerHTML = "";
    } else {

        let search = e.target.value;
        let xhttp;
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                searchresult.innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "includes/search.php?q=" + search, true);
        xhttp.send();
    }
})


