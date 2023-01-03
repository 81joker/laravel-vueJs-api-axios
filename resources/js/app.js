// require("./bootstrap");

// window.Vue = require("vue");

// Vue.component("front-page", require("./components/Front.vue").default);

// const app = new Vue({
//     el: "#app",
// });
import { createApp } from "vue";
import Front from "./components/Front.vue";

const app = createApp({});

app.component("front-page", Front);

app.mount("#app");
