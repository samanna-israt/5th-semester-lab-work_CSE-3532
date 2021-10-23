<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Matric Id</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Department</label>
            <select name="class">
                <option value="" selected disabled>Select Department</option>
                <option value="1">CSE</option>
                <option value="2">EEE</option>
                <option value="3">BBA</option>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class = "submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
