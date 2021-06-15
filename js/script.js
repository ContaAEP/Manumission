function validaCidade(){
    let cidade = document.querySelector("#inp_cidade").value.trim()
    
    if(cidade == ""){
        alert("Por favor, digite uma cidade!");
    }       
}