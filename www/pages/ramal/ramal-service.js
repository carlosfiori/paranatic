app.factory('RamalService', RamalService);

function RamalService() {

    function getRamais() {
        return this.ramais;
    }

    return {
        getRamais: getRamais,
        ramais: [
            {
                nome: "João",
                numero: 123
            },
            {
                nome: "Maria",
                numero: 230
            },
            {
                nome: "Joseph",
                numero: 574
            },
            {
                nome: "Leonardo",
                numero: 032
            },
            {
                nome: "Leandro",
                numero: 440
            },
            {
                nome: "Amanda",
                numero: 758
            },
            {
                nome: "Bianca",
                numero: 908
            },
            {
                nome: "Daniel",
                numero: 654
            },
            {
                nome: "Eufrasino",
                numero: 214
            },
            {
                nome: "Felipe",
                numero: 032
            },
            {
                nome: "Gustavo",
                numero: 440
            },
            {
                nome: "Heitor",
                numero: 214
            },
            {
                nome: "Isabella",
                numero: 032
            },
            {
                nome: "Junior",
                numero: 440
            },
            {
                nome: "Gustavo",
                numero: 440
            },
            {
                nome: "Heitor",
                numero: 214
            },
            {
                nome: "Isabella",
                numero: 032
            },
            {
                nome: "Junior",
                numero: 440
            },
            {
                nome: "Carlos",
                numero: 402
            }
        ]
    };
}
