<template>
    <div class="container">
        <h1>Cerchi qualcos'altro?</h1>
        <ul>
            <li>
                <a href="#">
                    Pizza
                </a>
            </li>
            <li>
                <a href="#">
                    Italiano
                </a>
            </li>
            <li>
                <a href="#">
                    Dessert
                </a>
            </li>
            <li>
                <a href="#">
                    Siciliano
                </a>
            </li>
            <li>
                <a href="#">
                    Fast-Food
                </a>
            </li>
            <li>
                <a href="#">
                    Americano
                </a>
            </li>
            <li>
                <a href="#">
                    Healty-Food
                </a>
            </li>
            <li>
                <a href="#">
                    Vegetariano
                </a>
            </li>
            <li>
                <a href="#">
                    Caseificio
                </a>
            </li>
            <li>
                <a href="#">
                    Turco
                </a>
            </li>
            <li>
                <a href="#">
                    Arabo
                </a>
            </li>
            <li>
                <a href="#">
                    Messicano
                </a>
            </li>
            <li>
                <a href="#">
                    Hawaiiano
                </a>
            </li>
            <li>
                <a href="#">
                    Poke
                </a>
            </li>
            <li>
                <a href="#">
                    Giapponese
                </a>
            </li>
            <li>
                <a href="#">
                    Pesce
                </a>
            </li>
            <li>
                <a href="#">
                    Sushi
                </a>
            </li>
            <li>
                <a href="#">
                    Carne
                </a>
            </li>
            <li>
                <a href="#">
                    Cinese
                </a>
            </li>
            <li>
                <a href="#">
                    Paninoteca
                </a>
            </li>
            <li>
                <a href="#">
                    Bakery
                </a>
            </li>
            <!-- <li v-for="category in categories" :key="category.id">
                {{category.name}}
            </li> -->
        </ul>
    </div>
</template>

<script>
export default {
  data(){
    return{
      categories: []
    }
  },
  methods: {
    fetchCategories(){
      axios.get('/api/categories')
      .then(res =>{
        const {categories} = res.data
        this.categories = categories
    })
    .catch( err => {
      console.warn(err)
    })
    }
  },
  beforeMount(){
    this.fetchCategories();
  }  
}
</script>

<style lang="scss">
    .container{
        h1{
            font-size: 30px;
            font-weight: 700;
            padding-bottom: 15px;
        }
        ul{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            list-style: none;
            gap: 10px;
            li{
                padding: 0px 5px;
                font-size: 22px;
                font-weight: 700;
                background-color: #f6f6f6;
                border-radius: 5px;
                a{
                    font-style: none;
                    color: currentColor;
                    text-decoration: none;
                }
            }
        }
    }
</style>