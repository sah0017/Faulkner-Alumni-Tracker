<?php

/* 
 * Create a department name for dropbox
 * 
 * @author: Robert Vines
 */

    include('Header.php');
?>
<div id='page'>
        <div id="body">
            <h1>Create A Department</h1>
            <form method='post' action="/AlumniTracker/Controller/CreateDepartmentController.php">
                <table id="formTable">
                    <tr>
                        <td>Department Name:</td><td><input type="text" name="DeptName" /></td>
                    </tr>
                </table>
                <br>
                <input type="submit" value="Create Department" />
            </form>
        </div>
</div>
    </body>
</html>
