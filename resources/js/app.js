
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

window.function = setupPlayingIndicator = () => {
  setInterval(() => {
      nowPlayingCheck();
      getTemperature();
  }, 2000);
};

window.function = getTemperature = () => {
    try {
        fetch("/api/temperature")
            .then(res => res.json())
            .then((json) => {
                if(json.temperature === "") {
                    document.getElementById("tempNumber").innerText = "-Fehler-";
                } else {
                    document.getElementById("tempNumber").innerText = json.temperature + " °C";
                }
            })
            .catch(err => {});
    } catch (e) {

    }
};

window.function = nowPlayingCheck = () => {
    try {
        fetch("/api/nowplaying")
            .then(res => res.json())
            .then((json) => {
                if (json.nowplaying === "undefined") {
                    console.log("Detected no song playing");
                    document.getElementById("musicNowPlayingTitle").innerText = "Nothing playing";
                } else {
                    console.log("Detected " + json.nowplaying + " playing.");
                    document.getElementById("musicNowPlayingTitle").innerText = json.nowplaying;
                }
            })
            .catch(err => {

            });
    } catch (e) {
        
    }
};

window.function = playMusic = (id) => {
    try {
        fetch("/api/playsong/" + document.getElementById("song" + id).innerText);
    } catch (e) {

    }
};

window.function = stopPlaying = (id) => {
    fetch("/api/stop_playing");
};

window.addEventListener('load', function() {
    setupPlayingIndicator();
});