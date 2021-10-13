Vue.config.devtools = true;

const app = new Vue({
    el : '#app',
    data: {
        url: 'utilities/API/server.php',
        songs: [],
        genres:[],
        genreSelected: localStorage.getItem('genre-selected') || '',
        filteredGenre: [],
        currentTheme: localStorage.getItem('theme-color') || 'dark-theme',
    },
    methods: {
        getFilteredList(){
            const storedGenre = localStorage.getItem('genre-selected');

            if(this.genreSelected == 'all'){
                this.filteredGenre = this.songs;
                localStorage.setItem('genre-selected', 'all');
                this.genreSelected = localStorage.getItem('genre-selected');
            } else{
                this.filteredGenre = this.songs.filter(song=>{
                    if(song.genre == this.genreSelected){
                        return song;
                    }
                    localStorage.setItem('genre-selected', this.genreSelected);
                    this.genreSelected = localStorage.getItem('genre-selected');
                })
            }
        },

        changeTheme(){
            const storedTheme = localStorage.getItem('theme-color');
            if(storedTheme === 'dark-theme'){
                localStorage.setItem('theme-color', 'light-theme');
                this.currentTheme = localStorage.getItem('theme-color');
            }else{
                localStorage.setItem('theme-color', 'dark-theme');
                this.currentTheme = localStorage.getItem('theme-color');
            }
        }
    },
    
    created() {
        axios
            .get(this.url)
            .then(res=>{
                this.songs = res.data;
                for(let i = 0; i < res.data.length; i++){
                    !this.genres.includes(res.data[i].genre) ? this.genres.push(res.data[i].genre) : null
                }
                this.getFilteredList()
            })
          
    },
})