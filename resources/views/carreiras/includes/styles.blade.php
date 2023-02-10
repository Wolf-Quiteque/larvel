<style>
    
    /* CSS */
    .button-85 {
      padding: 10px 14px;
      border: none;
      outline: none;
      color: rgb(255, 255, 255);
      background: #111;
      cursor: pointer;
      position: relative;
      z-index: 0;
      border-radius: 10px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
    }
    
    .button-85:before {
      content: "";
    
      background: linear-gradient(
        45deg,
        #ff0000,
        #ff7300,
        #fffb00,
        #48ff00,
        #00ffd5,
        #002bff,
        #7a00ff,
        #ff00c8,
        #ff0000
      );
    
      position: absolute;
      top: -2px;
      left: -2px;
      background-size: 400%;
      z-index: -1;
      filter: blur(5px);
      -webkit-filter: blur(5px);
      width: calc(100% + 4px);
      height: calc(100% + 4px);
      animation: glowing-button-85 20s linear infinite;
      transition: opacity 0.3s ease-in-out;
      border-radius: 10px;
    }
    
    @keyframes glowing-button-85 {
      0% {
        background-position: 0 0;
      }
      50% {
        background-position: 400% 0;
      }
      100% {
        background-position: 0 0;
      }
    }
    
    .button-85:after {
      z-index: -1;
      content: "";
      position: absolute;
      width: 100%;
      height: 100%;
      background: #222;
      left: 0;
      top: 0;
      border-radius: 10px;
    }
    
    

    /* Menu */
    
    .snip1226 {
      font-family: 'Rubik', sans-serif;
      text-align: center;
      text-transform: uppercase;
      font-weight: 500;
    }
    .snip1226 * {
      box-sizing: border-box;
      -webkit-transition: all 0.35s ease;
      transition: all 0.35s ease;
    }
    .snip1226 li {
      display: inline-block;
      list-style: outside none none;
      margin: 0 0.7em;
      overflow: hidden;
    }
    .snip1226 a {
      padding: 0.3em 0;
      color: rgb(255, 255, 255);
      position: relative;
      display: inline-block;
      letter-spacing: 1px;
      margin: 0;
      text-decoration: none;
    }
    .snip1226 a:before,
    .snip1226 a:after {
      position: absolute;
      -webkit-transition: all 0.35s ease;
      transition: all 0.35s ease;
    }
    .snip1226 a:before {
      bottom: 100%;
      display: block;
      height: 3px;
      width: 100%;
      content: "";
      background-color: #F6839C;
    }
    .snip1226 a:after {
      padding: 0.3em 0;
      position: absolute;
      bottom: 100%;
      left: 0;
      content: attr(data-hover);
      color: white;
      white-space: nowrap;
    }
    .snip1226 li:hover a,
    .snip1226 .current a {
      transform: translateY(100%);
    }
    
    /* End menu */

    /* Carousel Footer Style */

    .carouselFooter{
        height: calc(60vh - 65px); 
        overflow: hidden; 
        background-size: cover; 
        background-position: top right; 
        background-repeat: no-repeat;
        margin-bottom: -200px;
    }

    /* End Carousel Footer */

    /* REPONSIVITY */

    @media (max-width:420px){

    #larguraTotal{
     max-width: 100%;
    }

    .carouselFooter{
        display: none !important;
    }
       
    #hero, #hero .carousel-item {
    /* height: calc(100vh - 70px); */
    height: 400px;
    }

    #flex{
     flex-direction: column;
    }

    }

    /* END RESPONSIVITY */

</style>