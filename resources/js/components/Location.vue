<template>
  <section id="location">
    <div class="section is-small">
      <div class="container has-text-centered">
        <h1 v-scrollanimation class="title">LOCATION</h1>
        <svg
          v-scrollanimation
          aria-hidden="true"
          focusable="false"
          data-prefix="fas"
          data-icon="map-marker-alt"
          class="svg-inline--fa fa-map-marker-alt fa-w-12"
          role="img"
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 384 512"
        >
          <path
            fill="currentColor"
            d="M172.268 501.67C26.97 291.031 0 269.413 0 192 0 85.961 85.961 0 192 0s192 85.961 192 192c0 77.413-26.97 99.031-172.268 309.67-9.535 13.774-29.93 13.773-39.464 0zM192 272c44.183 0 80-35.817 80-80s-35.817-80-80-80-80 35.817-80 80 35.817 80 80 80z"
          />
        </svg>
        <a href="https://goo.gl/maps/mSvQ9weB5stk82qS6" target="_blank">
            <h2
            v-scrollanimation
            class="subtitle"
            style="display:inline-block;"
            >112 Kananaskis Way, Canmore, AB</h2>
        </a>
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
img {
  display: inline-block;
  max-height: 20px;
}
</style>
