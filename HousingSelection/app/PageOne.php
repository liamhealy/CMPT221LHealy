
<html>
    <title>Welcome to Marist's Dorm Recommender</title>
        <form action = "PageTwo.php" method = "post">
            Name:<input type="text" name="name" value="" maxlength=60 size= 20/><br>
        
            CWID:<input type="int" name="CWID" value="" maxlength=8 /><br>
            
            Gender:<select id="gender" name="genID">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select><br>
            
            Academic Class:<select id="AcademicClass" name="Year">
                    <option value= "Freshman">Freshman</option>
                    <option value= "Sophomore">Sophomore</option>
                    <option value= "Junior">Junior</option>
                    <option value= "Senior">Senior</option>
            </select><br>
            Residence Area:<select id="Dorms" name="ResidenceAreas">
                    <option value= "-">-</option>
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
            </select><br>
            Preference(if any):<br>
            <input type="checkbox" name="Kitchen" value="yes"/>Kitchen access available<br>
            <input type="checkbox" name="SpecialNeeds" value="yes" />Special Needs accessible<br>
            <input type="checkbox" name="Laundry" value="yes" />Laundry on premises<br>
            
            <a href="PageTwo.php"><input type="submit" name="submit" value="Submit"></a>
        </form>
</html>