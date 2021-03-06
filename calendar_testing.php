<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>IAT351 - Planner</title>

  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://bgrins.github.com/spectrum/spectrum.css">
</head>

<body>
  <header>
    <h1>Long-term Planner</h1>
  </header>

  <main>
    <!-- LEFT NAV -->
    <section id="left_nav">
      <div class="vertical_line">
        <a href="#">Course List</a> <br/>
        <!-- <div class="checkbox_pair">
          <label class="container">
            <input type="checkbox">
            <span class="checkmark"></span>
            One
          </label>
        </div> -->

      <!--  <div class="colorPicker">
          <input type="text" id="showPaletteOnly" />
        </div> <br>-->

              <div class="popup" onclick="popUp()"><strong></strong>
                <span class="popuptext" id="myPopup" style="color: black;">
                    <h3>Course info</h3>
                      <?php
                        $base_url="http://www.sfu.ca/bin/wcm/course-outlines?2018/fall/iat/351/d100";
                        $data=file_get_contents($base_url);
                        $json_data=json_decode($data);
                        $dataLength=count($json_data);

                        for($i = 0; $i< $dataLength ; $i++){
                            // $text= $json_data[$i]->text;
                            $info=$json_data->info->courseDetails;
                            echo "<p>".$info.'</p>';
                        }
                      ?>
                </span>
              </div>

  <!-- Course List -->
        <div class="course-list" name="code">
          <ul class="sortable1 connectedSortable">
          <li class="ui-state-default item easy" value="coop" id="coop" onClick= reply_click(this.id)>Co-op</li> 
          <!-- Import courses from SFU API -->
          <?php
            $base_url="http://www.sfu.ca/bin/wcm/course-outlines?2018/fall/iat";
            $data=file_get_contents($base_url);
            $json_data=json_decode($data);
            $dataLength=count($json_data);

            for($i = 0; $i< $dataLength ; $i++){
                $value= $json_data[$i]->text;
                echo "<li class=".'"ui-state-default item easy"'."value=".$value." id= iat".$value." onClick= reply_click(this.id)".">
                IAT".$value.'
                <div class="popup" onclick="popUp()"><strong>i</strong>
                </div>
                </li>';
            }
          ?>
          </ul>
        </div><br>

        <div id="cumulative_credits"><strong>Cumulative Credits:</strong> 0</div><br/>

        <div class="colorPicker">
          <input type="text" id="showPaletteOnly"/> 
        </div><br/>

        <div class="savebutton">
          <button onClick="myFunction()">Save this page</button>
        </div>
    </section>

<!-- SCHEDULE -->
    <section id="calendar_view">
      <div id="tabs_component">
        <button class="tablink" id="tab_button1" onclick="openPage('tab1', this, 'red')" id="defaultOpen">Schedule 1</button>
        <button class="tablink" id="tab_button2" onclick="openPage('tab2', this, 'green')">+</button>
        <!--  <button class="tablink" onclick="openPage('Year 3', this, 'blue')">Year 3</button>
        <button class="tablink" onclick="openPage('Year 4', this, 'orange')">Year 4</button> -->

        <div id="tab1" class="tabcontent"></div>
        <div id="tab2" class="tabcontent"></div>
      </div>

      <div id="schedule1" class="calendar_component">
        
        <div class="semester_names year">
          <div class="semester year_name" style="padding-bottom: 1.7rem;"></div>
          <div class="fall semester">
            <h2>Fall</h2>
          </div>
          <div class="spring semester">
            <h2>Spring</h2>
          </div>
          <div class="summer semester">
            <h2>Summer</h2>
          </div>
        </div>

        <div class="year_1 year">
          <div class="semester year_name">
            <h2>1st Year</h2>
             <input type="text" placeholder="Enter Year" class= "input_year"><br/>
          </div>

          <div class="fall_1 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_1 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_1 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_2 year">
          <div class="semester year_name">
            <h2>2nd Year</h2>
            <input type="text" placeholder="Enter Year" class= "input_year"><br/>
          </div>

          <div class="fall_2 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_2 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_2 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_3 year">
          <div class="semester year_name">
            <h2>3rd Year</h2>
            <input type="text" placeholder="Enter Year" class= "input_year"><br/>            
          </div>

          <div class="fall_3 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_3 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_3 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_4 year">
          <div class="semester year_name">
            <h2>4th Year</h2>
            <input type="text" placeholder="Enter Year" class= "input_year"><br/>            
          </div>

          <div class="fall_4 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_4 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_4 semester">
            <ul class="sortable2 connectedSortable"></ul>
            <div class="difficulty_bar">
              <div class="semester_credits">Credits: 0</div>
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>
      </div>

      <div id="schedule2" class="calendar_component">
        <div class="semester_names year">
          <div class="semester year_name"></div>

          <div class="fall semester">
            <h2>Fall</h2>
          </div>

          <div class="spring semester">
            <h2>Spring</h2>
          </div>

          <div class="summer semester">
            <h2>Summer</h2>
          </div>
        </div>

        <div class="year_1 year">
          <div class="semester year_name">
            <h2>1st Year</h2>
          </div>

          <div class="fall_1 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_1 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_1 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_2 year">
          <div class="semester year_name">
            <h2>2nd Year</h2>
          </div>

          <div class="fall_2 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_2 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_2 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_3 year">
          <div class="semester year_name">
            <h2>3rd Year</h2>
          </div>

          <div class="fall_3 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_3 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_3 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>

        <div class="year_4 year">
          <div class="semester year_name">
            <h2>4th Year</h2>
          </div>

          <div class="fall_4 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="spring_4 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>

          <div class="summer_4 semester">
            <div class="difficulty_bar">
              <h4>Workload</h4>
              <progress class="difficulty_bar_green" value="0" max="100"></progress>
            </div>
          </div>
        </div>


         <div class="year_4 year">
          <div class="semester year_name">
            <h2>add year</h2>
          </div>

          
      </div>
      </div>


     
    </section>

    <!-- <section id="right_nav">

    </section> -->

    <script>
      function openPage(pageName, elmnt, color) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].style.backgroundColor = "";
        }
        document.getElementById(pageName).style.display = "block";
        elmnt.style.backgroundColor = color;

      }
      // Get the element with id="defaultOpen" and click on it
      // document.getElementById("defaultOpen").click();
    </script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="http://bgrins.github.com/spectrum/spectrum.js"></script>
    <script src="js/actions.js"></script>
    <script>
      function myFunction() {
        window.print();
      }
    </script>
    <script type="text/javascript">

      var id = " ";

      function printColor(color) {
        document.getElementById(id).style.backgroundColor = color;
        id= " "
      }

      function reply_click(clicked_id){
        id = clicked_id
      }


      $("#showPaletteOnly").spectrum({
        color: "rgb(244, 204, 204)",
        showPaletteOnly: true,
        change: function (color) {
          printColor(color)
        },
        palette: [
          ["#000000", "rgb(67, 67, 67)", "rgb(102, 102, 102)",
            "rgb(204, 204, 204)", "rgb(217, 217, 217)", "rgb(255, 255, 255)"],
          ["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
            "rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
          ["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
            "rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
            "rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
            "rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
            "rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
            "rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
            "rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
            "rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
            "rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
            "rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
        ]
      });
    </script>

    <script>
      // tell the embed parent frame the height of the content
      if (window.parent && window.parent.parent) {
        window.parent.parent.postMessage(["resultsFrame", {
          height: document.body.getBoundingClientRect().height,
          slug: "S45tW"
        }], "*")
      }
    </script>
  </main>

  <footer>

  </footer>
</body>

</html>
