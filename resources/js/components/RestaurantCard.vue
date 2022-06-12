<template>
    <router-link class="card" tag="a" :to="{name:'menu.restaurant', params:{slug:element.slug} }">
      <div class="cover-wrapper">
        <figure>
          <img class="cover" :src="`/storage/${ element.cover }`" alt="">
          <!-- <img class="cover" :src="element.cover" alt=""> -->
        </figure>
        <div class="delivery">
          <p class="p-0 m-0">Consegna gratuita</p>
        </div>
      </div>
      <div class="descritpion p-2">
        <h5 class="title">{{element.name}}</h5>
        <p class="p-0 m-0">{{element.address}}, {{element.city}} </p>
        <p class="p-0 m-0">{{element.telephone_number}}</p>
      </div>
    </router-link>
</template>

<script>
  export default {
    props:{
      element: {
        type: Object,
      }
    }    
  }
</script>

<style lang="scss" scoped>
.card{
  width: calc((100% / 3) - 10px);
  overflow: hidden;

  .cover-wrapper{
    position: relative;
    width: 100%;
  
    .cover{
      object-fit: cover;
      object-position: center;
      height: 150px;
    }
  }

  .delivery{
    position: absolute;
    top: 10px;
    left: 0px;
    background-color: red;
    color: white;
    padding: 3px 6px;
    font-size: 12px;
  }

  .title{

    &::after{
      content: '';
      display: block;
      border: 1px solid #e9e8e8;
      width: 65%;
      margin-top: 5px;
    }
  }
}
@media (max-width: 1200px){
  .card{
    width: calc((100% / 2) - 10px);
  }
}

@media (max-width: 750px){
  .card{
    width: calc((100%));
    margin-right: 10px;
  }
}

</style>