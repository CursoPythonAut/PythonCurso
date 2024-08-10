<!DOCTYPE html>
<html>
<head>
  <title>Menu do curso</title>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

li.dropdown {
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

li:last-child {
  border-right: none;
}

</style>
</head>
<body>

<ul>
<li><a class="active" href="Menu.php">Menu</a></li>
  <li class="dropdown">
    <a href="Mod1.php">Módulo 1</a>
  </li>
  <li>
    <a href="Mod2.php" class="dropbtn">Módulo 2</a>
  </li>
  <li class="dropdown">
    <a href="Mod3.php" class="dropbtn">Módulo 3</a>
  </li>
  <li style="float:right"><a href="Sobre.php">Sobre</a></li>
</ul>

<center>
  <h1>Menu do banco de dados da Clínica</h1>
</center>

<p>Este é o menu do site do nosso curso de Python</h4>
  <p>Aqui você pode escolhere qual módulo você quer ver e qual parte do módulo você quer</p>
</body>
</html>