<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-color:#ffd9b3">
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
                <th rowspan="6" style="width: 300px;border: none;"><img src="images/srh.jpg" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Sunrisers Hyderabad</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Kane Williamson</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>Williamson,Manish Pandy,Abhishek</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Bhubanewar kumar, RasidKhan,Nabi</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>01 (2016)</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/SRH/kane.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Williamson</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>SRH</td>
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
                    <br><button class="viewbtn" id="kaneopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/SRH/manish.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Manish</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>SRH</td>
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
                    <br><button class="viewbtn" id="manishopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/SRH/Bhuvneshwar.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>B.Kumar</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>SRH</td>
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
                    <br><button class="viewbtn" id="kumaropen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/SRH/Rashid-khan.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Rashid</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>SRH</td>
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
                    <br><button class="viewbtn" id="rashidopen">View Details</button>
                </div>
            </div>

        </div><br>
         <!-- Players Kane details start -->

         <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 75%; background-color:#ffd9b3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/SRH/kane.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Kane Williamson (Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>SRH</td>
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
                <td colspan="3"><button class="viewbtn" id="kaneclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const kaneopen = document.getElementById('kaneopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const kaneclose = document.getElementById('kaneclose');
            kaneopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            kaneclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players kane details end-->

        <!-- Players MAnish details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 75%;background-color:#ffd9b3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/SRH/manish.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Manish Pandey</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>SRH</td>
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
                <td colspan="3"><button class="viewbtn" id="manishclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const manishopen = document.getElementById('manishopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const manishclose = document.getElementById('manishclose');
            manishopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            manishclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players manish details end-->

        <!-- Players Kumar details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 75%;background-color:#ffd9b3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/SRH/Bhuvneshwar.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Bhubanewar Kumar</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>SRH</td>
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
                <td colspan="3"><button class="viewbtn" id="kumarclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const kumaropen = document.getElementById('kumaropen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const kumarclose = document.getElementById('kumarclose');
            kumaropen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            kumarclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players kumar details end-->

        <!-- Players rashid details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 75%;background-color:#ffd9b3">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/SRH/Rashid-khan.jpg"" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Rashid Khan</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>SRH</td>
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
                <td colspan="3"><button class="viewbtn" id="rashidclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const rashidopen = document.getElementById('rashidopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const rashidclose = document.getElementById('rashidclose');
            rashidopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            rashidclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players rashid details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>