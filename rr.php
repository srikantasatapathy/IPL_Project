<!DOCTYPE html>
<html>

<head>
    <title>IPL</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
    <div class="wrapper" style="background-color:#ffccff">
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
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/rajastan.png" class="teamlogo"></th>
                <th colspan="2" class="teamtitle">Rajasthan Royals</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Player Count:</td>
                <td>15</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Captain:</td>
                <td>Sanju Samson</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Batsman:</td>
                <td>Sanju Samson,Ajinkya Rahane,Jos Buttler</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Top Bolower:</td>
                <td>Jofra Acrcher,Rahul Tewatia</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">No of Championship:</td>
                <td>01 (2008)</td>
            </tr>
        </table><br>
        <h4 style="margin-left: 20px; font-size: larger;"><b>Players Details</b></h4><br>
        <div class="cards">
            <div class="card">
                <img class="card__image" src="images/RR/sanju.png" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Sanju</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>RR</td>
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
                    <br><button class="viewbtn" id="sanjuopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/RR/buttler.jpeg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Buttler</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>RR</td>
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
                    <br><button class="viewbtn" id="josopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/RR/rahane.jpeg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Rahane</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>RR</td>
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
                    <br><button class="viewbtn" id="ranaheopen">View Details</button>
                </div>
            </div>
            <div class="card">
                <img class="card__image" src="images/RR/ben stoke.jpg" alt="KKR-Logo">
                <div class="card__info">
                    <table border="1" class="table2" style="width: 100%; border-style:dashed;">
                        <tr>
                            <td style="font-weight: bold;">Full Name :</td>
                            <td>Stoke</td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Team:</td>
                            <td>RR</td>
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
                            <td>All-Rounder</td>
                        </tr>
                    </table>
                    <br><button class="viewbtn" id="benopen">View Details</button>
                </div>
            </div>

        </div><br>
         <!-- Players sanju details start -->

         <table id="modalcontainer" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 65%;background-color:#ffccff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/RR/sanju.png" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Sanju Samson (Captain)</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>RR</td>
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
                <td colspan="3"><button class="viewbtn" id="sanjuclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const sanjuopen = document.getElementById('sanjuopen');
            const modalcontainer = document.getElementById('modalcontainer');
            const sanjuclose = document.getElementById('sanjuclose');
            sanjuopen.addEventListener('click', () => {
                modalcontainer.classList.add('show');
                cards.classList.remove('hide');
            });
            sanjuclose.addEventListener('click', () => {
                modalcontainer.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players sanju details end-->

        <!-- Players Buttler details start -->

        <table id="modalcontainer1" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 65%;background-color:#ffccff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/RR/buttler.jpeg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Jos Buttler</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>RR</td>
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
                <td colspan="3"><button class="viewbtn" id="josclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const josopen = document.getElementById('josopen');
            const modalcontainer1 = document.getElementById('modalcontainer1');
            const josclose = document.getElementById('josclose');
            josopen.addEventListener('click', () => {
                modalcontainer1.classList.add('show');
                cards.classList.remove('hide');
            });
            josclose.addEventListener('click', () => {
                modalcontainer1.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players buttler details end-->

        <!-- Players rahane details start -->

        <table id="modalcontainer2" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 65%;background-color:#ffccff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/RR/rahane.jpeg" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Ajinkya Rahane,</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>RR</td>
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
                <td colspan="3"><button class="viewbtn" id="rahaneclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const ranaheopen = document.getElementById('ranaheopen');
            const modalcontainer2 = document.getElementById('modalcontainer2');
            const rahaneclose = document.getElementById('rahaneclose');
            ranaheopen.addEventListener('click', () => {
                modalcontainer2.classList.add('show');
                cards.classList.remove('hide');
            });
            rahaneclose.addEventListener('click', () => {
                modalcontainer2.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players rahane details end-->

        <!-- Players arshdeep details start -->

        <table id="modalcontainer3" class="table1" border="1" cellspacing="10" cellpadding="10"
            style="width: 70%; height: 55%; border-style:dashed; top: 65%;background-color:#ffccff">
            <tr>
                <th rowspan="6" style="width: 400px;border: none;"><img src="images/RR/ben stoke.jpg"" class="teamlogo">
                </th>
                <th colspan="2" class="teamtitle">Ben Stoke</th>

            </tr>
            <tr>
                <td style="font-weight: bold;">Team:</td>
                <td>RR</td>
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
                <td>All-Rounder</td>
            </tr>
            <tr>
                <td colspan="3"><button class="viewbtn" id="benclose"
                        style="background-color: rgb(40, 168, 219);;">close</button>
                </td>
            </tr>
        </table>

        <!-- Players details script end-->
        <script>
            const benopen = document.getElementById('benopen');
            const modalcontainer3 = document.getElementById('modalcontainer3');
            const benclose = document.getElementById('benclose');
            benopen.addEventListener('click', () => {
                modalcontainer3.classList.add('show');
                cards.classList.remove('hide');
            });
            benclose.addEventListener('click', () => {
                modalcontainer3.classList.remove('show');
            });
        </script>
        <!-- Players details  script end-->
        <!-- Players ben details end-->
        <footer class="footer">
            &copy;2022 &#64;srikantsatapathy | All Rights Rerserved
        </footer>
    </div>
</body>

</html>