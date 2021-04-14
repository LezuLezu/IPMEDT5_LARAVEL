console.log("loaded"); //Confirmation connected JS

setTimeout(function(){          //Reload page every 30 seconds
    window.location.reload(1);
 }, 30000);

function advice(amount){
    console.log(amount);
    // Function to show advice suited for the dust levels
    let low_dust = 75.00;
    let high_dust = 200.00;
    // Different advices for different situations in arrays
    let advice__low = ["Er is bijna geen stof gemeten, heb je net gestofd? Goed bezig!", "Er is bijna geen stof gevonden, je hoeft niks te doen"];
    let advice__med = ["Misschien kan je een rondje doen met een stof doek?", "Zet een raam open, dan is er meer lucht circulatie."];
    let advice__high = ["Het is weer tijd om te stofzuigen, het stofniveau is namelijk te hoog.", "Doe een rondje stofzuigen en stoffen met een doek."];
    // console.log("got into function");
    let advice_text = "";
    amount = parseFloat(amount);
    if(amount < low_dust){
        advice_text = advice__low[Math.floor(Math.random() * advice__low.length)];
        // console.log(advice_text);
    }
    else if(amount > low_dust && amount < high_dust){
        advice_text = advice__med[Math.floor(Math.random() * advice__med.length)];
        // console.log(advice_text);
    }
    else if(amount > high_dust){
        advice_text = advice__high[Math.floor(Math.random() * advice__high.length)];
        // console.log(advice_text);

    };
    // console.log(amount);
    // document.getElementById("dust__advise").innerHTML= advice_text;
    return advice_text;
};

function adviceNow(amount){
    // console.log(amount);
    let advice_text = advice(amount);
    // console.log(advice_text);
    document.getElementById("js--dustAdviceNow").innerHTML= advice_text;
};

function showPopup(amount){
    let text = "Het stof niveau begint te hoog te worden!";
    alert(text);
};

function checkAverage(average){
    let high_warn = 175.00;
    // console.log(average);
    if(average > high_warn){
        showPopup();
    }
};

function adviceAverage(average){
    // console.log(average);
    let advice_text = advice(average);
    // console.log(advice_text);
    document.getElementById("js--dustAdviceAverage").innerHTML= advice_text;
}

function adviceClean(){
    let advice = [
        'Heb je huisdieren? Probeer dan minstens om de dag te stofzuigen.',
        'Doseer met mate als je sterke schoonmaakmiddelen gebruikt zoals Dettol.',
        'Probeer om de dag een stofdoek over het meubilair te halen.'
    ];
    advice_text = advice[Math.floor(Math.random() * advice.length)];
    // console.log(advice_text);
    document.getElementById("js--cleanAdvice").innerHTML = advice_text;
}



