
<html>
    <title></title>
        <form action = "PageThree.php" method = "post">
        <?php
            $kitchen = $_POST["Kitchen"];
            $needs = $_POST["SpecialNeeds"];
            $laundry = $_POST["Laundry"];
            $Year = $_POST["Year"];
            $residence = $_POST["ResidenceAreas"];
            $error = false;
            $name = $_POST["name"];
            $cwid = $_POST["CWID"];
            $check;
            
            print 'Name: ' . $_POST["name"] . '<br>';
            print 'CWID: ' . $_POST["CWID"] . '<br>';
            print 'Gender: ' . $_POST["genID"] . '<br>';
            print 'Academic Class: ' . $_POST["Year"] . '<br>';
            print 'Residence Area: ' . $_POST["ResidenceAreas"] . '<br>';
            print 'Preferences: <br>' . 'Kitchen: ' . $_POST["Kitchen"] . '<br>'
                                    . 'Laundry: ' . $_POST["Laundry"] . '<br>'
                                    . 'Special Needs: ' . $_POST["SpecialNeeds"] . '<br>';
            
            
            //Freshman if-else
            if ($residence == "Champ Hall"){
                if($Year != "Freshman"){
                    $error = true;
                }
            }elseif ($residence == "Marian Hall"){
                if($Year != "Freshman"){
                    $error = true;
                }
            }elseif ($residence == "Sheahan Hall"){
                if($Year != "Freshman"){
                    $error = true;
                }
            }elseif($residence == "Leo Hall"){
                if($Year != "Freshman"){
                    $error = true;
                }
                else{ 
                    $error = false;
                }
            }
            
            elseif ($residence == "Midrise Hall"){
                if($Year == "Junior" || $Year == "Senior"){
                    $error = true;
                }
                elseif($kitchen){
                    $error = true;
                }
                else{
                    $error = false;
                }
            }elseif ($residence == "Foy Townhouses"){
                if($Year != "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Upper New Townhouses"){
                if($Year != "Sophomore"){
                    $error = true;
                }
            }elseif($residence == "Lower New Townhouses"){
                if($Year != "Sophomore"){
                    $error = true;
                }
            }
            
            elseif ($residence == "New Gartland A Building"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "New Gartland B Building"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Lower West Townhouses"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Upper West Townhouses"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Lower Fulton"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Middle Fulton"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Upper Fulton"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif ($residence == "Talmadge Court"){
                if($Year == "Freshman" || $Year == "Sophomore"){
                    $error = true;
                }
            }elseif($residence == "NA") {
                $error = true;
            }elseif($residence == "-"){ 
                $error = true;
            }elseif($laundry){
                $error = true;
            }elseif($kitchen){
                $error = true;
            }elseif($needs){
                $error = true;
            }
            
            
            
            
            Check($error, $residence, $laundry, $kitchen, $needs, $check);
            
            function Check($invalid, $dormitory, $washers, $fullkitch, $specneeds, $username){
                if ($invalid == true && $dormitory != "-" && $dormitory != "NA"){
                        print 'Your preferences and/or information do not meet the requirements of ' . $_POST["ResidenceAreas"] . '<br><a href="PageOne.php"> Return to Page One</a>';
                }elseif($invalid == true && $dormitory == "-" && isset($_POST["name"]) == 1){
                    if($washers){
                        echo 'Please select a Residence Area before moving on.' .  
                        '<br>Available Residence Areas meeting your preferences:<select id="Dorms" name="ResidenceAreas">
                        <option value= "Marian Hall">Marian Hall</option>
                        <option value= "Sheahan Hall">Sheahan Hall</option>
                        <option value= "Leo Hall">Leo Hall</option>
                        <option value= "Champ Hall">Champ Hall</option>
                        <option value= "Midrise Hall">Midrise Hall</option>
                        <option value= "Lower New Townhouses">Lower New Townhouses</option>
                        <option value= "Upper New Townhouses">Upper New Townhouses</option>
                        <option value= "Foy Townhouses">Foy Townhouses</option>
                        <option value= "New Gartland A Building">New Gartland Building A</option>
                        <option value= "New Gartland B Building">New Gartland Building B</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        <option value= "Lower Fulton">Lower Fulton</option>
                        <option value= "Middle Fulton">Middle Fulton</option>
                        <option value= "Upper Fulton">Upper Fulton</option>
                        <option value= "Talmadge Court">Talmadge Court</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';
                        
                    }elseif($fullkitch || $dormitory == "Midrise Hall"  && $fullkitch){
                        echo 'Please select a Residence Area which meets your preferences before moving on.' .  
                        '<br>Available Residence Areas meeting your preferences:<select id="Dorms" name="ResidenceAreas">
                        <option value= "Marian Hall">Marian Hall</option>
                        <option value= "Sheahan Hall">Sheahan Hall</option>
                        <option value= "Leo Hall">Leo Hall</option>
                        <option value= "Champ Hall">Champ Hall</option>
                        <option value= "Lower New Townhouses">Lower New Townhouses</option>
                        <option value= "Upper New Townhouses">Upper New Townhouses</option>
                        <option value= "Foy Townhouses">Foy Townhouses</option>
                        <option value= "New Gartland A Building">New Gartland Building A</option>
                        <option value= "New Gartland B Building">New Gartland Building B</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        <option value= "Lower Fulton">Lower Fulton</option>
                        <option value= "Middle Fulton">Middle Fulton</option>
                        <option value= "Upper Fulton">Upper Fulton</option>
                        <option value= "Talmadge Court">Talmadge Court</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';
                    }elseif($specneeds){
                        echo 'Please select a Residence Area before moving on.' . 
                        '<br>Available Residence Areas meeting your preferences:<select id="Dorms" name="ResidenceAreas">
                        <option value= "Marian Hall">Marian Hall</option>
                        <option value= "Sheahan Hall">Sheahan Hall</option>
                        <option value= "Leo Hall">Leo Hall</option>
                        <option value= "Champ Hall">Champ Hall</option>
                        <option value= "Midrise Hall">Midrise Hall</option>
                        <option value= "Lower New Townhouses">Lower New Townhouses</option>
                        <option value= "Upper New Townhouses">Upper New Townhouses</option>
                        <option value= "Foy Townhouses">Foy Townhouses</option>
                        <option value= "New Gartland A Building">New Gartland Building A</option>
                        <option value= "New Gartland B Building">New Gartland Building B</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        <option value= "Lower Fulton">Lower Fulton</option>
                        <option value= "Middle Fulton">Middle Fulton</option>
                        <option value= "Upper Fulton">Upper Fulton</option>
                        <option value= "Talmadge Court">Talmadge Court</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';
                    }elseif(!$_POST["name"]){
                        echo 'Required data missing from First Page.<br>' . '<a href="PageOne.php">Please Return</a>';
                    }elseif(!$_POST["CWID"]){
                        echo 'Required data missing from First Page.<br>' . '<a href="PageOne.php">Please Return</a>';
                    }elseif($_POST["Year"] == "Freshman"){
                        echo 'Please select a Residence Area before moving on.' .
                        '<br>Available Residence Areas:<select id="Dorms" name="ResidenceAreas">
                        <option value= "NA">N/A or Commuter</option>
                        <option value= "Marian Hall">Marian Hall</option>
                        <option value= "Sheahan Hall">Sheahan Hall</option>
                        <option value= "Leo Hall">Leo Hall</option>
                        <option value= "Champ Hall">Champ Hall</option>
                        <option value= "Midrise Hall">Midrise Hall</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';
                    }elseif($_POST["Year"] == "Sophomore"){
                        echo 'Please select a Residence Area before moving on.' .
                        '<br>Available Residence Areas:<select id="Dorms" name="ResidenceAreas">
                        <option value= "Midrise Hall">Midrise Hall</option>
                        <option value= "Lower New Townhouses">Lower New Townhouses</option>
                        <option value= "Upper New Townhouses">Upper New Townhouses</option>
                        <option value= "Foy Townhouses">Foy Townhouses</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Submit" />';
                    }elseif($_POST["Year"] == "Junior" || $_POST["Year"] == "Senior"){
                        echo 'Please select a Residence Area before moving on.' .
                        '<br>Available Residence Areas:<select id="Dorms" name="ResidenceAreas">
                        <option value= "New Gartland A Building">New Gartland Building A</option>
                        <option value= "New Gartland B Building">New Gartland Building B</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        <option value= "Lower Fulton">Lower Fulton</option>
                        <option value= "Middle Fulton">Middle Fulton</option>
                        <option value= "Upper Fulton">Upper Fulton</option>
                        <option value= "Talmadge Court">Talmadge Court</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';
                    }
                    else{
                        echo 'Please select a Residence Area before moving on.' .
                        '<br>Available Residence Areas:<select id="Dorms" name="ResidenceAreas">
                        <option value= "NA">N/A or Commuter</option>
                        <option value= "Marian Hall">Marian Hall</option>
                        <option value= "Sheahan Hall">Sheahan Hall</option>
                        <option value= "Leo Hall">Leo Hall</option>
                        <option value= "Champ Hall">Champ Hall</option>
                        <option value= "Midrise Hall">Midrise Hall</option>
                        <option value= "Lower New Townhouses">Lower New Townhouses</option>
                        <option value= "Upper New Townhouses">Upper New Townhouses</option>
                        <option value= "Foy Townhouses">Foy Townhouses</option>
                        <option value= "New Gartland A Building">New Gartland Building A</option>
                        <option value= "New Gartland B Building">New Gartland Building B</option>
                        <option value= "Lower West Townhouses">Lower West Townhouses</option>
                        <option value= "Upper West Townhouses">Upper West Townhouses</option>
                        <option value= "Lower Fulton">Lower Fulton</option>
                        <option value= "Middle Fulton">Middle Fulton</option>
                        <option value= "Upper Fulton">Upper Fulton</option>
                        <option value= "Talmadge Court">Talmadge Court</option>
                        </select><br>'
                        . '<input type= "submit" name="NewSubmit" value = "Final Submit" />';                 
                        
                    }
                }else{
                    $invalid = false;
                    echo 'Your form properly checks out!<br>'
                    . '<input type= "submit" name="NewSubmit" value = "Submit" />';
                }
                
            }    
        foreach($_POST as $key => $value){
           echo '<input type="hidden" name="', $key, '" value="', $value, '">';
        }   
        
        ?>
        </form>
        
</html>