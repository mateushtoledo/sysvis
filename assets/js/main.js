/**
 * Exibe ou oculta a senha de campos do tipo password. Também controla o ícone
 * presente no botão de exibir/ocultar senha.
 * 
 * @param {string} input_id ID do campo, da entrada de senha.
 * @param {string} icon_id ID do ícone de exibir/ocultar senha.
 */
function controlPasswords(input_id, icon_id) {
    // Obter <input> e <i> (entrada de senha e icone)
    let input = $("#" + input_id);
    let icon = $("#" + icon_id);
    
    if ($(input).attr("type") === "password") {
        // Mudar para campo de texto e trocar icone
        $(input).attr("type", "text");
        $(icon).attr("class", "fa fa-eye-slash");
    } else {
        // Mudar para campo de senha e trocar ícone
        $(input).attr("type", "password");
        $(icon).attr("class", "fa fa-eye");
    }
}