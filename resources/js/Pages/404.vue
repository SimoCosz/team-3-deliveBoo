<template>
 <div>
    <div class="wrapper vh-100 d-flex flex-column align-items-center justify-content-center gap-4">
      <img class="logo" src="../../../public/img/logo-404.png" alt="">
      <a class="btn-back btn btn-dark p-3 mt-5" href="/">Torna alla home</a>
    </div>
 </div>

</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>
.wrapper{
  background-color: #00CCBC;

  .logo{
    height: 400px;
    width: 700px;
  }
  @media (max-width: 780px){
    .logo{
      width: 270px;
      height: 160px;
    }
    .btn-back{
      font-size: 14px;
    }
  }

  .btn-back{
    font-size: 20px;
  }
  @media (max-width: 780px){
    .btn-back{
      font-size: 14px;
    }
  }
}

</style>

