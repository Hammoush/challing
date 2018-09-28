<DOCTYPE html>
    <!--
    naam : Mohamad Hammoush
    groep :7B
    datum : 28-9-2018
    -->
    <html>
    <head>
        <title>Sally Field</title>
        <meta name="viewport" content="width =device-width, initial-scale =1.0">
        <style>
            body{
                width: 100%;
            }
            .nav{
                width: 100%;
                background-color: #7a95c7;
                padding: 15px;

            }
            .nav .nav1 a{
                color: white;
                text-decoration: none;
                font-size: 15px;
                border: #6181bd 1px solid;
                background-color: #6181bd;
            }
            .head .lkj{
               display: none;
                float: left;

            }
            @media all and (min-width: 325px) {

                .head .lkj{
                    display: block;
                    float: left;


                }}


            .head .lkj1{
               display: none;
            }
            @media all and (min-width: 325px) {

                .head .lkj1{
                    display: block;
                    margin-top: 5px;


                }}



            .head .hoi{
                display: block;
                margin-top: 5px;


            }
            @media all and (min-width: 325px) {

            .head .hoi{
                display: none;


            }}
            .headP{
                width: 96%;
            }
            div h3{
                color: #6181bd;
            }
            div p{
                font-family: "Arial ";
            }
            iframe{

                margin: auto;
                margin-left: 2%;
                margin-right: 2%;
            }
            .hTABLE{
                background-color: #7a95c7;
                width: 100%;
                margin: auto;

            }
            table{

                width: 90%;
                margin: auto;
            }
            table tr th{
                background-color:#6181bd ;
            }
            table tr td {
                text-align: center;
            }


        </style>

    </head>
    <body>
            <div class="nav">
                <div class="nav1">
                    <a href="">Home</a>
                    <a href="#">Memory</a>
                    <a href="#">Getellerij</a>
                    <a href="#">Picturepuzzle</a>
                    <a href="" class="fa-li fa fa-check-square"></a>
                </div>


            </div>
       </div>
        <div class="head">
            <img class="lkj" style="width: 50%" src="img/dama1.png">
            <img  class="lkj1"style="width: 50%" src="img/dama2.png">
            <img class="hoi" id="slideholder" src="img/dama3.png">

        </div>
        <div class="headP">
            <h3>Sally Field</h3>
            <p>Field began her professional career on television, starring in titular roles on the short-lived sitcoms
                Gidget (1965–1966), The Flying Nun (1967–1970), and The Girl with Something Extra (1973–1974). In 1976,
                her career saw a turning point when she garnered critical acclaim of her portrayal of a woman suffering
                from multiple personality disorder in the television miniseries Sybil,
            </p>
        </div>
        <div class="headV">
            <iframe width=90% height="720" src="https://www.youtube.com/embed/OyaaCZf46H8" frameborder="0"
                    allow="autoplay; encrypted-media" allowfullscreen>

            </iframe>
        </div>
        <div class="hTABLE">
            <form>

                <table >
                  <tr>
                      <th>year</th>
                      <td>Title</td>
                      <td>Role</td>
                      <td>Theater</td>
                  </tr>
                  <tr>
                      <th>2002</th>
                      <td>the Goet</td>
                      <td>Stevie Grray</td>
                      <td> John Golden</td>
                  </tr>
                  <tr>
                      <th>2017</th>
                      <td>the Glass Mengerie</td>
                      <td> Amnda Wingfield</td>
                      <td>  Belasco</td>
                  </tr>
                </table>
            </form>
        </div>
            <script>
                var plaatje = [1,2,3,4,5];
                var teller = 0;
                var slideholder = document.getElementById("slideholder");
                slideholder.src  = 'img/dama3.png';

                slideholder.addEventListener("click", function () {
                    slideholder.src ="img/dama" + getdama() + ".png";
                });

                function getdama() {
                    if (teller == 5) {
                        teller = 1;
                    }
                    teller++;
                    console.log(teller);
                    return teller;
                }
            </script>

    </body>
    </html>