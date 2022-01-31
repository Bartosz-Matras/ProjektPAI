


$(document).ready(function(){
    const element = document.getElementById("mul-select");
    const element2 = document.getElementById("button-add");
    var tab = [];

    var multipleCancelButton = new Choices('#mul-select', {
        removeItemButton: true,
        maxItemCount:5,
        searchResultLimit:5,
        renderChoiceLimit:5
    });

    element.addEventListener("addItem", event => {
        // console.log(event.detail.value);
        tab.push(event.detail.value);
    })

    element2.addEventListener("sendItems", event => {
        createCookie(tab, 2);
    })

});

function createCookie(value, days){
    var expires;
    var name = "project";

    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    }
    else {
        expires = "";
    }

    document.cookie = escape(name) + "=" +
        escape(value) + expires + "; path=/";
}