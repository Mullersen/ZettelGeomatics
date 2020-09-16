<template>
    <section class="hero"  id="home">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 id="title" class="title">Zettel Geomatics</h1>
                <button class="button"><a href="#contact">CONTACT</a></button>
            </div>
        </div>
    </section>
</template>

<script>
export default {
     Name:"Welcome",

}
</script>

<style scoped>
.hero{
    min-height: 70vh;
    background-image: url("/images/bc9641_347f4a9b418d49f1bf547e1550e244dd_mv2_d_3264_1840_s_112.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.container{
    margin-top:10vh;
}
#title{
    font-size: 3rem;
}
</style>
