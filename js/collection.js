function modal(id) {
    crud('r', 'collections', id);
}


window.onclick = function (e) {
    if (e.target.className == "modalBG") {
        $(".modalBG").css("display", "none");
    }
}
function closeModal() {
    $(".modalBG").css("display", "none");
}

function skill() {
    let skill_id = $("#skill_opt").val();
    if (skill_id == "0") {
        $(".clBox").show();
    } else {
        let collections = document.querySelectorAll(".collection");
        for (let i = 0; i < collections.length; i++) {
            if (collections[i].dataset.skills.split(",").includes(skill_id)) {
                document.querySelectorAll(".clBox")[i].style.display = "block";
            } else {
                document.querySelectorAll(".clBox")[i].style.display = "none";
            }
        }
    }

}