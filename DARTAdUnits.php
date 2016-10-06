<!DOCTYPE html>
<html>
  <head>
    <title>DART Ad Units Replica</title>
    <link rel="stylesheet" type="text/css" href="DARTAdUnits.css">
  </head>
  <body>
    <div id="whole">
      <div id="mainbanner">
        <div id="mainleft">
          <img src="/maggie/visualizeMPS/logo.png">
        </div>
        <div id="mainright">
          <div id="mainrighttop">
            <h1>Staging Environment >> <emph1>ALLISPORTS-WEB</emph1></h1>
          </div>
          <div id="mainrightbottom">
            <ul>
              <li><a href="google.com">Pages</a></li>
              <li><a href="google.com">Sections</a></li>
              <li><a href="google.com">Content Types</a></li>
              <li><a href="google.com">Packages</a></li>
              <li><a class="active" href="google.com">Globals</a></li>
              <li><a href="google.com">Scheduling</a></li>
              <li><a href="google.com">Logs & Tools</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div id="secondbanner">
        <div id="secondleft">
          <h2><emph2>allisports-web  </emph2>[change site]</h2>
        </div>
        <div id="secondright">
          <h2>Hi<emph2> email@domain.com </emph2><min2>[logout]</min2></h2>
        </div>
      </div>
      <div id="thirdbanner">
        <div id="thirdleft">
          <h3>ALLISPORTS-WEB: <bleu>DART Ad Units</bleu></h3>
        </div>
        <div id="thirdright">
          <h4>[<i>gpt-asynchronous</i>] [<i>multi-slot</i>] [<i>responsive</i>]</h4>
        </div>
      </div>
      <div id="fourthbanner">
        <h5>Responsive Enabled Sets >> <f1>full:</f1><f2>420x0 0:0x0</f2></h5>
      </div>
      <table class="fifthbanner">
        <tr>
          <th>Unit Name: <input type="text" name="unitname"></th>
          <th>GPT Slot: <input type="text" name="gptslot"></th>
          <th>GPT Ad Id Override: <input type="text" name="idoverride"></th>
          <th>Sizes: <input type="text" name="sizes"></th>
          <th>Responsive Map: <input type="text" name="respmap"></th>
          <th>Detected Display: <input type="text" name="ddisplay"></th>
          <th>Unit Append: <input type="text" name="unitappend"></th>
          <th id="reset"><button id="reset">reset</button></th>
        </tr>
      </table>
      <div id="text">
        <h6>4 Dart Ad Units <smal>[page 1 of 1]</smal></h6>
      </div>
      <table class="adunits">
        <tr>
          <th>Weight</th>
          <th>Unit Name</th>
          <th>GPT Slot</th>
          <th>GPT Ad Id Override</th>
          <th>Sizes</th>
          <th>Responsive Map</th>
          <th>Detected Display</th>
          <th>Mobile</th>
          <th>Collapse</th>
          <th>Unit Append</th>
          <th id="empty"></th>
        </tr>
        <tr>
          <td>1</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>2</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>3</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>4</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
      </table>
      <div id="button">
        <button id="addDARTAdUnit">Add DART Ad Unit</button>
      </div>
      <div id="link">
        <h7><a href="google.com">Download CSV Export</a></h7>
      </div>
      <div id="static">
            <b>Mobile:</b> If set to 1 for the mobile column,
              the ad unit will only be included for mobile specific
              page service request. This is used in cases where you
              have a mobile site running on a different platform or
              is handled by a partner. Set to 0 for all ad units if
              you don't need this.
        <div id="sep"></div>
              <b>GPT Collapse:</b> This handles whether the ad unit
              should should collapse its container if no ad creative
              ends up loading. Setting this value will override the
              Global Default value for this ad unit only so if you
              wish to inherit the site-wide setting, leave it blank.
            0: ad unit will not collapse
            1: ad unit will start open and collapse if no ad is returned
            2: ad unit starts collapsed and opens if ad is returned

        <div id="sep"></div>

              <b>DART Size GPT Responsive Map Help:</b> The sizes column
              is only used when Responsive Map is blank or the serving
              mode is not GPT Async/Sync. Sizes are defined as a comma
              separated list of sizes with no spaces. Example:
              <smallblue>100x80,60x40</smallblue>. Responsive maps must
              first defined under Global Defaults which reference the set.
              The format is a space separated list of set:[sizes] values
              with commas separating multiple sizes. You must define the
              0 set which will be used if the user's viewport does not
              fall under any size definition. Example:
              <smallblue>2:[970x66,728x90] 1:[768x90] 0:[320x50,300x60]</smallblue>

      </div>
      <div id="footer">
        Master Page Service <i>develop [28eb12a5]</i> - Generated on 10/05/16
        @ 04:27 PM in 0.0642 Seconds using 1.30MB [Staging Environment]
      </div>
    </div>
  </body>
</html>
