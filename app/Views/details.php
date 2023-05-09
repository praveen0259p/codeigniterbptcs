<section style="background-color: #9A616D;">
  <div class="container-fluid">
    <div class='row'>
      <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
          <div class="container">
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <?php foreach ($data as $member) { ?>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                    <span class="nav-link">Member number- <?= $member['member_number'] ?></span>
                    <!-- <a class="nav-link" aria-current="page" href="#">Member number</a> -->
                  </li>
                  <li class="nav-item">
                    <span class="nav-link">Cgr number-<?= $member['cgr_number'] ?></span>
                  </li>
                  <li class="nav-item">
                    <span class="nav-link">Name-<?= $member['name'] ?></span>
                  </li>
                </ul>
              <?php } ?>
              <div class="d-flex align-items-center">
                <a type="button" class="btn btn-primary me-3" href="<?php echo base_url("logout"); ?>">
                  Logout
                </a>
                <a class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit" role="button"><i class="fas fa-print"></i></a>
              </div>
            </div>
          </div>
        </nav>
        <!-- Navbar -->
      </header>
    </div><br></br><br></br>
    <div class="row g-4">
      <div class="col-sm-4">
        <div class="card h-100 table-responsive">
          <div class="card-body">
            <h5 class="card-title">Personal Details</h5>
            <div class="row">
              <table class='table table-condensed'>
                <?php foreach ($data as $member) { ?>
                  <tr>
                    <th>Father's Name</th>
                    <td><?= $member['fathers_name'] ?></td>
                  </tr>
                  <tr>
                    <th>Date of Birth</th>
                    <td><?= $member['date_of_birth'] ?></td>
                  </tr>
                  <tr>
                    <th>Permanent Address</th>
                    <td> <?= $member['permanent_address'] ?></td>
                  </tr>
                  <tr>
                    <th>Permanent City</th>
                    <td><?= $member['permanent_city'] ?></td>
                  </tr>
                  <tr>
                    <th>Permanent State</th>
                    <td><?= $member['permanent_state'] ?></td>
                  </tr>
                  <tr>
                    <th>Mobile Number</th>
                    <td><?= $member['phone_number'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card h-100 table-responsive">
          <div class="card-body">
            <h5 class="card-title">Official Details</h5>
            <div class="row">
              <table class='table table-condensed'>
                <?php foreach ($data as $member) { ?>
                  <tr>
                    <th>Designation</th>
                    <td><?= $member['designation'] ?></td>
                  </tr>
                  <tr>
                    <th>Date of Appointment</th>
                    <td><?= $member['date_of_appointment'] ?></td>
                  </tr>
                  <tr>
                    <th>Date of Retirement</th>
                    <td><?= $member['date_of_retirement'] ?></td>
                  </tr>
                  <tr>
                    <th>Office Address</th>
                    <td><?= $member['office_address'] ?></td>
                  </tr>
                  <tr>
                    <th>Office City</th>
                    <td><?= $member['office_city'] ?></td>
                  </tr>
                  <tr>
                    <th>Office State</th>
                    <td><?= $member['office_state'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card h-100 table-responsive">
          <div class="card-body">
            <h5 class="card-title">Share Details</h5>
            <div class="row">
              <table class='table table-condensed'>
                <?php foreach ($data as $member) { ?>
                  <tr>
                    <th>Nominee Name</th>
                    <td><?= $member['nominee_name'] ?></td>
                  </tr>
                  <tr>
                    <th>Nominee Relation</th>
                    <td><?= $member['nominee_relation'] ?></td>
                  </tr>
                <?php } ?>
              </table>
              <table class='table table-condensed'>
                <?php foreach ($sharedata as $member) { ?>
                  <tr>
                    <th>Share Amount</th>
                    <td><?php echo $member['share_value'] ?></td>
                  </tr>
                  <tr>
                    <th>Share Details</th>
                    <td><?php echo $member['share_details'] ?></td>
                  </tr>
                <?php } ?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br></br>
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="card table-responsive">
          <div class="card-body">
            <h5 class="card-title">Cgr Details 2021-2022</h5>
            <div class="row">
              <table class='table'>
                <tr>
                  <th>2021-2022</th>
                  <th>Opening Balance</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>Aug</th>
                  <th>Sept</th>
                  <th>Oct</th>
                  <th>Nov</th>
                  <th>Dece</th>
                  <th>Jan</th>
                  <th>February</th>
                  <th>March</th>
                </tr>
                <tr>
                <?php foreach ($cgrdata2021_2022 as $member) { ?>
                  <th>Deposite</th>
                  <td><b><?php echo $member['opening_amount'] ?></b></td>
                  <td><?php echo $member['april'] ?></td>
                  <td><?php echo $member['may'] ?></td>
                  <td><?php echo $member['june'] ?></td>
                  <td><?php echo $member['july'] ?></td>
                  <td><?php echo $member['aug'] ?></td>
                  <td><?php echo $member['sep'] ?></td>
                  <td><?php echo $member['oct'] ?></td>
                  <td><?php echo $member['nov'] ?></td>
                  <td><?php echo $member['dece'] ?></td>
                  <td><?php echo $member['jan'] ?></td>
                  <td><?php echo $member['feb'] ?></td>
                  <td><?php echo $member['march'] ?></td>
                </tr>
                <?php }?>
                <?php foreach ($cgrdata2021_2022 as $member) { ?>
                <tr>
                  <th>Interest</th>
                  <td><?php echo(round(intval($member['opening_amount'])*8/100)) ?></td>
                  <td><?php echo(round(intval($member['april'])*8*12/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['may'])*8*11/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['june'])*8*10/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['july'])*8*9/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['aug'])*8*8/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['sep'])*8*7/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['oct'])*8*6/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['nov'])*8*5/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['dece'])*8*4/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['jan'])*8*3/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['feb'])*8*2/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['march'])*8*1/(100*12))) ?></td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div><br></br>
    <div class="row">
      <div class="col-lg-12 col-sm-12 col-md-12">
        <div class="card  table-responsive">
          <div class="card-body">
            <h5 class="card-title">Cgr Details 2022-2023</h5>
            <div class="row">
              <table class='table'>
                <tr>
                  <th>2021 2022</th>
                  <th>Opening Balance</th>
                  <th>April</th>
                  <th>May</th>
                  <th>June</th>
                  <th>July</th>
                  <th>Aug</th>
                  <th>Sep</th>
                  <th>Oct</th>
                  <th>Nov</th>
                  <th>Dece</th>
                  <th>January</th>
                  <th>February</th>
                  <th>March</th>
                </tr>
                <?php foreach ($cgrdata2022_2023 as $member) { ?>
                  <th>Deposite</th>
                  <td><b><?php echo $member['opening_amount'] ?></b></td>
                  <td><?php echo $member['april'] ?></td>
                  <td><?php echo $member['may'] ?></td>
                  <td><?php echo $member['june'] ?></td>
                  <td><?php echo $member['july'] ?></td>
                  <td><?php echo $member['aug'] ?></td>
                  <td><?php echo $member['sep'] ?></td>
                  <td><?php echo $member['oct'] ?></td>
                  <td><?php echo $member['nov'] ?></td>
                  <td><?php echo $member['dece'] ?></td>
                  <td><?php echo $member['jan'] ?></td>
                  <td><?php echo $member['feb'] ?></td>
                  <td><?php echo $member['march'] ?></td>
                </tr>
                <?php }?>
                <?php foreach ($cgrdata2022_2023 as $member) { ?>
                <tr>
                  <th>Interest</th>
                  <td><?php echo(round(intval($member['opening_amount'])*8/100)) ?></td>
                  <td><?php echo(round(intval($member['april'])*8*12/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['may'])*8*11/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['june'])*8*10/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['july'])*8*9/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['aug'])*8*8/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['sep'])*8*7/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['oct'])*8*6/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['nov'])*8*5/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['dece'])*8*4/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['jan'])*8*3/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['feb'])*8*2/(100*12))) ?></td>
                  <td><?php echo(round(intval($member['march'])*8*1/(100*12))) ?></td>
                </tr>
                <?php }?>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div><br></br>
  </div>
</section>