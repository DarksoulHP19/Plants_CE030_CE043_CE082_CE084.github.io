<style>
.dropbtn {
  background-color: DarkSlateGrey;
  color: white;
  height:50px;
  width:300px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  width:300px;
  font-size: 16px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: aqua; color:black;}
</style>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/signup/welcome.php">Plants</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/signup/welcome.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/signup/index.php">Sign Up</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/signup/prevorder.php"> History</a>
        </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class ="nav-link">
        <script>function display_ct7() {
var x = new Date()
var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
hours = x.getHours( ) % 12;
hours = hours ? hours : 12;
hours=hours.toString().length==1? 0+hours.toString() : hours;

var minutes=x.getMinutes().toString()
minutes=minutes.length==1 ? 0+minutes : minutes;

var seconds=x.getSeconds().toString()
seconds=seconds.length==1 ? 0+seconds : seconds;

var month=(x.getMonth() +1).toString();
month=month.length==1 ? 0+month : month;

var dt=x.getDate().toString();
dt=dt.length==1 ? 0+dt : dt;

var x1=month + "/" + dt + "/" + x.getFullYear(); 
x1 = x1 + " - " +  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
document.getElementById('ct7').innerHTML = x1;
display_c7();
 }
 function display_c7(){
var refresh=1000; // Refresh rate in milli seconds
mytime=setTimeout('display_ct7()',refresh)
}
display_c7()
</script>
<span id='ct7'></span>
        
</li>

        </li>

      </ul>
      <form class="d-flex" role="search">
      <div class="dropdown">
  <button class="dropbtn">Plants</button>
  <div class="dropdown-content">
    <a href="welcome.php">Aloe Barbadensis</a>
    <a href="welcome.php">Chlorophytum Comosum</a>
    <a href="welcome.php">Crassula Ovata</a>
    <a href="welcome.php">Dracaena Sanderiana</a>
    <a href="welcome.php">Epipremnum Aureum</a>
    <a href="welcome.php">Ficus Benjamina</a>
    <a href="welcome.php">Sansevieria trifasciata</a>
    <a href="welcome.php">Spathiphyllum Wallisii</a>

    <a href="welcome2.php">Aloe Vera</a>
    <a href="welcome2.php">Anthurium</a>
    <a href="welcome2.php">Areca Palm</a>
    <a href="welcome2.php">Bamboo</a>
    <a href="welcome2.php">Fern</a>
    <a href="welcome2.php">Grape Ivy</a>
    <a href="welcome2.php">Money Plant</a>
    <a href="welcome2.php">Liliy</a>

    <a href="welcome3.php">Snake Plant</a>
    <a href="welcome3.php">Akaza Plant</a>
    <a href="welcome3.php">Gardern Ferns</a>
    <a href="welcome3.php">Philodendron</a>
    <a href="welcome3.php">Thyme</a>
    <a href="welcome3.php">Mint</a>
    <a href="welcome3.php">Kira</a>
    <a href="welcome3.php">Sedum</a>

    <a href="welcome4.php">Zygopetalum Orchid</a>
    <a href="welcome4.php">English Leaf</a>
    <a href="welcome4.php">Turkscap</a>
    <a href="welcome4.php">Himalayan Bamboo</a>

  </div>
</div>
      </form>
    </div>
  </div>
</nav>