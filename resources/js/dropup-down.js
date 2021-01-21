var nav= null;
window.onload= start;

    function start() {
        document.getElementById("drop1").addEventListener("click", change);
        document.getElementById("drop2").addEventListener("click", change);
        nav = document.getElementById("nav");
    }

    function change(event){
        if(nav.classList.contains("is-sticky")){
            this.classList.remove('dropup');
            this.classList.add('dropdown');
        }
        else {
            this.classList.remove('dropdown');
            this.classList.add('dropup');
        }
};
