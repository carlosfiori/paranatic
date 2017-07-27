app.factory('TimelineService', TimelineService);

function TimelineService() {


    function getPosts() {
        return this.posts;
    }

    function getTexto() {
        return 'Novo texto';
    };

    return {
        getPosts: getPosts,
        getTexto: getTexto,
        posts: [
            {
                user: "Fulano",
                desc: "Passeio com cachorro até 2 vezes por semana",
                image: "http://r.ddmcdn.com/s_f/o_1/cx_633/cy_0/cw_1725/ch_1725/w_720/APL/uploads/2014/11/too-cute-doggone-it-video-playlist.jpg",
                likes: 38,
                timeAgo: 'just now'
            },
            {
                user: "Silvinho",
                desc: "Conserto e faço ajustes em roupas.",
                image: "http://i-decathlon.a8e.net.br/static/images/banner-navegacao-roupas-fem-barco.png",
                likes: 9,
                timeAgo: 'a 5 minutos'
            },
            {
                user: "Jão",
                desc: "Lavo carro por R$30,00",
                image: "https://imgct2.aeplcdn.com/img/800x600/car-data/big/maruti-suzuki-swift-default-image.png-version201705241501.png",
                likes: 21,
                timeAgo: 'mais de um mês'
            }
        ]
    }
}
