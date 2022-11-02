<?php 
    require_once 'includes/links.php';
    require_once 'includes/Mobile_Detect.php';
    $detect = new Mobile_Detect;
    if ($detect->isMobile()) {
        $url = '/mobile';
    }
    else{
        $url = '/web';
    }
?>
<div class="loader">
    <img class="loaderimg" src="../src/img/loader.gif" alt="Loading..." />
    <img class="copyright" src="../src/img/dawa-tech.svg" alt="Loading..." />
</div>
<style>
.loader {
    position: fixed;
    z-index: 99;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    display: flex;
    justify-content: center;
    align-items: center;
}
.loader.loaderimg {
    width: 300px;
}
.copyright {
    width: 100px;
    bottom: 20px;
    position: fixed;
}
.loader.hidden {
    animation: fadeOut 1s;
    animation-fill-mode: forwards;
}
@keyframes fadeOut {
    100% {
        opacity: 0;
        visibility: hidden;
    }
}
.thumb {
    height: 100px;
    border: 1px solid black;
    margin: 10px;
}
</style>
<script>
    window.addEventListener('load', () => {
    setTimeout(function(){ 
        const loader = document.querySelector(".loader");
        loader.className += " hidden";
        location.replace("<?php echo $url ?>")
    }, 2000);
});
</script>