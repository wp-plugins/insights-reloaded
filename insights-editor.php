<p>Enter keywords you would like to search for and press Search button.</p>
<input type="text" id="insights-search" name="insights-search" size="60" autocomplete="off" />
<input id="insights-submit" class="button" type="button" value="Search"  />
<br />
<input name="insights-radio" type="radio" checked="checked" value="1" />
<label> My Blog </label>
<input name="insights-radio" type="radio" value="2"/>
<label> Images </label>
<input name="insights-radio" type="radio" value="3"/>
<label> Videos </label>
<input name="insights-radio" type="radio" value="4"/>
<label> Wikipedia </label>
<input name="insights-radio" type="radio" value="6"/>
<label> Google </label>
<input name="insights-radio" type="radio" value="7"/>
<label> News </label>
<input name="insights-radio" type="radio" value="10"/>
<label> Blogs </label>
<input name="insights-radio" type="radio" value="11"/>
<label> Books</label>
<?php
// if gmaps
if ($options['gmaps'])
	echo '<input name="insights-radio" type="radio" value="5"/><label> Maps </label>';
?>
<div id="insights-map-all" style="display:none" >
  <p>
    <input class="button" type="button" value="Add Map" onclick="insert_map();" />
    <input class="button" type="button" value="Add Marker" onclick="createMarkerAt();" />
    <input class="button" type="button" value="Clear Markers" onclick="clearMarkers();" />
    <input class="button" type="button" value="Clear Path" onclick="clearPolys();" />
  </p>
  <div id="insights-map" style="height:450px; width:100%; padding:0px; margin:0px;"></div>
</div>