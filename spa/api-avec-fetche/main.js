const API_URL ="";
function chargerCategories(){
    fetch(API_URL)
    .then(response=>response.json())
    .then(result =>{
        const tableBody = document.querySelector("#tableBody");
        tableBody.innerHTML="";
        result.forEach(elt => {
            tableBody.insertAdjacentHTML("beforeend",`<tr><td>${elt.id}</td><td>${elt.nom}</td><td>${elt.couleur}</td><td>${elt.icon}</td></tr>`);
            
        });
    })
    .catch(error=>console.error("error:", error));
}
document.querySelector("#section-form").addEventListener("submit",event=>{
    event.preventDefault();
nnnn



    const nom = document.querySelector("#cat-nom").Value;
    const couleur = document.querySelector("#cat-couleur").Value;
    const icone = document.querySelector("#cat-icone").Value;
    const categorie = {
        nom: nom,
        couleur: couleur,icone: icone
    };
    fetch(API_URL,{
        method:"POST",
        headers: {
            "Content-Type":"application/json"
        },
        body: JSON.stringify(categorie)
    })
    .then(response=>response.json())
})