<template>
  <section id="location">
    <div class="section is-small">
      <div class="container has-text-centered">
        <h1 v-scrollanimation class="title">LOCATION</h1>
          <h2 v-scrollanimation class="subtitle">112 Kananaskis Way, Canmore, AB</h2>
      </div>
    </div>
    <section class="hero is-medium"></section>
  </section>
</template>

<script>
export default {
  Name: "Location",
};
</script>

<style scoped>
.hero {
  min-height: 70vh;
  background-image: url("/images/canmore.png");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
.subtitle {
  margin-top: 2rem;
}
img{
    display:inline-block;
    max-height:20px;
}
</style>
