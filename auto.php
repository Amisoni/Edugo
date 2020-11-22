<!--
    Patsmitty.com | 2010 | All Rights Reserved
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>List Suggestion Example</title>
        <style type="text/css">
            <!--
            div.suggestions {
                -moz-box-sizing: border-box;
                box-sizing: border-box;
                border: 1px solid black;
                text-align: left;
            }
            -->
        </style>
        <script type="text/javascript">
            var nameArray = null;
        </script>
    </head>
    <body onclick="document.getElementById('divSuggestions').style.visibility='hidden'">
        <?php
        include("config.php");
        $query = 'SELECT sname FROM subject';
        $result = mysql_query($query);
        $counter = 0;
        echo("<script type='text/javascript'>");
        echo("this.nameArray = new Array();");
        if($result) {
            while($row = mysql_fetch_array($result)) {
                echo("this.nameArray[" . $counter . "] = '" . $row['sname'] . ";");
                $counter += 1;
            }
        }
        echo("</script>");
        ?>
        <!-- --------------------- Input Box --------------------- -->
        <table border="0" cellpadding="0" width="50%" align="center">
            <tbody align="center">
                <tr align="center">
                    <td align="left">
                        <input type="text" id="txtSearch" name="txtSearch" value="" style="width: 50%; margin-top: 150px; background-color: purple; color: white; height: 50px; padding-left: 10px; padding-right: 5px; font-size: larger;" onkeyup="doSuggestionBox(this.value);" />
                        <input type="button" value="Google It!" name="btnGoogleIt" style="margin-top: 150px; background-color: purple; color: white; height: 50px; font-size: larger;" onclick="window.location='http://www.google.com/#hl=en&source=hp&q=' + document.getElementById('txtSearch').value" />
                    </td>
                </tr>
                <tr align="center">
                    <td align="left">
                        <div class="suggestions" id="divSuggestions" style="visibility: hidden; width: 50%; margin-top: -1px; background-color: purple; color: white; height: 250px; padding-left: 10px; padding-right: 5px; font-size: larger;" >
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>

        <script type="text/javascript">
            function doSuggestionBox(text) { // function that takes the text box's inputted text as an argument
                var input = text; // store inputed text as variable for later manipulation
                // determine whether to display suggestion box or not
                if (input == "") {
                    document.getElementById('divSuggestions').style.visibility = 'hidden'; // hides the suggestion box
                } else {
                    document.getElementById('divSuggestions').style.visibility = 'visible'; // shows the suggestion box
                    doSuggestions(text);
                }
            }
            function outClick() {
                document.getElementById('divSuggestions').style.visibility = 'hidden';
            }
            function doSelection(text) {
                var selection = text;
                document.getElementById('divSuggestions').style.visibility = 'hidden'; // hides the suggestion box
                document.getElementById("txtSearch").value = selection;
            }
            function changeBG(obj) {
                element = document.getElementById(obj);
                oldColor = element.style.backgroundColor;
                if (oldColor == "purple" || oldColor == "") {
                    element.style.background = "white";
                    element.style.color = "purple";
                    element.style.cursor = "pointer";
                } else {
                    element.style.background = "purple";
                    element.style.color = "white";
                    element.style.cursor = "default";
                }
            }
            function doSuggestions(text) {
                var input = text;
                var inputLength = input.toString().length;
                var code = "";
                var counter = 0;
                while(counter < this.nameArray.length) {
                    var x = this.nameArray[counter]; // avoids retyping this code a bunch of times
                    if(x.substr(0, inputLength).toLowerCase() == input.toLowerCase()) {
                        code += "<div id='" + x + "'onmouseover='changeBG(this.id);' onMouseOut='changeBG(this.id);' onclick='doSelection(this.innerHTML)'>" + x + "</div>";
                    }
                    counter += 1;
                }
                if(code == "") {
                    outClick();
                }
                document.getElementById('divSuggestions').innerHTML = code;
                document.getElementById('divSuggestions').style.overflow='auto';
            }
        </script>
    </body>
</html>