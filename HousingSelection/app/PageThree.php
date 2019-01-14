<!DOCTYPE html>
<html>
    <body>
        <title>Page 3</title>
        	<h1>End Form</h1>
        	<?php
        	print 'Name: ' . $_POST["name"] . '<br>';
            print 'CWID: ' . $_POST["CWID"] . '<br>';
            print 'Gender: ' . $_POST["genID"] . '<br>';
            print 'Academic Class: ' . $_POST["Year"] . '<br>';
            print 'Residence Area: ' . $_POST["ResidenceAreas"] . '<br>';
            print 'Preferences <br>' . '-----------------<br>';
                                    if(isset($_POST["Kitchen"])){
                                        print 'Kitchen: ' . $_POST["Kitchen"] . '<br>';
                                    }else{
                                        print 'Kitchen: ' . 'no' . '<br>';
                                    }
                                    
                                    if(isset($_POST["Laundry"])){
                                        print 'Laundry: ' . $_POST["Laundry"] . '<br>';
                                    }else{
                                        print 'Laundry: ' . 'no' . '<br>';
                                    }
                                    
                                    if(isset($_POST["SpecialNeeds"])){
                                        print 'SpecialNeeds: ' . $_POST['SpecialNeeds'] . '<br>';
                                    }else{
                                        print 'Special Needs: ' . 'no' . '<br>';
                                    }
        	
        	?>
            
        </form>
        
    </body>

</html>