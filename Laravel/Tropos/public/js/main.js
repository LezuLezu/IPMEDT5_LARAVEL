console.log("loaded"); //Confirmation connected JS

setTimeout(function(){          //Reload page every 30 seconds
    window.location.reload(1);
 }, 30000);


// Vars declaration
let low_dust = 75.00;
let high_dust = 200.00;

let advice__low = ["Er is bijna geen stof gemeten, heb je net gestofd? Goed bezig!", "Er is bijna geen stof gevonden, je hoeft niks te doen"];
let advice__med = ["Misschien kan je een rondje doen met een stof doek?", "Zet een raam open, dan is er meer lucht circulatie."];
let advice__high = ["Het is weer tijd om te stofzuigen, het stofniveau is namelijk te hoog.", "Doe een rondje stofzuigen en stoffen met een doek."];

function advice(amount){
    console.log("got into function");
    let advice_text = "";
    amount = parseFloat(amount);
    if(amount < low_dust){
        advice_text = advice__low[Math.floor(Math.random() * advice__low.length)];
    };
    if(amount > low_dust || amount < high_dust){
        advice_text = advice__med[Math.floor(Math.random() * advice__med.length)];
    };
    if(amount > high_dust){
        advice_text = advice__high[Math.floor(Math.random() * advice__high.length)];
    };

    console.log(amount);
    document.getElementById("dust__advise").innerHTML= advice_text;
};


