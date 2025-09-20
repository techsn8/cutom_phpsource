<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
/* header {
  background-color: #FF6347;
  text-align: center;
  font-size: 35px;
  color: white;
  padding: 1em;
} */
  header {
			background-color: #FF6347;
			color: white;
			text-align: center;
			padding: 1em;
             position: fixed;
  left: 0;
  width: 100%;
		}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 30%;
  height: 600px; /* only for demonstration, should be removed */
  background: #6495ED;
  left: 0;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 120px;
}

article {
  float: left;
  padding: 100px;
  width: 70%;
  background-color:  #F0FFF0;
  height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}
<?php include 'CSS/custom_style.css'; ?>

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
</style>
</head>
<body>
<header>
  <h2>Cities</h2>
</header>

<section>
  <nav>
    <ul>
      <li><a href="#">London</a></li>
      <li><a href="#">Paris</a></li>
      <li><a href="#">Tokyo</a></li>
    </ul>
  </nav>
  
  <article>
    <h1>London</h1>
    <p>London is the capital city of England. It is the most populous city in the  United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>
</section>

 <footer>
		<p>&copy; 2025 cutom Portal</p>
	</footer>

</body>
</html>

