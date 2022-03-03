function adjModal() {
    $(".modalBG").css("height", window.outerHeight + "px");
    let h = (window.innerHeight/2 > 250 )? (window.innerHeight/2-250):0;
    $(".modalBG").css("padding-top", h + "px");
}
var data;


function crud(act, table, id) {
    $.post("./api/crud.php", { act, table, data: { id } }, (res) => {

        data = JSON.parse(res);
        $(".modalPage").load("modal/collection.html", () => {
            showData('collections');
            $(".modalBG").css("display","flex");
        })
    })
}

function showData(table) {
    switch (table) {
        case 'collections':
            $("#modal_img").attr("src", "./img/collections/"+data[0].img)
            $("#modal_name").text(data[0].name)
            $("#modal_link").attr("href",data[0].link)
            $("#modal_intro").text(data[0].intro)
            
            break;
    }
}