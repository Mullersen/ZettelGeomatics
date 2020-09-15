<template>
  <section>
    <div class="container">
      <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-start">
          <a class="navbar-item" href="#home">
            <img src="/logo/logo-cropped.jpg" />
          </a>

          <a
            role="button"
            class="navbar-burger burger"
            aria-label="menu"
            aria-expanded="false"
            data-target="navbarBasic"
          >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasic" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item" href="#home">HOME</a>
            <a class="navbar-item" href="#services">OUR SERVICES</a>
            <a class="navbar-item" href="#contact">CONTACT</a>
            <a class="navbar-item" href="#location">LOCATION</a>
          </div>
        </div>
      </nav>
    </div>
  </section>
</template>

<script>
export default {
  Name: "Navigation",
};
</script>

<style scoped>
img {
  max-height: 10vh;
}
.navbar-item {
    margin-right: 3rem;
    margin-left: 3rem;
    margin-top: auto;
    margin-bottom: auto;
    padding: 2px;
}
.navbar-item:after{
    border-bottom: 3px solid #152982;
    transform: scaleX(0);
    transition: all 0.2s ease-in-out;
}
.navbar-item:hover:after{
    transform: scaleX(1);
}
.navbar-start{
    margin: 2px auto 2px auto !important;
}
</style>
