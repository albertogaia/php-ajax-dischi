Vue.config.devtools = true;

const app = new Vue({
    el : '#app',
    data: {
        url: 'http://localhost:8888/ESERCITAZIONI/php-ajax-dischi/utilities/API/server.php',
        songs: [],
        genres:[],
        genreSelected: '',
        filteredGenre: [],
    },
    methods: {
        getFilteredList(){
            if(this.genreSelected == 'all'){
                this.filteredGenre = this.songs;
            }else{
                this.filteredGenre = this.songs.filter(song=>{
                    if(song.genre == this.genreSelected){
                        return song;
                    }
                })
            }
        },
    },
    created() {
        axios
            .get(this.url)
            .then(res=>{
                this.songs = res.data;
                for(let i = 0; i < res.data.length; i++){
                    if(!this.genres.includes(res.data[i].genre)){
                    this.genres.push(res.data[i].genre)
                    }
                }
                this.getFilteredList()
            })
          
    },
    mounted() {
        this.genreSelected = 'all';
    },
})