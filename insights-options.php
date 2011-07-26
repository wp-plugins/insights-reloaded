<div class="wrap" >
  <h2>Insights</h2>
  <div id="poststuff" style="margin-top:10px;">
    <div id="mainblock">
      <div class="dbx-content">
        <form action="<?php echo $action_url ?>" method="post">
          <input type="hidden" name="submitted" value="1" />
          <?php wp_nonce_field('insights'); ?>
          <p>Enter the number of search results you would like to see for your searches.</p>
          <input type="text" name="post_results" size="15" value="<?php echo $post_results ?>"/>
          <label for="post_results"> My blog</label>
          <br/>
          <br />
          <input type="text" name="image_results" size="15" value="<?php echo $image_results ?>"/>
          <label for="image_results"> Image</label>
          <br/>
          <br />
          <input type="text" name="video_results" size="15" value="<?php echo $video_results ?>"/>
          <label for="video_results"> Video</label>
          <br/>
          <br />
          <input type="text" name="wiki_results" size="15" value="<?php echo $wiki_results ?>"/>
          <label for="wiki_results"> Wikipedia</label>
          <br/>
          <br />
          <input type="checkbox" name="image_tags"  <?php echo $image_tags ?> />
          <label for="image_tags"> Search Flickr images by tag</label>
          <br />
          <input type="checkbox" name="image_text"  <?php echo $image_text ?> />
          <label for="image_text"> Search Flickr images by description</label>
          <br />
          <input type="checkbox" name="image_nonc"  <?php echo $image_nonc ?> />
          <label for="image_nonc"> Search only non-commercial Flickr images</label>
          <br />
          <input type="checkbox" name="interactive"  <?php echo $interactive ?> />
          <label for="interactive"> Show results as you type</label>
          <br />
          <h2>Google Maps</h2>
          <br />
          <input type="checkbox" name="gmaps"  <?php echo $gmaps ?> />
          <label for="gmaps"> Turn on Google Maps module</label>
          <br />
          Enter your Google Maps API key. You can get it free <a href="http://code.google.com/apis/maps/signup.html">here</a>.<br/>
          <input type="text" name="maps_api" size="100" value="<?php echo $maps_api ?>"/>
          <br />
          <div class="submit">
            <input type="submit" name="Submit" value="Update" />
          </div>
        </form>
      </div>
    </div>
  </div>
</div>