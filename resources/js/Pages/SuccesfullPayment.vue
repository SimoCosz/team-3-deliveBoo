<template>
  <div>
    <div class="d-flex justify-content-center py-5">
      <img class="logo" src="../../../public/img/logo-navbar.png" alt="">
    </div>
    <div class="wrapper d-flex flex-column align-items-center justify-content-center gap-4">
      <div class="box p-5">
        <h1>Pagamento avvenuto con successo</h1>
        <div class="text-center"><a class="btn-back btn btn-light p-3 mt-5 text-center" href="/">Torna alla home</a></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {

}
</script>

<style lang="scss" scoped>

.logo{
  width: 500px;
  height: 150px;
}
.box{
  // box-shadow: 0px 0px 20px 11px rgb(0 204 188 / 40%);
  border: 3px solid #D0EB99;
  border-radius: 10px;
  .btn-light{
    background-color: #D0EB99;
    font-weight: 700;
  }
}
</style>