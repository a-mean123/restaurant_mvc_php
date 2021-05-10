<form method="POST" action="index.php?controller=reservation&action=created" name="f1">


<h1 class="parac" > <center>Reservez vos tables </center></h1>

<table >
   <tr>
       <td> <label for="nom"><p> Nom et prenom: </p> </label></td>
       <td><input type="text" id="nom" name="name" ></td>
      </tr>
  
	<tr>
       <td><label for="tel"><p> Télephone:</p> </label></td>
       <td><input type="tel" id="tel" name="tel" required maxlength="8" ></td>
	   
	   </tr>
	   <tr>
       <td ><label for="email"> <p> Email:</p> </label></td>
       <td><input type="text" id="email" name="email" ></td>
      </tr>
	   
	   <tr>
        <td><label for="dateres"> <p> Date de Reservation:</p> </label></td>
       <td><input type="date" id="datenais" min="2019-01-01" max="2020-01-01" name="date" value="03/12/2019"></td>
	   </tr>
   <tr>
       <td><label for="tel">  <p>Heure:</p> </label></label></td>
       <td><input type="text" id="heure" name="heure" required maxlength="1" ></td> <br>
	   <tr>
       <td>Matin/soir: </td>
	   <td>
  <input type="radio" id="PM" name="drone" value="PM"> 
   
  <label for="huey">PM</label> 
  
  <input type="radio" id="AM" name="drone" value="AM">
  <label for="dewey">AM</label></td></tr>
   
    <tr>
<td><label for="nom"> <p>Nombre de personnes:</p> </label></td>
       <td><input type="text" id="Nombre de personnes" name="nbrp" ></td>
	   </tr>
	   
	    <tr>
<td><label for="nom"> <p>Nombre de Tables:</p> </label></td>
       <td><input type="text" id="Nbrt" name="nbrt" ></td>
	   </tr>
	   <tr>
	   
</table>

<div> 
<br>
<tr>
	<td><label for="Type"> <p>Type</p> </label></td>
	<select name="type" id="Type">
	<td>
	 <option value="Spécial"><p> Choisir une Type</p></option>
	<option value="Spécial"> Spéciale</option> 
	<option value="Familiale"> Familiale</option> </td></tr>
	</select>
	</div>
	<br>
	<p><center><input type="reset" value="Annler" name="B1">
    <input type="submit" value="Reserver" onclick="verif()" name="B2"> </center></p>
</form>