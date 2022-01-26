function accountDiv(text){
    const x = document.getElementById(text);
    if(x.readOnly === true){
        x.readOnly = false;
        x.style.border = "solid thin white";
    }else{
        x.readOnly = true;
        x.style.border = "none";
    }
}


function accountDiv2(text, text2){
    const x = document.getElementById(text);
    const y = document.getElementById(text2);
    if(x.readOnly === true){
        x.readOnly = false;
        y.readOnly = false;
        x.style.border = "solid thin white";
        y.style.border = "solid thin white";
    }else{
        x.readOnly = true;
        y.readOnly = true;
        x.style.border = "none";
        y.style.border = "none";
    }
}


