<style>
    .nav-hov a:hover{
        border-bottom: 1px solid #000000;	
    }
    .bg_img{
        background-image: url(bg_img.jpg);
        position: relative;
        background-repeat: no-repeat;
        /* text-align: center; */
        background-size: cover;
        /* background-position: center;  */
        width: 100%;
        height: 100%; 
        /* z-index: 1; */
    }
    .bg_img:before {
        position: absolute;
        content: "";
        width: 100%;
        height: 100%;
        left: 0px;
        top: 0px;
        background-color: black;
        opacity: .7;
        z-index: -1;		
    }
    #bg-design{
        background: linear-gradient(to bottom, #33ccff 0%, #3366cc 100%);
        color: beige;
        height: 55px;
        width: 200px;
        padding: 5px; 
    }
</style>
