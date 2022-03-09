<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper">
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
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/MI-logo.png" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Mumbai Indians</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Rohit Sharma</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>RohitSharma,IshanKishan,Pollad</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Bumrah,Rahul,Kunal</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>05 (2013,2015,2017,2019,2020)</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/MI/Rohit.jpeg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Rohit</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>MI</td>
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
                    <br><button class="viewbtn" id="rohitopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/MI/ishan-kishan.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Ishan</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>MI</td>
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
                    <br><button class="viewbtn" id="ishanopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/MI/pollard.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Pollard</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>MI</td>
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
                    <br><button class="viewbtn" id="pollardopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/MI/Bumrah.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Bumrah</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>MI</td>
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
                    <br><button class="viewbtn" id="bumrahopen">View Details</button>
                </div>
            </div>

        </div><br>
         <!-- Players Rohit details start -->

         <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 66%;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/MI/Rohit.jpeg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Rohit Sharma(Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>MI</td>
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
                <td colspan="3"><button class="viewbtn" id="rohitclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const rohitopen = document.getElementById('rohitopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const rohitclose = document.getElementById('rohitclose');
            rohitopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            rohitclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players rohit details end-->

        <!-- Players ishan details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 66%;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/MI/ishan-kishan.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Ishan Kishan </th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>MI</td>
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
                <td colspan="3"><button class="viewbtn" id="ishanclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const ishanopen = document.getElementById('ishanopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const ishanclose = document.getElementById('ishanclose');
            ishanopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            ishanclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players ishan details end-->

        <!-- Players pollard details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 66%;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/MI/pollard.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Kieron Pollard</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>MI</td>
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
                <td colspan="3"><button class="viewbtn" id="pollardclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const pollardopen = document.getElementById('pollardopen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const pollardclose = document.getElementById('pollardclose');
            pollardopen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            pollardclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players pollard details end-->

        <!-- Players bumrah details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 66%;">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/MI/Bumrah.jpg"" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Jasprit Bumrah</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>MI</td>
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
                <td colspan="3"><button class="viewbtn" id="bumrahclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const bumrahopen = document.getElementById('bumrahopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const bumrahclose = document.getElementById('bumrahclose');
            bumrahopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            bumrahclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players bumrah details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>