// console.log("loaded"); //Confirmation connected JS

// refresh functie -> refresh knop
function refresh(){
    window.location.reload();
}

// advies / compliment functie
function advice(amount){
    // console.log(amount);
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

// bepaald stof niveau, geeft indicatie en kleuren terug
function dustLevel(amount){
    // stof levels
    let low_dust = 75.00;
    let high_dust = 200.00;
    let high_level = 'Het stof niveau is momenteel aan de hoge kant.';
    let med_level = 'Het stof niveau is gemiddeld op het moment.';
    let low_level = 'Het stof niveau is mooi laag.';
    let level_text = '';
    // Vergelijkingen
    amount = parseFloat(amount);
    if(amount <= low_dust){
        level_text = low_level;
        [background, color] = dustColor('low');
    }else if(amount > low_dust && amount < high_dust){
        level_text = med_level;
        [background, color] =  dustColor('med');
    }else if(amount >= high_dust){
        level_text = high_level;
        [background, color] = dustColor('high');
    }
    return [level_text, background, color];
}
// geeft kleuren terug op basis van niveau van bovenstaande functie
function dustColor(level){
     // set colors for indication
     let background = '';     
    //  orange
     let high_color = '#ffc95f';
     //  blue
     let med_color = "#3C59B6";
    //  green
     let low_color = '#abe8af';
     // texxt colors
     let textcolor = '';
    //  black
     let normal_color = '#000';
    //  white-ish
     let dark_color = '#eeeeee';
    // console.log(level);
    if(level == "low"){
        background = low_color;
        textcolor = normal_color;
       
    }else if(level == "med"){
        background = med_color;
        textcolor = dark_color;
        
    }else if(level == 'high'){
        background = high_color;
        textcolor = normal_color;
        
    }
    return [background, textcolor];
    
}

// huidige meting main functie -> vraag advies en level text en kleuren op en past dit toe
function dustNow(amount){
    // console.log(amount);
    let advice_text = advice(amount);
    vars = dustLevel(amount);
    // console.log(vars);
    let level_text = vars[0];
    let background = vars[1];
    let color = vars[2];
    // console.log(advice_text);
    document.getElementById('js--dustLevel').innerHTML = level_text;
    document.getElementById("js--dustAdviceNow").innerHTML= advice_text;
    let headers = document.getElementsByClassName('dustCard__heading');
    for(let i =0; i < headers.length; i++){
        headers[i].style.backgroundColor = background;
        headers[i].style.color = color;
    }
};

// huidige gemiddelde functie, werkt hetzelfde als de main meting
function dustAverage(average){
    // console.log(average);
    let advice_text = advice(average);
    vars = dustLevel(average);
    // console.log(vars);
    let level_text = vars[0];
    let background = vars[1];
    let color = vars[2];
    // console.log(advice_text);
    document.getElementById('js--dustLevelAverage').innerHTML = level_text;
    document.getElementById("js--dustAdviceAverage").innerHTML = advice_text;
     let headers = document.getElementsByClassName('dustCard__heading--average');
    for(let i =0; i < headers.length; i++){
        headers[i].style.backgroundColor = background;
        headers[i].style.color = color;
    }
}

// geeft een popup 
function showPopup(){
    let text = "Het stof niveau begint te hoog te worden!";
    alert(text);
};
// stuurt showPopup() aan
function checkAverage(average){
    let high_warn = 175.00;
    // console.log(average);
    if(average > high_warn){
        showPopup();
    }
};

// Geeft schoonmaakadviezen
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


