const search = document.querySelector('input[placeholder="Szukaj"]');
const search2 = document.querySelector('input[name="search-app"]');
const projectContainer = document.querySelector(".projects");
const projectContainer2 = document.querySelector(".info-projects-div");

search.addEventListener("keyup", function (event){
   if(event.key === "Enter"){
       event.preventDefault();

       const tags = [...document.querySelectorAll('.filters-bar-section input')]
           .filter(checkbox => checkbox.checked)
           .map(checkbox => checkbox.id);

       const data = {search: this.value, tags};

       fetch("/search", {
           method: 'POST',
           headers:{
               'Content-Type': 'application/json'
           },
           body: JSON.stringify(data)
       }).then(function (response){
           return response.json();
       }).then(function (pins){
          projectContainer.innerHTML = "";
           loadProjects(pins);
       });
   }
});

function loadProjects(pins) {
    pins.forEach(pin => {
        console.log(pin);
        createProject(pin);
    })
}

function createProject(pin){
    const template = document.querySelector("#project-template");

    const clone = template.content.cloneNode(true);

    const image = clone.querySelector("img");
    image.src = `${pin.photo_path}`;
    const title = clone.querySelector("h1");
    title.innerHTML = pin.title;
    const description = clone.querySelector("p");
    description.innerHTML = pin.description;

    projectContainer.appendChild(clone);
}




search2.addEventListener("keyup", function (event){
    if(event.key == "Enter"){
        event.preventDefault();

        const tags = [...document.querySelectorAll('.profile2-filters-div input')]
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.id);

        const data = {search: this.value, tags};

        fetch("/search", {
            method: 'POST',
            headers:{
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        }).then(function (response){
            return response.json();
        }).then(function (pins){
            projectContainer2.innerHTML = "";
            loadProjects2(pins);
        });
    }
});

function loadProjects2(pins) {
    pins.forEach(pin => {
        console.log(pin);
        createProject2(pin);
    })
}

function createProject2(pin){
    const template = document.querySelector("#project-template2");

    const clone = template.content.cloneNode(true);

    const image = clone.querySelector("img");
    image.src = `${pin.photo_path}`;
    const title = clone.querySelector("p");
    title.innerHTML = pin.title;
    const description = clone.querySelector("label");
    description.innerHTML = pin.description;

    projectContainer2.appendChild(clone);
}