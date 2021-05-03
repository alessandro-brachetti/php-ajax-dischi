Vue.config.devtools = true;

var app = new Vue ({
  el: '#root',
  data: {
    disks: [],
    genres: [],
    genre: '',
  },

  created () {
    axios.get('http://localhost:8888/php-ajax-dischi/dist/php/call.php')
      .then((response) => {
        console.log(response);
        this.disks = response.data;
        console.log(this.disks);
      });
  },

})
