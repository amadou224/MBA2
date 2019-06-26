// function AllerRetour()
// {
//     // Get the checkbox
//     var checkBox1 = document.getElementById("CheckAllerSimple");
    
//     // Get the output text
//     var FormAllerRetour = document.getElementById("FormAllerSimple");
   
//     // If the checkbox is checked, display the output text
//     if (checkBox1.checked == true)
//     {
//         FormAllerRetour.style.display = "block";
    
//     } else{
//        FormAllerSimple.style.display = "none";

//     }
// }



function AllerRetour() {
    // Get the checkbox
    var checkBox1 = document.getElementById("CheckAllerRetour");
    var checkBox2 = document.getElementById("CheckAllerSimple");
    // Get the output text
    var FormAllerRetour = document.getElementById("FormAllerRetour");
    var FormAllerSimple = document.getElementById("FormAllerSimple");
    // If the checkbox is checked, display the output text
    if (checkBox1.checked == true && checkBox2.checked == false) {
        FormAllerRetour.style.display = "block";
        FormAllerSimple.style.display = "none";
    } else if (checkBox1.checked == false && checkBox2.checked == true) {
        FormAllerSimple.style.display = "block";
        FormAllerRetour.style.display = "none";

    }
}

// function AllerSimple() {
//     // Get the checkbox
//     var checkBox = document.getElementById("CheckAllerSimple");
//     // Get the output text
//     var FormAllerRetour = document.getElementById("FormAllerSimple");

//     // If the checkbox is checked, display the output text
//     if (checkBox.checked == true) {
//         FormAllerRetour.style.display = "block";
//         document.getElementById("FormAllerRetour").style.display = "none";
// document.getElementById("1").disabled = true;
//     }
// }
function HeuresFixesPerso() {
    // Get the checkbox
    var checkBoxF = document.getElementById("CheckHeurFixe");
    var checkBoxP = document.getElementById("CheckHeurPerso");
    // Get the output text
    var FormHeurPerso = document.getElementById("FormHeurPerso");
    var FormHeurFixes = document.getElementById("FormHeurFixes");


    // If the checkbox is checked, display the output text
    if (checkBoxP.checked == true && checkBoxF.checked == false) {
        FormHeurPerso.style.display = "block";
       
        FormHeurFixes.style.display = "none";
         document.getElementById("horaire_fixe_val").selectedIndex=0;
    } else if (checkBoxP.checked == false && checkBoxF.checked == true)
    {
        FormHeurFixes.style.display = "block";
        FormHeurPerso.style.display = "none";
        document.getElementById(horaire_Perso_val).value = "";
    }
}
function HeuresFixesPerso_AR() {
    // Get the checkbox
    var checkBoxF = document.getElementById("CheckHeurFixe_AR");
    var checkBoxP = document.getElementById("CheckHeurPerso_AR");
    // Get the output text
    var FormHeurPerso = document.getElementById("FormHeurPerso_AR");
    var FormHeurFixes = document.getElementById("FormHeurFixes_AR");
    // If the checkbox is checked, display the output text
    if (checkBoxP.checked == true && checkBoxF.checked == false) {
        FormHeurPerso.style.display = "block";

        FormHeurFixes.style.display = "none";
        document.getElementById("horaireDinamique_Rf").selectedIndex = 0;
    } else if (checkBoxP.checked == false && checkBoxF.checked == true) {
        FormHeurFixes.style.display = "block";
        FormHeurPerso.style.display = "none";
        document.getElementById("horaireDinamique_A").value = "";
    }


}
function HeuresFixesPerso_AR1() {
    var checkBoxF1 = document.getElementById("CheckHeurFixe_AR1");
    var checkBoxP1 = document.getElementById("CheckHeurPerso_AR1");
    // Get the checkbox
    var FormHeurPerso1 = document.getElementById("FormHeurPerso_AR1");
    var FormHeurFixes1 = document.getElementById("FormHeurFixes_AR1");
    // If the checkbox is checked, display the output text
    if (checkBoxP1.checked == true && checkBoxF1.checked == false) {
        FormHeurPerso1.style.display = "block";

        FormHeurFixes1.style.display = "none";
        document.getElementById("horaireDinamique_Rf1").selectedIndex = 0;
    } else if (checkBoxP1.checked == false && checkBoxF1.checked == true) {
        FormHeurFixes1.style.display = "block";
        FormHeurPerso1.style.display = "none";
        document.getElementById("horaireDinamique_R1").value = "";
    }
}




function Domicile() {
    var domicile = document.getElementById('domicile')

    let strUser = $("#pdp :selected").val();

    if (strUser === "Domicile") {
        domicile.style.display = "block";
        
    } else {
        domicile.style.display = "none";
      
    }
}

