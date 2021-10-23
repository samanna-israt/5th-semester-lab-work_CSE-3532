<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <?php
    $conn = mysqli_connect( "localhost","root","","curd") or die("Connection Failed")
    $sql = "SELECT * FROM student join studentclass WHERE student.sclass =studentclass.cid";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
    if(mysqli_num_rows($result) > 0) {}
    ?>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>

    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sno"  value="" />
            <input type="text" name="sname" value="" />
        </div>
        <div class="form-group">
            <label>Matric Id</label>
            <input type="text" name="smatricid" value="" />
        </div>
        <div class="form-group">
        <label>Department</label>
        <select name="sdepartment">
            <option value="" selected disabled>Select department</option>
            <option value="1">CSE</option>
            <option value="2">EEE</option>
            <option value="3">BBA</option>
        </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
</div>
</div>
</body>
</html>
