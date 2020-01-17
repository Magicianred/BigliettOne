<header id = "titleNav">

    <div class="header">
        <span class="menu" onclick="openNav()">
            <img src="img/menu.png" alt="Carrello"/>
        </span>
        <a class="title" href="<?php echo INDEX ?>">
             <img src="img/title.png" alt="BigliettOne" height="40px" width="100px">
        </a>
        <a class="cartIcon" href="<?php echo CART ?>">
            <img src="img/cart.png" alt="Carrello"/>
        </a>
        <a class="notifIcon" href="<?php echo NOTIFICATION ?>">
            <img src="img/notification.jpg" alt="Notifiche">
        </a>
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="<?php echo ACCOUNT ?>">Il mio account</a>
            <a href="<?php echo SERVICE ?>">Servizio Clienti</a>
            <a href="<?php echo CONTACTS ?>">Contatti</a>
            <a href="<?php echo LEGAL ?>">Info Legali</a>
        </div>
    </div>

    <nav id="navbar" class="eventsNav"><a href="account.php">Eventi comprati</a><a href="eventi_creati.php">Eventi creati</a></nav>
</header>
