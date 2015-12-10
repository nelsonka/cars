<?php
    $pageID = 'home';
    $title = 'Ajax File Upload';
    
    require('socket.php');
    require('structure.php');
    
    $structure = new Structure;
    
    echo $structure->header($title);

?>
    <div class="main">
        <h1>Load Form Options Via Ajax!</h1>
       <form class="ajax-fun">
            <select id="makes" name="makes"></select><br />
            <select id="models" name="models" ></select><br />
            <select id="engines" name="engines" ></select><br />
            <input type="text" id="name" name="name" placeholder="Name"  style="width: 200px;"/><br />
            <input type="tel" id="phone" name="phone"  placeholder="Phone" style="width: 200px;"/><br />
            <input type="email" id="email" name="email" placeholder="Email" style="width: 200px;"/><br />
            <input type="text" id="zip" name="zip" placeholder="Zip Code" style="width: 200px;"/><br />
            Best way to contact you:<br />
            <input type="radio" id="contact-phone" name="contact" value="phone"> Phone<br>
            <input type="radio" id="contact-email" name="contact" value="email"> Email<br>
            <br />
            <input type="submit" value="Submit"/> 
        </form>
        <h1 class="second"></h1>
        <h2 class="third"></h2>
        <div class="list"></div>
    </div>
    </div>
        <div class="testing"></div>
<?php
    echo $structure->footer();
?>