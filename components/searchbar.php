<form class="form_search" method="post" action="../recherche.php" onsubmit="return do_search();">
  <input type="text" id="search_term" name="search_term" placeholder="Recherchez" onkeyup="do_search();">
    <button class="form_search_submit"
        type="submit"
        name="search"
        value="SEARCH"
        data-content="inline"
        id="search">
        GO
    </button>
 </form>
<script>
    $('input').on('keyup', function() {
        if (this.value.length > 0) {
            $("#search").addClass("active");
        }else {
            $("#search").removeClass("active");
        }
    });
    $(document).ready(function (e) {
        $("#search").lightWeightPopup({ 
            width: "60%",
            height: "fit-content",
            top: "20px",
        });
    });
    function do_search() {
        var search_term = $("#search_term").val();
        $.ajax ({
            type:'post',
            url:'../recherche.php',
            data:{
                search:"search",
                search_term:search_term
            },
            success:function(response){
                document.getElementById("result_div").innerHTML=response;
            }
        });
        return false;
    }
</script>
<div class="lwp-inline">
    <div id="result_div">salut</div>
</div>