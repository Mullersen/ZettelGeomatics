<template>
  <section id="contact" class="hero">
    <div class="hero-body">
      <div class="section">
        <div class="container has-text-centered">
          <h1 v-scrollanimation class="title">CONTACT</h1>
        </div>
      </div>
      <div v-scrollanimation class="container">
        <div class="columns is-centered">
          <div class="column is-8">
            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Name</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input" type="text" placeholder="Your Name" />
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Email</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input" type="email" placeholder="Your Email Address" />
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Phone</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <input class="input" type="text" placeholder="Your Phone Number" />
                  </div>
                </div>
              </div>
            </div>
            <div class="field is-horizontal">
              <div class="field-label">
                <label class="label">Message</label>
              </div>
              <div class="field-body">
                <div class="field">
                  <div class="control">
                    <textarea
                      class="textarea"
                      placeholder="The reason you are contacting Zettel Geomatics"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="container has-text-centered">
                <button class="button">Contact</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
export default {
  Name: "Contact",
};
</script>

<style scoped>
.hero {
  min-height: 80vh;
  background-image: url("/images/3070a1fdc6842e57a4eab565e87265a5.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
</style>

