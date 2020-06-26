function flipPage(sign)
{
    var resultado = document.getElementById("conjunto");

    var requisicaoHttp = new XMLHttpRequest();
    if (!requisicaoHttp)
    {
        alert("Seu navegador não suporta AJAX.")
        return false;
    }
    
    requisicaoHttp.open("GET", "new_account.php?page="+sign, true);

    requisicaoHttp.onreadystatechange = function()
    {
        if (requisicaoHttp.readyState == 4)
        {
            if (requisicaoHttp.status == 200)
            {
                resultado.innerHTML = requisicaoHttp.responseText;
            }
            else 
            {
                resultado.innerHTML = "Erro no AJAX";
            }
        }
    };

    requisicaoHttp.send(null)
}