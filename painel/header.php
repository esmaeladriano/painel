<head>
        <title>IMPAR</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="http://localhost/sistema/Imagem/Loo-removebg-preview%20(1).png" rel="icon" type="image/png" />

        
    <!-- Links css Internos -->
    <link rel="stylesheet" href="http://localhost/sistema/painel/bootstrap/css/bootstrap.min.css">
    <!-- Lnks externos -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js">
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


    <!-- Javascript internos -->
    <script src="http://localhost/sistema/painel/js/canvasjs.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="http://localhost/sistema/painel/js/jquery.js"></script>  
    <script src="http://localhost/sistema/painel\adim\js\load_img_real_time.js">
    </script>  


  <style>
 /* Minhas Cores do css */

 /* Core da parte de cima(header) */
.top{
	background-color:#7aafebef;
}
/* Cor do titulo da página em execução */
.title-box-main{
	background-color: #5699e5ef;
 }
 /* Cor da barra lateral do sitema */
 #opacity-menu{
    height: 100%;
    background-color: #7aafebef;
    }
    /* Cor do sub-meno da barra lateral */
    .sub-menu{
    padding: 0;
    display: none;
    background-color: #6493c9ef;
    border-left: 3px solid var(--theme-color-link);
    }
  
/* Dashboard ou cor dos cardes */
#box-dash-prof{
	background-color:#5699e5ef;
}
#box-dash-aluno{
	background-color:#5699e5ef;
}
#box-dash-adm{
	background-color:#5699e5ef;
}
#box-dash-noticia{
	background-color:#5699e5ef;
}
/* Cor do elemeto pai que guarda o card */
.box{
    background-color: #fff;
}
/* Quando voçê passa o cursor no menu lateral */
.menu-ul .menu-item:hover, .menu-ul .menu-item:hover .menu-item-inner a{
    transition: all .4s cubic-bezier(0.42, 0.9, 0.75, 0.4);
    background: white;
    cursor: pointer;
    color: #5699e5ef;
    }
/* Fecha o menu quano estiver responsívo */
    .menu-item-exit{
    background-color: rgb(17, 83, 148);
    width: 100%;
    cursor: pointer;
    color: white;
    }
