<html>

	<head>
		<style>

		h1{font-size: 40px;
		   color: black;
		  } 

		h2{text-align: center;
		   font-size: 40px;
		   color: darkblue;
		   }

		img{width: 450px;
		    height: 300px; 
		    float: right;
    		    margin-right: 35px;
		   }

		p{font-size: 22px;
		  font-weight: bold;
		  color: white;
		  padding-bottom: 20px;
  		  margin-left: 30px;
		  }
        #selectname{
            color:red;
            font-size:35px;
        }

#head{
	text-align: center;
}
.service {
	width: 80%;
	text-align: center;
    cursor: pointer;
    padding: 18px;
    border:  2px solid #A020F0;
    transition: 0.4s;
	font-size: 30px; 
  }
  .active, .service:hover{
    background-color: #A020F0;
  }
  .discription {
    display: none;
    padding: 12px 8px;
	border: 10px solid #A020F0;
    background-color: white;
	color:black;margin-left:18%;
    overflow: hidden;width:60%;
  }

  .discription p {
	color: black;
  }

		</style>
	</head>

		<body>
		
	<table bgcolor= "#6495ED">

		<tr>

			<td>
					<h1>Electrical services from ITACHI</h1><br>
					<p style="color:black;"><img src="images/logo2.png">ITACHI delivers comprehensive electrical services for homes 
					and businesses throughout all over countries.No matter what you need, you can rest assured that one of our
					 expert electricians can handle it. We only include qualified licensed electricians in the ITACHI family.
					       To join us, each technician must pass a comprehensive background check.
					   Once they come aboard, every electrician receives ongoing training throughout their career. 
					      You never have to worry about the quality or professionalism of your local ITACHI. 
					   The reason we are so exacting in our standards is that we know electrical work is one of the areas 
					    where skimping on quality simply is not an option.To that end, we do our utmost to ensure 
					   that our electricians are capable of providing the highest quality electrical services possible.

			 </td>

		</tr>

	</table>

			<h2>OUR POPULAR SERVICES</h2>
			<div id="head">
      <button class="service">Switch and Outlet Repair/Installation</button>
      <div class="discription">
        <p>Switch and outlet repair/installation is all about fixing or setting up electrical switches and plugs in buildings.
			     It includes things like repairing broken switches or outlets, upgrading them for better safety or performance, and putting in new ones where needed.
			     It's important for keeping the electricity in a building working safely and smoothly.</p>
      </div>
	  
      <button class="service">Electrical Panel Upgrades</button>
      <div class="discription">
        <p>Electrical panel upgrades involve replacing or improving the main distribution center of an electrical system in a building, ensuring it can handle increased power demands safely and efficiently. </p>
      </div>

      <button class="service">Lighting Repair/Installation/Upgrades</button>
      <div class="discription">
        <p>Electrical panel upgrades involve replacing or improving the main distribution center of an electrical system in a building, ensuring it can handle increased power demands safely and efficiently. 
			     This upgrade enhances electrical capacity and reduces the risk of overload or electrical hazards.</p>
      </div>

	  <button class="service">Ceiling Fan Installation</button>
      <div class="discription">
        <p>Ceiling fan installation is the process of mounting and wiring a ceiling fan in a room to provide airflow and cooling. 
			     It enhances comfort and air circulation while complementing room decor.</p>
      </div>

	  <button class="service">Wiring and Rewiring</button>
      <div class="discription">
        <p>Wiring involves installing electrical cables to connect various components in a building's electrical system, ensuring safe and reliable power distribution.
			     Rewiring refers to replacing old or faulty wiring with new ones to improve safety, efficiency, and compliance with current electrical codes.</p>
      </div>

	  <button class="service">Washer and Dryer Hookups</button>
      <div class="discription">
        <p>Washer and dryer hookups involve installing connections for water, drainage, and electrical power to enable the use of washing machines and dryers in a home or building. 
			     This process ensures proper functionality and convenience for laundry appliances.</p>
      </div>

	  </div>
<center>
<h3>*Caution:The Work load amount is approximately - under the work in done amount will be changed.</h3>

		<form action="postplum.php"method="post">
<h1 id="selectname"> Select Our Proposal Option : <select name="proposal"><option> --- </option> 
<option>wireman</option>
<option>Maintenance electrician </option>
<option>Installation technician</option>
<option>AC fitting and services</option>
</select></h1>

<input type="hidden" name="type" value="electrical">
<br>
<input type="submit" name="submit" Value="submit">
<br><br>
	<br> <a href="index.html"> Click Here Back </a> 
	<br><br><br>
		


	




</body>

<script>

var acc = document.getElementsByClassName("service");

for (let i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var discription = this.nextElementSibling;
        if (discription.style.display === "block") {
            discription.style.display = "none";
        } else {
            discription.style.display = "block";
        }
    });
}


</script>


</html>