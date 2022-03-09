<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-color:#b3d1ff">
        <div class="menu">
            <a href="index.php"><img src="images/ipl-Banner.jpg" class="logo" /></a>
            <form class="search">
                <input type="text" placeholder="Search">
                <button class="searchbtn">Seach</button>
            </form>
            <ul>
                <li><a href="newplayers.php">NewPlayers</a></li>  
                <li><a href="addplayers.php">AddPlayers</a></li>
                <li><a href="team.php">Team</a></li>
                <li><a href="index.php">Home</a></li>
            </ul>
        </div><br>
        <h4 style="font-size: larger; margin-left: 20px;"><b>Team Details</b> </h4><br>
        <table class="table1" border="1" cellspacing="10" cellpadding="10" style="width: 100%; border-style:dashed;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/DC.jpg" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Delhi Capitals</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Rishab Pant</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>Rishab Pant,Pruthibi saw,Dhawan</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Axar patel,Kuldeep,Rabada</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>0</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/dc/pant.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Rishab Pant</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>DC</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>12cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Batsman</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="pantopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/dc/shaw.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Pruthibi</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>DC</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>10cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Batsman</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="sawopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/dc/axar.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Axar</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>DC</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>12cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Bowler</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="axaropen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/dc/Kagiso-Rabada.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Rabada</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>DC</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>10cr</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">PlayingStatus :</td>
                            <td>Playing</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Role:</td>
                            <td>Bowler</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="rabadaopen">View Details</button>
                </div>
            </div>

        </div><br>
         <!-- Players pant details start -->

         <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 80%;background-color:#b3d1ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/dc/pant.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Rishab Pant (Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>DC</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Price:</td>
                <td>12cr</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PlayingStatus :</td>
                <td>Playing</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Role:</td>
                <td>Batsman</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="pantclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const pantopen = document.getElementById('pantopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const pantclose = document.getElementById('pantclose');
            pantopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            pantclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players pant details end-->

        <!-- Players saw details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 80%;background-color:#b3d1ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/dc/shaw.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Pruthibi Saw</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>DC</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Price:</td>
                <td>10cr</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PlayingStatus :</td>
                <td>Playing</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Role:</td>
                <td>Batsman</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="sawclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const sawopen = document.getElementById('sawopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const sawclose = document.getElementById('sawclose');
            sawopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            sawclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players saw details end-->

        <!-- Players axar details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 80%;background-color:#b3d1ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/dc/axar.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Axar Patel</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>DC</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Price:</td>
                <td>12cr</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PlayingStatus :</td>
                <td>Playing</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Role:</td>
                <td>Bowlerr</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="axarclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const axaropen = document.getElementById('axaropen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const axarclose = document.getElementById('axarclose');
            axaropen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            axarclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players axar details end-->

        <!-- Players rabada details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 80%;background-color:#b3d1ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/dc/Kagiso-Rabada.jpg"" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Kagiso Rabada</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>DC</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Price:</td>
                <td>10cr</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">PlayingStatus :</td>
                <td>Playing</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Role:</td>
                <td>Bowler</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="rabadaclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const rabadaopen = document.getElementById('rabadaopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const rabadaclose = document.getElementById('rabadaclose');
            rabadaopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            rabadaclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players rarabada details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>