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

    .leftside img{
          animation: earth 3s linear infinite; /*  2ndimage-annimation  */
      }
   
    @keyframes earth {
          0%{transform: rotate(0); }
          100%{transform: rotate(360deg); }

      }

    .cor-anm  img{
          animation: cor-anm 5s linear infinite;  /*  1stimage-annimation  */
      }

    @keyframes cor-anm {
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

    .corona-update h1{
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
              padding: 7px;
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


    .card {
              background-color: #fff;
              border-radius: 10px;
              border: none;
              position: relative;
              margin-bottom: 30px;
              box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
     }

     .newconfirm {
             background:  linear-gradient(to right top, #e0d828, #e7e124, #efea1f, #f6f418, #fdfd0e)!important;
             color: #fff;
     }

    .totalconfirm {
             background: linear-gradient(to right top, #e3e315, #e6da1e, #e7d125, #e7c82c, #e7c033)  !important;
             color: #fff;
     }

    .newdeath{
             background:  linear-gradient(to right top, #e31515, #e52e2a, #e5403d, #e54f4d, #e35d5d) !important;
             color: #fff;
     }

     .totaldeath {
             background:  linear-gradient(to right top, #e31515, #e91414, #f01212, #f61010, #fd0e0e) !important;
             color: #fff;
     }

    .newrecover {
             background: linear-gradient(to right top, #12ee2e, #16e444, #21d954, #2ccf60, #38c469) !important;
             color: #fff; 
     }

    .totalrecover{
             background: linear-gradient(to right top, #3fcb51, #36ca63, #31c873, #32c681, #38c48d) !important;
             color: #fff;
     }

     .card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
             font-size: 110px;
      }

    .card .card-statistic-3 .card-icon {
             text-align: center;
             line-height: 50px;
             margin-left: 15px;
             color: #000;
             position: absolute;
             right: -5px;
             top: 20px;
             opacity: 0.1;
     }

    .drop{
             background-color: #a29bfe!important;
         
    }

    .drop a{
             background-color: #a29bfe!important;
    }





</style>