/* Ôpacidade do painel em geral(painel pai) */
    #opacity-panel{
	height: 100%;
	background-color: rgba(255, 252, 252, 0.6);
}
    /*
    1 - RESET
    */

    :root{
	--theme-color-box: #46729B;
	--theme-color-link: #01bcf8;

	--theme-color-1: #01bcf8;
	--theme-color-2: #009ff7;
	--theme-color-3: #0089f8;
	--theme-color-4: #0074f8;

	--color-primary: #22abe1;
	--color-error: #db3b21;
	--color-warn: #e08b15;
	--color-success: #2EB797;
	
}
    html, body{
    background-color: rgb(216, 216, 216);
    margin: 0;
    padding: 0;
    position: relative;
    width: 100%;
    height: 100%;
    min-height: 100%;
    box-sizing: border-box;
    }
    li{
    list-style: none;
    padding: 0 !important;
    }
    button{
    cursor: pointer !important;
    }
    hr{
    margin: 10px 0;
    border-top: 1px solid rgba(255,255,255,.5);
    }
    p{
    margin: 0;
    }
    a{	
    color: var(--text-color-menu);
    padding: 0;
    text-decoration: none !important;
    }
    a:hover{
    transition: .3s;
    color: var(--theme-color-link);
    }

    h1,h2,h3,h4,h5,h6{
    margin: 0 !important;
    padding: 0 !important;
    }
    tr td, tr th{
    vertical-align: middle !important;
    }
    table{
    font-size: 14px;
    margin: 0 !important;	
    }

    /*
    2 - INPUTS CSS
    */
    .btn{
    font-size: 12px !important;
    border: none;
    color: #fff;
    }
    input[type=checkbox]#check-bootstrap{
    width: 25px;
    height: 25px;	
    }
    input[type=checkbox]#check-bootstrap:checked{
    background-color: rgba(233,0,0,.9);
    }
    select{
    width: auto; 
    height:auto;
    padding: 5px;
    border: 2px solid #ced4da;
    }
    textarea{	
    border: 1px solid #ced4da;
    border-radius: 0 !important;
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.5; ;
    background-color: transparent;
    background-clip: padding-box;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    min-height: 180px;
    }

    input[type="text"],
    .form-control[readonly] ,
    input[type="time"],
    input[type="password"],
    .field_email,
    select,
    input[type="date"],
    input[type="number"],
    input:read-only,
    .form-control{
    width: 100%;
    height: calc(1.5em + .75rem + 2px);
    padding: .375rem .75rem;
    font-size: 12px;
    font-weight: 400;
    line-height: 1.5;
    background-color: transparent;
    background-clip: padding-box;
    border: none;
    border-bottom: 1px solid #ced4da;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    input[type='text']:focus, input[type='number']:focus,input[type='password']:focus, textarea:focus, select:focus{
    outline-width: 0;
    ;
    outline:none;
    }
    input[type='file']{
    display: none;
    }
    #img_profile{
    width: 100%;
    min-height: 200px;
    max-width: 200px;
    border-radius: 50%;
    }
    ::placeholder{
    color: #ddd;
    }

    /*
    3 - HEADER TOP
    */
    /* .top{
    background: #aaa;
    z-index: 9999;
    background-position: 10%;
    background-size: cover;
    box-sizing: border-box;
    box-shadow: 2px 3px 2px rgba(0,0,0,0.2);
    color:  #fff;
    } */
    #row-top{
    padding: 15px 10px;
    }
    #row-top #container-msg-top{
    align-items: center;
    }
    #row-top #container-msg-top #msg-welcome{
    display: flex;
    justify-content: flex-end;
    }
    .logo-text{
    text-shadow: 0px 1px 6px var(--theme-color-link);
    text-transform: uppercase;
    font-size: 25px;
    font-weight: 700;
    }
    #exit{
    color: #ddd;
    }
    #exit:hover{
    transition: .4s;
    color: var(--color-error) !important;
    }

    /*
    4 - MENU
    */
    #menu{
    width: 15%;
    font-size: 14px;
    color: #fff;
    }
    .div-img-profile{
    width: 100%;
    padding: 10px;
    display: flex;
    justify-content: center;
    }
    .img-profile{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 2px solid #fff;
    }
    #name-user{
    width: 100%;
    text-align: center;
    font-size: 1em;
    font-weight: 400;
    color: #fff;
    padding: 10px 20px;
    }
    #menu{
    min-height: 100vh !important;
    background-size: contain;
    background-attachment: fixed;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 0 !important;
    }
    
    .menu-ul{
    padding: 0;
    margin: 0;
    list-style: none;
    width: 100%;
    }
    .menu-ul .menu-item{
    color: #fff;
    position: relative;
    width: 100%;
    cursor: pointer;
    }
    .menu-ul .menu-item .menu-item-inner{
    padding: 10px 0 !important;
    }
    .menu-ul .menu-item .menu-item-inner a{
    color: var(--theme-color-menu);
    position: relative;
    height: 100%;
    width: 100%;
    cursor: pointer;
    }
    .menu-ul .menu-item .name-item-menu{
    width: 100%;
    position: relative;
    padding: 10px 5px;
    }
    .menu-ul .menu-item .menu-item-inner .name-item-menu i, .menu-ul .menu-item .name-item-menu i{
    width: 30px;
    padding: 0 5px;
    }
    .icon-menu-item-right{
    width: 100%;
    }
    
   

    .menu-item-exit{
    background-color: rgb(17, 83, 148);
    width: 100%;
    cursor: pointer;
    color: white;
    }


    .more-menu{
    position: absolute;
    right: 10px;
    top: calc(50% - 5px);
    font-size: .5em;
    }

    /*
    5 - CONTENT PANEL
    */
    
    .container-main{
    min-height: 100vh;
    }
    .box{
    color: var(--theme-color-text) !important;
    font-size: 14px;
    border-radius: 3px;	
    width: 100%;
    margin: 10px 0;
    box-sizing: border-box;
    /*box-shadow: 0 2px 5px var(--red-4);*/
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    }
    .div-title-box{
    text-align: center;
    width: 100%;
    }
    .title-box-main{
    border-top-right-radius: 4px;
    border-top-left-radius: 4px;
    padding: 8px !important;
    font-size: 20px !important;
    color: #fff;
    font-weight: 300;
    }
    .div-content-box{
    width: 100%;
    padding: 0 15px;
    }
    #container-panel{
    background-attachment: fixed;
    min-height: 100vh;
    width: 85%;
    }
    .msg{
    color: #fff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    font-size: 12px;
    margin: 10px 0;
    padding: 7px 10px;
    box-sizing: border-box;
    box-shadow: 0 0 2px rgba(160,160,160, 0.3);
    }
    .msg-error{
    border-radius: 3px;
    background: var(--color-error);
    }
    .msg-success{
    border-radius: 3px;
    background: var(--color-success);
    }
    .msg-warn{
    border-radius: 3px;
    background: var(--color-warn);
    }
    .msg-primary{
    border-radius: 3px;
    background: var(--color-primary);
    }

    /*
    7 - CARD
    */
    .card{
    border-radius: 3px;
    border: none;
    width: calc(25% - 10px);
    box-sizing: border-box;
    overflow: hidden;
    margin: 5px;
    }
    .card .box-img{
    height: 100%;
    overflow: hidden;
    }
    .card .card-img-top{
    height: 200px !important;
    max-height: 200px !important;	
    }
    .card-body{
    height: 200px;
    padding: 15px !important;
    }
    .card-body .card-title{
    font-size: 1em;
    }
    .card-body .card-text{
    text-align: justify;
    font-size: .75em;
    }
    .coluna-img{
    padding-bottom: 0;
    max-height: 200px;
    }
    .details-activity{
    display: flex;
    justify-content: space-around;
    margin: 0;
    width: 100%;
    height: auto;
    font-style: italic;
    padding: 7px 10px;
    }
    .card .details-activity{
    font-size: 11px;
    padding: 7px 10px;
    }
    .coluna-texto{
    padding-bottom: 0;
    }


    /*
    8 - FORM
    */
    .title-div-form{
    width: 100%;
    margin-bottom: 15px !important;
    text-align: center;
    font-size: 1.25em;
    font-weight: 300;
    }
    #msg-cad-auth{
    font-size: 11px; 
    margin: 10px 0;
    }
    .form-cad{
    display: flex;
    flex-direction: column;
    }
    .list-data-form{
    list-style: none;
    padding: 0;
    }
    .list-data-form li{
    text-align: center;
    }
    .list-data-form .txt-area{
    display: flex;
    justify-content: center;
    }
    .divisao-cad{
    margin: 5px 0;
    padding: 0 10px;
    }
    .divisao-cad article{
    display: flex;
    flex-direction: column;
    justify-content: center;
    border: 1px solid #c2bec0;
    padding: 15px;
    }
    label{
    font-size: 14px;
    margin: 3px 0;
    }

    /*
    9 - TABLE
    */
    .table-data{
    max-width: 100%;
    width: 100%;
    }
    #table-scroll{
    max-width: 100%;
    }
    #table-scroll thead th:nth-child(1){
    min-width: 120px !important;
    }
    .box-table #table-scroll::-webkit-scrollbar
    {
    width: 12px;
    background-color: #F5F5F5;
    }
    .box-table #table-scroll::-webkit-scrollbar-thumb
    {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
    background-color: #D62929;
    }
    ::-webkit-scrollbar {
    width: 8px;
    height: 10px;
    }
    /* Track */
    ::-webkit-scrollbar-track {
    background: #f1f1f1; 
    }
    /* Handle */
    ::-webkit-scrollbar-thumb {
    background: #888; 
    border-radius: 5px;
    }
    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
    background: #555; 
    }


    /*
    16 - MEDIA QUERIES
    */
    @media (max-width: 1280px){
    .container-activity{
        margin: 5px 5px;
        flex: calc(25% - 10px);
        max-width: calc(25% - 10px);
        width: calc(25% - 10px);
    }
    .img-school{
        width: 150px;
        height: 150px;
    }
    .container-box{
        flex: calc(33.3333% - 10px);
        max-width: calc(33.3333% - 10px);
        width: calc(33.3333% - 10px);
    }
    }

    @media (max-width: 1080px){
    #sidebar .box-dash{
        width: 100%;
    }
    .count-dash i{
        position: absolute;
        font-size: 24px;
        opacity: 0.3;
    }
    .img-news-sidebar{
        flex-basis: 100%;
        width: 100%;
        max-width: 100%;
        margin: 2px 0;
    }
    .card{
        width: calc(33.33% - 10px);
        box-sizing: border-box;
        overflow: hidden;
        margin: 5px;
    }
    .card-body{
        height: 100%;
    }
    .img-school{
        width: 100px;
        height: 100px;
    }
    .div-card{
        width: 33.3%;
        padding-right: 15px;
        padding-left: 15px;
    }
    .icon-dash{
        font-size: 2em;
    }
    .count-dash{
        font-size: 1.5em;	
    }
    .title-box-dash h1{
        font-size:1em;
    }
    }

    @media (max-width: 991px){
    .container-activity{
        margin: 5px 5px;
        flex: calc(33.33% - 10px);
        max-width: calc(33.33% - 10px);
        width: calc(33.33% - 10px);
    }
    #row-top #container-msg-top #msg-welcome{
        justify-content: center;
    }
    .card{
        width: calc(50% - 10px);
        box-sizing: border-box;
        overflow: hidden;
        margin: 5px;
    }
    .main-content{
        width: 100%;;
        flex: 0 0 100%;
        max-width: 100%;
    }
    .menu-ul .menu-item .name-item-menu{
        margin-left: 0;
    }
    .conteudo{
        height: 100vh;
    }
    .img-profile-aluno{
        width: 60px;
        height: 60px;
    }
    .icon-dash{
        font-size: 1.5em;
    }
    .count-dash{
        font-size: 1em;	
    }
    .title-box-dash h1{
        font-size: .8em;
    }
    .menu-ul{
        font-size: 13px;
    }
    .container-box{
        flex: calc(50% - 10px);
        max-width: calc(50% - 10px);
        width: calc(50% - 10px);
    }
    .table-data{
            overflow-x: scroll;
    }
    }

    @media (min-width: 768px){
    .container {
        max-width: 100% !important;
    }
    #menu{
        display: block !important;
        height: 100px;
    }
    }

    @media (max-width: 768px){
    .icon-dash i{
        font-size: .75em;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    .news-sidebar{
        width: 50%;
        margin: 0;
    }
    #menu{
        width: 80%;
        margin-left: 10%;
        margin-right: 10%;
        font-size: 14px;
        display: none;
        background-attachment: unset;
        background-size: cover;
    }
    #close-menu{
        font-size: 14px;
        padding: 5px 0 !important;
    }
    #container-panel{
        width: 100%;
    }
    .container-activity{
        margin: 5px 5px;
        flex: calc(50% - 10px);
        max-width: calc(50% - 10px);
        width: calc(50% - 10px);
    }
    .card{
        width: calc(50% - 10px);
        box-sizing: border-box;
        overflow: hidden;
        margin: 5px;
    }
    .logo-text{
        font-size: 20px !important;
    }
    .div-img-school{
        display: flex;
        justify-content: center;
    }
    .img-school{
        width: 200px;
        height: 200px;
    }
    .div-card{
        width: 50%;
    }
    .count-dash{
        font-size: 1.5em;	
    }
    .mySlides img{ 
        height: 300px; 
    }
    .slideshow-container {
        max-height: 300px;
    }
    .card-body{
        padding: 0 10px 10px 10px !important;
    }
    .card-body .card-title{
        font-size: 14px !important;
    }
    .card-body .card-text{
        font-size: 12px !important;
        line-height: 1.25em;
    }
    .coluna-img{
        padding-bottom: 5px;
    }
    .coluna-texto{
        padding-bottom: 5px;
    }
    .card img{
        height: 100% !important;
        max-height: 210px !important;
    }
    .details-activity{
        font-size: 9px;
        padding: 10px 15px 0 15px;
    }
    .box-dados-usu{
        padding: 10px;
    }
    .box-img-usu{
        padding: 0 15px;
    }
    .box-img-usu img{
        width: 80px;
        height: 80px;
    }
    .box-nome-usu{
        font-size: 14px;
        font-weight: bold;
    }
    .box-email-usu{
        font-size: 12px;
    }
    .box-btn-usu{
        padding: 3px 0;
    }
    .copy{
        font-size: 11px;
    }
    .developer{
        font-size: 9px;
    }
    .ntc-sidebar{
        width: 50%;
    }
    }

    @media (max-width: 844px){   
    .title-box-main{
        font-size: 16px !important;
    }
    label, input{
        font-size: 12px;
    }
    .img-news-sidebar{
        flex-basis: 50%;
        width: 50%;
        max-width: 50%;
        margin: 2px 0;
    }
    .text-news-sidebar{
        flex-basis: 50%;
        max-width: 50%;
        width: 50%;
        margin: 2px 0;
    }
    }

    @media (max-width: 600px){

    .card{
        width: calc(50% - 5px);
        box-sizing: border-box;
        overflow: hidden;
        margin: 2px;
    }
    .coluna-texto{
        margin-top: 0;
    }
    .img-gallery-adapt{
        max-height: 120px;
    }
    .box-dash{
        margin-bottom: 8px;
    }
    .div-card{
        width: 100%;
    }
    .box-nome-usu{
        font-size: 14px;
    }
    .box-email-usu{
        font-size: 10px;
    }
    }

    @media (max-width: 400px){
    table{
        font-size: 10px;
    }
    table tr th, table tr td{
        padding: 8px !important;	
    }
    }

    /* ESTILOS ESPECIFICOS */
    .canvasjs-chart-canvas{
    max-width: 100%;
    }
    .icon-close{
    cursor: pointer;
    padding: 3px;
    }
    #calls, #statistics{
    max-height: 380px;
    }
    .view-disc{
    background:  linear-gradient(135deg, rgba(66, 230, 151, 1) 0%, rgba(0, 144, 195, 1) 100%);
    font-size: 1.2em;
    cursor: pointer;
    -webkit-text-fill-color: transparent;
    }
    .graph{
    position: relative;
    flex-basis: calc(50% - 10px);
    width: calc(50% - 10px);
    height: auto;
    }
    .img-profile-aluno{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    }
    .img-agenda{
    max-height: 300px;
    }
    .getDados{
    cursor: pointer;
    }
    .btn-file-upload:hover{
    background: transparent;
    outline: 2px solid #355c7d;
    transition: .2s;
    }
    .ger-btn{
    font-size: 16px !important;
    letter-spacing: 0;
    }
    .select-box{
    display: flex;
    flex-direction: column;
    }
    .btn-sm{
    padding: .2rem .5rem;
    }
    /*BUTTON COLORS SET*/
    .btn-error{
    background: var(--color-error) !important; 
    }
    .btn-success{
    background: var(--color-success) !important; 
    }
    .btn-warn{
    background: var(--color-warn) !important; 
    }
    .btn-primary{
    background: var(--color-primary) !important; 
    }

    .btn-error:hover{
    background: transparent !important;
    outline: 2px solid var(--color-error) !important;
    transition: .3s;
    color: var(--color-error) !important;
    }
    .btn-success:hover{
    background: transparent !important;
    outline: 2px solid var(--color-success) !important;
    transition: .3s;
    color: var(--color-success) !important;
    }
    .btn-warn:hover{
    background: transparent !important;
    outline: 2px solid var(--color-warn) !important;
    transition: .3s;
    color: var(--color-warn) !important;
    }
    .btn-primary:hover{
    background: transparent !important;
    outline: 2px solid var(--color-primary) !important;
    transition: .3s;
    color: var(--color-primary) !important;
    }

.box-dash{
	width: 100%;
}
.box-count{
	color: #fff;
	border-radius: 3px;
	cursor: pointer;
	box-shadow: 0 0 12px rgba(0,0,0,.1);
	overflow: hidden;
}
.box-count:hover{
	transform: scale(1.03);
	box-shadow: 0 0 25px rgba(0,0,0,.25);
	transition: .4s;
}
.title-box-dash{
	padding: 3px 0;
	background: rgba(0,0,0,.1);
}
.title-box-dash h1{
	font-size: .8em;
	font-weight: 600;
	text-align: center;
}
.count-dash{
	font-weight: bold;
	font-size: 2em;	
	text-align: center;
}
.icon-dash{
	display: flex;
	justify-content: center;
}
.icon-dash .container-icon-dash{
	height: 50px;
	width: 50px;
	padding: 5px;
	border: 2px solid #ffffffaa;
	border-radius: 50%;
	display: flex;
	justify-content: center;
	align-items: center;
}
.icon-dash i{
	font-size: .8em;
	opacity: 0.3;
	overflow: hidden;
}
.box-count:hover .icon-dash i{
	opacity: 1;
	transition: .4s;
}


</style> 


</head>