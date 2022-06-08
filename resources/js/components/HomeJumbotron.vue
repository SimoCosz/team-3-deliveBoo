<template>
    <section class="jumbo-container">
        <div class="jumbo-sub-container">

            <!-- CONTAINER LEFT -->
            <div class="jumbo-left">
                <h1 class="jumbo-left-title">I piatti che ami, a domicilio.</h1>
                <!-- <h2>Quando vuoi tu!</h2> -->
                <div class="jumbo-search-container">
                    <p class="jumbo-search-title">Inserisci la tua città per trovare ristoranti nei dintorni</p>
                    <div class="jumbo-search">
                        <div class="jumbo-search-bar-container">
                            <input class="jumbo-search-bar" placeholder="Inserisci il tuo indirizzo completo" type="text">
                            <i class="bi bi-geo-alt"></i>
                        </div>
                        <button class="jumbo-button-search">Cerca</button>
                    </div>
                    <p class="jumbo-search-text"><a href="">Accedi</a> per visualizzare i tuoi indirizzi recenti.</p>
                </div>
            </div>

            <!-- CONTAINER RIGHT -->
            <div class="jumbo-right">
                <img class="img-jumbo-svg-first" src="../../../public/img/at_home_with_deliveboo.png" alt="">
                <img class="img-jumbo-svg-second" src="../../../public/img/jumbo-bkg-svg2.svg" alt="">
            </div>
        </div>
        
    </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.jumbo-container{
    background-image: url('../../../public/img/background-jumbo.png');
    background-color: #00CCBC;
    background-position: center;
    background-repeat: no-repeat;
    height: 396px;
    max-width: 100vw;
    display: flex;
    justify-content: center;

    .jumbo-sub-container{
        width: 1140px;
        display: flex;
        gap: 40px;
        position: relative;

        .jumbo-left{
            width: calc(50% - 20px);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            color: #440063;
            font-weight: 900;
            margin-bottom: 30px;

            .jumbo-left-title{
                margin-bottom: 25px;
                font-weight: 700;
            }

            .jumbo-search-container{
                padding: 22px 30px;
                background-color: white;
                border-radius: 5px;

                .jumbo-search-title{
                    color: black;
                    font-size: 16px;
                    font-weight: 500;
                    margin-bottom: 5px;
                }

                .jumbo-search{
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    gap: 15px;
                    margin-bottom: 8px;

                    .jumbo-search-bar-container{
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        flex-grow: 1;
                        position: relative;

                        .jumbo-search-bar{
                            color: black;
                            border-color: rgba(0, 0, 0, 0.299);
                            border-radius: 5px;
                            font-size: 16px;
                            padding-left: 15px;
                            padding-right: 15px;
                            flex-grow: 1;
                            height: 100%;
                        }

                        .bi-geo-alt{
                            font-size: 20px;
                            color: #00CCBC;
                            position: absolute;
                            z-index: 1;
                            right: 15px;
                            top: 50%;
                            transform: translateY(-50%);
                        }
                    }

                    .jumbo-button-search{
                        padding: 15px 27px;
                        font-weight: 600;
                        color: white;
                        background-color: #00CCBC;
                        border: none;
                        border-radius: 5px;
                    }
                }

                .jumbo-search-text{
                    color: black;
                    font-size: 14px;
                    font-weight: 500;

                    a{
                        color: #00CCBC;
                        text-decoration: none;
                        font-weight: 600;
                    }
                }
            }
        }
    
        .jumbo-right{
            width: calc(50% - 20px);
            position: relative;

            .img-jumbo-svg-first{
                z-index: 1;
                position: absolute;
                bottom: -1px;
                left: 50%;
                transform: translateX(-50%);
            }
            
            .img-jumbo-svg-second{
                height: 350px;
                overflow: hidden;
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    }
    @media (max-width: 1024px){
        .jumbo-sub-container{
            justify-content: center;
            align-items: center;

            .jumbo-left{
                width: 90%;

                .jumbo-left-title{
                    text-align: center;
                }
            }
        }
        
        .jumbo-right{
            display: none;
        }
    }

    @media (max-width: 650px){
        .jumbo-left-title{
            font-size: 22px;
            margin-bottom: 15px !important;
        }

        .jumbo-search-title{
            font-size: 14px !important;
            text-align: center;
        }

        .jumbo-search-bar{
            width: 100%;
            height: 36px !important;
            font-size: 14px !important;
        }

        .jumbo-button-search{
            padding: 8px 15px !important;
        }

    }
    @media (max-width: 500px){
        
        .bi-geo-alt{
            display: none;
        }

    }
}
</style>