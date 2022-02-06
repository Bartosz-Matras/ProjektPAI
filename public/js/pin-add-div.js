


$(document).ready(function(){
    const element = document.getElementById("mul-select");
    const element2 = document.getElementById("button-add");
    const element3 = document.getElementById("tags3");
    let st = "";

    var multipleCancelButton = new Choices('#mul-select', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
    });

    element.addEventListener("addItem", event => {
        console.log(event.detail.value);
        st += event.detail.value + ",";
    })

    element2.addEventListener("click", event => {
        element3.value = st;
        element4.value = st;
    })
});


$(document).ready(function(){
    const element = document.getElementById("mul-select2");
    const element2 = document.getElementById("button-add2");
    const element3 = document.getElementById("tags33");
    let st = "";

    var multipleCancelButton = new Choices('#mul-select2', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
    });

    element.addEventListener("addItem", event => {
        console.log(event.detail.value);
        st += event.detail.value + ",";
    })

    element2.addEventListener("click", event => {
        element3.value = st;
    })
});
