Vue.config.devtools = true;

const app = new Vue({
    el : '#app',
    data: {
        url: 'http://localhost:8888/ESERCITAZIONI/php-ajax-dischi/utilities/API/server.php',
        songs: [],
    },
    methods: {
        
    },
    created() {
        axios
            .get(this.url)
            .then(res=>{
                this.songs = res.data;
            })
    },
})