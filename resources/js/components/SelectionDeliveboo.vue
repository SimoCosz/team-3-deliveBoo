<template>
  <section class="selection-container">
      <div class="selection-sub-container">
        <h1 class="selection-title">La selezione di Deliveboo</h1>
        <div class="selection-card-container">
            <!-- FIRST CARD -->
            <a class="selection-link-small" href="">
                <div class="selection-card">
                    <div class="selection-img-container">
                        <img class="selection-img" src="https://f.roocdn.com/images/menu_tags/288/menu-tag-image.jpg?width=430&height=150&auto=webp&format=jpg&fit=crop&v=1648802301" alt="">
                        <h2 class="selection-img-title"><nobr>Comfort food</nobr></h2>
                    </div>
                    <p class="selection-card-description">I grandi classici che ti scaldano il cuore, perfetti in ogni momento.</p>
                    <p class="selection-card-discover">Scopri Comfort food</p>
                </div>
            </a>
            <!-- SECOND CARD -->
            <a class="selection-link-big" href="">
                <div class="selection-card">
                    <div class="selection-img-container">
                        <img class="selection-img" src="https://f.roocdn.com/images/menu_tags/328/menu-tag-image.jpg?width=660&height=150&auto=webp&format=jpg&fit=crop&v=1548761261" alt="">
                        <h2 class="selection-img-title"><nobr>Dolci e dessert</nobr></h2>
                    </div>
                    <p class="selection-card-description">Dolci piaceri per rendere la giornata la giornata ancora più gustosa.</p>
                    <p class="selection-card-discover">Scopri Dolci e dessert</p>
                </div>
            </a>
            <!-- THIRD CARD -->
            <a class="selection-link-big" href="">
                <div class="selection-card">
                    <div class="selection-img-container">
                        <img class="selection-img" src="https://f.roocdn.com/images/menu_tags/291/menu-tag-image.jpg?width=660&height=150&auto=webp&format=jpg&fit=crop&v=1547125828" alt="">
                        <h2 class="selection-img-title"><nobr>Perfetti da condividere</nobr></h2>
                    </div>
                    <p class="selection-card-description">Serve una scusa per stare insieme? Ordina dai ristoranti che trasformeranno la tua serata in una vera festa.</p>
                    <p class="selection-card-discover">Scopri Perfetti da condividere</p>
                </div>
            </a>
            <!-- FOUTH CARD -->
            <a class="selection-link-small" href="">
                <div class="selection-card">
                    <div class="selection-img-container">
                        <img class="selection-img" src="https://f.roocdn.com/images/menu_tags/293/menu-tag-image.jpg?width=430&height=150&auto=webp&format=jpg&fit=crop&v=1547125827" alt="">
                        <h2 class="selection-img-title"><nobr>Esclusiva Deliveboo</nobr></h2>
                    </div>
                    <p class="selection-card-description">I più famosi, i più buoni, i preferiti. Quelli che trovi solo su Deliveboo.</p>
                    <p class="selection-card-discover">Scopri Esclusiva Deliveboo</p>
                </div>
            </a>
        </div>
      </div>
  </section>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

.selection-container{
    max-width: 100vw;
    display: flex;
    justify-content: center;

    .selection-sub-container{
        width: 1024px;
        display: flex;
        flex-direction: column;
        position: relative;
        margin-top: 50px;
        margin-bottom: 30px;

        .selection-title{
            font-weight: 700;
            margin-bottom: 30px;
        }
    
        .selection-card-container{
            margin-bottom: 50px;
            display: flex;
            flex-wrap: wrap;
            gap: 3%;
    
            .selection-link-small{
                text-decoration: none;
                color: currentColor;
                margin-bottom: 20px;
                width: 38%;

                &:hover .selection-img{
                    box-shadow: 0px 0px 33px -5px;
                    transition: 0.2s ease-in;
                    border-radius: 5px;
                }
    
                .selection-card{

                }
            }

            .selection-link-big{
                text-decoration: none;
                color: currentColor;
                margin-bottom: 40px;
                width: 59%;

                &:hover .selection-img{
                    box-shadow: 0px 0px 33px -5px;
                    transition: 0.2s ease-in;
                    border-radius: 5px;
                }

                .selection-card{

                }
            }
            @media (max-width: 1024px) {
                
                .selection-link-small, .selection-link-big{
                    width: 90%;
                }
            }   

            @media (max-width: 650px) {

                .selection-img-title{
                    font-size: 22px;
                }
            } 
        }
    }

    .selection-img-container{
        position: relative;
        
        .selection-img{
            height: 150px;
            width: 100%;
            margin-bottom: 13px;
        }
    
        .selection-img-title{
            position: absolute;
            font-weight: 700;
            font-size: 34px;
            color: white;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    
    }

    .selection-card-description{
        font-size: 16px;
        padding-right: 10px;
        margin-bottom: 3px;
    }

    .selection-card-discover{
        font-size: 16px;
        color: #00CCBC;
    }

    @media (max-width: 1024px) {
        .selection-title{
            text-align: center;
        }

        .selection-card-container{
            justify-content: center;
            gap: 0;
        }

        .selection-img{
            border-radius: 5px;
            object-fit: cover;
            object-position: center;
        }
    }     

    @media (max-width: 650px) {
        .selection-title{
            font-size: 22px;
        }
    } 
}
</style>