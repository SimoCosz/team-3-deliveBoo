<template>
    <div class="container">
        <h1 class="py-5">
            {{lavoraConDelivebooTitle}}
        </h1>
        <ul class="card-container w-100 d-flex align-items-center justify-content-between">
            <li class="card">
                <div class="card_pic" :style="rider"></div>
                <div class="card_text" id="card_1">
                    <h1>
                        Rider
                    </h1>
                    <p>
                        Diventa un rider: flessibità, ottimi guadagni e un mondo di vantaggi per te.
                    </p>
                    <button>
                        Unisciti a noi
                    </button>
                </div>
            </li>
            <li class="card">
                <div class="card_pic" :style="ristorante"></div>
                <div class="card_text" id="card_2">
                    <h1>
                        Ristoranti
                    </h1>
                    <p>
                        Diventa partner di Deliveroo e raggiungi sempre più clienti. Ci occupiamo noi della consegna,
                        così che la tua unica preoccupazione sia continuare a preparare il miglior cibo.
                    </p>
                    <button>
                        Diventa nostro partner
                    </button>
                </div>
            </li>
            <li class="card">
                <div class="card_pic" :style="lavoraConNoi"></div>
                <div class="card_text" id="card_3">
                    <h1>
                        Lavora con noi
                    </h1>
                    <p>
                        La nostra missione è trasformare il modo in cui le persone mangiano.
                        E' un obbiettivo molto ambizioso, come noi, e ci servono persone che ci aiutino a raggiungerlo.
                    </p>
                    <button>
                        Scopri di più
                    </button>
                </div>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    data(){
        return{
            rider: {backgroundImage: "url(https://cwa.roocdn.com/_next/static/riders.90e61988.jpg)"},
            ristorante: {backgroundImage: "url(https://cwa.roocdn.com/_next/static/restaurants.3db91a35.jpg)"},
            lavoraConNoi: {backgroundImage: "url(https://cwa.roocdn.com/_next/static/team.d18fbb67.jpg)"},
            lavoraConDelivebooTitle: 'Lavora con Deliveboo'
        }
    }
}
</script>

<style lang="scss">
    .card-container{
        // border: 3px solid red;
        height: 650px;
        .card{
            width: 32%;
            height: 98%;
            // border: 1px solid blue;
            display: flex;
            flex-direction: column;
            align-items: center;
            color: white;
            padding: 0px;
            @media screen and (max-width: 767px){
                .card{
                    width: 100%;
                    height: 33%;
                    .card_text{
                        height: 30%;
                        h1{
                            font-size: 36px;
                            font-weight: 700;
                        }
                    }
                    .card_pic{
                        height: 70%;
                    }
                }
            }
            .card_pic{
                height: 50%;
                width: 100%;
                background-position: center;
                background-size: cover;
                overflow: hidden;
                @media screen and (max-width: 767px){
                    .card_pic{
                        height: 70%;
                    }
                }
            }
            .card_text{
                width: 100%;
                height: 50%;
                // display: flex;
                // flex-direction: column;
                // align-items: center;
                // justify-content: flex-start;
                padding: 40px 5px 0px 5px;
                h1{
                    font-size: 42px;
                }
                p{
                    font-size: 16px;
                    font-weight: 500;
                }
                button{
                    font-weight: 700;
                    color: white;
                    font-size: 14px;
                    padding: 10px;
                    background-color: #00c1b2;
                    border: none;
                    border-radius: 5px;
                    opacity: 1;
                    &:hover{
                        transition: ease-in-out 0.5s;
                        opacity: 0.8;
                    }
                }
                @media screen and (max-width: 957px){
                    h1{
                        font-size: 36px;
                    }
                    p{
                        font-size: 14px;
                        font-weight: 500;
                    }
                    button{
                        font-size: 14px;
                    }
                }
            }
        }
        #card_1{
            background-color: #FF483B
        }
        #card_2{
            background-color: #FF8100;
        }
        #card_3{
            background-color: #BAC3C3;
        }
        @media screen and (max-width: 767px){
            height: 2250px;
            display: flex;
            flex-direction: column;
            gap: 10px;
            .card{
                width: 100%;
                height: calc(100% / 3);
                .card_text{
                    height: 30%;
                    h1{
                        font-size: 22px;
                    }
                    p{
                        font-size: 14px;
                    }
                    button{
                        padding: 6px;
                    }
                }
                .card_pic{
                    height: 70%;
                }
            }
        }
    }
</style>