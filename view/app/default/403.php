<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <div class="four">4</div>
    <div class="four-green">4</div>
    <div class="three">3</div>
    <div class="three-green">3</div>
    <span class="base"></span>
    <span class="keyhole"></span>
    <h2>Access denied..!!</h2>
    <span class="horn"></span>
    <span class="pointer_left">
        <i class="fa fa-mouse-pointer" style="font-size:88px;color:#bd1414"></i>
    </span>
    <span class="pointer_right">
        <i class="fa fa-mouse-pointer" style="font-size:88px;color:#bd1414"></i>
    </span>

</div>




<style>
    @import url('https://fonts.googleapis.com/css?family=Economica');
    html, body {
        margin: 0;
        top: 0;
        width: 100%;
        height: 100%;
        font-family: Economica;
        background-color: skyblue;
    }

    .container {
        top: 45%;
        left: 45%;
        position: absolute;
        transform: translate(-50%, -50%);
    }

    .base {
        width: 100px;
        height: 80px;
        border-radius: 0px 0px 50px 50px;
        background-color: lightpink;
        position: absolute;
        top: 50%;
        left: 50%;
    }

    .base::before {
        position: absolute;
        height: 60px;
        width: 80px;
        content: "";
        top: -88%;
        border-radius: 50px 50px 0px 0px;
        border-top: 10px solid hotpink;
        border-left: 10px solid hotpink;
        border-right: 10px solid hotpink;
    }

    .keyhole {
        background-color: black;
        position: absolute;
        top: 25px;
        left: 40px;
        width: 20px;
        height: 20px;
        border-radius: 50%;
    }

    .keyhole::before {
        content: "";
        background-color: black;
        width: 10px;
        height: 20px;
        position: absolute;
        top: 18px;
        left: 5px;
    }

    .four {
        position: absolute;
        width: 100px;
        height: 225px;
        top: -110px;
        left: -85px;
        font-size: 12em;
        color: hotpink;
        z-index: 999;
        font-size: 12em;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%);
        clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%);
    }

    .four-green {
        position: absolute;
        width: 100px;
        height: 310px;
        top: -110px;
        left: -85px;
        font-size: 12em;
        color: darkred;
        font-size: 12em;
    }

    .three {
        position: absolute;
        width: 100px;
        height: 225px;
        top: -110px;
        left: 110px;
        color: hotpink;
        z-index: 999;
        font-size: 12em;
        -webkit-clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%);
        clip-path: polygon(0 0, 100% 0, 100% 50%, 0 50%);
    }

    .three-green {
        position: absolute;
        width: 100px;
        height: 310px;
        top: -110px;
        left: 110px;
        font-size: 12em;
        color: darkred;
        font-size: 12em;
    }

    .container h2 {
        top: 100px;
        position: absolute;
        color: darkred;
        left: -70px;
        width: 680px;
        font-size: 3em;
    }

    .container::before {
        width: 400px;
        height: 400px;
        border: 20px solid #bd1414;
        border-radius: 50%;
        position: absolute;
        content: "";
        top: -150px;
        left: -170px;
        z-index: 99;
    }

    .pointer_left {
        top: -185px;
        left: -120px;
        position: absolute;
        width: 100px;
        height: 100px;
    }

    .pointer_right {
        top: -170px;
        left: 150px;
        position: absolute;
        width: 100px;
        height: 100px;
        transform: rotate(-305deg);
    }

    .devil {
        position: absolute;
        top: -260px;
        left: 280px;
        transform: rotate(-37deg);
        z-index: 999;
    }

    .devil::before {
        width: 10px;
        height: 650px;
        content: "";
        position: absolute;
        background-color: #bd1414;
        top: -240px;
        left: -320px;
        transform: rotate(-90deg);
    }
</style>