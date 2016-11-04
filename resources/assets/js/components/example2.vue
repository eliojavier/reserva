<template>
    <div>
        <header-component/>
        <div>this is template body</div>
        <other-component/>
    </div>
</template>
<style>
    body{
        background-color:#ff0000;
    }
</style>
<script>
    new Vue({
  el: '#example',
  data: {
    message: 'Hello Vue.js!'
  }
});
</script>
