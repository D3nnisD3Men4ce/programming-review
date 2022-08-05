

document.addEventListener("keydown", function(event){
    playAudio(event.key);
});

for (var i = 0; i < document.querySelectorAll(".drum").length; i++){
    document.querySelectorAll("button")[i].addEventListener("click", function () {
        var buttonInnerHTML = this.innerHTML;
        playAudio(buttonInnerHTML);
        buttonAnimation(buttonInnerHTML);
        });
};

document.addEventListener("keypress", function(event){
    playAudio(event.key);
    buttonAnimation(event.key);
    console.log(event);
});


function buttonAnimation(currentKey){
    var arr = ['','q','w','f','p','g','j','l'];
    console.log(arr[currentKey]);
    var activeButton = document.querySelector("." + arr[currentKey]);
    activeButton.classList.add("pressed");

    setTimeout(function() {
        activeButton.classList.remove("pressed");

    }, 100);
    
};

function playAudio(key) {
    switch (key) {
        case "1":
            new Audio("sounds/tom-1.mp3").play();
            break;

        case "2":
            new Audio("sounds/tom-2.mp3").play();
            break;

        case "3":
            new Audio("sounds/tom-3.mp3").play();
            break;

        case "4":
            new Audio("sounds/tom-4.mp3").play();
            break;    
            
        case "5":
            new Audio("sounds/snare.mp3").play();
            break;

        case "6":
            new Audio("sounds/crash.mp3").play();
            break;

        case "7":
            new Audio("sounds/kick-bass.mp3").play();
            break;

    
        default:
            console.log(buttonInnerHTML);
            break;
    }
};


