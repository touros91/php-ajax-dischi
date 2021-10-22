const app = new Vue({
    el: "#root",
    data: {
        albums: null
    },
    created() {
        axios.get("http://localhost:8888/php-ajax-dischi/api/index.php")
        .then((response) =>
            {
                this.albums = response.data;
                console.log(this.albums);
            }
        )
        .catch(function(error){
            console.log(error);
        });
    }
});