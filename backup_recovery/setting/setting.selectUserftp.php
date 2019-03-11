
<div class="card-header border-bottom">
        <h6 class="m-0">เลือก USER FTP</h6>
      </div>
<div class="form-row">
    <div class="form-group col-md-12 p-2">       
        <select id="pathBackup" class="form-control" name="id_ftp">
            <option value="NULL">USER...</option>
            <?php
 while($row = $resultFtp->fetch_assoc()) {
    echo "<option value='" . $row['id_ftp'] . "'>" . $row['ftp_username'] . "</option>";
}

?>
        </select>
    </div>
</div>