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
            <form class="contact-form" @submit.prevent="sendEmail">
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Name</label>
                </div>
                <div class="field-body">
                  <div class="field">
                    <div class="control">
                      <input
                        class="input"
                        type="text"
                        placeholder="Your name"
                        name="from_name"
                        required
                      />
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
                    <div class="control has-icons-left has-icons-right">
                      <input
                        class="input"
                        type="email"
                        placeholder="Your email address"
                        name="from_email"
                        required
                      />
                      <span class="icon is-small is-left">
                        <i class="fas fa-envelope"></i>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="field is-horizontal">
                <div class="field-label">
                  <label class="label">Phone</label>
                </div>
                <div class="field-body">
                  <div class="field is-expanded">
                    <div class="field has-addons">
                      <p class="control">
                        <a class="button is-static">+1</a>
                      </p>
                      <p class="control is-expanded">
                        <input
                          class="input"
                          type="tel"
                          placeholder="Your phone number"
                          name="from_phone"
                          required
                        />
                      </p>
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
                        class="textarea input"
                        placeholder="The reason you are contacting Zettel Geomatics"
                        name="message_html"
                        required
                      />
                    </div>
                  </div>
                </div>
              </div>
              <div class="container has-text-centered">
                  <input class="button" type="submit" value="Send" />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="modal modal2 is-clipped">
      <div class="modal-background" @click="modalClose"></div>
      <div class="modal-content">
        <div class="box">
          <h2 id="modaltitle" class="title">Your message was sent successfully!</h2>
        </div>
      </div>
      <button @click="modalClose" class="modal-close is-large" aria-label="close"></button>
    </div>
  </section>
</template>

<script>
import emailjs from 'emailjs-com';

export default {
  Name: "Contact",
  methods: {
    sendEmail: (e) => {
      emailjs.sendForm('service_dv6bjcr', 'template_fll5kba', e.target, 'user_90nNNiKm4iQ0beQCdb1Lz')
        .then((result) => {
            console.log('SUCCESS!', result.status, result.text);
            var input = document.getElementsByClassName("input");
            console.log(input);
            for (let element of input){
                element.value = "";
            }
            var modal = document.getElementsByClassName("modal2");
            for (let element of modal){
                element.classList.add("is-active");
            }
        }, (error) => {
            console.log('FAILED...', error);
        });
    },
    modalClose: function () {
      var modals = document.getElementsByClassName("modal");
      for (let element of modals){
        element.classList.remove("is-active");
      }
    },
  }
};
</script>

<style scoped>
.hero {
  min-height: 80vh;
  background-image: url("/images/3070a1fdc6842e57a4eab565e87265a5.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}

@media screen and (min-width: 769px) {
  .field-label {
    flex-grow: 0.5 !important;
  }
}
</style>

