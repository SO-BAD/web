function modal(id){
    crud('r','collections',id);
}


window.onclick = function(e){
    if(e.target.className == "modalBG"){
        $(".modalBG").css("display","none");
    }
}
function closeModal(){
    $(".modalBG").css("display","none");
}