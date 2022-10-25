

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
    <a href="../index.html"><img src="../Logo-01.png" alt="logo" height="200px"></a>
        <li class="navbaras">
            <ul><a href="../index.html">Home</a></ul>
            <!-- <ul><a href="#">About</a></ul>
            <ul><a href="#">Prekės</a></ul> -->
            <ul><a href="krepselis.php">Krepšelis</a></ul>
            <ul><a href="login.php">Login</a></ul>
            <ul><a href="susisiekite.php">Susisiekite</a></ul>

        </li>
    </nav>
    <div class="masterContainer">
        <div class="basket-container prekiuContainer">
                <div class="prekiu-containter">
                <?php include "../functions/mainFunctions.php"; ?>
                <table>
                    <tr>
                        <th>Nr.</th>
                        <th>Prekės ID</th>

                        <th>Pavadinimas</th>
                        <th>Foto</th>
                        <th>Kaina</th>
                        <th>Kiekis</th>
                        <th>Pakeisti</th>
                        <th>Suma, Eur</th>
                        <th>Pašalinti</th>
                    </tr>
                    <tr>
                        <th>1.</th>
                        <th>AL001</th>

                        <th>Kanapių aliejus 250ml</th>
                        <th><img src="../storephoto\hempseedoil250.JPG" alt="prekesphoto" width="60px" height="60px"></th>
                        <th><?php echo $kaina[0];?></th>
                        <th><?php echo $skaicius[0];?></th>
                        <th>
                            <button name="aukstyn">+</button>
                            <button name="zemyn">-</button>
                        </th>
                        <th><?php echo $tarpineSuma[0];?></th>
                        <th><button>Pašalinti</button></th>
                    </tr>
                    </table>
                </div>
                <div class="pristatymo-container">
                    <h3>Pristatymo būdai:</h3>
                    <button class="pristatymo-button1">Paštomatas</button>
                    <button class="pristatymo-button2">Atsiėmimas</button>
                    <button class="pristatymo-button3">Kurjeris</button>
                </div>
                <div>
                    <div class="apmokejimo-container">
                    <h3>Apmokejimo būdai:</h3>
                    <button class="apmokejimo-button1">Bankiniu pavedimu</button>
                    <br>
                    <button class="apmokejimo-button2">Grynais atsiemant</button>
                    <button class="apmokejimo-button3">Paysera</button>
                    </div>
                    <div class="apmokejimo-suma">
                        <h4>Pristatymo išlaidos: <?php echo $pristatymoIslaidos?> Eur</h4>
                
                    <h1>Galutinė suma: <?php echo $finalTotal?>Eur</h1>
                    </div>
                </div>
                <div class="apmokejimo-formos-adresas">
                <form action="login.php" method ="POST" class="apmokejimo-formos-adresas-forma">
                <label for="name">El.paštas</label>
                <input type="text" placeholder="El.pašto adresas">
                <label for="address" >Tel. numeris:</label>
                <input type="text" placeholder="Tel. numeris">
                <br>
                <label for="address" >Adresas:</label>
                <br>
                <input type="text" placeholder="Gatve">
                <input type="text" placeholder="Namo numeris">
                <input type="text" placeholder="Buto numers">
                <input type="text" placeholder="Miestas">
                <input type="text" placeholder="Šalis">
                <br>
                <button type="submit" name="registruokis">Apmokėti!</button>
            </form>

                </div>




                </div>


            <!-- <form action="login.php" method ="POST" class="login-form basket-container">
                <h1>Prekių krepšelis</h1>
                <br>
                <label for="name">Vartotojo vardas</label>
                <input type="text" placeholder="Vartotojo vardas">
                <label for="password">Slaptažodis</label>
                <input type="password" placeholder="Slaptažodis">
                <button type="submit" name="prisijungimas">Prisijungimas</button>
                <button type="submit" name="create" value="vienas">Neturi prisijungimo?</button>
            </form> -->
            <!-- <form action="login.php" method ="POST" class="registration-form" style="display: 
            <?php if (!isset($_POST["create"])){
                echo 'none';
            } ?>">


                <h1>Vartotojo registracija</h1>
                <br>
                <label for="name">El.paštas</label>
                <input type="text" placeholder="El.pašto adresas">
                <br>
                <label for="name">Vartotojo vardas</label>
                <input type="text" placeholder="Vartotojo vardas">
                <br>
                <label for="password">Slaptažodis</label>
                <input type="password" placeholder="Slaptažodis">
                <br>                
                <label for="name">Pakartoti slaptažodį</label>
                <input type="password" placeholder="Pakartoti slaptažodį">
                <br>
                <br>
                <label for="address" >Adresas:</label>
                <br>
                <input type="text" placeholder="Gatve">
                <input type="text" placeholder="Namo numeris">
                <input type="text" placeholder="Buto numers">
                <input type="text" placeholder="Miestas">
                <input type="text" placeholder="Šalis">
                <br>
                <label for="address" >Kontaktai:</label>
                <br>
                <input type="text" placeholder="Tel. numeris">
                <br>
                <br>
                <button type="submit" name="registruokis">Registruotis!</button>
            </form> -->
        
        <div class="rightBlock">
        <div class="infoContainer">
            <div class="infoCard">Lorem ipsum Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto aliquam optio quidem corporis. Temporibus tenetur eaque placeat ratione assumenda distinctio atque corporis neque magni expedita explicabo, eius aut adipisci eveniet. dolor sit amet consectetur adipisicing elit...</div>
            <div class="infoCard">Lorem ipsum dolor sit amet consectetur adipisicing elit... Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut quas cum quo eligendi sequi harum laudantium saepe commodi reiciendis molestiae quod odio, aperiam accusantium hic in eum cupiditate aliquid sunt!</div>
            <div class="infoCard">Lorem ipsum dolor Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi praesentium perspiciatis distinctio iusto ratione in delectus totam ex enim obcaecati fuga non nostrum, sequi est inventore optio doloribus. Neque, perspiciatis? sit amet consectetur adipisicing elit...</div>
            <div class="infoCard">Lorem ipsum dolor sit amet consectetur adipisicing elit...</div>
        </div>
        <div class="contactBox">
           <div class="contacts">
            <li>Kontaktai: random gatve Vilnius, Lietuva</li> 
            
           <li>Tel: 222223331344</li> 
            <li><a href="#">Privatumo politika</a></li>
        </div>
           <div class="mapBoxas">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30145.73201250757!2d25.263386910444936!3d54.68764019128842!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd9419df4df72d%3A0x84cdab3f82f7f6fb!2sGediminas%20Castle%20Tower!5e0!3m2!1sen!2slt!4v1666022225781!5m2!1sen!2slt" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
        </div>
    </div>
    </div>


</body>
</html>