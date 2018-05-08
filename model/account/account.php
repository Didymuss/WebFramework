<?php
include "../controller/database.php";
include "../controller/getTableInfo.php";
$accInf = getAccount($_SESSION["uID"]);
$name = $accInf['fName'] . " " . $accInf['lName'];

?>

<div class = "row title">
  <div>
    <h2>Your Account</h2>
    <p>Click entries to update</p>
    <div id = "resetAlert" class = "alert alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
    </div>
  </div>
</div>
<div class = "row">
  <div class = "col form-group bodyLeft">
    <label>Name</label>
    <h4 id = "name"><?php echo($name); ?></h4>
    <form id = "nameCh"  action = "../controller/account/updateDetails.php" method = "POST">
      <div class = "input-group">
        <input id = "fNameIn" name = "fName" class = "form-control" placeholder = "<?php echo($accInf['fName']);?>" type = "text" required/>
        <input id = "lNameIn" name = "lName" class = "form-control" placeholder = "<?php echo($accInf['lName']);?>" type = "text" required/>
        <span  id = "nCancel" class="input-group-addon">
          <i class="fas fa-undo"></i>
        </span>
        <span id = "nSave" class="input-group-addon">
          <i class="fas fa-save"></i>
        </span>
      </div>
    </form>
    <br />
    <label>Email</label>
    <h4 id = "email"><?php echo($accInf['email']); ?></h4>
    <form id = "emailCh"  action = "../controller/account/updateDetails.php" method = "POST">
      <div class = "input-group">
        <input id = "emailIn" name = "email" class = "form-control" placeholder = "<?php echo($accInf['email']);?>" type = "text" required/>
        <span id = "eCancel" class="input-group-addon">
          <i class="fas fa-undo"></i>
        </span>
        <span id = "eSave" class="input-group-addon">
          <i class="fas fa-save"></i>
        </span>
      </div>
    </form>
    <br />
    <label>Phone</label>
    <h4 id = "phone"><?php echo($accInf['phone']); ?></h4>
    <form id = "phoneCh"  action = "../controller/account/updateDetails.php" method = "POST">
      <div class = "input-group">
        <input id = "phoneIn" name = "phone" class = "form-control" placeholder = "<?php echo($accInf['phone']);?>" type = "text"/>
        <span id = "pCancel" class="input-group-addon">
          <i class="fas fa-undo" type = "button"></i>
        </span>
        <span id = "pSave" class="input-group-addon">
          <i class="fas fa-save" type = "button"></i>
        </span>
      </div>
    </form>
    <br />
    <label>Edit Password</label>
    <button class = "btn btn-success form-control" id = "pass" type = "button">Change Password</button>
    <form id = "passCh"  action = "../controller/account/updateDetails.php" method = "POST">
      <div class = "input-group">
        <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-key"></i></span>
        <input id = "passIn" name = "pass" class = "form-control" type = "password"/>
      </div>
      <div class = "input-group">
        <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-copy"></i></span>
        <input id = "passConf" class = "form-control" type = "password"/>
      </div>
      <br />
          <button id = "passCancel" class = "btn form-control" type = "button"><i class="fas fa-undo"></i> Cancel</button>
          <button id = "passSave"  class = "btn form-control" type = "button"><i class="fas fa-save"></i> Save</button>
    </form>

  </div>
  <div class = "col form-group bodyRight">
    <label>Address</label>
    <div id = "add">
      <h4 id = "add1"><?php echo($accInf['add1']); ?></h4>
      <h4 id = "add2"><?php echo($accInf['add2']); ?></h4>
      <h4 id = "city"><?php echo($accInf['city']); ?></h4>
      <h4 id = "county"><?php echo($accInf['county']); ?></h4>
      <h4 id = "postcode"><?php echo($accInf['postcode']); ?></h4>
    </div>
    <div  id = "addCh">
      <form action = "../controller/account/updateDetails.php" method = "POST">
        <div class = "input-group">
          <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-building"></i></span>
          <input id = "add1In" name = "add1" class = "form-control" placeholder = "<?php echo($accInf['add1']); ?>" type = "text"/>
        </div>
        <div class = "input-group">
          <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-road"></i></span>
          <input id = "add2In" name = "add2" class = "form-control" placeholder = "<?php echo($accInf['add2']); ?>" type = "text"/>
        </div>
        <div class = "input-group">
          <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-map-marker-alt"></i></span>
          <input id = "cityIn" name = "city" class = "form-control" placeholder = "<?php echo($accInf['city']); ?>" type = "text"/>
        </div>
        <div class = "input-group">
          <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-map"></i></span>
          <input id = "countyIn" name = "county" class = "form-control" placeholder = "<?php echo($accInf['county']); ?>" type = "text"/>
        </div>
        <div class = "input-group">
          <span class="input-group-addon" style="width: 40px;"><i class = "fas fa-envelope"></i></span>
          <input id = "postIn" name = "post" class = "form-control" placeholder = "<?php echo($accInf['postcode']); ?>" type = "text"/>
        </div>
        <br />
            <button id = "aCancel" class = "btn form-control" type = "button"><i class="fas fa-undo"></i> Cancel</button>
            <button id = "aSave"  class = "btn form-control" type = "button"><i class="fas fa-save"></i> Save</button>
      </form>
    </div>
  </div>
</div>
