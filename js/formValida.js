
//De acordo com a suite escolhida o hospede já tem marcados as refeições
//document.forms[0].elements[0]
//document.forms[0].elements[0].checked

var suiteEscolhida = [document.forms[1].elements[3], document.forms[1].elements[4], document.forms[1].elements[5]]

for (var i=[0]; i < suiteEscolhida.length; i++){

suiteEscolhida[i].addEventListener('change', function(){
    var almoço = document.forms[0].elements[7]
    var janta = document.forms[0].elements[8]

    almoço.checked = false;
    janta.checked = false;

    if(suiteEscolhida[3].checked){
        almoço.checked = true;
        janta.checked = true;
    }

    if(suiteEscolhida[4].checked){
        almoço.checked = true;
    }
})}

