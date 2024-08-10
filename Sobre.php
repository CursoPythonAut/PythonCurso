<!DOCTYPE html>
<html>
<head>
  <title>Menu das Clínicas</title>
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
    <h1>Sobre o Curso</h1>
    <p>Os criadores desse curso foram o Arthur Peixoto de Mesquita e o Davi Nascimento Gomes</p>
    <p>Esse curso foi criado para um trabalho de Linguagem de Programação e de Informática para o terceiro bimestre do segundo ano de automação Industrial</p><br>
    <p>Espero que consiga aprender com esse curso</p> 
  </center>
</body>
</html>