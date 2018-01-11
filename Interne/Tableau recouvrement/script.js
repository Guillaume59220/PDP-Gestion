/*window.onload = function() {
 
    // on crée notre EditableGrid
    // pour les options, enableSort si on peut trier (cliquer sur les colonnes)
    // shortMonthNames pour les noms francais des mois
  editableGrid = new EditableGrid("DemoGridAttach",
   {
    enableSort:true,
    shortMonthNames: ["Janvier", "Fevrier", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"],
   }
  ); 
  
    // on charge les données, on indique le nom de la colonne,
    // son type (string, integer, boolean..)
    // si la colonne est éditable
    // les valeurs pour les listes (ici les pays)
  editableGrid.load({ metadata: [
   { name: "pseudo", datatype: "string", editable: true },
   { name: "niveau", datatype: "integer", editable: true },
   { name: "pays", datatype: "string", editable: true, values: 
    { 'Europe': { "be" : "Belgique", "fr" : "France", "uk" : "Angleterre"},
      'Amerique du Nord': { "ca": "Canada", "us" : "Etats-Unis" },
    }
   },
   { name: "lastvisit", datatype: "date", editable: true },
   { name: "freelance", datatype: "boolean", editable: true }
    
  ]});
    // on attache notre EditableGrid au tableau HTML (avec son id)
  editableGrid.attachToHTMLTable('htmlgrid');
  editableGrid.renderGrid();
   
    // fonction qui permet d'ajouter une ligne
  editableGrid.ajouterLigne = function()
  {
   this.append(this.getRowCount()+1,{},false,false);
  };
 }





function insert_table(){
            taille=prompt("ecrire taille tableau (ex: 3x3)");
            colones=parseInt(taille.split('x')[0]);
            ligne=parseInt(taille.split('x')[1]);
 
            li="<tr>"
            x=0;
            while(x<colones){
                li+='<td><input type="text"></td>';
                x++;
            }
            li+='</tr>'
 
            y=1;
            table='<table>'
            while(y<ligne){
                table+=li;
                y++;
            }
            table+='</table>'
            document.getElementById('form').innerHTML+=table;
        }*/





        //On ne pourra éditer qu'une valeur à la fois
var editionEnCours = false;
  
//variable évitant une seconde sauvegarde lors de la suppression de l'input
var sauve = false;
  
//Fonction de modification inline de l'élément double-cliqué
function inlineMod(id, obj, nomValeur, type)
{
    if(editionEnCours)
    {
        return false;
    }
    else
    {
        editionEnCours = true;
        sauve = false;
    }
  
    //Objet servant à l'édition de la valeur dans la page
    var input = null;
  
    //On crée un composant différent selon le type de la valeur à modifier
    switch(type)
    {
        //Valeur de type texte ou nombre
        case "texte":
        case "nombre":
            input = document.createElement("input");
            break;
  
        //Valeur de type texte multilignes
        case  "texte-multi":
            input = document.createElement("textarea");
            break;
    }
  
    //Assignation de la valeur
    if (obj.innerText)
        input.value = obj.innerText;
    else
        input.value = obj.textContent;
         
    input.value = trim(input.value);
  
    //On lui donne une taille un peu plus large que le texte à modifier
    input.style.width  = getTextWidth(input.value) + 30 + "px";
  
    //Remplacement du texte par notre objet input
    obj.replaceChild(input, obj.firstChild);
  
    //On donne le focus à l'input et on sélectionne le texte qu'il contient
    input.focus();
    input.select();
  
    //Assignation des deux événements qui déclencheront la sauvegarde de la valeur
  
    //Sortie de l'input
    input.onblur = function sortir()
    {
        sauverMod(id, obj, nomValeur, input.value, type);
        delete input;
    };
  
    //Appui sur la touche Entrée
    input.onkeydown = function keyDown(event)
    {
        if (!event&&window.event)
        {
            event = window.event;
        }
        if(getKeyCode(event) == 13)
        {
            sauverMod(id, obj, nomValeur, input.value, type);
            delete input;
        }
    };
}
  
  
  
//Fonction renvoyant le code de la touche appuyée lors d'un événement clavier
function getKeyCode(evenement)
{
    for (prop in evenement)
    {
        if(prop == 'which')
        {
            return evenement.which;
        }
    }
  
    return evenement.keyCode;
}
  
function getTextWidth(texte)
{
    //Valeur par défaut : 150 pixels
    var largeur = 150;
  
    if(trim(texte) == "")
    {
        return largeur;
    }
  
    //Création d'un span caché que l'on "mesurera"
    var span = document.createElement("span");
    span.style.visibility = "hidden";
    span.style.position = "absolute";
  
    //Ajout du texte dans le span puis du span dans le corps de la page
    span.appendChild(document.createTextNode(texte));
    document.getElementsByTagName("body")[0].appendChild(span);
  
    //Largeur du texte
    largeur = span.offsetWidth;
  
    //Suppression du span
    document.getElementsByTagName("body")[0].removeChild(span);
    span = null;
  
    return largeur;
}