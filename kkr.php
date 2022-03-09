<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-color:#ecb3ff">
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
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/KKR-Logo.png" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Kolkata Knight Riders</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Shreyas Iyer</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>Russel,Venkatesh,Nitish</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Sunil narin, Pat-Cummins,Shivam</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>02 (2012 ,2014)</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/shreyas.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Shreyas Iyer</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>KKR</td>
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
                    <br><button class="viewbtn" id="shreyasopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/vent.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Venkatesh</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>KKR</td>
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
                    <br><button class="viewbtn" id="venkateshopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/russel.jpeg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Russel</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>KKR</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Price:</td>
                            <td>8cr</td>
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
                    <br><button class="viewbtn" id="russelopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/Pat-Cummins.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Cummins</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>KKR</td>
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
                    <br><button class="viewbtn" id="cumminsopen">View Details</button>
                </div>
            </div>

        </div><br>
        <!-- Players shreyas details start -->

        <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 57%; border-style:dashed; top: 64%;background-color:#ecb3ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/shreyas.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Shreyas Iyer (Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>KKR</td>
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
                <td colspan="3"><button class="viewbtn" id="shreyasclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const shreyasopen = document.getElementById('shreyasopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const shreyasclose = document.getElementById('shreyasclose');
            shreyasopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            shreyasclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players shreyas details end-->

        <!-- Players Venkatesh details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 57%; border-style:dashed; top: 64%;background-color:#ecb3ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/vent.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Venkatesh Iyer</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>KKR</td>
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
                <td colspan="3"><button class="viewbtn" id="venkateshclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const venkateshopen = document.getElementById('venkateshopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const venkateshclose = document.getElementById('venkateshclose');
            venkateshopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            venkateshclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players Venkatesh details end-->

        <!-- Players Russel details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 57%; border-style:dashed; top: 64%;background-color:#ecb3ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/russel.jpeg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Andre Dwayne Russell</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>KKR</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Price:</td>
                <td>8cr</td>
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
                <td colspan="3"><button class="viewbtn" id="russelclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const russelopen = document.getElementById('russelopen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const russelclose = document.getElementById('russelclose');
            russelopen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            russelclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players russel details end-->

        <!-- Players Cummins details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 57%; border-style:dashed; top: 64%;background-color:#ecb3ff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/Pat-Cummins.jpg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Patrick James Cummins</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>KKR</td>
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
                <td colspan="3"><button class="viewbtn" id="cumminsclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const cumminsopen = document.getElementById('cumminsopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const cumminsclose = document.getElementById('cumminsclose');
            cumminsopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            cumminsclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players Cummins details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>