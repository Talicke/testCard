// console.log("Hello girl");
// let hautCard = document.querySelector(".click-card");
// let basCard = document.querySelector(".card-body")

// let cardVersoHaut = '<img src="Images/Boisson 5.jpg" class="card-img-top" alt="...">'
// let cardVersoBas = '<h5 class="card-title">Pinard</h5>'
// let cardRectoHaut = '<h5>Ingredient :</h5><p>Salade, tomate, oignons</p>'
// let cardRectoBas = '<form action=""><select name="taille" id="taille-pizza" class="dropdown"><option value="16">16 cm</option><option value="24">24 cm</option><option value="32">32 cm</option></select></br><select name="pate" id="pate-pizza" class="dropdown"><option value="fine">Fine</option><option value="moyenne">Moyenne</option><option value="epaisse">Epaisse</option></select><button type="submit" class="submit-button">Ajouter au panier</button></form>'


function switchCard(cardH, cardB, cardversoH, cardversoB, cardrectoH, cardrectoB){

    let contenuCardHaut = '';
    let contenuCardBas = '';
    let statusCard = false;

    cardH.addEventListener('click', function(){
        console.log("clique")
        if(statusCard == false){
            contenuCardHaut= cardrectoH;
            contenuCardBas = cardrectoB;
            cardH.innerHTML=contenuCardHaut;
            cardB.innerHTML=contenuCardBas;
            statusCard = true
        }else if(statusCard == true){
            contenuCardHaut = cardversoH;
            contenuCardBas = cardversoB;
            cardH.innerHTML = contenuCardHaut;
            cardB.innerHTML = contenuCardBas;
            statusCard = false
        }
        
    })
}



// switchCard(hautCard, basCard, cardVersoHaut, cardVersoBas, cardRectoHaut, cardRectoBas);