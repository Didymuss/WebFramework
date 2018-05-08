<!--<div class = "col-4 pull-center">-->
  <form name = "filterForm" action = "../controller/linkGeneration.php" method = "post">
  <!--
  <form name = "filterForm" action = "../controller/excel.php" method = "post">
  -->
    <div class = "col form-group bodyLeft">
      <h4>Search</h4>
      <label>Select Website Source</label>
      <select class = "form-control" name = "site" id = "site">
        <option value = "rMov">Rightmove</option>
        <option value = "zoop">Zoopla</option>
      </select>

      <label>Select Purchase Type</label>
      <select class = "form-control" name = "pType" id = "pType">
        <option value = "buy">Buy</option>
        <option value = "rent">Rent</option>
      </select>

      <label>Select Location</label>
      <select class = "form-control" name = "location">
        <option value = "bham">Birmingham</option>
        <option value = "malv">Malvern</option>
        <option value = "tam">Tamworth</option>
        <option value = "cov">Coventry</option>
      </select>

      <label>Search Radius</label>
      <select class = "form-control" name = "sRadius">
        <option value = "">This Area</option>
        <option value = "0.25">Quater Mile</option>
        <option value = "0.5">Half Mile</option>
        <option value = "1">One Mile</option>
        <option value = "3">Three Miles</option>
        <option value = "5">Five Miles</option>
        <option value = "10">Ten Miles</option>
        <option value = "15">Fifteen Miles</option>
        <option value = "20">Twenty Miles</option>
        <option value = "30">Thirty Miles</option>
        <option value = "40">Fourty Miles</option>
      </select>

      <label>Property Type</label>
      <select class = "form-control" name = "prop">
        <option value = "">Any</option>
        <option value = "houses">Houses</option>
        <option value = "flats">Flats</option>
        <option value = "land">Land</option>
        <!-- Rightmove Specific.
          <option value = "bungalows">Bungalows</option>
          <option value = "land">Land</option>
          <option value = "commercial">Commercial Property</option>
          <option value = "other">Other</option>
        -->
      </select>


      <label>Price Range</label>
      <div class = "row" id = "buyPrice">
        <div class="col-6 pull-left">
          <label>Minimum</label>
          <select class = "form-control" name = "minPrice">
            <option value = "">Unlimited</option>
            <option value = "50">£50,000</option>
            <option value = "60">£60,000</option>
            <option value = "70">£70,000</option>
            <option value = "80">£80,000</option>
            <option value = "90">£90,000</option>
            <option value = "100">£100,000</option>
            <option value = "110">£110,000</option>
            <option value = "120">£120,000</option>
            <option value = "130">£130,000</option>
            <option value = "140">£140,000</option>
            <option value = "150">£150,000</option>
            <option value = "160">£160,000</option>
            <option value = "170">£170,000</option>
            <option value = "180">£180,000</option>
            <option value = "190">£190,000</option>
            <option value = "200">£200,000</option>
            <option value = "210">£210,000</option>
            <option value = "220">£220,000</option>
            <option value = "230">£230,000</option>
            <option value = "240">£240,000</option>
            <option value = "250">£250,000</option>
            <option value = "260">£260,000</option>
            <option value = "270">£270,000</option>
            <option value = "280">£280,000</option>
            <option value = "290">£290,000</option>
            <option value = "300">£300,000</option>
            <option value = "325">£325,000</option>
            <option value = "350">£350,000</option>
            <option value = "375">£375,000</option>
            <option value = "400">£400,000</option>
            <option value = "425">£425,000</option>
            <option value = "450">£450,000</option>
            <option value = "475">£475,000</option>
            <option value = "500">£500,000</option>
            <option value = "550">£550,000</option>
            <option value = "600">£600,000</option>
            <option value = "650">£650,000</option>
            <option value = "700">£700,000</option>
            <option value = "800">£800,000</option>
            <option value = "900">£900,000</option>
            <option value = "1000">£1,000,000</option>
            <option value = "1250">£1,250,000</option>
            <option value = "1500">£1,500,000</option>
            <option value = "1750">£1,750,000</option>
            <option value = "2000">£2,000,000</option>
            <option value = "2500">£2,500,000</option>
            <option value = "3000">£3,000,000</option>
            <option value = "4000">£4,000,000</option>
            <option value = "5000">£5,000,000</option>
            <option value = "7500">£7,500,000</option>
            <option value = "10000">£10,000,000</option>
            <!--<option value = "15000">£15,000,000</option>
            <option value = "20000">£20,000,000</option>-->
          </select>
        </div>

        <div class="col-6 pull-right">
          <label>Maximum</label>
          <select class = "form-control" name = "maxPrice">
            <option value = "">Unlimited</option>
            <option value = "50">£50,000</option>
            <option value = "60">£60,000</option>
            <option value = "70">£70,000</option>
            <option value = "80">£80,000</option>
            <option value = "90">£90,000</option>
            <option value = "100">£100,000</option>
            <option value = "110">£110,000</option>
            <option value = "120">£120,000</option>
            <option value = "130">£130,000</option>
            <option value = "140">£140,000</option>
            <option value = "150">£150,000</option>
            <option value = "160">£160,000</option>
            <option value = "170">£170,000</option>
            <option value = "180">£180,000</option>
            <option value = "190">£190,000</option>
            <option value = "200">£200,000</option>
            <option value = "210">£210,000</option>
            <option value = "220">£220,000</option>
            <option value = "230">£230,000</option>
            <option value = "240">£240,000</option>
            <option value = "250">£250,000</option>
            <option value = "260">£260,000</option>
            <option value = "270">£270,000</option>
            <option value = "280">£280,000</option>
            <option value = "290">£290,000</option>
            <option value = "300">£300,000</option>
            <option value = "325">£325,000</option>
            <option value = "350">£350,000</option>
            <option value = "375">£375,000</option>
            <option value = "400">£400,000</option>
            <option value = "425">£425,000</option>
            <option value = "450">£450,000</option>
            <option value = "475">£475,000</option>
            <option value = "500">£500,000</option>
            <option value = "550">£550,000</option>
            <option value = "600">£600,000</option>
            <option value = "650">£650,000</option>
            <option value = "700">£700,000</option>
            <option value = "800">£800,000</option>
            <option value = "900">£900,000</option>
            <option value = "1000">£1,000,000</option>
            <option value = "1250">£1,250,000</option>
            <option value = "1500">£1,500,000</option>
            <option value = "1750">£1,750,000</option>
            <option value = "2000">£2,000,000</option>
            <option value = "2500">£2,500,000</option>
            <option value = "3000">£3,000,000</option>
            <option value = "4000">£4,000,000</option>
            <option value = "5000">£5,000,000</option>
            <option value = "7500">£7,500,000</option>
            <option value = "10000">£10,000,000</option>
            <!--<option value = "15000">£15,000,000</option>
            <option value = "20000">£20,000,000</option>-->
          </select>
        </div>
      </div>

      <div class = "row" id = "rentPrice">
        <div class="col-6 pull-left">
          <label>Minimum</label>
          <select class = "form-control" name = "rminPrice">
            <option value = "">Unlimited</option>
            <option value="100">100 PCM</option>
            <option value="150">150 PCM</option>
            <option value="200">200 PCM</option>
            <option value="250">250 PCM</option>
            <option value="300">300 PCM</option>
            <option value="350">350 PCM</option>
            <option value="400">400 PCM</option>
            <option value="450">450 PCM</option>
            <option value="500">500 PCM</option>
            <option value="600">600 PCM</option>
            <option value="700">700 PCM</option>
            <option value="800">800 PCM</option>
            <option value="900">900 PCM</option>
            <option value="1000">1,000 PCM</option>
            <option value="1100">1,100 PCM</option>
            <option value="1200">1,200 PCM</option>
            <option value="1250">1,250 PCM</option>
            <option value="1300">1,300 PCM</option>
            <option value="1400">1,400 PCM</option>
            <option value="1500">1,500 PCM</option>
            <option value="1750">1,750 PCM</option>
            <option value="2000">2,000 PCM</option>
            <option value="2250">2,250 PCM</option>
            <option value="2500">2,500 PCM</option>
            <option value="2750">2,750 PCM</option>
            <option value="3000">3,000 PCM</option>
            <option value="3500">3,500 PCM</option>
            <option value="4000">4,000 PCM</option>
            <option value="4500">4,500 PCM</option>
            <option value="5000">5,000 PCM</option>
            <option value="5500">5,500 PCM</option>
            <option value="6000">6,000 PCM</option>
            <option value="6500">6,500 PCM</option>
            <option value="7000">7,000 PCM</option>
            <option value="8000">8,000 PCM</option>
            <option value="9000">9,000 PCM</option>
            <option value="10000">10,000 PCM</option>
            <option value="12500">12,500 PCM</option>
            <option value="15000">15,000 PCM</option>
            <option value="17500">17,500 PCM</option>
            <option value="20000">20,000 PCM</option>
            <option value="25000">25,000 PCM</option>
            <option value="30000">30,000 PCM</option>
            <option value="35000">35,000 PCM</option>
            <option value="40000">40,000 PCM</option>
          </select>
        </div>

        <div class="col-6 pull-right">
          <label>Maximum</label>
          <select class = "form-control" name = "rmaxPrice">
            <option value = "">Unlimited</option>
            <option value="100">100 PCM</option>
            <option value="150">150 PCM</option>
            <option value="200">200 PCM</option>
            <option value="250">250 PCM</option>
            <option value="300">300 PCM</option>
            <option value="350">350 PCM</option>
            <option value="400">400 PCM</option>
            <option value="450">450 PCM</option>
            <option value="500">500 PCM</option>
            <option value="600">600 PCM</option>
            <option value="700">700 PCM</option>
            <option value="800">800 PCM</option>
            <option value="900">900 PCM</option>
            <option value="1000">1,000 PCM</option>
            <option value="1100">1,100 PCM</option>
            <option value="1200">1,200 PCM</option>
            <option value="1250">1,250 PCM</option>
            <option value="1300">1,300 PCM</option>
            <option value="1400">1,400 PCM</option>
            <option value="1500">1,500 PCM</option>
            <option value="1750">1,750 PCM</option>
            <option value="2000">2,000 PCM</option>
            <option value="2250">2,250 PCM</option>
            <option value="2500">2,500 PCM</option>
            <option value="2750">2,750 PCM</option>
            <option value="3000">3,000 PCM</option>
            <option value="3500">3,500 PCM</option>
            <option value="4000">4,000 PCM</option>
            <option value="4500">4,500 PCM</option>
            <option value="5000">5,000 PCM</option>
            <option value="5500">5,500 PCM</option>
            <option value="6000">6,000 PCM</option>
            <option value="6500">6,500 PCM</option>
            <option value="7000">7,000 PCM</option>
            <option value="8000">8,000 PCM</option>
            <option value="9000">9,000 PCM</option>
            <option value="10000">10,000 PCM</option>
            <option value="12500">12,500 PCM</option>
            <option value="15000">15,000 PCM</option>
            <option value="17500">17,500 PCM</option>
            <option value="20000">20,000 PCM</option>
            <option value="25000">25,000 PCM</option>
            <option value="30000">30,000 PCM</option>
            <option value="35000">35,000 PCM</option>
            <option value="40000">40,000 PCM</option>
          </select>
        </div>
      </div>

      <span id = "furnished">
        <label>Furnishing</label>
        <select class = "form-control" name = "furnished">
          <option value = "">Show All</option>
          <option value="furnished">Furnished</option>
          <option value="part_furnished">Partially furnished</option>
          <option value="unfurnished">Unfurnished</option>
        </select>
      </span>

      <label>Number of Bedrooms</label>
      <select class = "form-control" name = "bedrooms">
        <option value = "">No Minimum</option>
        <option value = "0">Studio</option>
        <option value = "1">One Bedroom</option>
        <option value = "2">Two Bedrooms</option>
        <option value = "3">Three Bedrooms</option>
        <option value = "4">Four Bedrooms</option>
        <option value = "5">Five Bedrooms</option>
      </select>

      <label>Added</label>
      <select class = "form-control" name = "added">
        <option value = "">Anytime</option>
        <option value = "1">In the last day</option>
        <option value = "3">In the last three days</option>
        <option value = "7">In the last week</option>
        <option value = "14">In the last two weeks</option>
      </select>

      <br/>

      <div class = "input-group">
        <span class = "input-group-addon">
          <input name = "offer" type = "checkbox"></input>
        </span>
        <label class = "form-control">Under Offer or Sold STC.</label>
      </div>
      <br/>

      <button class = "btn btn-success form-control" id = "filterButt" type = "submit">Search for properties</button>
    </div>
  </form>
<!--</div>-->
