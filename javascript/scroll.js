window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 250 || document.documentElement.scrollTop > 250) {
        document.getElementById("contentmain").className = "rollIn"

    }else {
        document.getElementById("contentmain").className = "rollOut"
    }
}