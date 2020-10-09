<?php 
include 'includes/auth.php';
    include '../includes/config.php';
    include 'includes/header.php';
 ?>
<?php
      // $doctor_username = $_SESSION["doctor_username"];
      // $query1 = mysqli_query($cont, "SELECT * FROM doctor_login WHERE doctor_username='$doctor_username'");
      // $row1 = mysqli_fetch_array($query1);
      // $id = $row1["doctorlogin_id"];
    ?>
<!-- DataTables Example -->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-table"></i>
    Search Appointment
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-border table-hover " id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>ID</th>
            <th>Patient Name</th>
            <th>Patient Mob.</th>
            <th>Patient Age</th>
            <th>Patient Gender</th>
            <th>Date</th>
            <th>Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
<?php
    if(isset($_POST['submit'])) {
        $search = $_POST['search'];

        $query = "SELECT * FROM  counter or portfoli or service or skill or social or testimonial WHERE appoint_id LIKE '%".$search."%' || patient_name LIKE '%".$search."%' || patient_mobile_no LIKE '%".$search."%' || patient_name LIKE '%".$search."%' || patient_gender LIKE '%".$search."%' || appoint_time  LIKE '%".$search."%' ";
        $query .=" "




        $search_query = mysqli_query($cont, $query);

        if(!$search_query) {
            die("Query Failed" . mysqli_error($cont));
        }
        $count = mysqli_num_rows($search_query);

        if($count == 0) {
            echo "<h2>No Result</h2>";
        }else{

          while($row = mysqli_fetch_assoc($search_query)) {
              $appoint_id         = $row['appoint_id'];
              $patient_name       = $row['patient_name'];
              $patient_mobile_no  = $row['patient_mobile_no'];
              $patient_age        = $row['patient_age'];
              $patient_gender     = $row['patient_gender'];
              $doctor_name    = $row['doctor_name'];
              $appoint_date       = date("d.m.y");   
            ?>
            <td><?php echo $appoint_id; ?></td>                 
            <td><?php echo $row["patient_name"]; ?></td>
            <td><?php echo $row["patient_mobile_no"]; ?></td>
            <td><?php echo $row["patient_age"]; ?></td>
            <td><?php echo $row["patient_gender"]; ?></td>
            <td><?php echo $row["appoint_date"]; ?></td>
            <td><?php echo $row["appoint_time"]; ?></td>
            <td>
              <a class="btn btn-primary btn-sm" title="Insert Prescription" href="prescription.php?p_id=<?php echo $appoint_id; ?>"><i class="fas fa-user-edit fa-2x"></i></a>                         
              <a class="btn btn-info btn-sm" title="View Prescription" href="view_prescription.php?p_id=<?php echo $appoint_id; ?>"><i class="far fa-eye fa-2x"></i></i></a>
            </td>
          </tr>
        </tbody>
        <?php } }}?>
      </table>
    </div>
  </div>
  <!-- <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div> -->
</div>

 <?php 
    include 'includes/footer.php';
 ?>
