<style>
            
            
body {
    width: 100vw;
    height: 100vh;
    padding-top: 4em;
    margin: 0;
}          
iframe{
    width: 100%;
    height: 40vh;
    margin: 0;
}

nav {
    height: 6vh;
    width: 100vw; 
    position: fixed;
    background: black;
    float: left;
    top: 0;
}

img {
    height: 100%;
    width: auto;
}
            
.linkar{
    float: right;
    text-align: center;
    height: 100%;
    width: auto;
    padding: 1em;
    text-decoration: none;
    color: white;
}
            
.linkar:hover{
    background: rgba(50, 50, 50, 1);
    height: 3em;
    border-bottom-left-radius: 15px;
    border-bottom-right-radius: 15px;
}
            
#kassi1{
        width: 25%;
        height: 100vh;
        float: left;
    }

    #kassi2{
        width: 25%;
        height: 100vh;
        float: left;
    }

    #kassi3{
        width: 25%;
        height: 100vh;
        float: left;
    }
    
    #kassi4{
        width: 25%;
        height: 100vh;
        float: left;
    }

.container{
    float: left;
    height: 5vh;
    width: 100%; 
    padding: 0;
    text-align: center;
    background: rgba(60,60,60,.5);
    border-radius: 10px;
}

.texti {
    padding: .5em;
    float: left;
    height: 10em;
    font-weight: 700;
}
            
.nedri{
    height: 500px;
    width: 100%;
    background: rgba(60,60,60,.9);
    margin-top: 14em;
    float: left;
    border-radius: 1em;
    padding: .5em;
    font-weight: 700;
    font-size: 1.2em;
}

p {
    font-size: 2em;
    margin: 0;
    padding: 0;
}
            
@media only screen and (min-width: 48em) {  /*Tölva*/
    body{
        overflow: hidden;
    background: url(http://tsuts.tskoli.is/2t/1902992609/Verkefni5/images/ptx_bigger.jpg);
    background-size: 100% 100%;
    }
    #kassi2{
        width: 40%;
        margin-left: 1em;
    }
    #kassi1{
        width: 40%;
    }
    iframe{
        margin-top: 20em;
    }
}
@media only screen and (max-width: 48em) {  /*Sími*/
    body {
        height: 100%;
        overflow-y: scroll;
        width: 100vw;
        padding-top: 2.1em;
        background: url(http://tsuts.tskoli.is/2t/1902992609/Verkefni5/images/ptx_color_notext.png) fixed no-repeat;
    background-size: 100% 100%;
    }
    #kassi1{
        width: 100%;
        height: 100vh;
        float: left;
    }

    #kassi2{
        width: 100%;
        height: 100%;
        float: left;
    }

    #kassi3{
        width: 100%;
        height: 100vh;
        float: left;
    }
    
    #kassi4{
        width: 100%;
        height: 100vh;
        float: left;
    }
    
    iframe{
        margin-top: -10em;
        height: 33vh;
    }
    
    .container{
    float: left;
    height: 8vh;
    width: 100%; 
    padding: 0;
    text-align: center;
    background: rgba(60,60,60,1);
    border-radius: 0;
    }

    .texti {
        padding: .7em;
        float: left;
        height: 10em;
    }

    .nedri{
        height: 23em;
        width: 100%;
        background: linear-gradient(rgba(60,60,60,1) 10%, rgba(60,60,60,.1) 80%);
        margin-top: 10em;
        float: left;
    }

    p {
        font-size: 2em;
        margin: 0;
        padding: 0;
    }
    nav{
        font-size: 1em;
    }
}
@media only screen and (max-height: 48em) and (orientation: landscape) { 
body {
    background-size: 100% 200%
}
    
iframe{
    height: 100vh;
        margin-top: -10em;
}
    #kassi1{
        width: 75vw;
        margin-left: 12.5vw;
        height: 100vw;
        float: left;
    }
    .texti{
        padding: 0;
        font-weight: 900;
    }
}
        
        
        </style>