// reviews voor about pagina.

let arrowButtons = document.getElementsByClassName("arrow");
let reviews = document.getElementsByClassName("review");

let mode = "EenTweeDrie";

reviews[8].style.display = "none";
reviews[7].style.display = "none";
reviews[6].style.display = "none";
reviews[9].style.display = "none";
reviews[10].style.display = "none";
reviews[11].style.display = "none";

for(let i = 0; 1 < arrowButtons.length; i++){
    arrowButtons[i].onclick = function(){
        if (mode == "EenTweeDrie"){
            reviews[0].style.display = "block";
            reviews[1].style.display = "block";
            reviews[2].style.display = "block";
            reviews[3].style.display = "none";
            reviews[4].style.display = "none";
            reviews[5].style.display = "none"; 
            reviews[6].style.display = "none";
            reviews[7].style.display = "none";
            reviews[8].style.display = "none";
            reviews[9].style.display = "none";
            reviews[10].style.display = "none";
            reviews[11].style.display = "none";
            mode = "VierVijfZes"; 
        }
        else if (mode == "VierVijfZes"){
            reviews[0].style.display = "none";
            reviews[1].style.display = "none";
            reviews[2].style.display = "none";
            reviews[3].style.display = "block";
            reviews[4].style.display = "block";
            reviews[5].style.display = "block";
            reviews[6].style.display = "none";
            reviews[7].style.display = "none";
            reviews[8].style.display = "none";
            reviews[9].style.display = "none";
            reviews[10].style.display = "none";
            reviews[11].style.display = "none";
            mode = "ZevenAchtNegen";  
        }
        else if (mode == "ZevenAchtNegen"){
          reviews[0].style.display = "none";
          reviews[1].style.display = "none";
          reviews[2].style.display = "none";
          reviews[3].style.display = "none";
          reviews[4].style.display = "none";
          reviews[5].style.display = "none";
          reviews[6].style.display = "block";
          reviews[7].style.display = "block";
          reviews[8].style.display = "block";
          reviews[9].style.display = "none";
          reviews[10].style.display = "none";
          reviews[11].style.display = "none";
          mode = "TienElfTwaalf"; 
        }
        else if (mode == "TienElfTwaalf"){
            reviews[0].style.display = "none";
            reviews[1].style.display = "none";
            reviews[2].style.display = "none";
            reviews[3].style.display = "none";
            reviews[4].style.display = "none";
            reviews[5].style.display = "none";
            reviews[6].style.display = "none";
            reviews[7].style.display = "none";
            reviews[8].style.display = "none";
            reviews[9].style.display = "block";
            reviews[10].style.display = "block";
            reviews[11].style.display = "block";
            mode = "EenTweeDrie"; 
        }

    }
}