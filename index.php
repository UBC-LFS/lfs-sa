<?php
  include("lfsmap1.html");
?>

<h1>LFS Secure Access Request</h1>

<em>
This form is to be filled out by the alarm code recipient's supervisor.
</em>
<hr />

<form id="form1" method="post" action="process.php">
  <table>
  <tr>
  <td>
  <label for="sname">Supervisor's Name: </label>
  </td><td>
  <input type="text" required name="sname" >
  </td>
  </tr><tr>
  <td>
  <label for="rname">Alarm code Requestor's Name : </label>
  </td><td>
  <input type="text" required name="rname" >
  </td>
  </tr><tr>
  <td>
  <label for="remail">Alarm code Requestor's Email: </label>
  </td><td>
  <input type="email" required name="remail" >
  </td>
  </tr><tr>
  <td>
  <label for="rposn">Alarm code Requestor's Position : </label>
  </td><td>
  <input type="text" required name="rposn" >
  </td>
  </tr><tr>
  <td>
  <label for="bldg">Building Name : </label>
  </td><td>
  <input type="text" required name="bldg" >
  </td>
  </tr><tr>
  <td>
  <label for="rooms">Room No. to be accessed : </label>
  </td><td>
  <input type="text" required name="rooms" >
  </td>
  </tr>
  </table>
  <p>
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Cancel">
  </p>
</form>

<br />
<hr />
<h3>Alarm code requisition process</h3>

<p>
<em>
Please allow <b>three business days</b> for the processing.
</em>
</p>

<p>
After this form has been submitted, it will be reviewed and confirmed with
your supervisor that the access requested is appropriate.
</p>

<p>
The alarm code recipient will be contacted by email for further
information when the request has been confirmed with the supervisor.
</p>

<p>
This LFS secure access application form also sends you an email when you click
on submit.  If you have any questions regarding the key application, please
reply to this ticket.
</p>

<em>
If you have any general questions regarding secure access, please contact
sa@landfood.ubc.ca
</em>

<?php
  include("lfsfoot.html");
?>

</body>

</html>

