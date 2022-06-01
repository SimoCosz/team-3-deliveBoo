<template>
    <section class="jumbo-container">
        <div class="jumbo-sub-container">

            <div class="jumbo-left">
                <h1>I piatti che ami, a domicilio.</h1>
            </div>

            <div class="jumbo-right">
                <img class="img-svg" src="../../../public/img/jumbo-bkg.svg" alt="">
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
    background-position: center;
    background-repeat: no-repeat;
    height: 400px;
    width: 100vw;
    display: flex;
    justify-content: center;

    .jumbo-sub-container{
        width: 1024px;
        display: flex;
        position: relative;

        .jumbo-left{
            width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;

            h1{
                color: #440063;
                font-weight: 700;
            }
        }
    
        .jumbo-right{
            width: 50%;
            position: relative;
            
            .img-svg{
                height: 350px;
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
            }
        }
    }

}
</style>