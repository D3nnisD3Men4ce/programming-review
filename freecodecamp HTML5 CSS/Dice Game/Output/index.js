var randonNumber1 = Math.floor(Math.random()*6) + 1;
var randonNumber2 = Math.floor(Math.random()*6) + 1;

console.log(randonNumber1);
console.log(randonNumber2);


document.querySelectorAll("div div img")[0].setAttribute("src", `images/dice${randonNumber1}.png`);
document.querySelectorAll("div div img")[1].setAttribute("src", `images/dice${randonNumber2}.png`);

if (randonNumber1 > randonNumber2){
    document.querySelector("h1").innerHTML = "💎P1 Wins!";
}
else if (randonNumber1 < randonNumber2){
    document.querySelector("h1").innerHTML = "P2 Wins💎!";
}
else {
    document.querySelector("h1").innerHTML = "Draw!"
}