<template>
    <div class="news container">
            <h1 class="pt-5 pb-2 text-center display-6">
            {{titoloNews}}
            </h1>
        <section class="news_section container">
            <div id="card_container">	
                <div class="product-details">
	                <h3 class="pb-2">
                        {{deliverooWorkTitle}}
                    </h3>
		            <p class="information">
                        {{deliverooWorkP}}
                    </p>
                    <button>
                        Contattaci
                    </button>
                </div>
                <div class="product-image">
                    <img src="https://cwa.roocdn.com/_next/static/business.4fa3b853.jpg">
                </div>
            </div>
            <div id="card_container">	
                <div class="product-details">
	                <h3 class="pb-2">
                        {{appTitle}}
                    </h3>
		            <p class="information">
                        {{appP}}
                    </p>
                    <div class="download">
                        <div class="download_badge" :style="appStore"></div>
                        <div class="download_badge" :style="googlePlay"></div>
                    </div>
                </div>
                <div class="product-image">
                    <img src="https://dirittodellinformazione.it/wp-content/uploads/2022/03/thanitjanuary2022_61.jpg">
                </div>
            </div>
        </section>
    </div>
</template>

<script>
export default {
    data(){
        return{
            deliveroo: {backgroundImage: "url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1OTgiIGhlaWdodD0iNTk4IiB2aWV3Qm94PSIwIDAgNTk4IDU5OCIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxkZWZzPjxwYXRoIGlkPSJhIiBkPSJNMi45MDMgMTQ5LjA3NkMwIDE0MC40NDQgMCAxMzQuODE4IDAgMTE0Ljc2NlY1OS4yMzRjMC0yMC4wNTIgMC0yNS42OCAyLjkwMy0zNC4zMUEzNy4wMiAzNy4wMiAwIDAgMSAyNC45MjQgMi45MDFDMzMuNTU2IDAgMzkuMTgyIDAgNTkuMjM0IDBoNTUuNTMyYzIwLjA1MiAwIDI1LjY3OCAwIDM0LjMxMSAyLjkwMWEzNy4wMjIgMzcuMDIyIDAgMCAxIDIyLjAyIDIyLjAyM0MxNzQgMzMuNTU0IDE3NCAzOS4xODIgMTc0IDU5LjIzNHY1NS41MzJjMCAyMC4wNTIgMCAyNS42NzgtMi45MDMgMzQuMzFhMzcuMDEyIDM3LjAxMiAwIDAgMS0yMi4wMiAyMi4wMjFDMTQwLjQ0NCAxNzQgMTM0LjgxOCAxNzQgMTE0Ljc2NyAxNzRINTkuMjMzYy0yMC4wNTIgMC0yNS42NzggMC0zNC4zMS0yLjkwM2EzNy4wMSAzNy4wMSAwIDAgMS0yMi4wMjEtMjIuMDIxeiIvPjwvZGVmcz48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGZpbGw9IiNFMjAwNEYiIGQ9Ik0tMSAwaDYwMHY2MDBILTF6Ii8+PHBhdGggZmlsbD0iI0ZGRiIgZD0iTTY3OC44MTMgMzc5LjMzM2wtNzEuNDcxLTIyLjAwMy0yLjgwMSA3MS45MDctMTIuMjE2IDMuNjQ5LTE4LjE0LTg1Ljc2LTQyLjkzNC0xMy4yMi0xNy40MDYgNjcuNzM2LTExLjYyNCAyLjc4LTMuMS04MC40MDgtNDguMjk5LTE0Ljg3My0yOS4wNzkgNjcuMjk1LTguNDc1IDEuNTg4IDIuMzEzLTc0LjI2NC03Mi44NDQtMy43Ni00NS42ODIgMzAuNDQ3LTMuMzE3IDQ4LjM2OCAxOC43ODUgMjcuNjk1TDYyNy4zNiA1MDcuMTU1bDc1LjA1NC0yNS4zNjcgMTQuMDY3LTUxLjA4LTM3LjY2OC01MS4zNzV6bTIzLjM3OCAxMjAuOTQzbC05Ny4xMzUgNDAuNTQtNDUuNTQ2LTM3LjEwOS01Mi43NDUgNy4yNzUtNDIuNDU3LTQ0Ljk5Ny01OS44MTQgMi43NC00NC42NzctMzYuNDQtNzAuMDI2LTYuNzNMMjg3IDQ1NC4yOThsNjMuNzcyIDEwLjc4NSAzOC44NTIgMzMuMjMyIDY1LjE3MiA0Ljk4NiA0NS4yNDIgMzguMDQ1IDQ5LjIyNy0xLjQ4MiA0OS42ODkgMzMuNzIzIDExMy4yODctNDcuNDY1LTEwLjA1LTI1Ljg0NnptLTQwNy42MjgtMjcuOTU4bDEuNzMyIDMxLjM5NSAxMC42NTcgMjAuMzY1IDI3MS41NDQgMTA0LjI4OCA1MC4xMjkgNi44ODUgNDcuNTgyLTE0LjY0NSAyMi44NC0zMC44MiAzLjM4My0zNC4yMzYtNzUuODc0IDMxLjUyOS0zMy44ODQgMy42NzYtMjk4LjExLTExOC40Mzd6TS0zMi4wODUgMTUzLjI1MmwyLjM1NSA0My42NDQgMjY0LjQ1NS01LjIwNS0uMTEzLTQ1Ljg1Mi0yNjYuNjk3IDcuNDEzek0tNTAgMTM3LjU0NWw2Ljg1Mi0zMy4wMSAzMi43MzggOS4zMTEgMzIuMTUtMjAuOTc1IDQ1Ljc0MiAyMC41NDUgMzIuMTQtMjYuMDM1IDUzLjk2NyAxOS4zODIgNDQuOTMxLTM1LjQ1OSAxOS4yNTMgMjUuMDc0LTYwLjQ1MSA0My42NTMtNDkuOTQ1LTIyLjgxNC0zNi42IDIzLjc4LTQxLjQ2NC0xNS45NTMtMzguMjI0IDE3LjU4NUwtNTAgMTM3LjU0NXpNMTYyLjc1Ny0xMEwtNi44MzcgMTQuMzk4bC0zMC4xODcgNzkuNzY0Yy0xLjEzLjE5MyAyNTcuNjA3LTM4Ljc5OCAyNTcuNjA3LTM4Ljc5OEwxNjIuNzU3LTEwek0tNDMuMTQ4IDIxMy45MjZsNDkuMDgzIDcwLjI4IDE3Ny4yNDEtNi4zNzYgNDMuODY3LTczLjA4M2MxLjE0Ny0uMDQ4LTI3MC4xOTEgOS4xNzktMjcwLjE5MSA5LjE3OXoiIG9wYWNpdHk9Ii4zNjMiLz48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMTQgMjE2KSI+PG1hc2sgaWQ9ImIiIGZpbGw9IiNmZmYiPjx1c2UgeGxpbms6aHJlZj0iI2EiLz48L21hc2s+PHVzZSBmaWxsPSIjMzMzIiB4bGluazpocmVmPSIjYSIvPjxnIG1hc2s9InVybCgjYikiPjxwYXRoIGZpbGw9IiMwMENDQkMiIGQ9Ik0wIDBoMTc0djE3NEgweiIvPjxwYXRoIGZpbGw9IiNGRkYiIGQ9Ik03Ny40NTEgOTcuOTVjLjYyNC0yLjQgMy41NjQtMi43NTggNS4wMzYtMi43ODRhMy43NTUgMy43NTUgMCAwIDEgMS42MTYuMzMyYzEuMDQuNDcgMi44MDIgMS40NzcgMy4xNTggMy4wMS41MTQgMi4yMDYuMDE5IDQuMDU3LTEuNTYzIDUuNTAzLTEuNTgyIDEuNDQ1LTMuNjcyIDEuMzEzLTUuODg2LjU3Ni0yLjIxNi0uNzMzLTMuMTk5LTMuNDA3LTIuMzYtNi42Mzd6bTIxLjUzMyA0LjM3NmMuMTItLjgyOC40NS0xLjYwOC45Ny0yLjI2NC43MTQtLjkwNCAxLjkwNi0yLjA4IDMuMjgyLTIuMTE4IDIuMjM4LS4wNTggNC4xNjQuOTQ1IDUuMjUyIDIuNzU4IDEuMDkgMS44MTEuNTQ1IDMuODA2LS42MDUgNS44MDItMS4xNSAxLjk5MS00LjE2MyAyLjI1NS03LjEyNy44MDUtMi0uOTc4LTEuOTktMy40NjctMS43NzItNC45ODN6TTM4LjE1IDEzMS42MzdsNzYuNjMgMTYuMjYzIDE3LjUyNi0zOS4zMDIgOC4zNDUtNzkuMjczLTMwLjczOC0zLjIyNS01LjY1MyA1My43MDdMOTQuNjIgMzQuNTNsLTMwLjIzIDYuNDE2IDkuNjM4IDQ1LjI3Ny00My41NzggOS4yNDggNy42OTkgMzYuMTY2eiIvPjwvZz48L2c+PC9nPjwvc3ZnPg==)"},
            appStore: {backgroundImage: "url(data:image/png;base64,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)"},
            googlePlay:{backgroundImage: "url(data:image/png;base64,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)"},
            titoloNews: 'Novità dalla nostra cucina',
            deliverooWorkTitle: 'Deliveroo for work',
            deliverooWorkP: 'Clienti o colleghi affamati? Il nostro team corporale può aiutarti.',
            appTitle: 'Hai già la nostra app?',
            appP: 'Scaricala ora - disponibile su Apple Store e Google Play!',
        }
    }
}
</script>

