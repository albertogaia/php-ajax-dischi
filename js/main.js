Vue.config.devtools = true;

const app = new Vue({
    el : '#app',
    data: {
        url: 'utilities/API/server.php',
        genres:[],
        genreSelected: '',
        filteredGenre: [],
        currentTheme: localStorage.getItem('theme-color') || 'dark-theme',
    },

    methods: {
        getGenre(){
            axios
                .get(this.url + '?genere=' + this.genreSelected)
                .then(res => {
                    // console.log('NUOVA CHIAMATA')
                    this.filteredGenre = res.data;
                    for(let i = 0; i < res.data.length; i++){
                        !this.genres.includes(res.data[i].genre) ? this.genres.push(res.data[i].genre) : null
                    }
                })
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
        this.getGenre() 
    },
})