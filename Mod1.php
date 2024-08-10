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
    <h1>Instalação e Configuração</h1>  
    </center>
    <p>O primeiro passo para instalar o Python no Windows é acessar o site oficial do Python em python.org. Lá, você encontrará a versão mais recente do Python disponível para download.</p>
    <P>Ao acessar o site oficial do Python, você verá uma opção para baixar o Python. Certifique-se de selecionar a versão correta para o seu sistema operacional Windows. Por exemplo, se você estiver usando o Windows 10, escolha a opção de download para o Windows 10.</P>
    <p>Durante a instalação do Python, você será solicitado a selecionar as opções de instalação. Certifique-se de marcar a opção “Add Python to PATH” para que o Python possa ser acessado facilmente a partir da linha de comando.</p>
    <p>Após selecionar as opções de instalação, clique em “Install Now” para iniciar o processo de instalação. Aguarde até que a instalação seja concluída.</p>
    <center>
    <h1>Vantagens</h1>
    </center>
    <h2>Sintaxe Simples e Legível</h2>
    <p>Python é conhecido por sua sintaxe clara e legível, o que torna o desenvolvimento e a manutenção do código mais fácil. Isso é especialmente benéfico para equipes de desenvolvimento, pois facilita a colaboração e a compreensão do código.</p>
  <h2>Ampla Gama de Frameworks</h2>
   <p>Python oferece uma variedade de frameworks web robustos, como Django, Flask e Pyramid. Esses frameworks fornecem ferramentas e bibliotecas poderosas para acelerar o desenvolvimento web, desde a criação de APIs até a construção de sites complexos.</p>
   <h2>Rica Biblioteca Padrão</h2>
   <p>Python possui uma biblioteca padrão abrangente que oferece suporte a uma variedade de funcionalidades, desde manipulação de arquivos até comunicação de rede. Isso reduz a necessidade de depender de bibliotecas de terceiros, simplificando o desenvolvimento.</p>
   <center><h1>Desvantagens</h1></center>
    <h2> Desempenho Relativo:</h2>
    <p>Em comparação com linguagens como C++ ou Go, Python pode ser mais lento em determinadas situações devido à sua natureza interpretada. Isso pode afetar o desempenho de aplicativos que exigem alta velocidade de processamento, como jogos ou sistemas de alta frequência de negociação.</p>
    <h2>Overhead de Memória</h2> 
   <p>Python consome mais memória do sistema em comparação com algumas outras linguagens, o que pode ser uma preocupação em sistemas com recursos limitados. Para aplicativos que operam em ambientes com restrições de memória, isso pode ser uma desvantagem significativa.</p>
   <h2>Dependência de Terceiros</h2>
    <p>Embora a biblioteca padrão de Python seja rica em recursos, pode haver casos em que você precise recorrer a bibliotecas de terceiros para funcionalidades específicas. Isso pode aumentar a complexidade do projeto e introduzir dependências adicionais que precisam ser gerenciadas.</p>
    <center><h1>Aplicações python</h1></center>
      <p>1. Inteligência Artificial: Nesta área, a programação em Python está aplicada na automatização de Chatbots e Assistentes de Voz, como a Siri da Apple e a Alexa da Amazon. Além disso, a linguagem também está presente em vendas de telemarketing, proporcionando um atendimento mais rápido.</p>
      <p>2. Ciência de Dados: Já nesta área, o Python está aplicado aos problemas de análise de dados, construção de gráficos, a partir das bibliotecas NumPy, SciPy e MatplotLib, na qual contém uma enorme variedade de algoritmos eficientes para esse segmento e modelagem dos dados e estatísticas.</p>
      <p>3. Machine Learning: A programação em Python também é aplicada a "Machine Learning", conhecida também como Aprendizado Automático, Aprendizagem Automática, Aprendizado de Máquina, Aprendizagem de Máquina. Ele é utilizado para automatizar tarefas e se concentra mais em ensinar um computador como aprender a análise de grandes conjuntos de dados e os respectivos padrões. Após a programação inicial, o aprendizado de máquina é capaz de aprender e melhorar sem a necessidade de intervenção humana. O computador se torna mais inteligente e cresce por si mesmo de certo modo, em vez de ser reativo e simplesmente analisar os dados fornecidos</p>
      <p>4. Desenvolvimento de Web: A linguagem em Python com seu framework está presente em desenvolvimento de sites, oferecendo todas as ferramentas necessárias para construir uma aplicação de web. O Django, por exemplo, é o mais usado para desenvolvimento de web com Python</p>
    <h1><center>Conceitos basicos de python</center></h1>
    <p>Variáveis: Em Python, as variáveis são usadas para armazenar valores que podem ser usados posteriormente no programa. Para atribuir um valor a uma variável, utilizamos o operador de atribuição “=”.</p><p>● Operadores: Python oferece uma variedade de operadores para realizar cálculos e manipular valores. Alguns exemplos incluem operadores aritméticos (+, -, *, /), operadores de comparação (==, <, >) e operadores lógicos (and, or, not).</p><p>● Estruturas de controle: As estruturas de controle permitem controlar o fluxo de um programa. Python oferece estruturas comocondicionais (if, else, elif) e loops (for, while) para realizar verificações e repetições de código.</p><p>● Funções: As funções são blocos de código reutilizáveis que executam uma determinada tarefa. Em Python, podemos definirnossas próprias funções e também usar funções pré-definidas da biblioteca padrão.</p><p>● Tratamento de exceções: Python possui um mecanismo de tratamento de exceções que permite lidar com erros e exceções de forma elegante. Com o uso de blocos try-except, podemos capturar e tratar erros, evitando que o programa seja interrompido abruptamente.</p><p> ● Módulos e pacotes: Python possui um sistema de módulos e pacotes que permite organizar e reutilizar o código de forma eficiente. Módulos são arquivos que contêm definições de funções, classes e variáveis, enquanto pacotes são diretórios que contêm módulos relacionados.
</P>
<h1>Exemplos de programas</h1>
<p></p>
</body>
</html>