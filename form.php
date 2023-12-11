<!DOCTYPE html>
<html>
    <head>
        <title>
            Insert Form Value into Database
        </title>
        <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <body>
    <p class="heading font-x2">Join the <b><font color="#0000ff">Chain-for-Children's-Cheer</font></b></p>
    <p>Please read the <a href="index.html#stmt">statement</a> before joining.</p><hr />
    <p>I would like to join the <b><font color="#0000ff">Chain-for-Children's-Cheer</font></b>, and also encourage others to join and grow the chain.</p>
      <p>I would like to be: <font color="#ff0000"><b>*</b></font></p>
      <div class="one_third first">
	<label for="activeant">an <b>Active Ant</b> <img src="ant-small.jpg" style="width:4%"><br />
	  I will <font color="#0000ff">Arise and Awaken</font> at least <b>2 people</b> to join the chain
	</label>
	<input type="radio" id="activeant" name="volevel" value="activeant" required>
	<br /><hr />
      </div>
      <div class="one_third">
	<label for="speedysparrow">a <b>Speedy Sparrow</b> <img src="sparrow-small.jpg" style="width:4%"><br />
	  I will <font color="#0000ff">Spread the Spirit</font> to at least <b>5 people</b> to join the chain</label>
	<input type="radio" id="speedysparrow" name="volevel" value="speedysparrow" required>
	<br /><hr />
      </div>
      <div class="one_third">
	<label for="electricelephant">an <b>Electric Elephant</b> <img src="elephant-small.jpg" style="width:4%"><br />
	  I will <font color="#0000ff">Enthuse and Enlighten</font> at least <b>20 people</b> to join the chain</label>
	<input type="radio" id="electricelephant" name="volevel" value="electricelephant" required>
	<br />
        <form action="insert.php" method="POST">
            <label>Name:</label><input type="text" name="name"><br>
            <label>Profession:</label><input type="text" name="profession"><br>
            <label>Name of City/Town:</label><input type="text" name="city"><br>
            

            <label>Country:</label><input type="text" name="country"><br>
            <label>Contact email/phone:</label><input type="text" name="contact"><br>
            <label>Remarks/comments:</label><input type="text" name="remarks"><br>
            <label for="verify">I would like to volunteer to help actively</label>
	<input type="checkbox" id="vol" name="vol">	<br />
    <label for="verify">By submitting this form, you agree that your <br>submitted information (except contact information) <br>will be stored and displayed on the website.</label>
	<input type="checkbox" id="vol" name="vol">	<br /><hr />
            <button type="submit" name="submit">Submit</button>
            <button type="reset" name="reset">Reset</button>
        </form>
    </body>
</html>