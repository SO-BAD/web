function adjModal() {
    $(".modalBG").css("height", window.innerHeight + "px");
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

            break;
    }
}