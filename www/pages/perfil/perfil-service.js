app.factory('PerfilService', PerfilService);

function PerfilService() {

    function getPerfil() {
        return {
            nome: 'Daenerys Targaryen',
            email: "mae-dos-dragos@got.com",
            telefoneContato: "44 - 99999999",
            senha: "secreta"
        };
    }

    return {
        getPerfil: getPerfil
    };
}
