<!-- ## Developed by bilal & pooja ##-->
<style>

     html{
            scroll-behavior: smooth;
         }

     *{
          margin: 0; 
          padding: 0; 
          box-sizing: border-box; 
          font-family: 'Mulish', sans-serif;
      }

     .row{
          margin-left: 0!important;
          margin-right: 0!important;
      }

     .navStyle{
          background-color: #a29bfe!important;
      }

     .navStyle a{ 
         color: white!important;
      }

    .main-header{
          height: 450px;
          width: 100%;
      }

    .rightside h1{
          font-size: 3rem;
      }

    .cor-anm img{
          animation: cor-anm 3s linear infinite; /*  2ndimage-annimation  */
      }
   
    @keyframes cor-anm {
          0%{transform: rotate(0); }
          100%{transform: rotate(360deg); }

      }

    .leftside img{
          animation: earth 5s linear infinite;  /*  1stimage-annimation  */
      }

    @keyframes earth {
           0%{transform: scale(.75); }
           20%{transform: scale(1); }
           40%{transform: scale(.75); }
           60%{transform: scale(1); }
           80%{transform: scale(.75); }
           100%{transform: scale(.75); }
     }

    .corona-update{
          margin: 0 0 30px 0;
    }

    .corona-update h2{
          color: #ff7675;
    }

    .corona-update h1{
        {
           font-size: 2rem;
            text-align: center;
        }
    }

   .sub-section{
          background-color: #fbfafd;
    }

   .footer-style{
          background-color: #a29bfe!important;
    }

   .footer-style p{
          margin-bottom: 0;
    }

    @media(max-width: 780px)    /* for-responsive */
    {
         .main-header{
              height: 700px;
              text-align: center;
         }

         .main-header h1{
              text-align: center;
              padding: 0;
              width: 100%;
              font-size: 30px;
         }

         .count-style{
              display: inline!important;
         }

         .count-style p{
              text-align: center!important;
         }

         .abou-img{
               margin-left: 0!important;
         }
    }

    .table{
              width: 100%;
          }

    th,td {
              width: 150px;
              text-align: center;
              border: 1px solid black;
              padding: 5px;
         }
    .mytbl{
              display: flex;
              justify-content: center;
              align-items: center;
              width: 100%!important;
         }


    #button{
              display: inline-block;
              background-color: #a29bfe;
              width: 50px;
              height: 50px;
              text-align: center;
              border-radius: 4px;
              position: fixed;
              bottom: 30px;
              right: 30px;
              transition: background-color .3s, 
              opacity .5s, visibility .5s;
              opacity: 0;
              visibility: hidden;
              z-index: 1000;
    }

    #button::after {
              content: "\f077";
              font-family: FontAwesome;
              font-weight: normal;
              font-style: normal;
              font-size: 2em;
              line-height: 50px;
              color: #fff;
    }

    #button:hover {
              cursor: pointer;
              /* background-color: #333; */
    }

    #button:active {
              background-color: #555;
    }

    #button.show {
              opacity: 1;
              visibility: visible;
    }
    .drop{
         background-color: #a29bfe!important;
         

    }
    .drop a{
     background-color: #a29bfe!important;

    }


</style>