function DomicileAllerRetour() {
    var domicile = document.getElementById('domicile2-allez')
    var ligne = document.getElementById('ligne')
    let strUser = $("#pointDePrise2-allez :selected").val();

    if (strUser === "Domicile") {
        domicile.style.display = "block";
        ligne.style.display = "block";
    } else {
        domicile.style.display = "none";
         ligne.style.display = "none";
    }
}
function DomicileAllerRetour1() {
    var domicile = document.getElementById('domicile2-retour')
    var ligne = document.getElementById('ligne')
    let strUser = $("#pointDePrise2-retour :selected").val();

    if (strUser === "Domicile") {
        domicile.style.display = "block";
        ligne.style.display = "block";
    } else {
        domicile.style.display = "none";
        ligne.style.display = "none";
    }
}

function PointdePrise() {
    let depart = $('select[name=depart_aller]').val()

    let destination = $('select[name=destination_aller]').val()

    let pointDePrise = document.getElementById('pointDePrise')

    let btnsumbit = document.getElementById('btnsubmit')

    if (depart === "Strasbourg" && destination === "Strasbourg") {
        btnsumbit.disabled = true;
    }

    if(depart === "Strasbourg" && destination != "Strasbourg") {
        btnsumbit.disabled = false;
    }

    if (depart === "Strasbourg") {
        pointDePrise.style.display = "block"
    } else {
        pointDePrise.style.display = "none"
        $('select[name=destination_aller]').val("Strasbourg").change()
        btnsumbit.disabled = false;

    }
}
function AfficherLesBoutonsHoraires() {
    let strUser = document.getElementById("depart");
    var h1 = document.getElementById("CheckHeurFixe");
    var h2 = document.getElementById("CheckHeurPerso");
    
    if (strUser.value !="li")
    {
       
        h1.disabled = false;
        h2.disabled = false;
    }else{
        h1.disabled = true;
        h2.disabled = true;
    }
    var Saison = "ete";
    var heures = "  {% for ville in tableheure[" + strUser + "][" + Saison +"] %}" + "<option value={{ville}}>{{ville}}</option>{% endfor %}";                          
                                      
                                      
    document.getElementById("horaireDinamique").replace("id", strUser.value);
}

function AfficherLesBoutonsHoraires_AR()
{
    let strUser1 = document.getElementById("dest_allerRetour");
    let strUser = document.getElementById("dep_allerRetour");
    var h1 = document.getElementById("CheckHeurFixe_AR");
    var h2 = document.getElementById("CheckHeurPerso_AR");
    var h3 = document.getElementById("CheckHeurFixe_AR1");
    var h4 = document.getElementById("CheckHeurPerso_AR1");

    if (strUser.value != "li")
    {

        h1.disabled = false;
        h2.disabled = false;
    } else
    {
        h1.disabled = true;
        h2.disabled = true;
    }

    if (strUser1.value != "li") {

        h3.disabled = false;
        h4.disabled = false;
    } else {
        h3.disabled = true;
        h4.disabled = true;
    }

}

function PointdePrise2() {
    let depart = $('select[name=depart]').val()

    let dest = $('select[name=destination]').val()

    let pointDePrise = document.getElementById('pointDePrise2')

    console.log(dest)

    var btnsumbit = document.getElementById('btnsubmit2')

    if (depart === "Strasbourg" && dest === "Strasbourg") {
        btnsumbit.disabled = true;
    }
    if(depart === "Strasbourg" && dest != "Strasbourg") {
        btnsumbit.disabled = false;
    }

    if (depart === "Strasbourg") {
        pointDePrise.style.display = "block"
    } else {
        pointDePrise.style.display = "none"
        $('select[name=destination]').val("Strasbourg").change()
        btnsumbit.disabled = false;

    }
}

function HeureAller() {
    var heure_aller = document.getElementById('FormHeurFixes')

    console.log(heure_aller)

    
}


function Destination()
{

    let depart = $('select[name=FormulaireDepart]').val()
    var btnsumbit = document.getElementById('Destination1')

    if (depart === "Strasbourg")
    {
        btnsumbit.val("oui") ;
    }
   
}
function Domicile1() {
    var Strasbourg = document.getElementById('Strasbourg')
    var Autres = document.getElementById('Autres')
    let strUser = $("#depart_aller :selected").val();

    if (strUser === "Strasbourg") {
        Strasbourg.style.display = "none";
        Autres.style.display = "block";
    } else {
        Autres.style.display = "block";
        
    }
}