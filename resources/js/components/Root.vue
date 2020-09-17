<template>
    <div>
        <Navigation/>
        <Welcome/>
        <MyLine v-scrollanimation/>
        <Services/>
        <MyLine v-scrollanimation/>
        <Contact/>
        <MyLine v-scrollanimation/>
        <Location/>
        <footer class="footer" style="background-color:#9D9B95;">
            <div class="content">
                <p>All rights reserved Zettel Geomatics</p>
            </div>
        </footer>
    </div>
</template>

<script>
    import Navigation from './Navigation';
    import Welcome from './Welcome';
    import Services from './Services';
    import Contact from './Contact';
    import Location from './Location';
    import MyLine from './MyLine';

    export default {
        name: "Root",
        components: {
            Navigation,
            Welcome,
            Services,
            Contact,
            Location,
            MyLine,
        },
    }
</script>
<style>
html{
    scroll-behavior: smooth;
}
.subtitle{
    font-family: 'Rambla', sans-serif;
    font-weight:bold;
}
.before-enter{
 opacity: 0 ;
 transform: translateY(70px);
 transition: all .8s .2s ease-out;
}
.enter{
 opacity: 1 ;
 transform: translateY(0px);
}
#services, #contact, #location {
  scroll-margin-top: 100px;
}
.title{
    text-shadow: 1px 1px 2px #9D9B95;
}
a:hover{
    color: #9D9B95;
}
</style>
