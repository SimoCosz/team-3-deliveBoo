<template>
    <div class="container categories">
        <h1 class="pt-5 pb-1">{{categoriesTitle}}</h1>
        <ul class="categories_list px-3">
            <li class="category_name" v-for="category in categories" :key="category.id">
                {{category.name}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
  data(){
    return{
      categories: [],
      categoriesTitle: 'Cerchi qualcos\'altro?'
    }
  },
  mounted(){
      axios.get('/api/categories')
      .then(res =>{
        const {categories} = res.data
        this.categories = categories
    })
  }  
}
</script>

<style lang="scss">
    .categories{
        padding: 0px;
        h1{
            font-size: 30px;
            font-weight: 700;
        }
        .categories_list{
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            list-style: none;
            gap: 15px;
            padding: 20px 0px;
            .category_name{
                padding: 0px 5px;
                font-size: 22px;
                font-weight: 700;
                background-color: #f6f6f6;
                border-radius: 5px;
                text-transform: capitalize;
                cursor: pointer;
                &:hover{
                    box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
                }
                a{
                    font-style: none;
                    color: currentColor;
                    text-decoration: none;
                }
            }
        }
    }
</style>