function accountDiv(text){
    const x = document.getElementById(text);
    if(x.readOnly === true){
        x.readOnly = false;
    }else{
        x.readOnly = true;
    }
}