<style lang="scss">
.news_section{
    display: flex;
    align-items: center;
    justify-content: space-between;
    #card_container{
        box-shadow: 0 15px 30px 1px grey;
        background: rgba(255, 255, 255, 0.90);
        text-align: center;
        border-radius: 5px;
        overflow: hidden;
        margin: 5em auto;
        height: 350px;
        width: 48%;
        // border: 5px dashed blue;
        .product-details {
            position: relative;
            text-align: left;
            overflow: hidden;
            padding: 20px;
            height: 100%;
            float: left;
            width: 40%;
            h3{
                display: inline-block;
                position: relative;
                font-size: 24px;
                color: #344055;
                margin: 0;
                @media (max-width: 991px){
                    font-size: 20px
                }    
            }
            p{
                font-size: 18px;
                @media (max-width: 991px){
                    font-size: 14px
                }    
            }
            button{
                font-weight: 700;
                color: white;
                font-size: 14px;
                padding: 10px;
                background-color: #00c1b2;
                width: 125px;
                border: none;
                border-radius: 5px;
                opacity: 0.8;
                &:hover{
                    transition: ease-in-out 0.5s;
                    opacity: 1;
                }
                @media (max-width: 991px){
                    width: 75px;
                    padding: 5px;
                }    
            }
            .download{
                width: 100%;
                height: 27%;
                // border: 3px solid green;
                display: flex;
                flex-direction: column;
                gap: 2px;
                .download_badge{
                    // border: 1px solid red;
                    background-position: center;
                    background-size: cover;
                    width: 69%;
                    height: 40%;
                    border-radius: 5px;
                    cursor: pointer;
                    @media (max-width: 1100px){
                        height: 37%;
                        width: 100%;
                    }              
                    @media (max-width: 767px){
                        height: 38%;
                        width: 80%;
                    }             
                    @media (max-width: 435px){
                        height: 35%;
                        width: 78%;
                    }               
                    @media (max-width: 400px){
                        height: 35%;
                        width: 90%;
                    }            
                }
            }
        }
        .product-image {
            transition: all 1s ease-out;
            display: inline-block;
            position: relative;
            overflow: hidden;
            height: 100%;
            float: right;
            width: 45%;
            display: inline-block;
            img{
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        }
        @media (max-width: 767px){
            width: 100%;
        }         
    }
    .product-image:hover img {transition: all 1s ease-out;}
    .product-image:hover img {transform: scale(1.2, 1.2);}
    @media (max-width: 767px){
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }     
}
</style>