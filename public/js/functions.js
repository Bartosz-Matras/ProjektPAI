
function showSingUpDiv(){
    const x = document.getElementsByClassName("sing-up")[0];
    const y = document.getElementsByClassName("login-container")[0];
    if (x.style.display === "none") {
        x.style.display = "flex";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "flex";
    }
}

function showAccountDiv(){
    const x = document.getElementsByClassName("account-div")[0];
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

function showOptionsDiv(){
    const x = document.getElementsByClassName("options")[0];
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}

function showAddPinDiv(){
    const x = document.getElementsByClassName("add-pin-div")[0];
    if (x.style.display === "none") {
        x.style.display = "flex";
    } else {
        x.style.display = "none";
    }
}


function clearSearchDiv(){
    document.getElementById("search-form").reset();
}