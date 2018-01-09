window.onload = function() {
 
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