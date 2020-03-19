function getCom()
{
    $.ajax({
        type: "GET",
        url: "index.php?page=getCom",
        data: {id: $("#id").val()},
        dataType: "json",
        success: function (response) {
            console.log(response);
            for (const com of response) {
                $("#commentaires").append("<div class='jumbotron mt-3' id="+ com.commentaire_id + "></div>")
                $("#" + com.commentaire_id).append("<h3>"+ com.title +"</h3>")
                $("#" + com.commentaire_id).append("<p>"+ com.content +"</p>")
            }
        }
    });
}

$("button").click(function(e){
    e.preventDefault()
    $.ajax({
        type: "POST",
        url: "index.php?page=newCom",
        data: $("form").serialize(),
        dataType: "json",
        success: function (response) {
            $("#title").val("");
            $("#content").val("");
            $("#commentaires").html("");
            getCom();
        }
    })
})

$(document).ready(getCom)