<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<nav class="main-nav" role="navigation">

  <!-- Mobile menu toggle button (hamburger/x icon) -->
  <input id="main-menu-state" type="checkbox" />
  <label class="main-menu-btn" for="main-menu-state">
    <span class="main-menu-btn-icon"></span> Toggle main menu visibility
  </label>

  <h2 class="nav-brand"><a href="#">Brand</a></h2>

  <!-- Sample menu definition -->
  <ul id="main-menu" class="sm sm-blue">
    <li><a href="http://www.smartmenus.org/">Home</a></li>
    <li><a href="http://www.smartmenus.org/about/">About</a>
      <ul>
        <li><a href="http://www.smartmenus.org/about/introduction-to-smartmenus-jquery/">Introduction to SmartMenus jQuery</a></li>
        <li><a href="http://www.smartmenus.org/about/themes/">Demos + themes</a></li>
        <li><a href="http://vadikom.com/about/#vasil-dinkov">The author</a></li>
        <li><a href="http://www.smartmenus.org/about/vadikom/">The company</a>
          <ul>
            <li><a href="http://vadikom.com/about/">About Vadikom</a></li>
            <li><a href="http://vadikom.com/projects/">Projects</a></li>
            <li><a href="http://vadikom.com/services/">Services</a></li>
            <li><a href="http://www.smartmenus.org/about/vadikom/privacy-policy/">Privacy policy</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="http://www.smartmenus.org/download/">Download</a></li>
    <li><a href="http://www.smartmenus.org/support/">Support</a>
      <ul>
        <li><a href="http://www.smartmenus.org/support/premium-support/">Premium support</a></li>
        <li><a href="http://www.smartmenus.org/support/forums/">Forums</a></li>
      </ul>
    </li>
    <li><a href="http://www.smartmenus.org/docs/">Docs</a></li>
    <li><a href="#">Sub test</a>
      <ul>
        <li><a href="#">Dummy item</a></li>
        <li><a href="#">Dummy item</a></li>
        <li><a href="#" class="disabled">Disabled menu item</a></li>
        <li><a href="#">Dummy item</a></li>
        <li><a href="#">more...</a>
          <ul>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">more...</a>
              <ul>
                <li><a href="#">Dummy item</a></li>
                <li><a href="#" class="current">A 'current' class item</a></li>
                <li><a href="#">Dummy item</a></li>
                <li><a href="#">more...</a>
                  <ul>
                    <li><a href="#">subMenusMinWidth</a></li>
                    <li><a href="#">10em</a></li>
                    <li><a href="#">forced.</a></li>
                  </ul>
                </li>
                <li><a href="#">Dummy item</a></li>
                <li><a href="#">Dummy item</a></li>
              </ul>
            </li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">A pretty long text to test the default subMenusMaxWidth:20em setting for the sub menus</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
            <li><a href="#">Dummy item</a></li>
          </ul>
        </li>
      </ul>
    </li>
    <li><a href="http://www.smartmenus.org/contact/">Contact</a></li>
  </ul>
</nav>

<div class="demo-text">
  <p>Demonstrates a complete navbar including a mobile view menu toggle button (<a href="http://www.smartmenus.org/docs/#menu-toggle-button">related docs</a>).</p>
</div>

<button id="btn">CLICKME</button>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="scripts.js"></script>
</body>
</html>