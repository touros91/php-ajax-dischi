const app = new Vue({
    el: "#root",
    data: {
        albums: null,
        genreList: [],
        selectedValue: ""
    },
    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/api/index.php")
        .then((response) =>
            {
                this.albums = response.data;
                this.albums.forEach((element) => {
                    if (this.genreList.includes(element.genre) == false){
                        this.genreList.push(element.genre);
                    }
                });
            }
        )
        .catch(function(error){
            console.log(error);
        });
    },
    methods: {
        selectGenre() {
            axios.get("http://localhost:8888/php-ajax-dischi/api/index.php", {
                params: {
                  genre: this.selectedValue
                }
            })
            .then((response) =>
                {
                    this.albums = response.data;
                }
            )
            .catch(function(error){
                console.log(error);
            });
        }
    }
});