<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-color:#ffffb3">
        <div class="menu">
            <a href="index.php"><img src="images/ipl-Banner.jpg" class="logo" /></a>
            <div class="search"><input type="text" placeholder="search team" id="searchbox"></div>
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
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/CSK-Logo.png" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Chennai Super Kings</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Mahendra Singh Dhoni</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>MS Dhoni,Ruturaj,MoeenAli</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Deepak chahar,Shiyam dube, Jadeja</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>04 (2010,2011,2018,2021)</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/csk/msdhoni.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>MS Dhoni</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>CSK</td>
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
                    <br><button class="viewbtn" id="dhoniopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/csk/Ruturaj.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Ruturaj</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>CSK</td>
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
                    <br><button class="viewbtn" id="ruturajopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/csk/jadeja.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Jadeja</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>CSK</td>
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
                            <td>All rounder</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="jadejaopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/csk/deepak.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Deepak</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>CSK</td>
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
                    <br><button class="viewbtn" id="deepakopen">View Details</button>
                </div>
            </div>

        </div><br>
         <!-- Players dhoni details start -->

         <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 64%; background-color:#ffffb3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/csk/msdhoni.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Mahendra Singh Dhoni(Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>CSK</td>
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
                <td colspan="3"><button class="viewbtn" id="dhoniclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const dhoniopen = document.getElementById('dhoniopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const dhoniclose = document.getElementById('dhoniclose');
            dhoniopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            dhoniclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players dhoni details end-->

        <!-- Players ruturaj details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 64%; background-color:#ffffb3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/csk/Ruturaj.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Ruturaj Gaikwad </th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>CSK</td>
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
                <td colspan="3"><button class="viewbtn" id="ruturajclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const ruturajopen = document.getElementById('ruturajopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const ruturajclose = document.getElementById('ruturajclose');
            ruturajopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            ruturajclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players ruturaj details end-->

        <!-- Players jadeja details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 64%;background-color:#ffffb3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/csk/jadeja.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Rabindra Jadeja</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>CSK</td>
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
                <td>All rounder</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="jadejaclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const jadejaopen = document.getElementById('jadejaopen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const jadejaclose = document.getElementById('jadejaclose');
            jadejaopen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            jadejaclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players jadeja details end-->

        <!-- Players deepak details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 64%;background-color:#ffffb3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/csk/deepak.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Deepak Chahar</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>CSK</td>
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
                <td colspan="3"><button class="viewbtn" id="deepakclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const deepakopen = document.getElementById('deepakopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const deepakclose = document.getElementById('deepakclose');
            deepakopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            deepakclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players deepak details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>