const search = document.querySelector('input[placeholder="Szukaj"]');
const projectContainer = document.querySelector(".projects");

search.addEventListener("keyup", function (event){
   if(event.key == "Enter"){
       event.preventDefault();

       const data = {search: this.value};

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
