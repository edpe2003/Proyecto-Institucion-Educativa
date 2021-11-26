<div class="container chatItemBg Brounded text-white p-2 mt-3 mb-3 w-75 text-center">
    <form action="home.php" method="POST">
        <input 
        
        class="shadow-lg crystal Brounded p-2 px-5 text-white text-break chatItem fw-bold" 
        type="submit" 
        value="<?php echo $nombre[$i]; ?>" 
        name="ingresarChat">
        
        <input type='hidden' name='nombre' value="<?php echo $nombre[$i]; ?>">
        <input type='hidden' name='IDChat' value="<?php echo $IDChat[$i] ?>">
    </form>
</div>