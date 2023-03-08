document.getElementById("chk1").addEventListener("click", function(evt){

    //evt.currentTarget permet de return l'element ciblé par l'element click
    // console.log(evt.currentTarget);

    // acces au attributs
    // console.log(evt.currentTarget.dataset.valeur);
    // console.log(evt.currentTarget.id)
    if (evt.currentTarget.dataset.valeur=='change') {
        // console.log('j rentre')
        document.getElementById('nav').setAttribute("style","display:flex");
        evt.currentTarget.dataset.valeur="reset";     
    }else{
        document.getElementById('nav').setAttribute("style","display:none");
        evt.currentTarget.dataset.valeur="change";     
    }
});

// api's anime start 
const base_url = "https://api.jikan.moe/v4/";
// 
function searchAnime(e){
    e.preventDefault();

    const form = new FormData(this);
    const query = form.get('rech') ;
    console.log(query);
    
    fetch(`${base_url}anime?q=${query}`)
    .then(res => res.json())
    // .then(data => console.log(data))
    .catch(err=>console.warn(err.message))

}
// 
function pageLoaded(){
    // 
    const form = document.getElementById("searchbar");
    form.addEventListener("submit",searchAnime);
}

window.addEventListener("load",pageLoaded);